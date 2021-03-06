<?php

use App\Syllabus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return view('welcome');
})->name('welcome');

Auth::routes();

//

Route::prefix('home')->name('home')->group(function () {
  Route::get('/{year?}', 'HomeController@index');
  Route::get('/syllabus/{syllabus}', 'HomeController@show')->name('.show');
  Route::get('/syllabus/{syllabus}/download', 'HomeController@download')->name('.syllabus.download');
});


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
  Route::resource('/users', 'UsersController');
  Route::resource('/syllabi', 'ShareSyllabusController');
});

Route::namespace('Supervisor')->prefix('supervisor')->name('supervisor.')->group(function () {
  Route::resource('/courses', 'DistributeCoursesController');
  Route::post('courses/distribute', 'DistributeCoursesController@distribute')->name('courses.distribute');

  Route::resource('/confirmations', 'ConfirmationsController');
  Route::get('/confirmations/{confirmation}/confirm', 'ConfirmationsController@confirm')->name('confirmations.confirm');
  Route::post('/confirmations/{confirmation}/refuse', 'ConfirmationsController@refuse')->name('confirmations.refuse');
});

Route::namespace('Builder')->prefix('builder')->name('builder.')->group(function () {
  Route::resource('/syllabi', 'SyllabiController');
  Route::get('/syllabi/{syllabus}/retry', 'SyllabiController@retry')->name('syllabi.retry');
  Route::post('/syllabi/{syllabus}/storeTemplate', 'SyllabiController@storeTemplate')->name('syllabi.storeTemplate');
});

Route::namespace('Validator')->prefix('validator')->name('validator.')->group(function () {
  Route::resource('/syllabi', 'ValidationsController');
  Route::get('/syllabi/{syllabus}/confirm', 'ValidationsController@confirm')->name('syllabi.confirm');
  Route::post('/syllabi/{syllabus}/refuse', 'ValidationsController@refuse')->name('syllabi.refuse');
});



Route::prefix('Universities')->name('universities')->group(function () {
  Route::get('/', 'SyllabiController@index');
  Route::get('/department/{department}', 'SyllabiController@department')->name('.department');
  Route::get('/syllabus/{syllabus}', 'SyllabiController@show')->name('.syllabus.show');
  Route::get('/{syllabus}/download','SyllabiController@download')->name('.syllabus.download');


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