@extends('layouts.admin.main')

@section('container')
  <nav class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Kegiatan Harian</h4>
  </nav>
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-header">
          <div class="d-flex align-items-center justify-content-between">
            <h4 class="card-title">Data Laporan Kegiatan Harian Mahasiswa</h4>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="display table table-striped table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10%">Aksi</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark">
                        <i data-feather="info" style="font-size: 14px;"></i>
                      </a>
                    </div>
                  </td>
                  <td>3042020001</td>
                  <td>Herdianti Norlita </td>
                  <td>Perempuan</td>
                </tr>
                <tr>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark">
                        <i data-feather="info" style="font-size: 14px;"></i>
                      </a>
                    </div>
                  </td>
                  <td>3042020002</td>
                  <td>Tira Tariska</td>
                  <td>Perempuan</td>
                </tr>
                <tr>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark">
                        <i data-feather="info" style="font-size: 14px;"></i>
                      </a>
                    </div>
                  </td>
                  <td>3042020003</td>
                  <td>Elis Sulistia Sudrajat</td>
                  <td>Perempuan</td>
                </tr>
                <tr>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark">
                        <i data-feather="info" style="font-size: 14px;"></i>
                      </a>
                    </div>
                  </td>
                  <td>3042020004</td>
                  <td>Indah Putri Herni</td>
                  <td>Perempuan</td>
                </tr>
                <tr>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark">
                        <i data-feather="info" style="font-size: 14px;"></i>
                      </a>
                    </div>
                  </td>
                  <td>3042020005</td>
                  <td>Dea Marwan</td>
                  <td>Perempuan</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
