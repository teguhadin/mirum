<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route:: group(['middleware' => ['api']], function() {
    Route::post('dashboard', 'PostsArticlesController@addPostsArticles');
    Route::get('dashboard', 'PostsArticlesController@dataPostsArticles');
    Route::post('update_posts', 'PostsArticlesController@updatePosts');
    Route::get('delete/{id}', 'PostsArticlesController@deletePostsArticles');
    Route::post('category', 'CategoryController@addCategory');
    Route::get('category', 'CategoryController@dataCategory');
   
   Route::post('update_category', 'CategoryController@updateCategory');
    Route::get('delete_category/{category_id}', 'CategoryController@deleteCategory');
    
    Route::get('frontend', 'FrontEndController@getPostsArticles');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/facebook', function(){
    return view('auth/facebook');
});

Route::get('tes', function () {
    return view('tes');
});

Route::get('addposts', function () {
    return view('addposts');
});

Route::get('change_pasword', function () {
    return view('change_pasword');
});

//Route::get('frontend', function () {
//    return view('frontend');
//});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('auth/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');
