<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/awards', 'HomeController@awards')->name('awards');
Route::get('/education', 'HomeController@education')->name('education');
Route::get('/experience', 'HomeController@experience')->name('experience');
Route::get('/interests', 'HomeController@interests')->name('interests');
Route::get('/skills', 'HomeController@skills')->name('skills');





Route::group(['prefix' => 'news'], function(){
    Route::get('/','News\NewsController@news')
        ->name('news');
    Route::get('/{name}', 'News\NewsCatController@cat');
    Route::get('/{name}/{id}/', 'News\NewsOneController@newsOne');
    
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('/','Admin\IndexController@index')-> name('admin');
    Route::post('/', 'Admin\IndexController@newsAdd' ) -> name('add'); 
});


Auth::routes();


