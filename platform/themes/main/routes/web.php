<?php

// Custom routes
Route::group(['namespace' => 'Theme\Gama\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        // Add your custom route here
        // Ex: Route::get('hello', 'RippleController@getHello');

        Route::get('ajax/search', 'GamaController@getSearch')->name('public.ajax.search');

    });
});

Theme::routes();

Route::group(['namespace' => 'Theme\Gama\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        Route::get('/', 'GamaController@getIndex')->name('public.index');

        Route::get('sitemap.xml', [
            'as'   => 'public.sitemap',
            'uses' => 'GamaController@getSiteMap',
        ]);

        Route::get('{slug?}' . config('core.base.general.public_single_ending_url'), [
            'as'   => 'public.single',
            'uses' => 'GamaController@getView',
        ]);

    });
});
