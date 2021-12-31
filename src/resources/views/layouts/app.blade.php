<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>
    <script>
        window.config = {
            locale: "{{ config('app.locale') }}"
        }
    </script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontello.css') }}" rel="stylesheet">
    <link href="{{ asset('css/free.min.css') }}" rel="stylesheet"> <!-- icons -->
    <link href="{{ asset('css/flag.min.css') }}" rel="stylesheet"> <!-- icons -->
    <style>
        @media (min-width: 1024px) {
            #menu {
                position: static;
                transform: translateX(0%);
                transition: width 0.5s, visibility 0s;
            }
            #menu .hideText {
                width: auto;
                transition: width 5s;
                display: none;
            }
            .hide {
                transition: transform 0.4s;
                transform: rotate(180deg);
            }
            /*#menu  ul li i {*/
            /*    margin-right: 0.75rem;*/
            /*}*/
            /*#menu ul li a{*/
            /*    padding-left: 1.6rem;*/
            /*    padding-right: 1.6rem;*/
            /*}*/
            .shorten {
                width: 5.3rem;
            }
            .shorten ul {
                text-align: center;
            }
            .shorten #hideContainer {
                justify-content: center;
            }
            .shorten .hide {
                transform: rotate(0);
            }
        }
    </style>
    @yield('style')
</head>
<body class="bg-gray-100 relative">
<div class="flex min-h-screen">
    <x-dashboard.sidebar/>
    <div class="w-full flex flex-col min-h-screen">
        <div class="bg-white w-full h-16 flex justify-between items-center px-4 py-2 shadow-md lg:justify-end lg:px-10">
            <i class="icon-menu text-2xl cursor-pointer lg:hidden text-gray-600" id="hamburger" onclick="toggleMenu()"></i>
            <img src="{{asset('img/person1.jpg')}}" class="w-12 h-12 p-0.5 rounded-full border border-purple-700 cursor-pointer" alt="Person" id="userAvatar">
            <x-dashboard.usercard/>
        </div>
        <div class="px-5 flex flex-col lg:px-8 h-full lg:pt-2 pb-5">
                @yield('content')
        </div>
    </div>
</div>
@include('layouts.toasts')
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/dashboard.js')}}"></script>
<script src="{{asset('js/manifest.js')}}"></script>
<script src="{{asset('js/vendor.js')}}"></script>
    @yield('scripts')
</body>
</html>
