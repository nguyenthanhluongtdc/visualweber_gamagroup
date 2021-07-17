<?php

Route::group(['namespace' => 'Platform\RecruitmentPost\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'recruitment-posts', 'as' => 'recruitment-post.'], function () {
            Route::resource('', 'RecruitmentPostController')->parameters(['' => 'recruitment-post']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'RecruitmentPostController@deletes',
                'permission' => 'recruitment-post.destroy',
            ]);
        });
    });

});
