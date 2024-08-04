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
Route::group(['namespace'=>'App\Http\Controllers'],function(){

    route::get('/','LoginController@login')->name('login');
    route::post('do-login','LoginController@dologin')->name('do.login');
    route::group(['middleware' => 'auth'],function(){ 
        route::get('do-logout','LoginController@dologout')->name('do.logout');
        Route::get('users','frontendController@homepage')->name('home')->middleware('userlogut');
        Route::get('Adduser','frontendController@Create')->name('create.user')->middleware('userlogut'); //('create.user') here we can name as our wish
        Route::post('save-user','frontendController@save')->name('save.user');
        Route::get('view/{userId}','frontendController@view')->name('view.user');
        Route::get('edit-user/{userId}','frontendController@edit')->name('edit.user');
        Route::post('update','frontendController@update')->name('update.user');
        Route::get('delete/{userId}','frontendController@delete')->name('delete.user');
        Route::get('trashedData','frontendController@trashedData')->name('trashedData.user')->middleware('userlogut');
        Route::get('activate/{userId}','frontendController@activate')->name('activate.user');
        Route::get('forceDelete/{userId}','frontendController@forceDelete')->name('forceDelete.user');
 });

    //create,save
    //edit,update
    //delete
 
}); 

//middlewire grping
//->indicte chynath wht