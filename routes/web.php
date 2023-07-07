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

Route::get('/admin/profile', function () {
    return view('admin.profile.index');
});

Route::get('/admin/profile/edit', function () {
    return view('admin.profile.edit');
});
