<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','EV Power')</title>

  
	 <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/ui/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
	
    <link href="{{asset('assets/ui/css/bootstrap.min.css')}}" rel="stylesheet">	

 <link href="{{asset('assets/ui/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	    <!-- Icon Font Stylesheet -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" />

	<link href="{{asset('assets/ui/lib/animate/animate.min.css" rel="stylesheet')}}">
	
    <!-- Template Stylesheet -->
    <link href="{{asset('assets/ui/css/style.css')}}" rel="stylesheet">

  <body>

 <!-- preloader-start -->
    <div id="preloader">
        <div class="rasalina-spin-box"></div>
    </div>
    <!-- preloader-end --> 
	
	@include('includes.header')

	@yield('content')

	@include('includes.footer')


	<!-- Scroll-top -->
    <button class="scroll-top scroll-to-target " data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
	
	
	
	 <script src="{{asset('assets/ui/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	 
	  <script src="{{asset('assets/ui/bootstrap/js/jquery-3.7.1.min.js')}}"></script>
	
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>-->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- JavaScript Libraries -->
    <script src="{{asset('assets/ui/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/ui/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/ui/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/ui/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/ui/lib/counterup/counterup.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
    <!-- Template Javascript -->
    
   
     <script src="{{asset('assets/ui/js/utils.js')}}"></script>
	{{-- Google Font Link --}}
    <script src="{{asset('assets/ui/js/main.js')}}"></script>
	{{-- Google Font Link --}}
	 <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   
	
  </body>
