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
        #menu ul li a{
            padding-left: 0.75rem;
            padding-right: 0.85rem;
        }
        #menu ul {
            padding: 1rem 1rem;
        }
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
                width: 5rem;
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
    <div class="bg-purple-700 w-full md:w-72 h-full text-white hideMenu flex flex-col justify-between shorten" id="menu">
        <div class="w-full">
            <div class="flex items-center justify-center h-16 border-b-2 border-purple-900 bg-purple-800">
                <a href="{{route('welcome')}}">
                    <h2 class="text-white text-4xl font-bold">G<span class="hideText">ood<span class="text-purple-300">lyfe</span></span></h2>
                </a>
            </div>
            <ul class="mt-1.5 py-4 text-base w-full font-light text-gray-200">
                <li class="bg-purple-800 rounded w-full transition-colors">
                    <a href="#" class="py-3 mt-1.5 w-full block"><i class="icon-home mr-6"></i><span class="hideText">Dashboard</span></a>
                </li>
                <li class="hover:bg-purple-600 rounded w-full transition-colors">
                    <a href="#" class="py-3 mt-1.5 w-full block"><i class="icon-id-card-o mr-6"></i><span class="hideText">Carnets</span></a>
                </li>
                <li class="hover:bg-purple-600 rounded w-full transition-colors">
                    <a href="#" class="py-3 mt-1.5 w-full block"><i class="icon-briefcase mr-6"></i><span class="hideText">Contracts</span></a>
                </li>
                <li class="hover:bg-purple-600 rounded w-full transition-colors">
                    <a href="#" class="py-3 mt-1.5 w-full block"><i class="icon-users mr-6"></i><span class="hideText">Clients</span></a>
                </li>
            </ul>
        </div>
        <div class="flex justify-end px-5 pb-3 pt-4 border-t-2 border-purple-900 bg-purple-800" id="hideContainer">
            <i class="icon-right-open text-3xl cursor-pointer hide hidden lg:inline" onclick="toggleMenuDekstop()"></i>
            <i class="icon-right-open text-3xl cursor-pointer hide lg:hidden" onclick="toggleMenu()"></i>
        </div>

    </div>
    <div class="w-full flex flex-col h-full">
        <div class="bg-white w-full h-16 flex justify-between items-center px-4 py-2 shadow-md lg:justify-end lg:px-10">
            <i class="icon-menu text-2xl cursor-pointer lg:hidden text-gray-600" id="hamburger" onclick="toggleMenu()"></i>
            <img src="{{asset('img/person1.jpg')}}" class="w-12 h-12 p-0.5 rounded-full border border-purple-700 cursor-pointer" alt="Person" id="userAvatar">
            <div class="absolute right-4 lg:right-10 bg-white shadow-xl border rounded profileMenu py-2 text-sm w-36 text-gray-700 hidden" id="ddUserMenu">
                <div class="px-2"><a href="#" class="block py-2 px-2.5 hover:bg-purple-100 mb-1.5 rounded transition-colors"><i class="icon-user mr-2"></i>Profile</a></div>
                <div class="px-2"><a href="#" class="block py-2 px-2.5 hover:bg-purple-100 my-1.5 rounded transition-colors"><i class="icon-cog mr-2"></i>Settings</a></div>
                <hr/>
                <div class="px-2"><a href="#" class="block py-2 px-2.5 hover:bg-purple-100 mt-2 rounded transition-colors"><i class="icon-logout mr-2"></i>Logout</a></div>
            </div>
        </div>
        <div class="px-5 pb-4 flex flex-col h-full lg:px-8 lg:pt-2">
            <h2 class="text-2xl font-semibold py-4 lg:py-5">{{ $title }}</h2>
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
