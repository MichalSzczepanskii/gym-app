<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/free.min.css') }}" rel="stylesheet"> <!-- icons -->
    <link href="{{ asset('css/flag.min.css') }}" rel="stylesheet"> <!-- icons -->
    <style>
        html, body {
            width: 100%;
            height: 100%;
        }
        body {
            font-family: 'Poppins', 'sans-serif';
            overflow-x: hidden;
        }
        #welcome {
            background: url({{asset('img/welcome1.jpg')}}) fixed no-repeat;
            background-size: 240%;
            background-position: 56% 0%;
        }
        #motivation {
            background: url({{asset('img/welcome3.jpg')}}) no-repeat;
            background-size: 120%;
            background-position: 40% 120%;
        }
        .background-text h2, .background-text p{
            text-shadow: black 0 0 15px;
        }
        .mainColorSVG{
            filter: invert(17%) sepia(70%) saturate(3468%) hue-rotate(257deg) brightness(105%) contrast(103%);
        }
        #mobileMenu {
            transition: transform 0.2s;
        }
        .hideMenu {
            transform: translateY(-100%);
        }
        @media (min-width: 768px) {
            #motivation {
                background-size: 110%;
                background-position: 40% 65%;
            }
            #welcome {
                background-size: 120%;
                background-position: 56% 0%;
            }
        }
        @media (min-width: 1024px) {
            #welcome {
                background-size: cover;
                background-position: 56% 0%;
            }
            #motivation {
                background-size: cover;
                background-position: 0 60%;
            }
        }
    </style>
</head>
<body>
<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-purple-600 flex items-center px-6 flex-col relative z-10 lg:px-20">
    <div class="flex w-full justify-between py-3">
        <div class="flex items-center">
            <a href="{{route('welcome')}}">
                <h2 class="text-white text-3xl font-bold lg:text-4xl">Good<span class="text-purple-300">lyfe</span></h2>
            </a>
        </div>
        <div class="cursor-pointer lg:hidden" id="hamburger" onclick="toggleMenu()">
            <img src="{{asset('img/icon/menu.svg')}}" alt="menu"/>
        </div>
        <div class="hidden lg:flex w-full justify-center">
            <ul class="text-white text-center min-w-min w-5/12 flex">
                <li class="p-3 text-lg min-w-max w-1/5 hover:bg-purple-800 rounded-3xl"><a href="#" class="px-5">Classes</a></li>
                <li class="p-3 text-lg min-w-max w-1/5 hover:bg-purple-800 rounded-3xl"><a href="#" class="px-5">Timetable</a></li>
                <li class="p-3 text-lg min-w-max w-1/5 hover:bg-purple-800 rounded-3xl"><a href="#" class="px-5">Clubs</a></li>
                <li class="p-3 text-lg min-w-max w-1/5 hover:bg-purple-800 rounded-3xl"><a href="#" class="px-5">Nutrition</a></li>
                <li class="p-3 text-lg min-w-max w-1/5 hover:bg-purple-800 rounded-3xl"><a href="#" class="px-5">Free Trial</a></li>
            </ul>
        </div>
        <div class="hidden lg:flex justify-center items-center ">
            <a href="{{route('login')}}" class="py-2 px-12 bg-white text-purple-700 rounded-full hover:bg-gray-200 hover:border-4 hover:border-purple-500 border-transparent border-2 hover:border-current">Login</a>
        </div>
    </div>
</nav>
<div class="w-full px-8 bg-purple-800 absolute hideMenu" id="mobileMenu">
    <ul class="text-white">
        <li class="py-3 text-lg w-32"><a href="#" class="w-full h-full block">Classes</a></li>
        <li class="py-3 text-lg w-32"><a href="#" class="w-full h-full block">Timetable</a></li>
        <li class="py-3 text-lg w-32"><a href="#" class="w-full h-full block">Clubs</a></li>
        <li class="py-3 text-lg w-32"><a href="#" class="w-full h-full block">Nutrition</a></li>
        <li class="py-3 text-lg w-32"><a href="#" class="w-full h-full block">Free Trial</a></li>
    </ul>
    <div class="py-5 pb-8 w-full flex justify-center">
        <a href="{{route('login')}}" class="py-2 px-14 bg-white text-purple-700 rounded-full hover:bg-gray-200 hover:border-4 hover:border-purple-500 border-transparent border-2 hover:border-current">Login</a>
    </div>
