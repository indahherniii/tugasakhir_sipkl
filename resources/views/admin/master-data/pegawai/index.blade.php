@extends('layouts.admin.main')

@section('container')
  <nav class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Pegawai</h4>
  </nav>
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-header">
          <div class="d-flex align-items-center justify-content-between">
            <h4 class="card-title">Data Pegawai</h4>
            <a href="{{ url('/admin/instansi/create') }}" class="btn btn-primary">
              <span class="btn-label">
                <i class="fa fa-plus"></i>
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
                <th width="100px">Aksi</th>
                <th>Nama</th>
                <th>Unit Kerja</th>
                <th>Email</th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark"> <i class="link-icon" data-feather="info"
                          style="font-size: 14px;"></i></a>
                      <a href="#" class="btn btn-sm btn-warning"> <i class="link-icon" data-feather="edit"
                          style="font-size: 14px;"></i></a>
                      <a href="#" class="btn btn-sm btn-danger"> <i class="link-icon" data-feather="trash"
                          style="font-size: 14px;"></i></a>
                    </div>
                  </td>
                  <td>Eka Wahyudi</td>
                  <td>Prodi D3 Teknologi Informasi</td>
                  <td>ekawahyudi@gmail.com</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark"><i class="fas fa-info"></i></a>
                      <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                  </td>
                  <td>Eka Wahyudi</td>
                  <td>Prodi D3 Teknologi Informasi</td>
                  <td>ekawahyudi@gmail.com</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark"><i class="fas fa-info"></i></a>
                      <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                  </td>
                  <td>Eka Wahyudi</td>
                  <td>Prodi D3 Teknologi Informasi</td>
                  <td>ekawahyudi@gmail.com</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark"><i class="fas fa-info"></i></a>
                      <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                  </td>
                  <td>Eka Wahyudi</td>
                  <td>Prodi D3 Teknologi Informasi</td>
                  <td>ekawahyudi@gmail.com</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-sm btn-dark"><i class="fas fa-info"></i></a>
                      <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                      <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                  </td>
                  <td>Eka Wahyudi</td>
                  <td>Prodi D3 Teknologi Informasi</td>
                  <td>ekawahyudi@gmail.com</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
