<?php

use Illuminate\Support\Facades\Route;



// Admin

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/admin/master-data/pegawai', function () {
    return view('admin.master-data.pegawai.index');
});

Route::get('/admin/master-data/pegawai/create', function () {
    return view('admin.master-data.pegawai.create');
});

Route::get('/admin/master-data/mahasiswa', function () {
    return view('admin.master-data.pegawai.index');
});

Route::get('/admin/master-data/mahasiswa/create', function () {
    return view('admin.master-data.pegawai.create');
});

Route::get('/admin/instansi', function () {
    return view('admin.data.instansi.index');
});

Route::get('/admin/instansi/create', function () {
    return view('admin.data.instansi.create');
});

Route::get('/admin/kegiatan_harian', function () {
    return view('admin.data.kegiatan_harian.index');
});

Route::get('/admin/pkl', function () {
    return view('admin.data.pkl.index');
});

Route::get('/admin/pkl/create', function () {
    return view('admin.data.pkl.create');
});

Route::get('/admin/profile', function () {
    return view('admin.profile.index');
});

Route::get('/admin/profile/edit', function () {
    return view('admin.profile.edit');
});
