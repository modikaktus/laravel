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

Route::resource('agama', 'AgamaController');
Route::resource('negara', 'NegaraController');
Route::resource('provinsi', 'ProvinsiController');
Route::resource('kabupaten', 'KabupatenController');
Route::resource('kecamatan', 'KecamatanController');
Route::resource('desa', 'DesaController');
Route::resource('pendidikan', 'PendidikanController');
Route::resource('status-pegawai', 'StatusPegawaiController');
Route::resource('jenis-pegawai', 'JenisPegawaiController');
Route::resource('golongan', 'GolonganController');
Route::resource('kp', 'KpController');
Route::resource('eselon', 'EselonController');
Route::resource('jenis-unit-kesehatan', 'JenisUnitKesehatanController');
Route::resource('jenis-cuti', 'JenisCutiController');
Route::resource('pegawai', 'PegawaiController');
Route::resource('data-utama', 'DataUtamaController');
Route::resource('data-pribadi', 'DataPribadiController');
Route::resource('data-orangtua', 'DataOrangtuaController');
Route::resource('data-riwayat-pasangan', 'DataRiwayatPasanganController');
Route::resource('data-anak', 'DataAnakController');
Route::resource('data-riwayat-golongan', 'DataRiwayatGolonganController');
Route::resource('data-riwayat-pendidikan', 'DataRiwayatPendidikanController');
Route::resource('data-riwayat-diklat', 'DataRiwayatDiklatController');
Route::resource('data-riwayat-jabatan', 'DataRiwayatJabatanController');
Route::resource('data-guru', 'DataGuruController');
Route::resource('data-riwayat-guru', 'DataRiwayatGuruController');
Route::resource('data-dokter', 'DataDokterController');
Route::resource('data-riwayat-dokter', 'DataRiwayatDokterController');
Route::resource('data-riwayat-cuti', 'DataRiwayatCutiController');
Route::resource('data-pensiun', 'DataPensiunController');
