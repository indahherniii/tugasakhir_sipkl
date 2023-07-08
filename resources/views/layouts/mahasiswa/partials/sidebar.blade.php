<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      SIPKL<span>POLITAP</span>
    </a>
    <div class="sidebar-toggler not-active">
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item">
        <a href="{{ url('admin/dashboard') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
          <i class="link-icon" data-feather="home"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is('mahasiswa/persyaratan') ? 'active' : '' }}">
        <a href="{{ url('mahasiswa/persyaratan') }}" class="nav-link">
          <i class="link-icon" data-feather="list"></i>
          <span class="link-title">Persyaratan</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is('mahasiswa/lowongan') ? 'active' : '' }}">
        <a href="{{ url('mahasiswa/lowongan') }}" class="nav-link">
          <i class="link-icon" data-feather="search"></i>
          <span class="link-title">Lowongan</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is('mahasiswa/pkl') ? 'active' : '' }}">
        <a href="{{ url('mahasiswa/pkl') }}" class="nav-link">
          <i class="link-icon" data-feather="file-text"></i>
          <span class="link-title">PKL</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is('mahasiswa/instansi') ? 'active' : '' }}">
        <a href="{{ url('mahasiswa/instansi') }}" class="nav-link">
          <i class="fas fa-building"></i>
          <span class="link-title">Instansi</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is('mahasiswa/kegiatan_harian') ? 'active' : '' }}">
        <a href="{{ url('mahasiswa/kegiatan_harian') }}" class="nav-link">
          <i class="link-icon" data-feather="clipboard"></i>
          <span class="link-title">Kegiatan Harian</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
