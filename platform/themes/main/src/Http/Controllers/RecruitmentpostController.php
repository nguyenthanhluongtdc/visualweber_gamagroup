<?php

namespace Theme\Main\Http\Controllers;

use Theme;
use Illuminate\Support\Facades\Log;
use Platform\RecruitmentPost\Models\RecruitmentPost;
use Platform\RecruitmentPost\Repositories\Interfaces\RecruitmentPostInterface;
use Platform\Slug\Repositories\Interfaces\SlugInterface;
use Platform\Theme\Http\Controllers\PublicController;

class  RecruitmentpostController extends PublicController
{
    // public function show($slug)
    // {
    //     try
    //     {
    //         $slug = app(SlugInterface::class)->getFirstBy(['key'=> $slug, 'reference_type' => RecruitmentPost::class]);
    //         $RecruitmentPost= app(RecruitmentPostInterface::class)->getFirstBy(['id' => $slug->reference_id]);
    //         return Theme::scope('talent', compact('RecruitmentPost'))->render();
    //     } catch(\Throwable $err) {
    //         Log::error('Có lỗi xảy ra thực hiện chức năng ' . __CLASS__ . '@' . __FUNCTION__, [$err->getMessage()]);
    //         abort(500);
    //     }
    // }
}
