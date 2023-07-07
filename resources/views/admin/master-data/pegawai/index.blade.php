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
                <th width="10px">Aksi</th>
                <th>Nama</th>
                <th>Unit Kerja</th>
                <th>Email</th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
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
                  <td>Eka Wahyudi</td>
                  <td>Prodi D3 Teknologi Informasi</td>
                  <td>ekawahyudi@gmail.com</td>
                </tr>
                <tr>
                  <td>2</td>
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
                  <td>Eka Wahyudi</td>
                  <td>Prodi D3 Teknologi Informasi</td>
                  <td>ekawahyudi@gmail.com</td>
                </tr>
                <tr>
                  <td>3</td>
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
                  <td>Eka Wahyudi</td>
                  <td>Prodi D3 Teknologi Informasi</td>
                  <td>ekawahyudi@gmail.com</td>
                </tr>
                <tr>
                  <td>4</td>
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
                  <td>Eka Wahyudi</td>
                  <td>Prodi D3 Teknologi Informasi</td>
                  <td>ekawahyudi@gmail.com</td>
                </tr>
                <tr>
                  <td>5</td>
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
