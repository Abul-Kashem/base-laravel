<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta tags -->
  <base href="{{ asset('/') }}" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Wieldy - A fully responsive, HTML5 based admin template">
  <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- /meta tags -->
  <title>Wieldy - @yield('title')</title>

  <!-- Site favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- /site favicon -->


  <!-- Load Styles -->

  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/datatables.bundle.css">
  @stack('stylesheet')
  <!-- /load styles -->

</head>
<body class="dt-sidebar--fixed dt-header--fixed">

<!-- Loader -->
<div class="dt-loader-container">
  <div class="dt-loader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
    </svg>
  </div>
</div>
<!-- /loader -->

<!-- Root -->
<div class="dt-root">
  @include('includes.header')

  <!-- Site Main -->
  <main class="dt-main">
    <!-- Sidebar -->
   <x-sidebar />
    <!-- /sidebar -->

    <!-- Site Content Wrapper -->
    <div class="dt-content-wrapper">

      <!-- Site Content -->
    @yield('content')
      <!-- /site content -->

      <!-- Footer -->
    @include('includes.footer')
      <!-- /footer -->

    </div>
    <!-- /site content wrapper -->

    <!-- Theme Chooser -->
    <div class="dt-customizer-toggle">
      <a href="javascript:void(0)" data-toggle="customizer"> <i class="icon icon-spin icon-setting"></i> </a>
    </div>
    <!-- /theme chooser -->

    <!-- Customizer Sidebar -->
    <x-right-sidebar />
    <!-- /customizer sidebar -->

  </main>
</div>
<!-- /root -->

<!-- Optional JavaScript -->
<script src="js/app.js"></script>


<script src="js/perfect-scrollbar.min.js"></script>
<script src="js/datatables.bundle.js"></script>

<!-- /Optional JavaScript -->

<!-- masonry script -->

<script src="js/script.js"></script>
<script src="js/custom.js"></script>
{{-- <script src="js/charts/dashboard-crypto.js"></script> --}}
@stack('script')
</body>

</html>
