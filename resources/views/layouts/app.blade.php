<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('build/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/vendor/fonts/circular-std/style.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/vendor/vector-map/jqvmap.css')}}">
        <link rel="stylesheet" href="{{asset('buid/assets/vendor/jvectormap/jquery-jvectormap-2.0.2.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/vendor/charts/chartist-bundle/chartist.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/vendor/charts/c3charts/c3.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/vendor/charts/morris-bundle/morris.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/vendor/daterangepicker/daterangepicker.css')}}">
        
        {{-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"> --}}


        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js',]) --}}
    </head>
    <body class="font-sans antialiased">
        @include('layouts.menu')
        @include('layouts.leftMenu')
        <div class="min-h-screen bg-gray-100">
            {{-- @include('layouts.navigation') --}}

            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
             <main>
                {{ $slot }}
            </main> 
        </div>
        <!-- jquery 3.3.1  -->
    <script src="{{asset('build/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{asset('build/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{asset('build/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- chart chartist js -->
    <script src="{{asset('build/assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
    <script src="{{asset('build/assets/vendor/charts/chartist-bundle/Chartistjs.js')}}"></script>
    <script src="{{asset('build/assets/vendor/charts/chartist-bundle/chartist-plugin-threshold.js')}}"></script>
    <!-- chart C3 js -->
    <script src="{{asset('build/assets/vendor/charts/c3charts/c3.min.js')}}"></script>
    <script src="{{asset('build/assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
    <!-- chartjs js -->
    <script src="{{asset('build/assets/vendor/charts/charts-bundle/Chart.bundle.js')}}"></script>
    <script src="{{asset('build/assets/vendor/charts/charts-bundle/chartjs.js')}}"></script>
    <!-- sparkline js -->
    <script src="{{asset('build/assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
    <!-- dashboard finance js -->
    <script src="{{asset('build/assets/js/dashboard-finance.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('build/assets/js/main-js.js')}}"></script>
    <!-- gauge js -->
    <script src="{{asset('buid/assets/vendor/gauge/gauge.min.js')}}"></script>
    <!-- morris js -->
    <script src="{{asset('buid/assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
    <script src="{{asset('buid/assets/vendor/charts/morris-bundle/morris.js')}}"></script>
    <script src="{{asset('buid/assets/vendor/charts/morris-bundle/morrisjs.html')}}"></script>
    <!-- daterangepicker js -->
    <script src="../../../../cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="../../../../cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    });
    </script>       
    </body>
</html>
