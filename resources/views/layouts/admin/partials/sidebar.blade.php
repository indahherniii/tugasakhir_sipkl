<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      SIPKL<span>POLITAP</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
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
      <li class="nav-item nav-category">MASTER DATA</li>
      <li class="nav-item menu-open">
        <a class="nav-link {{ Request::is('admin/master-data/mahasiswa*') || Request::is('admin/master-data/pegawai*') ? 'active' : '' }}"
          data-bs-toggle="collapse" href="#users" role="button" aria-expanded="false" aria-controls="users">
          <i class="link-icon" data-feather="user"></i>
          <span class="link-title">Users</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="users">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('admin/master-data/pegawai') }}" class="nav-link">Pegawai</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('admin/master-data/mahasiswa') }}" class="nav-link">Mahasiswa</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category">Data</li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/data/lowongan*') || Request::is('admin/data/persyaratan*') || Request::is('admin/data/pkl*') ? 'active' : '' }}"
          data-bs-toggle="collapse" href="#mahasiswa" role="button" aria-expanded="false" aria-controls="mahasiswa">
          <i class="link-icon" data-feather="smile"></i>
          <span class="link-title">Mahasiswa</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="mahasiswa">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('admin/data/lowongan') }}" class="nav-link">Lowongan</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('admin/data/persyaratan') }}" class="nav-link">Persyaratan</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('admin/data/pkl') }}" class="nav-link">PKL</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-open">
        <a class="nav-link {{ Request::is('admin/data/kegiatan_harian*') ? 'active' : '' }}" data-bs-toggle="collapse"
          href="#laporan" role="button" aria-expanded="false" aria-controls="laporan">
          <i class="link-icon" data-feather="clipboard"></i>
          <span class="link-title">Laporan</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="laporan">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('admin/data/kegiatan_harian') }}"
                class="nav-link {{ Request::is('admin/data/kegiatan_harian*') ? 'active' : '' }}">Kegiatan Harian
                Mahasiswa</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a href="{{ url('admin/data/instansi') }}"
          class="nav-link {{ Request::is('admin/data/instansi') ? 'active' : '' }}">
          <i class="link-icon" data-feather="briefcase"></i>
          <span class="link-title">Instansi</span>
        </a>
      </li>


    </ul>
  </div>
</nav>
<nav class="settings-sidebar">
  <div class="sidebar-body">
    <a href="#" class="settings-sidebar-toggler">
      <i data-feather="settings"></i>
    </a>
    <h6 class="text-muted mb-2">Sidebar:</h6>
    <div class="mb-3 pb-3 border-bottom">
      <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight"
          value="sidebar-light" checked>
        <label class="form-check-label" for="sidebarLight">
          Light
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark"
          value="sidebar-dark">
        <label class="form-check-label" for="sidebarDark">
          Dark
        </label>
      </div>
    </div>
    <div class="theme-wrapper">
      <h6 class="text-muted mb-2">Light Theme:</h6>
      <a class="theme-item active" href="../../../demo1/dashboard.html">
        <img src="../../../assets/images/screenshots/light.jpg" alt="light theme">
      </a>
      <h6 class="text-muted mb-2">Dark Theme:</h6>
      <a class="theme-item" href="../../../demo2/dashboard.html">
        <img src="../../../assets/images/screenshots/dark.jpg" alt="light theme">
      </a>
    </div>
  </div>
</nav>
