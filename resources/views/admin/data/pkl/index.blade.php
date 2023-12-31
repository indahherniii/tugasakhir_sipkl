@extends('layouts.admin.main')

@section('container')
  {{-- <div class="page-content">
    <div class="page-header">
      <h4 class="page-title">Data PKL</h4>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Daftar PKL</h5>
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>Nama PKL</th>
                  <th>Deskripsi</th>
                  <th>Durasi</th>
                  <th>Status Kuota</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>PKL ABC Company</td>
                  <td>PKL di ABC Company untuk mahasiswa jurusan Teknik Informatika</td>
                  <td>3 bulan</td>
                  <td><span class="badge badge-success">Kuota Tersedia</span></td>
                  <td><a href="#" class="btn btn-primary">Lihat Detail</a></td>
                </tr>
                <tr>
                  <td>PKL XYZ Corporation</td>
                  <td>PKL di XYZ Corporation untuk mahasiswa jurusan Teknik Elektro</td>
                  <td>2 bulan</td>
                  <td><span class="badge badge-danger">Kuota Habis</span></td>
                  <td><a href="#" class="btn btn-primary">Lihat Detail</a></td>
                </tr>
                <!-- Tambahan baris untuk PKL lainnya -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div> --}}


  <nav class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Praktik Kerja Lapangan</h4>
  </nav>
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-header">
          <div class="d-flex align-items-center justify-content-between">
            <h4 class="card-title">Data Praktik Kerja Lapangan</h4>
            <a href="{{ url('/admin/data/instansi/create') }}" class="btn btn-primary">
              <span class="btn-label">
                <i data-feather="plus"></i>
              </span>
              Tambah PKL
            </a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="display table table-striped table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10%">Aksi</th>
                  <th>Bidang</th>
                  <th>Tempat PKL</th>
                  <th>Kuota</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark">
                        <i class="icon feather" data-feather="info" style="font-size: 14px;"></i>
                      </a>
                      <a href="#" class="btn btn-sm btn-warning">
                        <i class="icon feather" data-feather="edit" style="font-size: 14px;"></i>
                      </a>
                      <a href="#" class="btn btn-sm btn-danger">
                        <i class="icon feather" data-feather="trash" style="font-size: 12px;"></i>
                      </a>
                    </div>
                  </td>
                  <td>Informatika</td>
                  <td>PT PLN (Persero) UP3 Ketapang</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark">
                        <i class="icon feather" data-feather="info" style="font-size: 14px;"></i>
                      </a>
                      <a href="#" class="btn btn-sm btn-warning">
                        <i class="icon feather" data-feather="edit" style="font-size: 14px;"></i>
                      </a>
                      <a href="#" class="btn btn-sm btn-danger">
                        <i class="icon feather" data-feather="trash" style="font-size: 12px;"></i>
                      </a>
                    </div>
                  </td>
                  <td>Informatika</td>
                  <td>PT PLN (Persero) UP3 Ketapang</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark">
                        <i class="icon feather" data-feather="info" style="font-size: 14px;"></i>
                      </a>
                      <a href="#" class="btn btn-sm btn-warning">
                        <i class="icon feather" data-feather="edit" style="font-size: 14px;"></i>
                      </a>
                      <a href="#" class="btn btn-sm btn-danger">
                        <i class="icon feather" data-feather="trash" style="font-size: 12px;"></i>
                      </a>
                    </div>
                  </td>
                  <td>Informatika</td>
                  <td>PT PLN (Persero) UP3 Ketapang</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark">
                        <i class="icon feather" data-feather="info" style="font-size: 14px;"></i>
                      </a>
                      <a href="#" class="btn btn-sm btn-warning">
                        <i class="icon feather" data-feather="edit" style="font-size: 14px;"></i>
                      </a>
                      <a href="#" class="btn btn-sm btn-danger">
                        <i class="icon feather" data-feather="trash" style="font-size: 12px;"></i>
                      </a>
                    </div>
                  </td>
                  <td>Informatika</td>
                  <td>PT PLN (Persero) UP3 Ketapang</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark">
                        <i class="icon feather" data-feather="info" style="font-size: 14px;"></i>
                      </a>
                      <a href="#" class="btn btn-sm btn-warning">
                        <i class="icon feather" data-feather="edit" style="font-size: 14px;"></i>
                      </a>
                      <a href="#" class="btn btn-sm btn-danger">
                        <i class="icon feather" data-feather="trash" style="font-size: 12px;"></i>
                      </a>
                    </div>
                  </td>
                  <td>Informatika</td>
                  <td>PT PLN (Persero) UP3 Ketapang</td>
                  <td>1</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
