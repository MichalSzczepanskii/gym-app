require('alpinejs');
window.$ = window.jQuery = require('jquery');

const toastElList = [].slice.call(document.querySelectorAll('.toast'));
let height = 0;
let element = 0;
const toastList = toastElList.map((toast) => {
    toast.style.bottom += '25' + toast.style.height + 'px';
    let timeout = setTimeout(() => {
        jQuery(toast).fadeOut(1000);
    }, 2500);
    jQuery(toast).hover(() => {
        jQuery(toast).fadeIn(0);
        clearTimeout(timeout);
    }, () => {
        timeout = setTimeout(() => {
            jQuery(toast).fadeOut(1000);
        }, 2500);
    })
    toast.querySelector("button").addEventListener('click', () => {
        jQuery(toast).fadeOut(100);
    })
})