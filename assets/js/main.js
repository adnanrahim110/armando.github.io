// document.addEventListener('dragstart', event => event.preventDefault());
// document.addEventListener('contextmenu', event => event.preventDefault());
// document.addEventListener('keydown', function (e) {
//     if (e.keyCode === 123) { // F12 key
//         e.preventDefault();
//         return false;
//     }
// });
// Sticky Navbar
window.onscroll = function () {
    const header = document.querySelector('#Navbar');
    const navBtn = document.querySelector('#navBtn')
    const fixedNav = header.offsetTop;

    const isScrolled = window.scrollY > fixedNav;
    header.classList.toggle('sticky', isScrolled);
    navBtn.classList.toggle('btn-white', !isScrolled);
    navBtn.classList.toggle('btn-main', isScrolled);
}

// Smooth Scrolling

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
})

document.addEventListener('DOMContentLoaded', function () {
    var splide = new Splide('.testimonials-slider', {
        type: 'loop',
        autoplay: true,
        duration: 1000,
        pagination: false,
        direction: 'ttb',
        height: '300px'
    });

    splide.mount();
    function updateArrowColor() {
        var currentIndex = splide.index;
        var arrows = document.querySelectorAll('.splide__arrow');
        var isEven = currentIndex % 2 === 0;

        arrows.forEach(function (arrow) {
            arrow.style.backgroundColor = isEven ? 'var(--p-dark-700)' : 'var(--s-dark-700)';
        });
    }

    splide.on('moved', updateArrowColor);
    updateArrowColor();
});
