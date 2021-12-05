
const hamburger = document.getElementById('hamburger');
const menu = document.getElementById('menu');
const menuItems = document.querySelectorAll('#menu ul > li > a');
const texts = document.querySelectorAll('.hideText');
const userAvatar = document.getElementById("userAvatar");
const ddUserMenu = document.getElementById('ddUserMenu');
const menuTogglerDekstop = document.getElementById('menuTogglerDesktop');
const menuToggler = document.getElementById('menuToggler');

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
    item.addEventListener('click', () =>  menu.classList.remove('hideMenu'))
})
hamburger.addEventListener('click', (e) => {
    hideUserMenu();
    toggleMenu();
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

menuToggler.addEventListener('click', toggleMenu);
menuTogglerDekstop.addEventListener('click', toggleMenuDesktop);

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
function toggleMenuDesktop() {
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
