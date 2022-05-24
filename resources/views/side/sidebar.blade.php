<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
  <div class="sidebar-brand-icon">
      <!-- ganti icon -->
      <i class="fas fa-laptop-code"></i> 
  </div>
  <div class="sidebar-brand-text mx-3">MINI Project <sup>2</sup></div>
  <div class="sidebar-brand-icon">
      <!-- ganti icon -->
      <i class="fas fa-mobile-alt"></i>
  </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="/">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Profile</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- menu admin -->
@if ( Str::length(Auth::guard('user')->user()) > 0)
@if (Auth::guard('user')->user()->level = "admin")


<div class="sidebar-heading">
  Admin
</div>

<li class="nav-item">
  <a class="nav-link" href="/admin/rekapdata">
    <i class="fas fa-fw fa-cog"></i>
    <span>Rekap Data Perwalian</span></a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Pengelolaan Data</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Kelola Data:</h6>
      <a class="collapse-item" href="/admin/datadosen">Dosen</a>
      <a class="collapse-item" href="/admin/datamahasiswa">Mahasiswa</a>
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
<div class="sidebar-heading">
  Mahasiswa
</div>
<li class="nav-item">
  <a class="nav-link" href="/admin/dataperwalian">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>List Data Perwalian</span></a>
</li>
<div class="sidebar-heading">
  Dosen
</div>
<li class="nav-item">
  <a class="nav-link" href="/dosen">
    <i class="fas fa-fw fa-table"></i>
    <span>Histori Data Perwalian</span></a>
</li>
@endif
@endif
<!-- menu mahasiswa -->
@if ( Str::length(Auth::guard('mahasiswa')->user()) > 0)
@if (Auth::guard('mahasiswa')->user()->level = "mahasiswa")
<div class="sidebar-heading">
  Mahasiswa
</div>

<li class="nav-item">
  <a class="nav-link" href="/mahasiswa">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Data Perwalian</span></a>
</li>
<hr class="sidebar-divider d-none d-md-block">
@endif
@endif
<!-- Divider -->

 <!-- menu dosen -->
 @if ( Str::length(Auth::guard('dosen')->user()) > 0)
 @if (Auth::guard('dosen')->user()->level = "dosen")
 <div class="sidebar-heading">
  Dosen
</div>
<li class="nav-item">
  <a class="nav-link" href="/dosen">
    <i class="fas fa-fw fa-table"></i>
    <span>Histori Data Perwalian</span></a>
</li>
@endif
@endif
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>

 <!-- Topbar Navbar -->
 <ul class="navbar-nav ml-auto">


  <!-- Nav Item - User Information -->
  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      @if ( Str::length(Auth::guard('dosen')->user()) > 0)
      <span class="mr-2 d-none d-lg-inline text-gray-600 medium">{{ Auth::guard('dosen')->user()->nama }}</span>
      @elseif ( Str::length(Auth::guard('user')->user()) > 0)
      <span class="mr-2 d-none d-lg-inline text-gray-600 medium">{{ Auth::guard('user')->user()->name }}</span>
      @elseif ( Str::length(Auth::guard('mahasiswa')->user()) > 0)
      <span class="mr-2 d-none d-lg-inline text-gray-600 medium">{{ Auth::guard('mahasiswa')->user()->nama }}</span>
      @endif

    </a>

    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
      <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="dropdown-item"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Logout</button>
    </form>

    </div>
    <!-- Dropdown - User Information -->
  
  </li>

</ul>

</nav>
<!-- End of Topbar -->

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">@yield('header')</h1>
    </div>

    <!-- isi content -->

   @yield('isicontent')

  </div>
</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Mini Project 2022</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->


<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->