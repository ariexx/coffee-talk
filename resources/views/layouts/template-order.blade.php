<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Layout &rsaquo; Top Navigation &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
    <style>
        .btn-floating {
            z-index: 1;
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #0C9;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
        }
    </style>
</head>

<body class="layout-3">
<div id="app">
    <div class="main-wrapper container">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <a href="#" class="navbar-brand sidebar-gone-hide">Stisla</a>
            <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>

        </nav>

        <nav class="navbar navbar-secondary navbar-expand-lg">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i
                                class="fas fa-fire"></i><span>Dashboard</span></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="index-0.html" class="nav-link">General Dashboard</a></li>
                            <li class="nav-item"><a href="index.html" class="nav-link">Ecommerce Dashboard</a></li>
                        </ul>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link"><i class="far fa-heart"></i><span>Order</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i
                                class="far fa-clone"></i><span>Multiple Dropdown</span></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="#" class="nav-link">Not Dropdown Link</a></li>
                            <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Hover Me</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                                    <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Link 2</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                                            <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a href="#" class="nav-link">Link 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Menu</h1>
                </div>

                <div class="section-body">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-lg-4 col-xs-2">
                            <img src="https://source.unsplash.com/random/?Coffee&width=100&height=100/"
                                 class="card-img-top" alt="">
                            <div class="card card-light ">
                                <div class="card-header">
                                    <h4>V60 <span class="text-small text-muted">Rp.20.000</span></h4>
                                </div>
                                <div class="card-body">
                                    <p>Card <code>.card-primary</code></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-lg-4 col-xs-2">
                            <div class="card card-light">
                                <img src="https://source.unsplash.com/random/?Coffee&width=100&height=100/"
                                     class="card-img-top" alt="">
                                <div class="card-header">
                                    <h4>Sukocok</h4>
                                </div>
                                <div class="card-body">
                                    <p>Card <code>.card-primary</code></p>

                                    <button class="btn btn-light"><i class="fa fa-plus"></i></button>

                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-lg-4 col-xs-2">
                            <div class="card card-light">
                                <img src="https://source.unsplash.com/random/?Coffee&width=100&height=100/"
                                     class="card-img-top" alt="">
                                <div class="card-header">
                                    <h4>Caramel Susu</h4>
                                </div>
                                <div class="card-body">
                                    <p>Card <code>.card-primary</code></p>
                                    <button class="btn btn-light"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row">
                {{--                    //make 1 row and 3 column bootstrap--}}
                <div class="col-4 col-sm-4">
                    <div class="card card-light">
                        <div class="card-header">
                            <h4>Card Header</h4>
                        </div>
                        <div class="card-body">
                            <p>Card <code>.card-primary</code></p>

                            <button class="btn btn-light"><i class="fa fa-plus"></i></button>

                        </div>
                    </div>
                </div><div class="col-4 col-sm-4">
                    <div class="card card-light">
                        <div class="card-header">
                            <h4>Card Header</h4>
                        </div>
                        <div class="card-body">
                            <p>Card <code>.card-primary</code></p>

                            <button class="btn btn-light"><i class="fa fa-plus"></i></button>

                        </div>
                    </div>
                </div><div class="col-4 col-sm-4">
                    <div class="card card-light">
                        <div class="card-header">
                            <h4>Card Header</h4>
                        </div>
                        <div class="card-body">
                            <p>Card <code>.card-primary</code></p>

                            <button class="btn btn-light"><i class="fa fa-plus"></i></button>

                        </div>
                    </div>
                </div>
                <button class="btn-floating"><i class="fa fa-shopping-cart"></i></button>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018
                    <div class="bullet"></div>
                    Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{asset('assets/modules/jquery.min.js')}}"></script>
    <script src="{{asset('assets/modules/popper.js')}}"></script>
    <script src="{{asset('assets/modules/tooltip.js')}}"></script>
    <script src="{{asset('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('assets/modules/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
