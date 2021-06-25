<?php

Route::group(['namespace' => 'Platform\About\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'abouts', 'as' => 'about.'], function () {
            Route::resource('', 'AboutController')->parameters(['' => 'about']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'AboutController@deletes',
                'permission' => 'about.destroy',
            ]);
        });
    });

});
