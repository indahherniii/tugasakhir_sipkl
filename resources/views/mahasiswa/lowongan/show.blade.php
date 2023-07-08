@extends('layouts.mahasiswa.main')

@section('container')
  <div class="page-inner">
    <div class="page-header">
    </div>
    <div class="row">

      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
              <h4 class="card-title">Detail Perusahaan atau Instansi</h4>
            </div>
          </div>

          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="perusahaan-detail">
                  <div class="perusahaan-header">
                    <img src="{{ url('template/assets/images/contohP.jpg') }}" alt="Logo Perusahaan"
                      class="perusahaan-logo">
                    <div class="perusahaan-info">
                      <h2 class="perusahaan-nama">PT PLN (Persero) UP3 Ketapang</h2>
                      <p class="perusahaan-deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
                        veritatis nesciunt, unde laudantium reprehenderit suscipit molestias rem, corporis facilis error
                        magnam dolorum quasi perspiciatis eos aut animi architecto eveniet vero.</p>
                    </div>
                  </div>
                  <div class="perusahaan-kontak">
                    <h3>Kontak</h3>
                    <ul>
                      <li><strong>Alamat:</strong> Jl. NeonCity Alamat No. 123, Kota NCTDream</li>
                      <li><strong>Email:</strong> plnup3ketapang.com</li>
                      <li><strong>Telepon:</strong> 0123456789</li>
                      <li><strong>Website:</strong> <a href="https://www.pln.com">www.perusahaan.com</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </hr>
      </div>
    </div>
  </div>
@endsection
