<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name')}} - Order</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
    @livewireStyles
    @livewireScripts

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>

    <x-livewire-alert::scripts />
</head>

<body class="layout-3">
<x-livewire-alert::flash />
<div id="app">
    <div class="main-wrapper container">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <a href="#" class="navbar-brand sidebar-gone-hide">{{config('app.name')}}</a>
            <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>

        </nav>

        <nav class="navbar navbar-secondary navbar-expand-lg">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="{{route('order')}}" class="nav-link"><i
                                class="fas fa-fire"></i><span>Dashboard</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{route('news.index')}}" class="nav-link"><i
                                class="fas fa-newspaper"></i><span>Berita</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{route('confirmation')}}" class="nav-link"><i
                                class="fas fa-check"></i><span>Konfirmasi Order</span></a>
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
                    <livewire:order-detail/>
                <hr/>
                <div class="section-body">
                    <livewire:order-page/>
                </div>
            </section>
        </div>
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
{{--@livewireScripts--}}
</body>
</html>
