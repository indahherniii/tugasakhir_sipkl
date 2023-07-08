@extends('layouts.mahasiswa.main')

@section('container')
  <div class="content">
    <div class="page-inner">
      <div class="page-header mb-4">
        <h4 class="page-title">Lowongan</h4>
      </div>
      <div class="form-group mb-4">
        <div class="input-icon">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-icon-addon">
            <i class="fa fa-search"></i>
          </span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-header">
              <h5 class="card-title">Web Developer Internship</h5>
            </div>
            <div class="card-body">
              <p class="card-text">ABC Company sedang mencari magang web developer yang berpengalaman dalam HTML, CSS, dan
                JavaScript.</p>
              <p class="card-text">Institusi: ABC Company</p>
              <p class="card-text">Departemen/Divisi: IT</p>
              <div class="text-center">
                <a href="#" class="btn btn-success">Kuota 16</a>
                <a href="{{ url('/mahasiswa/lowongan/show') }}" class="btn btn-primary">Lihat Lowongan</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-header">
              <h5 class="card-title">Web Developer Internship</h5>
            </div>
            <div class="card-body">
              <p class="card-text">ABC Company sedang mencari magang web developer yang berpengalaman dalam HTML, CSS, dan
                JavaScript.</p>
              <p class="card-text">Institusi: ABC Company</p>
              <p class="card-text">Departemen/Divisi: IT</p>
              <div class="text-center">
                <a href="#" class="btn btn-success">Kuota 16</a>
                <a href="{{ url('/mahasiswa/lowongan/show') }}" class="btn btn-primary">Lihat Lowongan</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-header">
              <h5 class="card-title">Web Developer Internship</h5>
            </div>
            <div class="card-body">
              <p class="card-text">ABC Company sedang mencari magang web developer yang berpengalaman dalam HTML, CSS, dan
                JavaScript.</p>
              <p class="card-text">Institusi: ABC Company</p>
              <p class="card-text">Departemen/Divisi: IT</p>
              <div class="text-center">
                <a href="#" class="btn btn-success">Kuota 16</a>
                <a href="{{ url('/mahasiswa/lowongan/show') }}" class="btn btn-primary">Lihat Lowongan</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-header">
              <h5 class="card-title">Web Developer Internship</h5>
            </div>
            <div class="card-body">
              <p class="card-text">ABC Company sedang mencari magang web developer yang berpengalaman dalam HTML, CSS, dan
                JavaScript.</p>
              <p class="card-text">Institusi: ABC Company</p>
              <p class="card-text">Departemen/Divisi: IT</p>
              <div class="text-center">
                <a href="{{ url('/mahasiswa/lowongan/show') }}" class="btn btn-primary">Lihat Lowongan</a>
                <a href="#" class="btn btn-success">Kuota 16</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
