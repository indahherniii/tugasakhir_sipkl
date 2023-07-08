<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords"
    content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>SIPKL POLITAP</title>

  <!-- Fonts -->
  <link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}">
  <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin>
  <link href="{{ url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap') }}"
    rel="stylesheet">
  <!-- End fonts -->

  <!-- core:css -->
  <link rel="stylesheet" href="{{ url('template/assets/vendors/core/core.css') }}">
  <!-- endinject -->

  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ url('template/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="{{ url('template/assets/fonts/feather-font/css/iconfont.css') }}">
  <link rel="stylesheet" href="{{ url('template/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
  <!-- endinject -->

  <!-- Layout styles -->
  <link rel="stylesheet" href="{{ url('template/assets/css/demo1/style.css') }}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{ url('template/assets/images/favicon.png') }}" />
  <script src="https://kit.fontawesome.com/9e2e3f11aa.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="main-wrapper">

    <!-- partial:../../partials/_sidebar.html -->
    @include('layouts.mahasiswa.partials.sidebar')
    <!-- partial -->

    <div class="page-wrapper">

      <!-- partial:../../partials/_navbar.html -->
      @include('layouts.mahasiswa.partials.header')
      <!-- partial -->

      <div class="page-content">
        @yield('container')
      </div>

      <!-- partial:../../partials/_footer.html -->
      @include('layouts.mahasiswa.partials.footer')
      <!-- partial -->

    </div>
  </div>

  <!-- core:js -->
  <script src="{{ url('template/assets/vendors/core/core.js') }}"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="{{ url('template/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ url('template/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="{{ url('template/assets/vendors/feather-icons/feather.min.js') }}"></script>
  <script src="{{ url('template/assets/js/template.js') }}"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="{{ url('template/assets/js/data-table.js') }}"></script>
  <!-- End custom js for this page -->

</body>

</html>
