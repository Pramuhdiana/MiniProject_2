<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MP 2 - @yield('title')</title>
  <!-- Custom fonts for this template-->
  <link href="{{asset('template')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset('template')}}/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
 
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- side bar, folder side->sidebar -->
    @include('side.sidebar')
    <!-- End of Page Wrapper -->
  </div>


      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('template')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('template')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('template')}}/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="{{asset('template')}}/vendor/datatables/jquery.dataTables.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('template')}}/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="{{asset('template')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  
  
  {{-- js untuk menampilkan search dan pagination data --}}
  
  <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="{{asset('template')}}/js/demo/datatables-demo.js"></script>
  
</body>

</html>
