window.onload = () => {
    const errorAlert = document.getElementById('errorAlert');
    if(errorAlert) {
        const FADEOUT_TIME = 2500;
        const FADEOUT_SPEED = 60;

        errorAlert.style.transform = "translateX(120%)";
        setTimeout(() => {
            errorAlert.style.transition = "transform 0.5s";
            errorAlert.style.transform = "translateX(0%)";
        }, 30);
        const closeAlert = setTimeout(() => {
            fadeOut(errorAlert, FADEOUT_SPEED);
        }, FADEOUT_TIME);

        const errorAlertButton = document.getElementById('closeErrorAlert');
        errorAlertButton.addEventListener('click', () => fadeOut(errorAlert, FADEOUT_SPEED));

        errorAlert.addEventListener('mouseenter', () => {
            clearTimeout(closeAlert);
        })

        errorAlert.addEventListener('mouseleave', () => {
            setTimeout(() => {
                fadeOut(errorAlert, FADEOUT_SPEED);
            }, FADEOUT_TIME);
        })
    }
}
function fadeOut(element, time) {
    const fadeEffect = setInterval(() => {
        if(!element.style.opacity) element.style.opacity = 1;
        if(element.style.opacity > 0) element.style.opacity -= 0.12;
        else clearInterval(fadeEffect);
    }, time)
}

