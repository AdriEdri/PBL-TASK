document.addEventListener("DOMContentLoaded", function() {
    
    // Menu toggle functionality
    let menu = document.querySelector('#menu-btn');
    let navbar = document.querySelector('.header .navbar');

    menu.onclick = () => {
        menu.classList.toggle('fa-times'); // Toggle menu icon
        navbar.classList.toggle('active'); // Toggle navbar visibility
    };

    // Hide menu when scrolling
    window.onscroll = () => {
        menu.classList.remove('fa-times'); // Remove menu icon
        navbar.classList.remove('active'); // Hide navbar
    };

    // Swiper for Home Slider with autoplay
    var swiperHome = new Swiper(".home-slider", {
        loop: true, // Continuously loop through slides
        navigation: {
            nextEl: ".swiper-button-next", // Next button for slides
            prevEl: ".swiper-button-prev", // Previous button for slides
        },
        autoplay: {
            delay: 3000, // Change slide every 3 seconds
            disableOnInteraction: false, // Keep autoplay even after user interacts
        },
    });

    // Swiper for Reviews Slider with responsive breakpoints
    var swiperReviews = new Swiper(".reviews-slider", {
        loop: true, // Loop the slides
        spaceBetween: 20, // Space between slides
        autoHeight: true, // Auto adjust height of slides
        grabCursor: true, // Change cursor to 'grab' on hover
        breakpoints: {
            640: {
                slidesPerView: 1, // 1 slide per view on small screens
            },
            768: {
                slidesPerView: 2, // 2 slides per view on medium screens
            },
            1024: {
                slidesPerView: 3, // 3 slides per view on large screens
            },
        },
    });

});

