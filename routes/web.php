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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
//Bab 37
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/cetak_pdf', 'PegawaiController@cetak_pdf');
//Route::get('/index', 'IndexController@index');
//Bab 38
Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/export_excel', 'SiswaController@export_excel');
//Bab 39
Route::post('/siswa/import_excel', 'SiswaController@import_excel');