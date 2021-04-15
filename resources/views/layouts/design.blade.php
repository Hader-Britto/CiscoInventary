<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cisco Inventary</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('metadatos')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <script src="{{ asset('https://kit.fontawesome.com/68d9183b0a.js')}}" crossorigin="anonymous"></script>

    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon - Copy.png') }}">
   
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
   
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/educate-custon-icon.css') }}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/scrollbar/jquery.mCustomScrollbar.min.css') }}">

    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/data-table/bootstrap-table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/data-table/bootstrap-editable.css')}}">

    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu-vertical.css') }}">
   
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/modals.css') }}">
</head>

<!-- Pre loader -->
<body >
<div class="center-preloader" id="onload">
<div><img src="{{ asset('img/preloader.gif') }}"></div>
</div>



@include('layouts.header')



@include('layouts.slidebar')

@yield('content')

@include('layouts.footer')

<!-- jquery
		============================================ -->
        <script src="{{ asset ('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ asset('js/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/counterup/counterup-active.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset('js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('js/morrisjs/raphael-min.js') }}"></script>
    <script src="{{ asset('js/morrisjs/morris.js') }}"></script>
    <script src="{{ asset('js/morrisjs/morris-active.js') }}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <script src="{{ asset('js/sparkline/sparkline-active.js') }}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{ asset('js/calendar/moment.min.js') }}"></script>
    
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- tawk chat JS
    -->

    <script src="{{ asset('js/charts/Chart.js') }}"></script>
    <script src="{{ asset('js/charts/bar-chart.js') }}"></script>

    
     <!-- data table JS
		============================================ -->
    <script src="{{ asset('js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{ asset('js/data-table/tableExport.js')}}"></script>
    <script src="{{ asset('js/data-table/data-table-active.js')}}"></script>
    <script src="{{ asset('js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{ asset('js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{ asset('js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{ asset('js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{ asset('js/data-table/bootstrap-table-export.js')}}"></script>
    <!--  editable JS
		============================================ -->
    <script src="{{ asset('js/editable/jquery.mockjax.js')}}"></script>
    <script src="{{ asset('js/editable/mock-active.js')}}"></script>
    <script src="{{ asset('js/editable/select2.js')}}"></script>
    <script src="{{ asset('js/editable/moment.min.js')}}"></script>
    <script src="{{ asset('js/editable/bootstrap-datetimepicker.js')}}"></script>
    <script src="{{ asset('js/editable/bootstrap-editable.js')}}"></script>
    <script src="{{ asset('js/editable/xediable-active.js')}}"></script>
    <!-- Chart JS
		============================================ -->
    <script src="{{ asset('js/chart/jquery.peity.min.js')}}"></script>
    <script src="{{ asset('js/peity/peity-active.js')}}"></script>
    <!-- tab JS
		============================================ -->
    <script src="{{ asset('js/tab.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('js/main.js')}}"></script>
    <!-- tawk chat JS
		============================================ -->
    

</body>

</html>