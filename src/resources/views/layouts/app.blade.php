<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontello.css') }}" rel="stylesheet">
    <link href="{{ asset('css/free.min.css') }}" rel="stylesheet"> <!-- icons -->
    <link href="{{ asset('css/flag.min.css') }}" rel="stylesheet"> <!-- icons -->
    <style>
        html, body {
            width: 100%;
            height: 100%;
        }
        body {
            font-family: 'Poppins', 'sans-serif';
        }
        #menu {
            position: absolute;
            transition: transform 0.2s;
        }
        .hideMenu {
            transform: translateX(-100%);
        }
        .hide {
            transform: rotate(180deg);
        }
        /*#menu ul li a{*/
        /*    padding-left: 0.75rem;*/
        /*    padding-right: 0.85rem;*/
        /*}*/

        .profileMenu:before {
            content: '';
            position: absolute;
            border: .85rem solid;
            border-color: transparent transparent rgb(229, 231, 235) transparent;
            top: -1.71rem;
            right: 0.62rem;
        }
        .profileMenu:after {
            content: '';
            position: absolute;
            border: .85rem solid;
            border-color: transparent transparent white transparent;
            top: -1.65rem;
            right: 0.63rem;
        }
        .profileMenu {
            top: 4.4rem;
        }
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
</head>
<body class="bg-gray-100">
<div class="flex h-full">
    <x-dashboard.sidebar/>
    <div class="w-full flex flex-col h-full">
        <div class="bg-white w-full h-16 flex justify-between items-center px-4 py-2 shadow-md lg:justify-end lg:px-10">
            <div class="mr-2">{{ Auth::user()->name }}</div>
            <i class="icon-menu text-2xl cursor-pointer lg:hidden text-gray-600" id="hamburger" onclick="toggleMenu()"></i>
            <img src="{{asset('img/person1.jpg')}}" class="w-12 h-12 p-0.5 rounded-full border border-purple-700 cursor-pointer" alt="Person" id="userAvatar">
            <x-dashboard.usercard/>
        </div>
        <div class="px-5 pb-4 flex flex-col h-full lg:px-8 lg:pt-2">
            <h2 class="text-2xl font-semibold py-4 lg:py-5">{{ $title ?? 'Dashboard' }}</h2>
            <div class="bg-white h-full rounded-md shadow p-6">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<script>
    const hamburger = document.getElementById('hamburger');
    const menu = document.getElementById('menu');
    const menuItems = document.querySelectorAll('#menu ul > li > a');
    const texts = document.querySelectorAll('.hideText');
    const userAvatar = document.getElementById("userAvatar");
    const ddUserMenu = document.getElementById('ddUserMenu');

    const IS_MENU_EXPANDED_KEY = 'isMenuExpanded';

    //If user expanded sidemenu, keep it expanded after page refresh
    if(localStorage.getItem(IS_MENU_EXPANDED_KEY) && menu.classList.contains('shorten')) {
        menu.style.transition = "none";
        menu.classList.remove('shorten');
        document.querySelector('#menu ul').style.textAlign = "left";
        texts.forEach((item) => {
            item.style.display = "inline";
        })
        document.getElementById('hideContainer').style.justifyContent = "end";
        setTimeout(() => {
            menu.style.transition = "width 0.5s, visibility 0s";
        }, 500)
    }

    function hideUserMenu() {
        if(!ddUserMenu.classList.contains('hidden')) ddUserMenu.classList.add('hidden');
    }


    menuItems.forEach((item) => {
        item.addEventListener('click', toggleMenu)
    })
    hamburger.addEventListener('click', (e) => {
        hideUserMenu();
        e.stopPropagation();
    })
    menu.addEventListener('click', (e) => {
        hideUserMenu();
        e.stopPropagation();
    })

    userAvatar.addEventListener('click', (e) => {
        e.stopPropagation();
        if(ddUserMenu.classList.contains('hidden')) ddUserMenu.classList.remove('hidden');
        else ddUserMenu.classList.add('hidden');
    })

    window.addEventListener('click', () => {
        if(!menu.classList.contains('hideMenu')) {
            menu.classList.add('hideMenu');
        }
        if(!ddUserMenu.classList.contains('hidden')) ddUserMenu.classList.add('hidden');
    });


    //Toggle mobile and tablet side menu
    function toggleMenu() {
        if(menu.classList.contains('shorten')) {
            menu.classList.remove('shorten');
            document.querySelector('#menu ul').style.textAlign = "left";
            texts.forEach((item) => {
                item.style.display = "inline";
            })
            document.getElementById('hideContainer').style.justifyContent = "end";
        }

        if(menu.classList.contains('hideMenu')) {
            menu.classList.remove('hideMenu');
        }else {
            menu.classList.add('hideMenu');
        }
    }

    //Toggle the desktop version of side menu
    function toggleMenuDekstop() {
        if(menu.classList.contains('shorten')) {
            localStorage.setItem(IS_MENU_EXPANDED_KEY, 'true');
            menu.classList.remove('shorten');
            setTimeout(() => {
                document.querySelector('#menu ul').style.textAlign = "left";
            }, 0);

            setTimeout(() => {
                texts.forEach((item) => {
                    item.style.display = "inline";
                })
                document.getElementById('hideContainer').style.justifyContent = "end";
            }, 180);
        }else {
            localStorage.removeItem(IS_MENU_EXPANDED_KEY);
            menu.classList.add('shorten');
            setTimeout(() => {
                texts.forEach((item) => {
                    item.style.display = "none";
                })
            }, 100);
            setTimeout(() => {
                document.getElementById('hideContainer').style.justifyContent = "center";
            }, 320);
            setTimeout(() => {
                document.querySelector('#menu ul').style.textAlign = "center";
            }, 380);
        }
    }
</script>
</body>
</html>