</div>

@yield('content')

<footer class="bg-gray-900 pt-12 px-12 md:flex md:flex-wrap lg:px-32 lg:justify-between">
    <div class="my-5 md:w-2/4 md:px-5 lg:w-1/4">
        <a href="{{route('welcome')}}">
            <h2 class="font-bold text-white text-4xl">Good<span class="text-purple-700">lyfe</span></h2>
        </a>
        <p class="text-white leading-7 text-justify py-5">Lorem ipsum dolor amet, consectetur adipiscing elit. Eget
            nisl nunc quam ac sed turpis volutpat. Cursus sed massa non nisi, placerat.</p>
    </div>
    <div class="my-7 md:w-2/4 md:px-7 lg:w-1/4">
        <h2 class="text-white text-2xl">Quick Links</h2>
        <ul class="my-6 list-none">
            <li class="text-white text-lg my-5 font-light hover:text-purple-400"><a href="#">Classes</a></li>
            <li class="text-white text-lg my-5 font-light hover:text-purple-400"><a href="#">Timetable</a></li>
            <li class="text-white text-lg my-5 font-light hover:text-purple-400"><a href="#">Clubs</a></li>
            <li class="text-white text-lg my-5 font-light hover:text-purple-400"><a href="#">Nutrition</a></li>
            <li class="text-white text-lg my-5 font-light hover:text-purple-400"><a href="#">Free Trial</a></li>
        </ul>
    </div>
    <div class="my-16 md:w-2/4 md:px-7 lg:w-1/4">
        <h2 class="text-white text-2xl">Reach us</h2>
        <ul class="my-6 list-none">
            <li class="text-white text-lg my-5 font-light hover:text-purple-400"><a href="#"><img src="{{asset('img/icon/email.svg')}}" class="w-7 mainColorSVG float-left mr-4" alt="email"><span class="leading-6">admin@goodlyfe.com</span></a></li>
            <li class="text-white text-lg my-5 font-light hover:text-purple-400"><a href="#"><img src="{{asset('img/icon/phone.svg')}}" class="w-7 mainColorSVG float-left mr-4" alt="email"><span class="leading-6">+88 98765 43210</span></a></li>
            <li class="text-white text-lg my-5 font-light hover:text-purple-400"><a href="#"><img src="{{asset('img/icon/location.svg')}}" class="w-7 mainColorSVG float-left mr-4" alt="email"><span class="leading-6">90210 Beverly Hills California USA</span></a></li>
        </ul>
    </div>
    <div class="text-white font-light text-center pt-5 pb-7 md:flex-shrink-0 md:w-full lg:flex lg:flex-row-reverse lg:justify-between">
        <div>
            <a href="#" class="hover:text-purple-400">Terms & Conditions</a> <span class="md:px-1.5">|</span>
            <a href="#" class="hover:text-purple-400">Privacy Policy</a> <span class="hidden md:inline md:px-1.5">|</span>
            <a href="#" class="hover:text-purple-400">Sitemap</a> <span class="md:px-1.5">|</span>
            <a href="#" class="hover:text-purple-400">Disclaimer</a>
        </div>
        <div class="mt-5 lg:mt-0">
            &copy; {{now()->year}} GoodLyfe. All Rights reserved
        </div>
    </div>
</footer>
<script>
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuItems = document.querySelectorAll('#mobileMenu > ul > li');
    menuItems.forEach((item) => {
        item.addEventListener('click', toggleMenu)
    })

    hamburger.addEventListener('click', (e) => {
        e.stopPropagation();
    })
    mobileMenu.addEventListener('click', (e) => {
        e.stopPropagation();
    })
    window.addEventListener('click', () => {
        if(!mobileMenu.classList.contains('hideMenu')) {
            mobileMenu.classList.add('hideMenu');
            hamburger.querySelector('img').src = '{{asset('img/icon/menu.svg')}}';
        }
    });

    function toggleMenu() {
        if(mobileMenu.classList.contains('hideMenu')) {
            mobileMenu.classList.remove('hideMenu');
            hamburger.querySelector('img').src = '{{asset('img/icon/close.svg')}}';
        }else {
            mobileMenu.classList.add('hideMenu');
            hamburger.querySelector('img').src = '{{asset('img/icon/menu.svg')}}';
        }
    }
</script>
<script src="{{ asset('js/guest.js') }}" defer></script>
</body>
</html>
