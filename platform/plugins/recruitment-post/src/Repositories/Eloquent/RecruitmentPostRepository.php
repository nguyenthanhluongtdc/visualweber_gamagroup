<?php

namespace Platform\RecruitmentPost\Repositories\Eloquent;
use Platform\Base\Enums\BaseStatusEnum;

use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use Platform\RecruitmentPost\Repositories\Interfaces\RecruitmentPostInterface;
use Platform\Support\Repositories\Interfaces\RecruitmentCompanieInterface;
use Platform\Support\Repositories\Interfaces\RecruitmentProvincesInterface;



class RecruitmentPostRepository extends RepositoriesAbstract implements RecruitmentPostInterface
{
     /**
     * {@inheritDoc}
     */
    public function getAll($paginate = 10, $active = true)
    {
        $data = $this->model->select('recruitment_posts.*');
        if (request()->has('selectorder')) {
            if(request()->selectorder == 1){
                $data->orderBy('recruitment_posts.created_at', 'desc');
            }
            if(request()->selectorder == 2){
                $data->orderBy('recruitment_posts.created_at', 'asc');
            }
        }
        // if (request()->has('selectaddress')) {
        //     $provinces = app(RecruitmentCompanieInterface::class)->getByProvince(request()->selectaddress);
        //     $provinceArr = [];
        //     if(!empty($provinces)){
        //         foreach($provinces as $item){
        //             array_push($provinceArr, $item->id);
        //         }
        //     }
        //     if(request()->selectaddress != 0){
        //         $data->whereIn('company', $provinceArr);
        //     }
        // }
        if (request()->has('country')) {
            $provinces = app(RecruitmentProvincesInterface::class)->getByCountry(request()->country);
            $provinceArr = [];
            if(!empty($provinces)){
                foreach($provinces as $item){
                    array_push($provinceArr, $item->id);
                }
            }
            // dd($provinceArr);
            $companies = app(RecruitmentCompanyInterface::class)->getByArrayProvince($provinceArr);
            $companyArr = [];
            if(!empty($companies)){
                foreach($companies as $item){
                    array_push($companyArr, $item->id);
                }
            }
            if(request()->country != 0){
                $data->whereIn('company', $companyArr);
            }
        }
        // if (request()->has('major')) {
        //     $data->where('major', request()->major);
        // }
        if (request()->has('field')) {
            if(request()->field != 0){
            $data->where('field', request()->field);
            }
        }
        if (request()->has('selectcompany')) {
            if(request()->selectcompany != 0){
            $data->where('company', request()->selectcompany);
            }
        }
        if (request()->has('selectaddress')) {
            if(request()->selectaddress != 0){
            $data->where('location', request()->selectaddress);
            }
        }
        if (request()->has('selectposition')) {
            if(request()->selectposition != 0){
            $data->where('id', request()->selectposition);
            }
        }
     
        // $data
        // ->orderBy('recruitment_posts.is_featured', 'DESC')
        // ->orderBy('recruitment_posts.order', 'ASC')
        // ->orderBy('recruitment_posts.created_at', 'DESC');
        if ($active) {
            $data = $data->where('recruitment_posts.status', BaseStatusEnum::PUBLISHED);
        }

        return $this->applyBeforeExecuteQuery($data)->paginate($paginate);
    }
    /**
     * {@inheritDoc}
     */
    public function getAllForFilter(){
        $data = $this->model->select('recruitment_posts.*')
        ->where('recruitment_posts.status', BaseStatusEnum::PUBLISHED);
        return $this->applyBeforeExecuteQuery($data)->get();
    }
}
