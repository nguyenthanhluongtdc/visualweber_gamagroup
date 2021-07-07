<?php

Route::group(['namespace' => 'Platform\Services\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'services', 'as' => 'services.'], function () {
            Route::resource('', 'ServicesController')->parameters(['' => 'services']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'ServicesController@deletes',
                'permission' => 'services.destroy',
            ]);
        });
    });

});
