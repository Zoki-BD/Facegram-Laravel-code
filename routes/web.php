<?php

use Illuminate\Support\Facades\Route;
use App\Mail\NewUserWelcomeMail;
use Illuminate\Support\Facades\Auth;


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


Auth::routes();


Route::get('/email', function () {
   return new NewUserWelcomeMail();
});

//frontend related routes
Route::post('follow/{user}', 'FollowsController@store');



//profiles related routes
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');


//posts related routes
Route::get('/p/create', 'PostsController@create')/*->name('post.create')*/;
Route::post('/p', 'PostsController@store');
Route::get('/p/{post}', 'PostsController@show');
Route::get('/', 'PostsController@index');
