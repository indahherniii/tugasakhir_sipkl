<?php

use Illuminate\Support\Facades\Route;



// Admin

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/master-data/pegawai', function () {
    return view('admin.master-data.pegawai.index');
});

Route::get('/admin/master-data/pegawai/create', function () {
    return view('admin.master-data.pegawai.create');
});

Route::get('/admin/master-data/mahasiswa', function () {
    return view('admin.master-data.mahasiswa.index');
});

Route::get('/admin/master-data/mahasiswa/create', function () {
    return view('admin.master-data.mahasiswa.create');
});

Route::get('/admin/data/instansi', function () {
    return view('admin.data.instansi.index');
});

Route::get('/admin/data/instansi/create', function () {
    return view('admin.data.instansi.create');
});

Route::get('/admin/data/kegiatan_harian', function () {
    return view('admin.data.kegiatan_harian.index');
});

Route::get('/admin/data/pkl', function () {
    return view('admin.data.pkl.index');
});

Route::get('/admin/data/pkl/create', function () {
    return view('admin.data.pkl.create');
});

Route::get('/admin/data/lowongan', function () {
  return view('admin.data.lowongan.index');
});

Route::get('/admin/data/persyaratan', function () {
  return view('admin.data.persyaratan.index');
});

Route::get('/admin/profile', function () {
    return view('admin.profile.index');
});

Route::get('/admin/profile/edit', function () {
    return view('admin.profile.edit');
});

// Mahasiswa

Route::get('/mahasiswa/dashboard', function () {
  return view('mahasiswa.dashboard');
});

Route::get('/mahasiswa/persyaratan', function () {
  return view('mahasiswa.persyaratan.index');
});

Route::get('/mahasiswa/lowongan', function () {
  return view('mahasiswa.lowongan.index');
});

Route::get('/mahasiswa/lowongan/show', function () {
  return view('mahasiswa.lowongan.show');
});

Route::get('/mahasiswa/pkl', function () {
  return view('mahasiswa.pkl.index');
});

Route::get('/mahasiswa/instansi', function () {
  return view('mahasiswa.instansi.index');
});
