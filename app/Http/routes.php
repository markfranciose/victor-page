<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// defining a new route
Route::get('/test', function () {

        $post = new \App\Post();

        $post->save();

		return "This right here is a test". $post;
});

// adding a param via a get request
Route::get('/params/{param}', function($param) {
		return "This right here is how we get params like ". $param;
});

// giving a route some kind of alias:
Route::get('/admin/posts/example', array('as'=>'admin.example', function() {

	$url = route('admin.example');

	return "this url is ". $url;

}));
