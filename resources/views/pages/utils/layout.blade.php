<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8" />
    <title>LG - AVOCATS</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Justica - Lawyer and Attorney Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/owl.transitions.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/jquery.countdown.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="{{ asset('assets/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/coloring.css') }}" rel="stylesheet" type="text/css" />
    <!-- RS5.0 Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/revolution/css/settings.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/revolution/css/layers.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/revolution/css/navigation.css') }}" type="text/css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

<div id="wrapper">
        <!-- header begin -->
		@include('pages.utils.header') 
        <!-- header close -->

			<!-- Page content -->
			@yield('content')
			<!-- content close -->

        <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
      	@include('pages.utils.footer')
        <!-- footer close -->

        <div id="preloader">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
 
   
   @include('pages.utils.script')
</body>


</html>
