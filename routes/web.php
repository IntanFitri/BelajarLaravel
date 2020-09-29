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

Route::get('/', function () {
    return view('intan');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/dosen', function () {
    return view('dosen');
});

Route::resource('pelajar', 'PelajaranController');
Route::post('pelajar/cari', 'PelajaranController@cari');

Route::resource('matkul', 'MataKuliahController');
Route::post('matkul/cari', 'MataKuliahController@cari');

Route::resource('karyawan', 'KaryawanController');
Route::post('carikaryawan', 'KaryawanController@carikaryawan');
Route::get('/cetakkaryawan/pdf','KaryawanController@createPDF');

Route::resource('wisata', 'WisataController');
Route::post('cariwisata', 'WisataController@cariwisata');
Route::get('/cetakwisata/pdf','WisataController@createPDF');

Route::get('artikel', 'ArtikelController@index');
Route::get('artikel/create', 'ArtikelController@create');
Route::post('simpanartikel', 'ArtikelController@store');

Route::get('berita', 'BeritaController@index');
Route::get('berita/create', 'BeritaController@create');
Route::post('simpanberita', 'BeritaController@store');
Route::delete('berita/{id}', 'BeritaController@destroy');
//Route::get('berita/{id}/edit', 'BeritaController@edit');

Route::resource('category', 'CategoryController');

Route::resource('customer', 'CustomersController');

Route::resource('employees', 'EmployeesController');

Route::resource('job', 'JobController');

Route::resource('location', 'LocationController');

Route::resource('manager', 'ManagerController');

Route::resource('pengguna', 'PenggunaController');

Route::resource('product', 'ProductController');

Route::resource('supplier', 'SupplierController');

Route::resource('type', 'TypeController');


