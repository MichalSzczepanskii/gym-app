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
                text-shadow: black 0px 0px 15px;
            }
        </style>
    </head>
    <body>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <nav class="bg-purple-600 h-20 flex items-center px-6">
        <div class="flex w-full justify-between">
            <div class="flex items-center">
                <h2 class="text-white text-3xl font-bold">Good<span class="text-purple-300">lyfe</span></h2>
            </div>
            <div class="cursor-pointer">
                <img src="{{asset('img/icon/menu.svg')}}" alt="menu" />
            </div>
{{--            <div class="flex w-full justify-center lg:justify-between">--}}
{{--                <div class="flex items-center gap-x-10 text-white text-md flex-col lg:flex-row">--}}
{{--                    <a href="#">--}}
{{--                        <div class="w-24  text-center hover:bg-purple-800 hover:text-gray-100 py-3 px-1.5 rounded-full">Classes</div>--}}
{{--                    </a>--}}
{{--                    <a href="#">--}}
{{--                        <div class="w-24 text-center hover:bg-purple-800 hover:text-gray-100 py-3 px-1.5 rounded-full">Timetable</div>--}}
{{--                    </a>--}}
{{--                    <a href="#">--}}
{{--                        <div class="w-24 text-center hover:bg-purple-800 hover:text-gray-100 py-3 px-1.5 rounded-full">Clubs</div>--}}
{{--                    </a>--}}
{{--                    <a href="#">--}}
{{--                        <div class="w-24 text-center hover:bg-purple-800 hover:text-gray-100 py-3 px-1.5 rounded-full">Nutrition</div>--}}
{{--                    </a>--}}
{{--                    <a href="#">--}}
{{--                        <div class="w-24 text-center hover:bg-purple-800 hover:text-gray-100 py-3 px-1.5 rounded-full">Free Trial</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <a href="#">--}}
{{--                        <div class="bg-white text-purple-600 px-12 py-3 rounded-full">Login</div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </nav>
    <div id="welcome" class="background-text h-2/4 flex flex-col justify-center gap-y-9 items-center">
        <div class="text-center">
            <h2 class="font-bold text-white text-5xl">Welcome to<br/> Goodlyfe Gyms</h2>
        </div>
        <a href="#">
            <span class="bg-purple-600 text-white px-8 py-4 rounded-full text-lg">See the benefits</span>
        </a>
    </div>
    <div class="my-7">
        <div>
            <img src="{{asset('img/welcome2.jpg')}}" width="80%" class="m-auto" alt="workout">
        </div>
        <div class="px-8">
            <h2 class="font-bold text-purple-600 text-5xl text-center my-5">Meet your new body</h2>
            <p class="text-justify leading-loose text-lg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget lectus urna. Nulla magna tortor, bibendum in molestie sed, gravida nec felis. Sed id egestasegestas risus, ut imperdiet augue.
            </p>
            <a href="#">
                <span class="w-full block py-4 text-purple-600 border-2 border-purple-600 rounded-full text-center font-bold mt-5">View the FAQ</span>
            </a>
        </div>
    </div>
    <div id="motivation" class="my-7 background-text h-3/5 flex flex-col justify-center px-8">
        <div class="text-center">
            <h2 class="font-bold text-white text-5xl">Become more than you are</h2>
            <p class="text-white text-lg leading-loose font-medium">Staying active is great fun and keeps you healthy.  Check out how you can join in.</p>
        </div>
        <a href="#">
            <span class="w-full block py-4 text-white bg-purple-600 rounded-full text-center font-medium mt-5">Let's play</span>
        </a>
    </div>
    <div class="my-7">
        <div>
            <img src="{{asset('img/welcome4.jpg')}}" width="80%" class="m-auto" alt="workout">
        </div>
        <div class="px-8">
            <h2 class="font-bold text-purple-600 text-5xl text-center my-5">Premium Facilities</h2>
            <p class="text-justify leading-loose text-lg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget lectus urna. Nulla magna tortor, bibendum in molestie sed, gravida nec felis. Sed id egestasegestas risus, ut imperdiet augue.
            </p>
            <a href="#">
                <span class="w-full block py-4 text-purple-600 border-2 border-purple-600 rounded-full text-center font-bold mt-5">Learn more</span>
            </a>
        </div>
    </div>
    <div class="mt-20 px-8 pb-4 bg-gradient-to-t from-purple-200">
        <div>
            <h2 class="text-3xl font-semibold text-gray-700 text-center">Real Stories from<br/> Real Customers</h2>
            <p class="text-gray-700 text-center">Be inspired with these experiences.</p>
        </div>
        <div>
            <div class="bg-white px-8 py-7 rounded-lg shadow-lg my-6">
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

            <div class="bg-white px-8 py-7 rounded-lg shadow-lg my-6">
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

            <div class="bg-white px-8 py-7 rounded-lg shadow-lg my-6">
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
    <div class="bg-purple-700 py-10 text-center">
        <h2 class="font-bold text-white text-5xl pt-7">Social</h2>
        <div class="flex items-center justify-center gap-x-7 py-8">
            <a href="#"><span class="w-24 block h-24 rounded-full bg-white text-purple-700">&nbsp;</span></a>
            <a href="#"><span class="w-24 block h-24 rounded-full bg-white text-purple-700">&nbsp;</span></a>
            <a href="#"><span class="w-24 block h-24 rounded-full bg-white text-purple-700">&nbsp;</span></a>
        </div>
    </div>

    <footer class="bg-gray-900 pt-12 px-12">
        <div class="my-5">
            <a href="#">
                <h2 class="font-bold text-white text-4xl">Good<span class="text-purple-700">lyfe</span></h2>
            </a>
            <p class="text-white leading-7 text-justify py-5">Lorem ipsum dolor amet, consectetur adipiscing elit. Eget
                nisl nunc quam ac sed turpis volutpat. Cursus sed massa non nisi, placerat.</p>
        </div>
        <div class="my-5">
            <h2 class="text-white text-2xl">Quick Links</h2>
            <ul class="my-6 list-none">
                <li class="text-white text-lg my-5 font-light"><a href="#">Classes</a></li>
                <li class="text-white text-lg my-5 font-light"><a href="#">Timetable</a></li>
                <li class="text-white text-lg my-5 font-light"><a href="#">Clubs</a></li>
                <li class="text-white text-lg my-5 font-light"><a href="#">Nutrition</a></li>
                <li class="text-white text-lg my-5 font-light"><a href="#">Free Trial</a></li>
            </ul>
        </div>
        <div class="text-white font-light text-center pt-5 pb-7">
            <div>
                <a href="#">Terms & Conditions</a> |
                <a href="#">Privacy Policy</a> <span class="hidden">|</span>
                <a href="#">Sitemap</a> |
                <a href="#">Disclaimer</a> <span class="hidden">|</span>
            </div>
            <div class="mt-5">
                &copy; {{now()->year}} GoodLyfe. All Rights reserved
            </div>
        </div>
    </footer>
    </body>
</html>
