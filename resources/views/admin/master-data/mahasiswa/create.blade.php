@extends('layouts.admin.main')

@section('container')
  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
    </ol>
  </nav>

  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Form Tambah Data Mahasiswa</h6>
          <form>

            <div class="mb-3">
              <label for="Inputnim" class="form-label">NIM</label>
              <input type="text" class="form-control" id="name" value="3042020004" placeholder="Enter Nim">
            </div>

            <div class="mb-3">
              <label for="Inputname" class="form-label">Nama</label>
              <input type="text" class="form-control" id="name" value="Indah Putri Herni"
                placeholder="Enter Name">
            </div>

            <div class="mb-3">
              <label for="FormControlJenisKelamin" class="form-label">Jenis Kelamin</label>
              <select class="form-select" id="FormControlJenisKelamin">
                <option selected disabled>Pilih jenis kelamin</option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
              </select>
            </div>

            <div class="d-flex justify-content-end">
              <a href="{{ url('/admin/master-data/mahasiswa') }}" class="btn btn-primary">
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
