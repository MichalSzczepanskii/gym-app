<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontello.css') }}" rel="stylesheet">
    <style>
        html, body {
            width: 100%;
            height: 100%;
        }
        body {
            font-family: 'Poppins', 'sans-serif';
        }
    </style>
</head>
<body class="bg-gray-100">
<div class="flex h-full">
    <div class="bg-purple-700 w-64 h-full text-white">
        <div class="flex items-center justify-center h-16 border-b-2 border-purple-900 bg-purple-800">
            <a href="{{route('welcome')}}">
                <h2 class="text-white text-3xl font-bold">Good<span class="text-purple-300">lyfe</span></h2>
            </a>
        </div>
        <ul class="mt-1.5 py-4 px-2.5">
            <li class="py-2.5 px-2 hover:bg-purple-800 rounded"><a href="#"><i class="icon-home text-xl mr-2.5"></i>Dashboard</a></li>
            <li class="py-2.5 px-2 hover:bg-purple-800 rounded"><a href="#"><i class="icon-id-card-o text-lg mr-3"></i>Carnets</a></li>
            <li class="py-2.5 px-2 hover:bg-purple-800 rounded"><a href="#"><i class="icon-briefcase text-lg mr-3"></i>Contracts</a></li>
            <li class="py-2.5 px-2 hover:bg-purple-800 rounded"><a href="#"><i class="icon-users text-lg mr-3"></i>Clients</a></li>
        </ul>
    </div>
    <div class="w-full flex flex-col h-screen">
        <div class="bg-white w-full h-16 flex justify-end items-center px-10 py-2 shadow-md">
            <img src="{{asset('img/person1.jpg')}}" class="w-12 h-12 px-1 py-1 rounded-full border-2 border-purple-700 cursor-pointer" alt="Person">
        </div>
        <div class="px-8 pb-6 flex flex-col h-screen">
            <h2 class="text-2xl font-semibold py-6">{{ $title }}</h2>
            <div class="bg-white h-full rounded-md shadow p-8">
                &nbsp;
                @yield('content')
            </div>
        </div>
    </div>
</div>
<script>
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuItems = document.querySelectorAll('#mobileMenu > ul > li');
    console.log(menuItems);
    menuItems.forEach((item) => {
        item.addEventListener('click', toggleMenu)
    })

    function toggleMenu() {
        if(mobileMenu.classList.contains('hideMenu')) {
            mobileMenu.classList.remove('hideMenu');
            hamburger.querySelector('img').src = '{{asset('img/icon/close.svg')}}';
        }else {
            mobileMenu.classList.add('hideMenu');
            hamburger.querySelector('img').src = '{{asset('img/icon/menu.svg')}}';
        }
    }
    document.addEventListener('click', (e) => {
        console.log(e.target.id);
    })
</script>
</body>
</html>
