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
    //Dashboard
    Route::post('dashboard', 'PostsArticlesController@addPostsArticles');
    Route::get('dashboard', 'PostsArticlesController@dataPostsArticles');
    Route::post('update_posts', 'PostsArticlesController@updatePosts');
    Route::get('delete/{id}', 'PostsArticlesController@deletePostsArticles');
    //Category
    Route::post('category', 'CategoryController@addCategory');
    Route::get('category', 'CategoryController@dataCategory');
   Route::post('update_category', 'CategoryController@updateCategory');
    Route::get('delete_category/{category_id}', 'CategoryController@deleteCategory');

    //Change PASSWORD
    Route::post('change_password', 'ChangePasswordController@updatePassword');
    
    //Frontend
    Route::get('frontend', 'FrontEndController@getPostsArticles');
    Route::get('detail/{id}', 'FrontEndController@detailPostsArticles');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/facebook', function(){
    return view('auth/facebook');
});

Route::get('addposts', function () {
    return view('addposts');
});

Route::get('change_pasword', function () {
    return view('change_pasword');
});

Route::get('detail', function () {
   return view('detail');
});


Auth::routes();

//Route::get('/home', 'HomeController@index');

Route::get('auth/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');
