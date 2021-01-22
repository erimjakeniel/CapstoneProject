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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/aboutus', function () {
//     return view('aboutus');
// });

// Route::get('/ourteachers', function () {
//     return view('ourteachers');
// });

// Route::get('/ourcourses', function () {
//     return view('ourcourses');
// });


Route::get('/aboutus', 'PageController@aboutus')->name('aboutus');

Route::get('/ourteachers', 'PageController@ourteachers')->name('ourteachers');
Route::get('/ourcourses', 'PageController@ourcourses')->name('ourcourses');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
