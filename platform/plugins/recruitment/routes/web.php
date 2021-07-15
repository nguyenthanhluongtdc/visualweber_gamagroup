<?php

Route::group(['namespace' => 'Platform\Recruitment\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'recruitments', 'as' => 'recruitment.'], function () {
            Route::resource('', 'RecruitmentController')->parameters(['' => 'recruitment']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'RecruitmentController@deletes',
                'permission' => 'recruitment.destroy',
            ]);
            Route::post('send', [
                'as'   => 'send',
                'uses' => 'RecruitmentController@sendContact',
            ]);
        });
    });
});
