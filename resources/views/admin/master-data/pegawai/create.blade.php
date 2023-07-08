@extends('layouts.admin.main')

@section('container')
  <nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Pegawai</li>
    </ol>
  </nav>

  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Form Tambah Data Pegawai</h6>
          <form>
            <div class="row">
              <div class="col-lg-6">
                <div class="mb-3">
                  <label for="Inputname" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="name" value="Sifudin Usman"
                    placeholder="Enter Name">
                </div>

                <div class="mb-3">
                  <label for="Inputnip" class="form-label">NIP</label>
                  <input type="text" class="form-control" id="nip" value="19820623 201509 169"
                    placeholder="Enter NIP">
                </div>

                <div class="mb-3">
                  <label for="FormControlStatus" class="form-label">Status</label>
                  <select class="form-select" id="FormControlStatus">
                    <option selected disabled>Pilih status</option>
                    <option>Master-data</option>
                    <option>Admin</option>
                  </select>
                </div>


                <div class="mb-3">
                  <label for="Inputtanggal" class="form-label">Tanggal Lahir</label>
                  <div class="input-group flatpickr" id="flatpickr-date">
                    <input type="text" class="form-control" placeholder="Select date" data-input>
                    <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
                  </div>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="formFile">Foto</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="mb-3">
                  <label for="Inputusername" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" value="saifudinusman"
                    placeholder="Enter Username">
                </div>

                <div class="mb-3">
                  <label for="FormControlJenisKelamin" class="form-label">Jenis Kelamin</label>
                  <select class="form-select" id="FormControljenis_kelamin">
                    <option selected disabled>Pilih status</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="InputTempatLahir" class="form-label">Tempat Lahir</label>
                  <input type="text" class="form-control" id="tempat_lahir" value="Jalan Agus Salim"
                    placeholder="Enter Tempat lahir">
                </div>

                <div class="mb-3">
                  <label for="FormControlAgama" class="form-label">Agama</label>
                  <select class="form-select" id="FormControlAgama">
                    <option selected disabled>Pilih agama</option>
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Buddha</option>
                    <option>Konghucu</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword2" autocomplete="off"
                    placeholder="Password">
                </div>
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
