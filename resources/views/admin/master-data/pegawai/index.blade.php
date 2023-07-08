@extends('layouts.admin.main')

@section('container')
  <div class="d-flex justify-content-center align-items-center flex-wrap grid-margin">
    <div>
      <h4 class="mb-3 mb-md-0">Pegawai</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-header">
          <div class="d-flex align-items-center justify-content-between">
            <h4 class="card-title">Data Pegawai</h4>
            <a href="{{ url('/admin/master-data/pegawai/create') }}" class="btn btn-primary">
              <span class="btn-label">
                <i data-feather="plus"></i>
              </span>
              Tambah Pegawai
            </a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="display table table-striped table table-bordered">
              <thead>
                <th>No</th>
                <th style="width: 100px">Aksi</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Status</th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark"><i class="fa-solid fa-info"></i></a>
                      <a href="#" class="btn btn-sm btn-warning"><i class="fa-solid fa-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </div>
                  </td>
                  <td>19820623 201509 169</td>
                  <td>Saifudin Usman</td>
                  <td>Admin</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark"><i class="fa-solid fa-info"></i></a>
                      <a href="#" class="btn btn-sm btn-warning"><i class="fa-solid fa-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </div>
                  </td>
                  <td>19820623 201509 169</td>
                  <td>Saifudin Usman</td>
                  <td>Admin</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark"><i class="fa-solid fa-info"></i></a>
                      <a href="#" class="btn btn-sm btn-warning"><i class="fa-solid fa-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </div>
                  </td>
                  <td>19820623 201509 169</td>
                  <td>Saifudin Usman</td>
                  <td>Admin</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark"><i class="fa-solid fa-info"></i></a>
                      <a href="#" class="btn btn-sm btn-warning"><i class="fa-solid fa-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </div>
                  </td>
                  <td>19820623 201509 169</td>
                  <td>Saifudin Usman</td>
                  <td>Admin</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark"><i class="fa-solid fa-info"></i></a>
                      <a href="#" class="btn btn-sm btn-warning"><i class="fa-solid fa-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </div>
                  </td>
                  <td>19820623 201509 169</td>
                  <td>Saifudin Usman</td>
                  <td>Admin</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
