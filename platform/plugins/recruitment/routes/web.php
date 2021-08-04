<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Platform\Recruitment\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'recruitments', 'as' => 'recruitment.'], function () {
            Route::resource('', 'RecruitmentController')->parameters(['' => 'recruitment']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'RecruitmentController@deletes',
                'permission' => 'recruitment.destroy',
            ]);
        });
    });
});

if (defined('THEME_MODULE_SCREEN_NAME')) {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        Route::group([
            'namespace'  => 'Platform\Recruitment\Http\Controllers',
            'middleware' => ['web'],
            'as'         => 'public.recruitment.',
        ], function () {
            Route::post('send-contact', [
                'as' => 'send-contact',
                'uses' => 'PublicController@sendContact'
            ]);
        });
    });
}
