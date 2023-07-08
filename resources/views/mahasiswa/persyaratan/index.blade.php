@extends('layouts.mahasiswa.main')

@section('container')
  <div class="d-flex justify-content-center align-items-center flex-wrap grid-margin">
    <div>
      <h4 class="mb-3 mb-md-0">Persyaratan</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="d-flex align-items-center">
            <h4 class="card-title">Syarat Mengikuti Praktik Kerja Lapangan</h4>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Persyaratan Umum:</h6>
                  <ul class="card-text">
                    <li>Mahasiswa aktif dengan status terdaftar</li>
                    <li>Lampirkan KHS Terakhir</li>
                    <li>Mengikuti seleksi wawancara</li>
                    <li>Menyertakan surat rekomendasi dari fakultas</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card text-center">
                <div class="card-body">
                  <h6 class="card-title">Upload Persyaratan</h6>
                  <p class="card-text">Silakan unggah berkas persyaratan melalui tombol di bawah ini:</p>
                  <label class="form-label" for="formFile">File upload</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
