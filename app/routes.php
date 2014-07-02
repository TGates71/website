<?php

/**
 * Static page routes, explicit routing FTW!
 */
Route::group(['before' => 'minify.html'], function() {
    Route::get('/', [
        'as' => 'home',
        'uses' => 'PageController@showHomepage'
    ]);

    Route::get('about', [
        'as' => 'about',
        'uses' => 'PageController@showAbout'
    ]);

    Route::get('about/the-team', [
        'as' => 'the-team',
        'uses' => 'PageController@showTeam'
    ]);

    Route::get('dontate', [
        'as' => 'donate',
        'uses' => 'PageController@showDonate'
    ]);

    Route::get('download', [
        'as' => 'download',
        'uses' => 'PageController@showDownload'
    ]);

    Route::get('support', [
        'as' => 'support',
        'uses' => 'PageController@showSupport'
    ]);

    Route::get('support/faqs', [
        'as' => 'faqs',
        'uses' => 'PageController@showFaqs'
    ]);
});

/**
 * Catch-all error page!
 */
Route::any('{any}', function($any) {
    return Response::json('Sorry your request for ' . $any . ' was not found!', 404);
    //return App::abort(404);
});
