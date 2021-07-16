<?php

Route::group(['namespace' => 'Platform\RecruitmentPositions\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'recruitment-positions', 'as' => 'recruitment-positions.'], function () {
            Route::resource('', 'RecruitmentPositionsController')->parameters(['' => 'recruitment-positions']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'RecruitmentPositionsController@deletes',
                'permission' => 'recruitment-positions.destroy',
            ]);
        });
    });

});
