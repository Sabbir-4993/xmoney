<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend/assets/images/favicon.ico') }}" type="image/x-icon">

    <title>Paylo - Send Money, Pay Online Worldwide HTML Template</title>

    <!-- Bootstrap -->
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('frontend/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/jquery-ui.css') }}" rel="stylesheet">


    <link href="{{ asset('frontend/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/themify-icons.css') }}" rel="stylesheet">


    <!-- Main css -->
    <link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
    <![endif]-->

</head>
<body>

<!-- Preloader -->
<div class="preloader">
    <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
</div><!--/Preloader -->

<!--Header Area-->
<header class="header-area blue-bg-2">
    <nav class="navbar navbar-expand-lg main-menu">
        <div class="container-fluid">

            <a class="navbar-brand" href="index.html"><img src="{{ asset('frontend/assets/images/logo-2.png') }}" class="d-inline-block align-top" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-toggle"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/how-it-works')}}">How it works</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/about')}}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/blog')}}">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact</a></li>
                </ul>
                <div class="header-btn justify-content-end">
                    <a href="{{route('login')}}" class="bttn-small btn-fill">Login</a>
                </div>
                <br>
                <div class="header-btn justify-content-end">
                    <a href="{{route('register')}}" class="bttn-small btn-fill">Register</a>
                </div>
            </div>
        </div>
    </nav>
</header><!--/Header Area-->
