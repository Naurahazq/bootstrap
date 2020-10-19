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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'biodata'], function(){
    Route::get('index', 'BiodataController@index')->name('biodata.index');

    Route::get('create', 'BiodataController@create')->name('biodata.create');

    Route::post('save', 'BiodataController@store')->name('biodata.save');

    Route::get('edit/{biodata}', 'BiodataController@edit')->name('biodata.edit');

    Route::patch('update/{biodata}', 'BiodataController@update')->name('biodata.update');

    Route::get('show/{biodata}','BiodataController@show')->name('biodata.show');
    
    Route::get('hapus/{biodata}', 'BiodataController@destroy')->name('biodata.hapus');

});

