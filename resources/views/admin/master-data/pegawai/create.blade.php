@extends('layouts.admin.main')

@section('container')
  <div class="page-content">
    <div class="page-header">
      <h4 class="page-title">Tambah Data Pegawai</h4>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Form Data Pegawai</h5>
          </div>
          <div class="card-body">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
                </div>
                <div class="form-group col-md-6">
                  <label for="jabatan">Jabatan</label>
                  <input type="text" class="form-control" id="jabatan" placeholder="Masukkan Jabatan">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="status">Status</label>
                  <select class="form-control" id="unit_kerja">
                    <option value="admin">admin</option>
                    <option value="master-data">master-data</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="unit_kerja">Unit Kerja</label>
                  <select class="form-control" id="unit_kerja">
                    <option value="IT"> Tekonologi Informasi</option>
                    <option value="Keuangan">Teknik Mesin</option>
                    <option value="SDM">Agroindustri</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" placeholder="email">
                </div>
              </div>
            </form>
          </div>
          <div class="card-footer d-flex justify-content-end">
            <a href="{{ url('/admin/master-data/pegawai/index') }}" class="btn btn-sm btn-primary">
              <span class="btn-label">
                <i data-feather="plus"></i>
              </span>
              Tambah Pegawai
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
