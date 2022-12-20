<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fadila Ménage</title>
  <link rel="icon" type="image/png" href="/Original.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">

  @notifyCss

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <style>
    #footer {
      /*position: relative;*/
      bottom:0;  /* on le colle en bas */
      width:100%;
      height:50px;   /* Hauteur du pied de page */
    }
  </style>
  
</head>
<body id="#" class="hold-transition sidebar-mini layout-fixed">
  <section class="content-header">
    <div class="container-fluid" style="">
      <div class="row mb-2" style="background: #ffffff">
        <div class="col-sm-6">
          <h1>
            <a href="{{route('accueil')}}">
              <img src="/Original_on_Transparent.png" alt="Fadila Ménage" style="width: 200px; height: 50px;">
            </a>
          </h1>
        </div>
        <div class="col-sm-6" style="padding-top: 20px">
          <ol class="breadcrumb float-sm-right">
            <!--li class="breadcrumb-item"><a href="{{route('accueil')}}">Accueil</a></li-->
            <li class="breadcrumb-item active">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="">
      <x:notify-messages />
      @notifyJs
      @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="" id="footer" style="background: #ffffff">
      <div class="">
        <div class="row">
          <div>
            <strong class="col-8">Copyright &copy; 2017-2022 <a href="{{route('accueil')}}">fadilamenage.com</a>. Tout droit reservé.</strong>
          </div>
          <div class="col-6" style="padding-left: 97%;">
            <strong>1.0</strong>
          </div>
        </div>
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->

  <!--script src="{{ asset('dist/js/demo.js') }}"></script-->

  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
