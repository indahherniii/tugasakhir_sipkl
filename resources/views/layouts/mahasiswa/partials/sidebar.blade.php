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
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="link-icon" data-feather="list"></i>
          <span class="link-title">Persyaratan</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="link-icon" data-feather="search"></i>
          <span class="link-title">Lowongan</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="link-icon" data-feather="file-text"></i>
          <span class="link-title">PKL</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="link-icon" data-feather="briefcase"></i>
          <span class="link-title">Instansi</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="link-icon" data-feather="clipboard"></i>
          <span class="link-title">Kegiatan Harian</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
