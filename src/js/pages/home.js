// import Swiper bundle with all modules installed
import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
import Swiper from 'swiper/bundle';
// import styles bundle
import 'swiper/css/bundle';

gsap.registerPlugin(ScrollTrigger);



window.addEventListener("load", function () {	
    let bannerSlider = new Swiper('.banner__slider', {
        slidesPerView: 1,
        spaceBetween: 10,
        speed:500,
        loop:true,
        effect:'fade',
        autoplay: {
            delay: 3000,
        },
        // freeMode: {
        //     enabled: true,
        // },
        //touchRatio:1,
        // pagination: {
        //     el: ".swiper-pagination-testimonial",
        //     clickable: true,
        // },
        // navigation: {
        //     nextEl: ".swiper-button-next-testimonial",
        //     prevEl: ".swiper-button-prev-testimonial",
        // }, 
        breakpoints: {
            1024:{
                spaceBetween: 24,
            },
            1440:{
                spaceBetween: 24,
            },
        }
    });

    var swiper = new Swiper(".mySwiper", {});
});


