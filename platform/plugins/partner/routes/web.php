<?php

Route::group(['namespace' => 'Platform\Partner\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'partners', 'as' => 'partner.'], function () {
            Route::resource('', 'PartnerController')->parameters(['' => 'partner']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'PartnerController@deletes',
                'permission' => 'partner.destroy',
            ]);
        });
    });

});
