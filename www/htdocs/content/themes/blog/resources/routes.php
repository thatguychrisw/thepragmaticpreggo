<?php

/**
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */
Route::get('home', function()
{
    Asset::add('app', 'css/app.css', false, '1.0', 'all');
    Asset::add('font-awesome', 'css/font-awesome.min.css', false, '1.0', 'all');
    
    return View::make('welcome', [
        'posts' => PostModel::all()
    ]);
});

Route::get('single', function($post, $query)
{
    Asset::add('app', 'css/app.css', false, '1.0', 'all');
    Asset::add('font-awesome', 'css/font-awesome.min.css', false, '1.0', 'all');
    
	return View::make('welcome', [
        'posts' => PostModel::all(),
        'post' => PostModel::single($query->id)
	]);
});

// Route::get('page', function()
// {
//     Asset::add('app', 'css/app.css', false, '1.0', 'all');

//     return View::make('pages', [
//         'page' => $post    
//     ]);
// });