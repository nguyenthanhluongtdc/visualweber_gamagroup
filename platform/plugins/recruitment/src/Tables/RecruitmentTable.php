<?php

namespace Platform\Recruitment\Tables;

use Illuminate\Support\Facades\Auth;
use BaseHelper;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Recruitment\Repositories\Interfaces\RecruitmentInterface;
use Platform\Table\Abstracts\TableAbstract;
use Illuminate\Contracts\Routing\UrlGenerator;
use Yajra\DataTables\DataTables;
use Platform\Recruitment\Models\Recruitment;

use Html;
use Platform\Media\RvMedia;

class RecruitmentTable extends TableAbstract
{

    /**
     * @var bool
     */
    protected $hasActions = true;

    /**
     * @var bool
     */
    protected $hasFilter = true;

    /**
     * RecruitmentTable constructor.
     * @param DataTables $table
     * @param UrlGenerator $urlGenerator
     * @param RecruitmentInterface $recruitmentRepository
     */
    public function __construct(DataTables $table, UrlGenerator $urlGenerator, RecruitmentInterface $recruitmentRepository)
    {
        $this->repository = $recruitmentRepository;
        // $this->setOption('id', 'plugins-recruitment-table');
        parent::__construct($table, $urlGenerator);

        if (!Auth::user()->hasAnyPermission(['recruitment.edit', 'recruitment.destroy'])) {
            $this->hasOperations = false;
            $this->hasActions = false;
        }
    }

    /**
     * {@inheritDoc}
     */
    public function ajax()
    {
        $data = $this->table
            ->eloquent($this->query())
            ->editColumn('name', function ($item) {
                if (!Auth::user()->hasPermission('recruitment.edit')) {
                    return $item->name;
                }
                return Html::link(route('recruitment.edit', $item->id), $item->name);
            })
            ->editColumn('cv', function ($item) {
                return Html::link(get_image_url($item->cv), $item->media->name ?? "Tải xuống cv", ['download' => $item->media->name ?? "cv"]);
            })
            ->editColumn("job", function ($item) {
                if (!blank($item->recruitmentPost)) {
                    if (!Auth::user()->hasPermission('recruitment-post.edit')) {
                        return $item->recruitmentPost->name;
                    }
                    return Html::link(route('recruitment-post.edit', $item->recruitmentPost->id), $item->recruitmentPost->name);
                }
                return "";
            })
            ->editColumn('checkbox', function ($item) {
                return $this->getCheckbox($item->id);
            })
            ->editColumn('created_at', function ($item) {
                return BaseHelper::formatDate($item->created_at);
            })
            ->editColumn('status', function ($item) {
                return $item->status->toHtml();
            })
            ->addColumn('operations', function ($item) {
                return $this->getOperations('recruitment.edit', 'recruitment.destroy', $item);
            });

        return apply_filters(BASE_FILTER_GET_LIST_DATA, $data, $this->repository->getModel())
            ->addColumn('operations', function ($item) {
                // return $this->getOperations('recruitment.edit', 'recruitment.destroy', $item);
                return $this->getOperations(false, 'recruitment.destroy', $item);
            })
            ->escapeColumns([])
            ->make(true);
    }

    /**
     * {@inheritDoc}
     */
    public function query()
    {
        $query = $this->repository->getModel()->select('*');

        return $this->applyScopes($query);
    }

    /**
     * {@inheritDoc}
     */
    public function columns()
    {
        return [
            'id' => [
                'name'  => 'recruitments.id',
                'title' => trans('core/base::tables.id'),
                'width' => '20px',
            ],
            'name' => [
                'name'  => 'recruitments.name',
                'title' => trans('core/base::tables.name'),
                'class' => 'text-left',
            ],
            'email' => [
                'name'  => 'recruitments.email',
                'title' => trans('core/base::tables.email'),
                'class' => 'text-left',
            ],
            'phone' => [
                'name'  => 'recruitments.phone',
                'title' => trans('plugins/recruitment::recruitment.phone'),
                'class' => 'text-left',
            ],
            'cv' => [
                'name'  => 'recruitments.cv',
                'title' => trans('plugins/recruitment::recruitment.cv'),
                'class' => 'text-left',
            ],
            'job' => [
                'name'  => 'recruitments.job',
                'title' => trans('plugins/recruitment::recruitment.job'),
                'class' => 'text-left',
            ],
            'created_at' => [
                'name'  => 'app_recruitment_contacts.created_at',
                'title' => trans('core/base::tables.created_at'),
                'width' => '100px',
            ],
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function buttons()
    {
        return apply_filters(BASE_FILTER_TABLE_BUTTONS, [], Recruitment::class);
    }

    /**
     * {@inheritDoc}
     */
    public function bulkActions(): array
    {
        return $this->addDeleteAction(route('recruitment.deletes'), 'recruitment.destroy', parent::bulkActions());
    }

    /**
     * {@inheritDoc}
     */
    public function getBulkChanges(): array
    {
        return [
            'recruitments.name' => [
                'title'    => trans('core/base::tables.name'),
                'type'     => 'text',
                'validate' => 'required|max:120',
            ],
            'recruitments.status' => [
                'title'    => trans('core/base::tables.status'),
                'type'     => 'select',
                'choices'  => BaseStatusEnum::labels(),
                'validate' => 'required|in:' . implode(',', BaseStatusEnum::values()),
            ],
            'recruitments.created_at' => [
                'title' => trans('core/base::tables.created_at'),
                'type'  => 'date',
            ],
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultButtons(): array
    {
        return [
            'export',
            'reload',
        ];
    }
}
