<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>INDOTRAVI</title>
  
    <!-- General CSS Files -->
    <link rel="stylesheet" href={{asset('/assets/modules/bootstrap/css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('/assets/modules/fontawesome/css/all.min.css')}}>
  
    <!-- CSS Libraries -->
    <link rel="stylesheet" href={{asset('/assets/modules/jqvmap/dist/jqvmap.min.css')}}>
    <link rel="stylesheet" href={{asset('/assets/modules/summernote/summernote-bs4.css')}}>
    <link rel="stylesheet" href={{asset('/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}>
    <link rel="stylesheet" href={{asset('/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}>
    {{-- <link rel="stylesheet" href="{{ asset('assets/modules/datatables/datatables.min.css')}}"> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/modules/izitoast/css/iziToast.min.css')}}">
  
    <!-- Template CSS -->
    <link rel="stylesheet" href={{asset('/assets/css/style.css')}}>
    <link rel="stylesheet" href={{asset('/assets/css/components.css')}}>

</head>
<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
     @include('admin-page.layouts.navbar')
      
      @include('admin-page.layouts.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          @yield('content')
        </section>
          @yield('modal')
      </div>
     @include('admin-page.layouts.footer')
    </div>
  </div>
  
  
 <!-- General JS Scripts -->
 <script src={{asset('assets/modules/jquery.min.js')}}></script>
 <script src={{asset('assets/modules/popper.js')}}></script>
 <script src={{asset('assets/modules/tooltip.js')}}></script>
 <script src={{asset('assets/modules/bootstrap/js/bootstrap.min.js')}}></script>
 <script src={{asset('assets/modules/nicescroll/jquery.nicescroll.min.js')}}></script>
 <script src={{asset('assets/modules/moment.min.js')}}></script>
 <script src={{asset('assets/js/stisla.js')}}></script>
 
 <!-- JS Libraies -->
 <script src={{asset('assets/modules/jquery.sparkline.min.js')}}></script>
 <script src={{asset('assets/modules/chart.min.js')}}></script>
 <script src={{asset('assets/modules/owlcarousel2/dist/owl.carousel.min.js')}}></script>
 <script src={{asset('assets/modules/summernote/summernote-bs4.js')}}></script>
 <script src={{asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}></script>
 {{-- <script src="{{ asset('assets/modules/datatables/datatables.min.js')}}"></script> --}}
 <script src="{{ asset('assets/modules/izitoast/js/iziToast.min.js')}}"></script>

 <!-- Page Specific JS File -->
 <script src={{asset('assets/js/page/index.js')}}></script>
 <script src="{{ asset('assets/js/page/modules-toastr.js')}}"></script>
 
 <!-- Template JS File -->
 <script src={{asset('assets/js/scripts.js')}}></script>
 <script src={{asset('assets/js/custom.js')}}></script>
   
 @if (Session::has('success'))
      <script>
          iziToast.success({
            title: 'SUCCESS',
            message: "{{Session::get('success')}}",
            position: 'topRight'
          });
      </script>
    @endif
   @if (Session::has('error'))
      <script>
          iziToast.error({
            title: 'UPSSS',
            message: "{{Session::get('error')}}",
            position: 'topRight'
          });
      </script>
    @endif

</body>
</html>