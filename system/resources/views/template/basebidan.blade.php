<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Proyek 2 Web</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ url('public') }}/assets/img/brand/logo_janin.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ url('public') }}/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="{{ url('public') }}/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ url('public') }}/assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
@include('template.section.sidebarbidan')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
   @include('template.section.headerbidan')
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
         <div class="container">
           <div class="row">
             <div class="col-md-12">
               @include('template.utils.notif')
             </div>
           </div>
         </div>
          @yield('content')
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
            <!-- Footer -->
     @include('template.section.footer')
    </div>
  
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ url('public') }}/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="{{ url('public') }}/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ url('public') }}/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="{{ url('public') }}/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="{{ url('public') }}/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="{{ url('public') }}/assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="{{ url('public') }}/assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="{{ url('public') }}/assets/js/argon.js?v=1.2.0"></script>
</body>

</html>