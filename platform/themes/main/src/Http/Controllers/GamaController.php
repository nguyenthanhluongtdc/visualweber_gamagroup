<?php

namespace Theme\Gama\Http\Controllers;

use BaseHelper;
use Platform\Page\Models\Page;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\Blog\Repositories\Interfaces\PostInterface;
use Platform\Theme\Http\Controllers\PublicController;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Platform\Theme\Events\RenderingSingleEvent;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Platform\Partner\Models\Partner;
use Platform\Services\Models\Services;
use Theme;
use Response;
use SeoHelper;
use SlugHelper;
use RvMedia;

class GamaController extends PublicController
{
    /**
     * {@inheritDoc}
     */
    public function getIndex()
    {
        SeoHelper::setTitle(theme_option('seo_title', 'Gama Group'))
            ->setDescription(theme_option('seo_description', 'Gama Group'))
            ->openGraph()
            ->setTitle(@theme_option('seo_title'))
            ->setSiteName(@theme_option('site_title'))
            ->setUrl(route('public.index'))
            ->setImage(RvMedia::getImageUrl(theme_option('seo_og_image'), 'og'))
            ->addProperty('image:width', '1200')
            ->addProperty('image:height', '630');
        return parent::getIndex();
    }

    /**
     * {@inheritDoc}
     */


    /**
     * {@inheritDoc}
     */
    public function getSiteMap()
    {
        return parent::getSiteMap();
    }

    /**
     * Search post
     *
     * @bodyParam q string required The search keyword.
     *
     * @group Blog
     *
     * @param Request $request
     * @param PostInterface $postRepository
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     *
     * @throws FileNotFoundException
     */
    public function getSearch(Request $request, PostInterface $postRepository, BaseHttpResponse $response)
    {
        $query = $request->input('q');

        if (!empty($query)) {
            $posts = $postRepository->getSearch($query);

            $data = [
                'items' => Theme::partial('search', compact('posts')),
                'query' => $query,
                'count' => $posts->count(),
            ];

            if ($data['count'] > 0) {
                return $response->setData(apply_filters(BASE_FILTER_SET_DATA_SEARCH, $data, 10, 1));
            }
        }

        return $response
            ->setError()
            ->setMessage(__('No results found, please try with different keywords.'));
    }

    /**
     * @param string $key
     * @return \Illuminate\Http\RedirectResponse|Response
     * @throws FileNotFoundException
     */
    public function getView($key = null)
    {
        SeoHelper::setTitle(theme_option('seo_title', 'Gamagroup'))
            ->setDescription(theme_option('seo_description', 'Gamagroup'))
            ->openGraph()
            ->setTitle(@theme_option('seo_title'))
            ->setSiteName(@theme_option('site_title'))
            ->setUrl(route('public.index'))
            ->setImage(RvMedia::getImageUrl(theme_option('seo_og_image'), 'og'))
            ->addProperty('image:width', '1200')
            ->addProperty('image:height', '630');

        if (empty($key)) {
            return $this->getIndex();
        }

        $slug = SlugHelper::getSlug($key, '');

        if (!$slug) {
            abort(404);
        }

        if (defined('PAGE_MODULE_SCREEN_NAME')) {
            if ($slug->reference_type == Page::class && BaseHelper::isHomepage($slug->reference_id)) {
                return redirect()->to('/');
            }
        }

        $result = apply_filters(BASE_FILTER_PUBLIC_SINGLE_DATA, $slug);

        if (isset($result['slug']) && $result['slug'] !== $key) {
            return redirect()->route('public.single', $result['slug']);
        }

        event(new RenderingSingleEvent($slug));
        Theme::layout('default');


        if (!empty($result) && is_array($result)) {
            return Theme::scope(isset(Arr::get($result, 'data.page')->template) ? Arr::get($result, 'data.page')->template : Arr::get($result, 'view', ''), $result['data'], Arr::get($result, 'default_view'))->render();
        }

        abort(404);
    }


    public function getAbout($slug)
    {
        $slug = SlugHelper::getSlug($slug, SlugHelper::getPrefix(About::class, 'gioi-thieu'));
        if (!$slug) {
            abort(404);
        }

        $data['about'] = $slug->reference;

        if (blank($data)) {
            abort(404);
        }

        // Theme::breadcrumb()
        //     ->add(__('Trang chu??'), url('/'))
        //     ->add(__('Gi????i thi????u'), url(get_slug_by_template('About')))
        //     ->add($data['about']->name, $data['about']->url);

        SeoHelper::setTitle($data['about']->name)->setDescription($data['about']->description);

        return Theme::scope('about-detail', $data)->render();
    }

    public function getService($slug)
    {
        $slug = SlugHelper::getSlug($slug, SlugHelper::getPrefix(Services::class, 'linh-vuc-hoat-dong'));
        if (!$slug) {
            abort(404);
        }

        $data['service'] = $slug->reference;

        if (blank($data)) {
            abort(404);
        }

        // Theme::breadcrumb()
        //     ->add(__('Trang chu??'), url('/'))
        //     ->add(__('Gi????i thi????u'), url(get_slug_by_template('About')))
        //     ->add($data['about']->name, $data['about']->url);

        SeoHelper::setTitle($data['service']->name)->setDescription($data['service']->description);

        return Theme::scope('gama-service', $data)->render();
    }

    public function getPartner($slug)
    {
        $slug = SlugHelper::getSlug($slug, SlugHelper::getPrefix(Partner::class, 'doi-tac'));
        if (!$slug) {
            abort(404);
        }

        $data['partner'] = $slug->reference;

        if (blank($data)) {
            abort(404);
        }

        SeoHelper::setTitle($data['partner']->name)->setDescription($data['partner']->description);

        return Theme::scope('partner-detail', $data)->render();
    }

    public function getTalent($slug)
    {
        $slug = SlugHelper::getSlug($slug, SlugHelper::getPrefix(RecruitmentPost::class, 'nhan-tai'));
        if (!$slug) {
            abort(404);
        }

        $data['talent'] = $slug->reference;

        if (blank($data)) {
            abort(404);
        }

        // Theme::breadcrumb()
        //     ->add(__('Trang chu??'), url('/'))
        //     ->add(__('Gi????i thi????u'), url(get_slug_by_template('About')))
        //     ->add($data['about']->name, $data['about']->url);

        SeoHelper::setTitle($data['talent']->name)->setDescription($data['talent']->description);

        return Theme::scope('talent-detail', $data)->render();
    }
}
