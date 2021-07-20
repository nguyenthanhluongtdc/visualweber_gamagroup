<?php

Route::group(['namespace' => 'Platform\CandidatePosition\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'candidate-positions', 'as' => 'candidate-position.'], function () {
            Route::resource('', 'CandidatePositionController')->parameters(['' => 'candidate-position']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'CandidatePositionController@deletes',
                'permission' => 'candidate-position.destroy',
            ]);
        });
    });

});
