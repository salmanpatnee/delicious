<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Delicious - Food Blog Template | Home</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <style>
        .flash {
            bottom: 10px;
            right: 10px;
            z-index: 99;
        }

        #logout-form button {
            border: none;
            cursor: pointer;
            background: none;
        }

        .classy-nav-container a.active {
            color: #1abc9c;
        }

        .nice-select {
            height: 50px;
            line-height: 30px;
        }

    </style>
    @yield('styles')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <i class="circle-preloader"></i>
        <img src="{{ asset('img/core-img/salad.png') }}" alt="">
    </div>

    <!-- Search Wrapper -->
    <div class="search-wrapper">
        <!-- Close Btn -->
        <div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="/search">
                        <input type="search" name="q" placeholder="Type any keywords...">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="delicious-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="deliciousNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="/"><img src="{{ asset('img/core-img/logo.png') }}" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            @include('partials.nav')
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
