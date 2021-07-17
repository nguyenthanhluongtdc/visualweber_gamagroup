<?php

Route::group(['namespace' => 'Platform\RecruitmentProvinces\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'recruitment-provinces', 'as' => 'recruitment-provinces.'], function () {
            Route::resource('', 'RecruitmentProvincesController')->parameters(['' => 'recruitment-provinces']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'RecruitmentProvincesController@deletes',
                'permission' => 'recruitment-provinces.destroy',
            ]);
        });
    });

});
