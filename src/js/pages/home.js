// import Swiper bundle with all modules installed
import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
import Swiper from 'swiper/bundle';
// import styles bundle
import 'swiper/css/bundle';

gsap.registerPlugin(ScrollTrigger); 

//gsap.to(".banner__title", {rotation: 27, x: 100, duration: 1});

let testimonialSlider = new Swiper('.testimonials-slider ', {
    slidesPerView: 1,
    spaceBetween: 10,
    speed:1000,
    loop:false,
    // autoplay: {
    //     delay: 1,
    // },
    freeMode: {
        enabled: true,
    },
    //touchRatio:1,
    pagination: {
        el: ".swiper-pagination-testimonial",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next-testimonial",
        prevEl: ".swiper-button-prev-testimonial",
    }, 
    breakpoints: {
        1024:{
            spaceBetween: 24,
            slidesPerView: 2,
        },
        1440:{
            spaceBetween: 24,
            slidesPerView: 2,
        },
    }
});
window.addEventListener("load", function () {	
    let ourTechnologySliderContainer = document.querySelector(
        "#our_technology_slider"
    );
    let ourTechnologySlider = new Swiper('.our-technology__slider', {
        slidesPerView: 4,
        loop: true,
        freeMode: {
            enabled: true,
        },
        autoplay: {
            delay: 1,
        },
        speed: 3000,
        // grid: {
        //   rows: 2,
        // },
        spaceBetween: 30,
        breakpoints: {
            768:{
                spaceBetween: 24,
                slidesPerView: 6,
            },
            1024:{
                spaceBetween: 24,
                slidesPerView: 8,
            },
            1440:{
                spaceBetween: 30,
                slidesPerView: 10,
            },
        }
    });

    ourTechnologySliderContainer.addEventListener("mouseenter", (e) => {
        ourTechnologySlider.autoplay.stop();
    });
    ourTechnologySliderContainer.addEventListener("mouseleave", (e) => {
        ourTechnologySlider.autoplay.start();
    });
});

function format_number(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
};


function counterAction(el,value){
    gsap.from(value, {
        scrollTrigger: ".our-approach", 
        duration: 3,
        ease: 'circ.out',
        val: 0,
        roundProps: 'val',
        onUpdate: function() {
            el.innerText = format_number(value.val);
        }
    })
}

function counterSubscriber(){
    let totalSubscriberYT = document.getElementById('complatedProject'),
    totalSubscriberYTValue = {
        val: parseInt(totalSubscriberYT.dataset.value)
    };

    let totalViewYT = document.getElementById('yearExperience'),
    totalViewYTValue = {
        val: parseInt(totalViewYT.dataset.value)
    };

    let merchanSold = document.getElementById('businessProductivity'),
    merchanSoldValue = {
        val: parseInt(merchanSold.dataset.value)
    };

    let appDownload = document.getElementById('decreaseCost'),
    appDownloadValue = {
        val: parseInt(appDownload.dataset.value)
    };

    counterAction(totalSubscriberYT,totalSubscriberYTValue);
    counterAction(totalViewYT,totalViewYTValue);
    counterAction(merchanSold,merchanSoldValue);
    counterAction(appDownload,appDownloadValue);
}


window.addEventListener("load", function () {
    counterSubscriber();
});