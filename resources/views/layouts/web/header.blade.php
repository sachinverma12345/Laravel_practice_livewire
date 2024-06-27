<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('page-title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('public/web/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/web/css/responsive.css') }}">
    <link rel="icon" href="{{ asset('public/web/images/fevicon.png') }}" type="image/gif" />
    <link rel="stylesheet" href="{{ asset('public/web/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
</head>
<!-- body -->
@livewireStyles
<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('public/web/images/loading.gif') }}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="{{ route('home.index') }}"><img src="{{ asset('public/web/images/logo1.jpeg') }}"
                                            style="height:71px" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('home.index') }}">Home</a>
                                    </li>
                                    <li class="nav-item {{ (request()->is('about-us')) ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('home.about') }}">About Us</a>
                                    </li>
                                    <li class="nav-item {{ (request()->is('our-room')) ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('home.room') }}">Our room</a>
                                    </li>
                                    <li class="nav-item {{ (request()->is('gallery')) ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('home.gallery') }}">Gallery</a>
                                    </li>
                                    <li class="nav-item {{ (request()->is('our-services')) ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('home.services') }}">Our Services</a>
                                    </li>
                                    <li class="nav-item {{ (request()->is('contact-us')) ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('home.contact') }}">Contact Us</a>
                                    </li>
                                    @auth
                                        <li class="nav-item dropdown header-profile">
                                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                                <i class="fa fa-user"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">
                                                    <i class=" fa fa-user"></i>
                                                    <span class="ml-2">Profile </span>
                                                </a>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <x-dropdown-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                        <span><i class="fa fa-key"></i>
                                                            {{ __('Log Out') }}</span>
                                                    </x-dropdown-link>
                                                </form>
                                            </div>
                                        </li>
                                    @else
                                        <li class="nav-item {{ (request()->is('login')) ? 'active' : '' }}">
                                            <a class="nav-link" href="{{ route('login') }}">login</a>
                                        </li>
                                        <li class="nav-item {{ (request()->is('register')) ? 'active' : '' }}">
                                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                                        </li>
                                    @endauth
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header inner -->
