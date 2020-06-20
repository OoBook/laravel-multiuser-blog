<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>@yield('title') - {{ $settings->title }}</title>

    <!-- Favicon  -->
    <!-- <link rel="icon" href="{{ asset('front/img/core-img/favicon.ico') }}"> -->
    <link rel="icon" href="{{ $settings->favicon }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('front/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/design.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /* Style all font awesome icons */
        #social-links .fa {
            padding: 10px;
            font-size: 15px;
            width: 35px !important;
            text-align: center;
            text-decoration: none;
            border-radius: 50%;
        }

            /* Add a hover effect if you want */
        #social-links .fa:hover {
            opacity: 0.7;
        }

            /* Set a specific color for each brand */

            /* Facebook */
        #social-links .fa-facebook {
            background: #3B5998;
            color: white;
        }

            /* Twitter */
        #social-links .fa-twitter {
            background: #55ACEE;
            color: white;
        }

        #social-links .fa-linkedin {
            background: #007bb5;
            color: white;
        }

        #social-links .fa-youtube {
            background: #bb0000;
            color: white;
        }

        #social-links .fa-instagram {
            background: #125688;
            color: white;
        }

        #social-links .fa-github {
            background: #111111;
            color: white;
        }
    </style>

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    {{-- {{ dd($categories) }} --}}

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <!-- <a class="navbar-brand" href="{{ route('front.home') }}"><img src="{{ asset('front/img/core-img/logo.png') }}" alt="Logo"></a> -->
                        @if ($settings->logo == null)
                            <a class="navbar-brand" href="{{ route('front.home') }}">{{$settings->title}}</a>

                        @else
                            <a class="navbar-brand" href="{{ route('front.home') }}"><img src="{{ $settings->logo }}" style="max-width: 40px;" alt="Logo"></a>

                        @endif

                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('front.home') }}">Anasayfa <span class="sr-only">(current)</span></a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategoriler</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @php
                                    @endphp
                                        @foreach ($categories as $category)
                                            <a class="dropdown-item" href="{{ route('front.category', [$category->slug]) }}">{{ $category->name }}</a>

                                        @endforeach
                                    </div>
                                </li>

                                @foreach ($pages as $page)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('front.page', [$page->slug]) }}">{{ $page->title }}</a>
                                    </li>
                                @endforeach
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="#">Gadgets</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lifestyle</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Video</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li> --}}
                            </ul>
                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="#">
                                    <input type="text" id="search" placeholder="Search something...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


