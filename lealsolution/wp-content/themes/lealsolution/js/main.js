(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('bg-primary shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('bg-primary shadow-sm').css('top', '-150px');
        }
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        items: 1,
        autoplay: true,
        smartSpeed: 1000,
        dots: true,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });

})(jQuery);


// in index page 
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3, // Default slides visible at once (for large screens)
    spaceBetween: 30, // Space between slides
    direction: 'horizontal',
    loop: false,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: true,
    },
    breakpoints: {
        // Mobile view (max-width: 576px) - 1 slide at a time, 100% width
        0: {
            slidesPerView: 1,
            spaceBetween: 0, // Remove space between slides for full width
        },
        // Tablet view (min-width: 577px and max-width: 991px) - 2 slides at a time
        576: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        // Large screens (min-width: 992px) - 3 slides at a time
        992: {
            slidesPerView: 3,
            spaceBetween: 30,
        }
    }
});


// A Code Nav Manu display on mobile screen
document.addEventListener("DOMContentLoaded", function () {
    var dropdowns = document.querySelectorAll(".navbar-nav .dropdown");

    dropdowns.forEach(function (dropdown) {
        dropdown.addEventListener("click", function (event) {
            if (window.innerWidth <= 991) {
                event.preventDefault();
                var menu = this.querySelector(".dropdown-menu");
                menu.classList.toggle("show");
            }
        });
    });
});



// career job apply code 
document.addEventListener("DOMContentLoaded", function () {
    const careerJobListings = document.querySelectorAll('.job-listing');

    careerJobListings.forEach(listing => {

        const applyButton = listing.querySelector('.btn-apply-job');
        const form = listing.querySelector('.apply-form');


        if (applyButton) {
            applyButton.addEventListener('click', function (event) {

                careerJobListings.forEach(item => {
                    const otherForm = item.querySelector('.apply-form');
                    if (item !== listing && otherForm) {
                        otherForm.style.display = 'none';
                        item.classList.remove('form-open');
                    }
                });

                if (form.style.display === 'block') {
                    form.style.display = 'none';
                    listing.classList.remove('form-open');
                } else {
                    form.style.display = 'block';
                    listing.classList.add('form-open');
                }

                event.stopPropagation();
            });
        }

        if (form) {
            form.addEventListener('click', function (event) {
                event.stopPropagation();
            });
        }
    });

    // Close all forms when clicking anywhere outside the job listing
    document.addEventListener('click', function () {
        careerJobListings.forEach(listing => {
            const form = listing.querySelector('.apply-form');
            if (form) {
                form.style.display = 'none';
                listing.classList.remove('form-open');
            }
        });
    });
});



// ****  Code in Products Page- HVAC heat load calculator   ****
// YouTube video URL
const videoUrl = "https://www.youtube.com/embed/YOUR_VIDEO_ID"; // Replace with your YouTube video ID

// jQuery to load the video URL when the modal opens
$('#videoModal').on('show.bs.modal', function (event) {
    const modal = $(this);
    modal.find('#videoIframe').attr('src', videoUrl);
});

// Clear the video URL when the modal is closed
$('#videoModal').on('hide.bs.modal', function (event) {
    const modal = $(this);
    modal.find('#videoIframe').attr('src', '');
});

//   
function openVideo(videoUrl) {
    const videoFrame = document.getElementById('videoFrame');
    videoFrame.src = videoUrl;
    var myModal = new bootstrap.Modal(document.getElementById('videoModal'));
    myModal.show();
}

// Clear video frame on modal close
document.getElementById('videoModal').addEventListener('hidden.bs.modal', function () {
    const videoFrame = document.getElementById('videoFrame');
    videoFrame.src = '';
});


// code for about page clinet company sliders.
document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,       // Number of logos to show at a time
        spaceBetween: 20,       // Space between slides
        loop: true,             // Loop through slides
        autoplay: {
            delay: 2000,        // Delay between slides (in ms)
            disableOnInteraction: false, // Keep autoplay active after interaction
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            320: { slidesPerView: 1 },   // 1 logo per view on small screens
            768: { slidesPerView: 2 },   // 2 logos per view on medium screens
            1024: { slidesPerView: 5 }   // 3 logos per view on large screens
        }
    });
});

document.querySelectorAll('.app-store-btn, .google-play-btn').forEach(button => {
    button.addEventListener('click', function () {
        alert('Redirecting to the app download page on our website...');
    });
});




