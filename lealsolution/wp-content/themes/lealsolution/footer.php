<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lealsolution
 */

?>

	<!-- Footer Start -->
	<div class="container-fluid bg-dark text-white-50 footer pt-5">
        <div class="container py-3 py-lg-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.2s">
                    <a href="index.html" class="d-inline-block mb-3">
                        <h1 class="text-white text-white-nav">Leal Software Solution Pvt Ltd <span
                                class="text-primary"></span>
                        </h1>
                    </a>
                    <p class="mb-0">Leal Software Solution excels in delivering innovative, high-quality
                        refrigeration
                        solutions. With a focus on custom design, efficiency, and reliability, we provide tailored
                        systems and exceptional service to meet diverse industry needs.</p>
                </div>

                <div class="col-md-6 col-lg-2 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="text-white mb-3">Popular Link</h5>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="about.html">Projects</a>
                    <a class="btn btn-link" href="service.html">Services</a>
                    <a class="btn btn-link" href="contact.html">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                </div>
                <div class="col-md-6 col-lg-4 pe-0 wow fadeIn" data-wow-delay="0.4s">
                    <h5 class="text-white mb-4">Our Services</h5>
                    <a class="btn btn-link" href="">Software Development</a>
                    <a class="btn btn-link" href="">Mobile Application Development</a>
                    <a class="btn btn-link" href="">Web App Development</a>
                    <a class="btn btn-link" href="">HVAC Heat Load Calculator</a>
                    <a class="btn btn-link" href="">HLC Leal Bussiness Solution</a>
                    <a class="btn btn-link" href="">Leal GADraw</a>
                    <a class="btn btn-link" href="">Odoo ERP Cloud</a>
                    <a class="btn btn-link" href="">TaskTrak Hub Manager</a>

                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <h5 class="text-white mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Flat No. B-102, Laxmi Chowk, Phase 1, Hinjawadi
                        Rajiv
                        Gandhi Infotech Park, Hinjawadi, Pimpri-Chinchwad, Maharashtra 411057</p>
                    <p><i class="fa fa-phone-alt me-3"></i>0253 24651409</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+91 7410016111/13/14</p>
                    <p><i class="fa fa-envelope me-3"></i>career@lealsolution.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.linkedin.com/company/leal-software-solution/" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/LealSoftwareSolution"
                            target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.youtube.com/@lealsoftwaresolutionpvtltd8833" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/smurkewar/"
                            target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="btn btn-outline-light btn-social" href="https://wa.me/7410016111" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.4s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="index.html">Leal Software Solution Pvt Ltd © 2025</a>
                        | All Rights Reserved.<a class="border-bottom" href="https://www.lealsolution.com/"
                            target="_blank"></a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/wow/wow.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/easing/easing.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/counterup/counterup.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>


<script>
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
    </script>


<?php wp_footer(); ?>

</body>
</html>
