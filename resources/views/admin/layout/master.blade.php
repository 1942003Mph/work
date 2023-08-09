<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title', 'لوحة التحكم')</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('adminassets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminassets/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{asset('adminassets/fonts/SansPro/SansPro.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminassets/css/bootstrap_rtl-v4.2.1/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminassets/css/bootstrap_rtl-v4.2.1/custom_rtl.css')}}">
  <link rel="stylesheet" href="{{asset('adminassets/css/mycustomstyle.css')}}">
  
  @yield('styles')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

 
  @include('admin.layout.nav')


  @include('admin.layout.sidbar')
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: calc(100vh - calc(-0.5rem + 1px) - calc(3.5rem + 1px));">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">لوحة التحكم</h1>
          </div>
        </div><!-- /.row -->
      </div>
      <section class="content">
        <div class="container-fluid">
          @yield('content')
        </div>
        <!-- /.container-fluid -->
      </section><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </div>
  <!-- /.content-wrapper -->

 <!-- Main content -->
 
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('admin.layout.footer')

  <!-- Main Footer -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('adminassets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminassets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminassets/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
