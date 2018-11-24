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

Route::prefix('siswa')->middleware('auth')->group(function(){
	Route::get('/', 'SiswaController@index');
	Route::get('/tambahSiswa', 'SiswaController@add');
	Route::get('/editSiswa/{id}', 'SiswaController@edit');
	Route::post('/simpanSiswa', 'SiswaController@save');
	Route::post('/updateSiswa/{id}', 'SiswaController@update');
	Route::get('/hapusSiswa/{id}', 'SiswaController@delete');
});

Route::prefix('jurusan')->middleware('auth')->group(function(){
	Route::get('/', 'JurusanController@index');
	Route::get('/tambahJurusan', 'JurusanController@add');
	Route::get('/editJurusan/{id}', 'JurusanController@edit');
	Route::post('/simpanJurusan', 'JurusanController@save');
	Route::post('/updateJurusan/{id}', 'JurusanController@update');
	Route::get('/hapusJurusan/{id}', 'JurusanController@delete');
});

Route::prefix('kelas')->middleware('auth')->group(function(){
	Route::get('/', 'KelasController@index');
	Route::get('/tambahKelas', 'KelasController@add');
	Route::get('/editKelas/{id}', 'KelasController@edit');
	Route::post('/simpanKelas', 'KelasController@save');
	Route::post('/updateKelas/{id}', 'KelasController@update');
	Route::get('/hapusKelas{id}', 'KelasController@delete');
});