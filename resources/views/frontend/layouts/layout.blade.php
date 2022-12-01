<?php

$setting = App\Setting::first();
$properties = App\Property::all();

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="glimmer is a modern presentation HTML5 Blog template.">
    <meta name="keywords" content="HTML5, Template, Design, Development, Blog" />
    <meta name="author" content="">

    <!-- Titles
    ================================================== -->
    <title>{{$setting->title}}</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/house-logo.png')}}">
    <link rel="apple-touch-icon" href="{{asset('frontend/assets/images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend/assets/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend/assets/images/apple-touch-icon-114x114.png')}}">

    <!-- Custom Font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i%7cPoppins:300,400,500,600,700" rel="stylesheet">   
    
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/colors.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <!-- Modernizr
    ================================================== -->
    <script src="{{asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    {{-- header area --}}
     @include('frontend.inc.header')
   {{-- end header --}}
   @yield('content')

    <!-- ====== Footer Area ====== --> 
    @include('frontend.inc.footer')
    <!-- /.footer-area -->

    <!-- All The JS Files
    ================================================== --> 
    <script src="{{asset('frontend/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>