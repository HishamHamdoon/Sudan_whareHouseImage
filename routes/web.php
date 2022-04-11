<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
// routes/web.php

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
//start photographer router
Route::get('abc','App\Http\Controllers\photographerController@abc');
Route::get('photographers','App\Http\Controllers\photographerController@getAll')->name('photographers');
Route::get('create','App\Http\Controllers\photographerController@create')->name('create');
Route::post('save','App\Http\Controllers\photographerController@store')->name('savedata');
Route::get('/','App\Http\Controllers\PhotoController@index');
Route::get('show/{id}','App\Http\Controllers\photographerController@show')->name('singlePhoto');
Route::get('test','photographerController@test');
Route::get('admin-show/{id}','App\Http\Controllers\PhotoController@adminshow')->name('adminshow');
//end photographer router
// Route::get('check','App\Http\Controllers\ageController@check');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//check age controllers
Route::get('abc','App\Http\Controllers\ageController@check');

//photo routes
Route::get('createphoto','App\Http\Controllers\PhotoController@createPhoto')->name('upload_photo');
Route::get('photos','App\Http\Controllers\PhotoController@getPhoto');
Route::get('photos-user','App\Http\Controllers\PhotoController@getPhotoUser')->name('dashboard');

//delete photo
Route::get('del-photos/{id}','App\Http\Controllers\PhotoController@deletePhoto')->name('deletephoto');
//edit photo
Route::get('edit-photos/{id}','App\Http\Controllers\PhotoController@editPhoto')->name('editphoto');

//edit photo
Route::post('update-photos/{id}','App\Http\Controllers\PhotoController@updatePhoto')->name('updatePhoto');


//show route 
Route::get('show/{id}','App\Http\Controllers\PhotoController@show')->name('showphoto');

// Auth::routes();

Route::post('savephoto','App\Http\Controllers\PhotoController@storePhoto')->name('saveImage');
########### relations######
Route::get('relations','photographerController@user');
Route::group(['prefix'=>'app'], function(){
    Route::get('group','App\Http\Controllers\photographerController@index');
   
});
Route::get('home',function(){
    return view('photos.home');
})->name('homeRoute');

Route::get('faq',function(){

    return view('photos.FAQ');

})->name('faqRoute');

Route::get('about',function(){

    return view('photos.about');
    
})->name('aboutRoute');

Route::get('privacy',function(){
    return view('photos.pormise');
});
});
//
/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/

