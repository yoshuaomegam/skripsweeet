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
Route::get('/pengujian1','Driver@create');
Route::get('/pengujian2','Driver@store');
Route::get('/pengujian3/{$id}','Driver@index');
Route::get('/apbdesa', function () {
    return view('apbdesa');
});
Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');
Auth::routes();
Route::get('/cek', 'HomeController@cek')->name('cek');
Route::get('/daftardesa', 'MasyarakatController@daftardesa')->name('daftardesa');
Route::get('/daftardesa/{id_desa}', 'MasyarakatController@daftartahun')->name('daftartahun');
Route::get('/daftardesa/{id_desa}/pelaporan/{id}', 'MasyarakatController@daftarapbdesa')->name('daftarpelapor');
Route::get('/daftardesa/{id_desa}/pelaporan/{id}/pendapatan/{id_pendapatan}','MasyarakatController@detailpendapatan')->name('detailpendapatan');
Route::get('/daftardesa/{id_desa}/pelaporan/{id}/belanja/{id_belanja}','MasyarakatController@detailbelanja')->name('detailbelanja');
Route::get('/daftardesa/{id_desa}/pelaporan/{id}/pembiayaan/{id_pembiayaan}','MasyarakatController@detailpembiayaan')->name('detailpembiayaan');


Route::middleware('role:operator')->group(function (){
    Route::get('/operator','OperatorController@index')->name('operatorhome');
    Route::get('/admin/pelaporan','PelaporanController@index')->name('admin.pelaporan');
    Route::get('/admin/tambahpelaporan','PelaporanController@create')->name('admin.pelaporan.create');
    Route::post('/admin/simpanpelaporan','PelaporanController@store')->name('admin.pelaporan.store');
    Route::get('/admin/menupelaporan/{id}','PelaporanController@show')->name('admin.pelaporan.show');
    Route::get('/admin/editpelaporan/{id}','PelaporanController@edit')->name('admin.pelaporan.edit');
    Route::post('/admin/updatepelaporan/{id}','PelaporanController@update')->name('admin.pelaporan.update');
    Route::delete('/admin/hapuspelaporan/{id}','PelaporanController@destroy')->name('admin.pelaporan.delete');
    Route::post('/admin/menupelaporan/{id}/konfirmasiapbdesa','PelaporanController@konfirmasi')->name('admin.pelaporan.konfirmasi');
    Route::post('/admin/menupelaporan/{id}/pembatalanapbdesa','PelaporanController@pembatalan')->name('admin.pelaporan.pembatalan');

    Route::get('/admin/menupelaporan/{id}/papbdesa','APBDesaController@index2')->name('admin.papbdesa');
    Route::get('/admin/menupelaporan/{id}/papbdesa/pendapatan','PendapatanController@pcreate')->name('admin.ppendapatan.create');
    Route::post('/admin/menupelaporan/{id}/papbdesa/simpanpendapatan','PendapatanController@pstore')->name('admin.ppendapatan.store');

    Route::get('/admin/menupelaporan/{id}/apbdesa','APBDesaController@index')->name('admin.apbdesa');
    Route::get('/admin/menupelaporan/{id}/apbdesa/pendapatan','PendapatanController@create')->name('admin.pendapatan.create');
    Route::post('/admin/menupelaporan/{id}/apbdesa/simpanpendapatan','PendapatanController@store')->name('admin.pendapatan.store');
    Route::get('/admin/menupelaporan/{id}/apbdesa/showpendapatan/{id_pendapatan}','PendapatanController@show')->name('admin.pendapatan.show');
    Route::get('/admin/menupelaporan/{id}/apbdesa/editpendapatan/{id_pendapatan}','PendapatanController@edit')->name('admin.pendapatan.edit');
    Route::post('/admin/menupelaporan/{id}/apbdesa/updatependapatan/{id_pendapatan}','PendapatanController@update')->name('admin.pendapatan.update');
    Route::delete('/admin/menupelaporan/{id}/apbdesa/hapuspendapatan/{id_pendapatan}','PendapatanController@destroy')->name('admin.pendapatan.delete');
    Route::post('/admin/menupelaporan/{id}/apbdesa/simpandetailpendapatan/{id_pendapatan}','PendapatanController@store2')->name('admin.pendapatan.store2');
    Route::post('/admin/menupelaporan/{id}/apbdesa/updatependapatan/{id_pendapatan}/updatedetail/{id_detail}','PendapatanController@update2')->name('admin.pendapatan.update2');
    Route::delete('/admin/menupelaporan/{id}/apbdesa/updatependapatan/{id_pendapatan}/hapusdetail/{id_detail}','PendapatanController@destroy2')->name('admin.pendapatan.delete2');
    
    Route::get('/admin/menupelaporan/{id}/apbdesa/pembiayaan','PembiayaanController@create')->name('admin.pembiayaan.create');
    Route::post('/admin/menupelaporan/{id}/apbdesa/simpanpembiayaan','PembiayaanController@store')->name('admin.pembiayaan.store');
    Route::get('/admin/menupelaporan/{id}/apbdesa/showpembiayaan/{id_pembiayaan}','PembiayaanController@show')->name('admin.pembiayaan.show');
    Route::get('/admin/menupelaporan/{id}/apbdesa/editpembiayaan/{id_pembiayaan}','PembiayaanController@edit')->name('admin.pembiayaan.edit');
    Route::post('/admin/menupelaporan/{id}/apbdesa/updatepembiayaan/{id_pembiayaan}','PembiayaanController@update')->name('admin.pembiayaan.update');
    Route::post('/admin/menupelaporan/{id}/apbdesa/simpandetailpembiayaan/{id_pembiayaan}','PembiayaanController@store2')->name('admin.pembiayaan.store2');
    Route::post('/admin/menupelaporan/{id}/apbdesa/updatepembiayaan/{id_pembiayaan}/updatedetail/{id_detail}','PembiayaanController@update2')->name('admin.pembiayaan.update2');
    Route::delete('/admin/menupelaporan/{id}/apbdesa/updatepembiayaan/{id_pembiayaan}/hapusdetail/{id_detail}','PembiayaanController@destroy2')->name('admin.pembiayaan.delete2');
    Route::delete('/admin/menupelaporan/{id}/apbdesa/hapuspembiayaan/{id_pembiayaan}','PembiayaanController@destroy')->name('admin.pembiayaan.delete');

    Route::get('/admin/menupelaporan/{id}/apbdesa/belanja','BelanjaController@create')->name('admin.belanja.create');
    Route::post('/admin/menupelaporan/{id}/apbdesa/simpanbelanja','BelanjaController@store')->name('admin.belanja.store');
    Route::get('/admin/menupelaporan/{id}/apbdesa/showbelanja/{id_belanja}','BelanjaController@show')->name('admin.belanja.show');
    Route::get('/admin/menupelaporan/{id}/apbdesa/editbelanja/{id_belanja}','BelanjaController@edit')->name('admin.belanja.edit');
    Route::post('/admin/menupelaporan/{id}/apbdesa/updatebelanja/{id_belanja}','BelanjaController@update')->name('admin.belanja.update');
    Route::delete('/admin/menupelaporan/{id}/apbdesa/hapusbelanja/{id_belanja}','BelanjaController@destroy')->name('admin.belanja.delete');
    Route::post('/admin/menupelaporan/{id}/apbdesa/simpandetailbelanja/{id_belanja}','BelanjaController@store2')->name('admin.belanja.store2');
    Route::post('/admin/menupelaporan/{id}/apbdesa/updatebelanja/{id_belanja}/updatedetail/{id_detail}','BelanjaController@update2')->name('admin.belanja.update2');
    Route::delete('/admin/menupelaporan/{id}/apbdesa/updatebelanja/{id_belanja}/hapusdetail/{id_detail}','BelanjaController@destroy2')->name('admin.belanja.delete2');

});
Route::middleware('role:bappemas')->group(function (){
    Route::get('/bappemas','BappemasController@index')->name('bappemashome');
     Route::get('/kecamatan','KecamatanController@index')->name('kecamatan');
     Route::post('/simpankecamatan','KecamatanController@store')->name('kecamatan.store');
     Route::post('/editkecamatan/{id}','KecamatanController@update')->name('kecamatan.update');
     Route::delete('/hapuskecamatan/{id}','KecamatanController@destroy')->name('kecamatan.delete');
     Route::post('/importkecamatan','KecamatanController@import')->name('kecamatan.import');
    
     Route::get('/desa','DesaController@index')->name('desa');
     Route::get('/tambahdesa','DesaController@create')->name('desa.create');
     Route::post('/simpandesa','DesaController@store')->name('desa.store');
     Route::delete('/hapusdesa/{id}','DesaController@destroy')->name('desa.delete');

    
   
});