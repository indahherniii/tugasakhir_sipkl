@extends('layouts.admin.main')

@section('container')
  <nav class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Instansi</h4>
  </nav>
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-header">
          <div class="d-flex align-items-center justify-content-between">
            <h4 class="card-title">Data Instansi</h4>
            <a href="{{ url('/admin/data/instansi/create') }}" class="btn btn-primary">
              <span class="btn-label">
                <i data-feather="plus"></i>
              </span>
              Tambah Instansi
            </a>
          </div>

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="display table table-striped table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10%">Aksi</th>
                  <th>Nama PT</th>
                  <th>Alamat</th>
                  <th>Jumlah Lowongan</th>
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
                  <td>PT PLN UP3 (Persero) Kabupaten Ketapang</td>
                  <td>Jalan Letkol M. Tohir Mo 25 </td>
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
                  <td>PT PLN UP3 (Persero) Kabupaten Ketapang</td>
                  <td>Jalan Letkol M. Tohir Mo 25 </td>
                  <td>2</td>
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
                  <td>PT PLN UP3 (Persero) Kabupaten Ketapang</td>
                  <td>Jalan Letkol M. Tohir Mo 25 </td>
                  <td>3</td>
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
                  <td>PT PLN UP3 (Persero) Kabupaten Ketapang</td>
                  <td>Jalan Letkol M. Tohir Mo 25 </td>
                  <td>4</td>
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
                  <td>PT PLN UP3 (Persero) Kabupaten Ketapang</td>
                  <td>Jalan Letkol M. Tohir Mo 25 </td>
                  <td>5</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
