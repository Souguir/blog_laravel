<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware'=>['web']], function(){
Route::resource('posts', 'PostController');
Route::get('contact' , 'PagesController@getContact');
Route::post('contact' , 'PagesController@storeContact');
});


/*
Route::get('/hello', function () {
    return "<h1> Hello world </h1>";
});


// Pour créer une route dynamique
Route::get('/users/{id}', function($id) {
    return "This is user " . $id;
});
*/

Route::get('/', 'PagesController@getIndex');



Route::get('/articles/{id}', array('uses'=>'ArticlesController@getSingle', 'as' => 'articles.single'));

Route::get('/articles/{post_name}', 'PostsController@show');
Route::get('/articles', array('uses'=>'ArticlesController@getArticles', 'as' => 'articles.archive'));


Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Route::get('/welcome', 'HomeController@getIndex')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

//comments

Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
	Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
	Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
	Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
	Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);
