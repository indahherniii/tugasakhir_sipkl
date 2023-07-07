@extends('layouts.admin.main')

@section('container')
  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Pegawai</li>
    </ol>
  </nav>

  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Form Tambah Data Pegawai</h6>
          <form>

            <div class="mb-3">
              <label for="Inputname" class="form-label">Nama</label>
              <input type="text" class="form-control" id="name" value="Eka Wahyudi" placeholder="Enter Name">
            </div>

            <div class="mb-3">
              <label for="FormControlStatus" class="form-label">Status</label>
              <select class="form-select" id="FormControlStatus">
                <option selected disabled>Select your status</option>
                <option>Master-data</option>
                <option>Admin</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="InputEmail" class="form-label">Email Input</label>
              <input type="email" class="form-control" id="InputEmail" value="ekawahyudi@gmail.com"
                placeholder="Enter Email">
            </div>

            <div class="mb-3">
              <label for="FormControlJabatan" class="form-label">Jabatan</label>
              <select class="form-select" id="FormControlJabatan">
                <option selected disabled>Select your jabatan</option>
                <option>Direktur</option>
                <option>Kepala Prodi</option>
                <option>Kepala Jurusan</option>
              </select>
            </div>
            <div class="d-flex justify-content-end">
              <a href="{{ url('/admin/master-data/pegawai') }}" class="btn btn-primary">
                <i data-feather="save" class="me-2"></i>
                Simpan Data
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
