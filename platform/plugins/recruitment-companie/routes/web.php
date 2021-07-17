<?php

Route::group(['namespace' => 'Platform\RecruitmentCompanie\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'recruitment-companies', 'as' => 'recruitment-companie.'], function () {
            Route::resource('', 'RecruitmentCompanieController')->parameters(['' => 'recruitment-companie']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'RecruitmentCompanieController@deletes',
                'permission' => 'recruitment-companie.destroy',
            ]);
        });
    });

});
