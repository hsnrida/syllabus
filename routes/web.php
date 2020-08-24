<?php

use App\Syllabus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// 
Route::get('test','Supervisor\ConfirmationsController@getLatestVersions');


Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/users', 'UsersController');
  });

  Route::namespace('Supervisor')->prefix('supervisor')->name('supervisor.')->group(function(){
    Route::resource('/courses', 'DistributeCoursesController');
    Route::resource('/confirmations', 'ConfirmationsController');
    Route::post('courses/distribute','DistributeCoursesController@distribute')->name('courses.distribute');
    Route::get('/confirmations/{confirmation}/confirm','ConfirmationsController@confirm')->name('confirmations.confirm');
    Route::post('/confirmations/{confirmation}/refuse','ConfirmationsController@refuse')->name('confirmations.refuse');
  });

  Route::namespace('Builder')->prefix('builder')->name('builder.')->group(function(){
    Route::resource('/syllabi', 'SyllabiController');
    Route::get('/syllabi/{syllabus}/retry','SyllabiController@retry')->name('syllabi.retry');
  });

  Route::namespace('Validator')->prefix('validator')->name('validator.')->group(function(){
    Route::resource('/syllabi', 'ValidationsController');
    Route::get('/syllabi/{syllabus}/confirm','ValidationsController@confirm')->name('syllabi.confirm');
    Route::post('/syllabi/{syllabus}/refuse','ValidationsController@refuse')->name('syllabi.refuse');
  });








//Route::group(['middleware' => 'role:admin'], function() {

    //     Route::get('/syllabus', function() {
     
    //        dd("welcoomeeee viewwwwweeeer");
           
    //     });
     
    //  });
    //  Route::get('/syllabus/{syllabus}', function (Syllabus $syllabus) {
    //     dd("welcoomeeee viewwwwweeeer");
    // })->middleware('can:view,syllabus');

    
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