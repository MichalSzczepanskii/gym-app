<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                width: 100%;
                height: 100%;
            }
            body {
                font-family: 'Poppins', 'sans-serif';
            }
            #welcome {
                background: url({{asset('img/welcome1.jpg')}}) fixed no-repeat;
                background-size: 240%;
                background-position: 56% 0%;
            }
            #welcome h2 {

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
            }
        </style>
    </head>
    <body>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <nav class="bg-purple-600 flex items-center px-6 flex-col relative z-10">
        <div class="flex w-full justify-between min-h-20 py-5">
            <div class="flex items-center">
                <h2 class="text-white text-3xl font-bold">Good<span class="text-purple-300">lyfe</span></h2>
            </div>
            <div class="cursor-pointer" id="hamburger" onclick="toggleMenu()">
                <img src="{{asset('img/icon/menu.svg')}}" alt="menu"/>
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
    </div>
    <div id="welcome" class="background-text h-2/4 md:h-2/5 flex flex-col justify-center gap-y-9 items-center">
        <div class="text-center">
            <h2 class="font-bold text-white text-5xl md:text-6xl">Welcome to<br/> Goodlyfe Gyms</h2>
        </div>
        <a href="#">
            <span class="bg-purple-600 text-white px-8 py-4 rounded-full text-lg md:text-xl">See the benefits</span>
        </a>
    </div>
    <div class="my-7">
        <div>
            <img src="{{asset('img/welcome2.jpg')}}" class="m-auto w-4/5 md:w-3/5" alt="workout">
        </div>
        <div class="px-8 md:flex md:flex-col md:items-center">
            <h2 class="font-bold text-purple-600 text-5xl text-center my-5">Meet your new body</h2>
            <p class="text-justify leading-loose text-lg md:w-3/4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget lectus urna. Nulla magna tortor, bibendum in molestie sed, gravida nec felis. Sed id egestasegestas risus, ut imperdiet augue.
            </p>
            <a href="#" class="w-full block py-4 text-purple-600 border-2 border-purple-600 rounded-full text-center font-bold mt-5 md:w-2/4">
                View the FAQ
            </a>
        </div>
    </div>
    <div id="motivation" class="my-7 background-text h-3/5 md:h-2/4 flex flex-col justify-center items-center px-8">
        <div class="text-center md:flex md:flex-col items-center">
            <h2 class="font-bold text-white text-5xl md:w-3/4">Become more than you are</h2>
            <p class="text-white text-lg leading-loose font-medium md:w-3/4">Staying active is great fun and keeps you healthy.  Check out how you can join in.</p>
        </div>
        <a href="#" class="w-full block py-4 text-white bg-purple-600 rounded-full text-center font-medium mt-5 md:w-2/4">
            Let's play
        </a>
    </div>
    <div class="my-7">
        <div>
            <img src="{{asset('img/welcome4.jpg')}}" class="m-auto w-4/5 md:w-3/5" alt="workout">
        </div>
        <div class="px-8 md:flex md:flex-col md:items-center">
            <h2 class="font-bold text-purple-600 text-5xl text-center my-5">Premium Facilities</h2>
            <p class="text-justify leading-loose text-lg md:w-3/4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget lectus urna. Nulla magna tortor, bibendum in molestie sed, gravida nec felis. Sed id egestasegestas risus, ut imperdiet augue.
            </p>
            <a href="#" class="w-full block py-4 text-purple-600 border-2 border-purple-600 rounded-full text-center font-bold mt-5 md:w-2/4">
                Learn more
            </a>
        </div>
    </div>
    <div class="mt-20 px-8 pb-4 bg-gradient-to-t from-purple-200">
        <div>
            <h2 class="text-3xl font-semibold text-gray-700 text-center">Real Stories from<br/> Real Customers</h2>
            <p class="text-gray-700 text-center">Be inspired with these experiences.</p>
        </div>
        <div class="md:flex md:flex-wrap md:gap-x-5 md:justify-center">
            <div class="bg-white px-8 py-7 rounded-lg shadow-lg my-6 md:w-80 md:flex-shrink-0">
                <h2 class="text-purple-600 text-3xl font-semibold text-center">17kg lost!</h2>
                <div class="flex pt-4">
                    <p class="font-bold text-6xl text-purple-300 pr-2" style="font-family: Times New Roman, serif">&lsquo;&lsquo;</p>
                    <p class="text-justify py-5 leading-7 pr-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget lectus urna. Nulla magna tortor, bibendum in molestie sed, gravida nec felis. Sed id egestasegestas risu.</p>
                </div>
                <div class="flex justify-center items-center gap-x-4">
                    <img src="{{asset('img/person1.jpg')}}" class="w-14 h-14 rounded-full" alt="Person">
                    <span class="font-semibold text-gray-700">James John</span>
                </div>
            </div>
            <div class="bg-white px-8 py-7 rounded-lg shadow-lg my-6 md:w-80 md:flex-shrink-0">
                <h2 class="text-purple-600 text-3xl font-semibold text-center">8kg lost!</h2>
                <div class="flex pt-4">
                    <p class="font-bold text-6xl text-purple-300 pr-2" style="font-family: Times New Roman, serif">&lsquo;&lsquo;</p>
                    <p class="text-justify py-5 leading-7 pr-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget lectus urna. Nulla magna tortor, bibendum in molestie sed, gravida nec felis. Sed id egestasegestas risu.</p>
                </div>
                <div class="flex justify-center items-center gap-x-4">
                    <img src="{{asset('img/person2.jpg')}}" class="w-14 h-14 rounded-full" alt="Person">
                    <span class="font-semibold text-gray-700">Mary Patricia</span>
                </div>
            </div>
            <div class="bg-white px-8 py-7 rounded-lg shadow-lg my-6 md:w-80 md:flex-shrink-0">
                <h2 class="text-purple-600 text-3xl font-semibold text-center">43kg lost!</h2>
                <div class="flex pt-4">
                    <p class="font-bold text-6xl text-purple-300 pr-2" style="font-family: Times New Roman, serif">&lsquo;&lsquo;</p>
                    <p class="text-justify py-5 leading-7 pr-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget lectus urna. Nulla magna tortor, bibendum in molestie sed, gravida nec felis. Sed id egestasegestas risu.</p>
                </div>
                <div class="flex justify-center items-center gap-x-4">
                    <img src="{{asset('img/person3.jpg')}}" class="w-14 h-14 rounded-full" alt="Person">
                    <span class="font-semibold text-gray-700">Robert Micheal</span>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-200 py-10 text-center">
        <h2 class="font-bold text-purple-700 text-5xl pt-7">Social</h2>
        <div class="flex items-center justify-center gap-x-7 py-8">
            <a href="#">
                <span class="w-24 block h-24 rounded-full bg-white text-purple-700 flex justify-center">
                    <img src="{{asset('img/facebook.svg')}}" width="34%" alt="facebook" class="mainColorSVG">
                </span>
            </a>
            <a href="#">
                <span class="w-24 block h-24 rounded-full bg-white text-purple-700 flex justify-center">
                    <img src="{{asset('img/youtube.svg')}}" width="34%" alt="youtube" class="mainColorSVG">
                </span>
            </a>
            <a href="#">
                <span class="w-24 block h-24 rounded-full bg-white text-purple-700 flex justify-center">
                    <img src="{{asset('img/instagram.svg')}}" width="34%" alt="instagram" class="mainColorSVG">
                </span>
            </a>
        </div>
    </div>

    <footer class="bg-gray-900 pt-12 px-12 md:flex md:flex-wrap">
        <div class="my-5 md:w-2/4 md:px-5">
            <a href="#">
                <h2 class="font-bold text-white text-4xl">Good<span class="text-purple-700">lyfe</span></h2>
            </a>
            <p class="text-white leading-7 text-justify py-5">Lorem ipsum dolor amet, consectetur adipiscing elit. Eget
                nisl nunc quam ac sed turpis volutpat. Cursus sed massa non nisi, placerat.</p>
        </div>
        <div class="my-5 md:w-2/4 md:px-7">
            <h2 class="text-white text-2xl">Quick Links</h2>
            <ul class="my-6 list-none">
                <li class="text-white text-lg my-5 font-light"><a href="#">Classes</a></li>
                <li class="text-white text-lg my-5 font-light"><a href="#">Timetable</a></li>
                <li class="text-white text-lg my-5 font-light"><a href="#">Clubs</a></li>
                <li class="text-white text-lg my-5 font-light"><a href="#">Nutrition</a></li>
                <li class="text-white text-lg my-5 font-light"><a href="#">Free Trial</a></li>
            </ul>
        </div>
        <div class="text-white font-light text-center pt-5 pb-7 md:flex-shrink-0 md:w-full">
            <div>
                <a href="#">Terms & Conditions</a> |
                <a href="#">Privacy Policy</a> <span class="hidden md:inline">|</span>
                <a href="#">Sitemap</a> |
                <a href="#">Disclaimer</a>
            </div>
            <div class="mt-5">
                &copy; {{now()->year}} GoodLyfe. All Rights reserved
            </div>
        </div>
    </footer>
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
