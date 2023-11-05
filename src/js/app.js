import { Tooltip, Toast, Modal, Offcanvas } from 'bootstrap';
import AOS from 'aos';
import { gsap } from "gsap";
const dropdowns = document.querySelectorAll(".dropdown")
let offcanvasRight=document.querySelector('#offcanvasRight');
let isClosed = false;
let lastScrollTop = 0;
let body=document.querySelector("body");
let burgerMenu = document.querySelector("#hamburger")
let btnLanguage=document.querySelectorAll('.navbar-custom__btn-language');
let btnToggler=document.querySelector('.navbar-custom__toggler');
let btnCloseOffcanvas=document.querySelector('.btn-close-offcanvas-right');
AOS.init({
    duration: 1000,
    once: true,
});
window.addEventListener("load", function () {
    gsap.fromTo(
        ".preloader",
        { duration:1, autoAlpha:1},
        { duration:1, autoAlpha:0}
    );
});
let bsOffcanvas = new Offcanvas(offcanvasRight)
offcanvasRight.addEventListener('hidden.bs.offcanvas', function () {
    closeSideMenu();
})
btnToggler.addEventListener('click', ()=>{  
    burgerTime();
});
btnCloseOffcanvas.addEventListener('click', ()=>{  
    closeSideMenu();
});
function burgerTime() {
    if (isClosed== true) {
        closeSideMenu();
    } else {
        openSideMenu()
    }
}
function openSideMenu(){
    burgerMenu.classList.remove("closed");
    burgerMenu.classList.add("open");
    body.classList.add('no-scroll');
    isClosed = true;
    bsOffcanvas.show();
}
function closeSideMenu(){
    burgerMenu.classList.remove("open");
    burgerMenu.classList.add("closed");
    body.classList.remove('no-scroll');
    isClosed  = false;
    bsOffcanvas.hide();
}
for (const dropdown of dropdowns) {
    dropdown.addEventListener('mouseenter', function (event) {
        let target = event.target
        let dropdownToggle = target.querySelector('.dropdown-toggle')
        let dropdownMenu = target.querySelector('.dropdown-menu')

        target.classList.add('show');
        dropdownToggle.classList.add('show');
        dropdownMenu.classList.add('show');
    })

    dropdown.addEventListener('mouseleave', function (event) {
        let target = event.target
        let dropdownToggle = target.querySelector('.dropdown-toggle')
        let dropdownMenu = target.querySelector('.dropdown-menu')

        target.classList.remove('show');
        dropdownToggle.classList.remove('show');
        dropdownMenu.classList.remove('show');
    })
}

/*=============== CHANGE BACKGROUND HEADER ===============*/
function scrollHeader() {
    const header = document.querySelector('.navbar-custom');
    // When the scroll is greater than 80 viewport height, add the scroll-header class to the header tag
    if (this.scrollY >= 80) header.classList.add('sticky'); else header.classList.remove('sticky')
}
window.addEventListener('scroll', scrollHeader)




