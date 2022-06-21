<?php
Route::get('/mahasiswa','MahasiswaController@mahasiswa');
Route::get('/mahasiswa/cari','MahasiswaController@searching');
Route::get('/mahasiswa/formulirMhs','MahasiswaController@formulirMhs');
Route::post('/mahasiswa/simpanMahasiswa','MahasiswaController@simpanMhs');
Route::get('/mahasiswa/editMhs/{id}','MahasiswaController@editMhs');
Route::put('/mahasiswa/updateMhs/{id}','MahasiswaController@updateMhs');
Route::get('/mahasiswa/deleteMhs/{id}','MahasiswaController@deleteMhs');
Route::get('/user','AuthController@user');
Route::get('/user/formulirUser','AuthController@formulirUser');
Route::post('/user/simpanUser','AuthController@simpanUser');
Route::get('login/','AuthController@login');
Route::post('user/cekLogin','AuthController@cekLogin');
Route::get('logout/','AuthController@logout');

Route::get('/user/editUser/{id}','AuthController@editUser');
Route::put('/user/updateUser/{id}','AuthController@updateUser');
Route::get('/user/deleteUser/{id}','AuthController@deleteUser');
Route::get('/home','AuthController@home');


Route::get('/', function () {
    return view('welcome');
});

Route::post('/connection', function () {
    return view('connection');
});





