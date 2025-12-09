
document.addEventListener('DOMContentLoaded', function () {
    const splideLogos = document.getElementById("splidelogos");
    if (splideLogos) {
        var splidelogosInit = new Splide(splideLogos, {
            perPage: 7,
            perMove: 1,
            type: "loop",
            gap: "1rem",
            arrows: true,
            autoplay: true,
            breakpoints: {
                500: { perPage: 2.5 },
                640: { perPage: 2.5 },
                768: { perPage: 3 },
                1024: { perPage: 4 },
                1536: { perPage: 5 },
            },
        });

        splidelogosInit.mount();
    }

});

// FUNCIONAMENTO DO MENU
function toggleMenu () {
    document.querySelector('.hamburger').classList.toggle('is-active');
    document.getElementById('header-bar-mobile').classList.toggle('-right-full');
    document.getElementById('header-bar-mobile').classList.toggle('right-0');
}
var buttonMenu = document.getElementById("mobile-menu-hamburger");
if (buttonMenu) {
    buttonMenu.addEventListener('click', function () {
        toggleMenu();
    });
}
var buttonMenu = document.getElementById("header-bar-mobile-close");
if (buttonMenu) {
    buttonMenu.addEventListener('click', function () {
        toggleMenu();
    });
}

