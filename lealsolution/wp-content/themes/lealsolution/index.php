<?php
/**
 * The main template file
 * Template Name: Home
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lealsolution
 */

get_header();
?>

<!-- Hero Start -->
<div class="container-fluid pt-5 bg-primary hero-header">
    <div class="container pt-5">
        <div class="row g-5 pt-5">
            <div class="col-lg-6 align-self-center text-start mb-lg-5">
                <h1 class="display-4 text-white mb-4 animated slideInRight">Leal Software Solution</h1>
                <p class="text-white mb-4 animated fadeInLeftBig">Leal Software Solution: Crafting innovative,
                    scalable, and tailored software solutions. Empowering businesses with cutting-edge technology,
                    seamless integration, and unparalleled expertise. Your trusted partner for software development,
                    application design, and digital transformation. Let's build the future together!</p>
            </div>
            <div class="col-lg-6 align-self-end text-center text-lg-end mt-0 pb-5">
                <!-- <img class="img-hero-banner img-fluid w-100 shadow-lg" src="<?php bloginfo('template_directory'); ?>/img/test/ecosystem-spotlight-banner.jpg" alt=""> -->

                <!-- Bootstrap Carousel Slider -->
                <div class="swiper mySwiper d-block d-md-none">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="wcu-box">
                                <img src="<?php bloginfo('template_directory'); ?>/img/index_images/software-developer.png"
                                    alt="Slide 1"
                                    style="width: 70px; height: 70px; filter: sepia(1) hue-rotate(180deg) saturate(2);">
                                <p class="text-white fs-6 pt-3">We deliver top-notch, innovative software solutions
                                </p>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="wcu-box">
                                <img src="<?php bloginfo('template_directory'); ?>/img/index_images/professional-success.png"
                                    alt="Slide 2" style="width: 70px; height: 70px;">
                                <p class="text-white fs-6 pt-3">We’re dedicated to meeting deadlines and client
                                    expectations</p>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="wcu-box">
                                <img src="<?php bloginfo('template_directory'); ?>/img/index_images/save-time.png"
                                    alt="Slide 3" style="width: 70px; height: 70px;">
                                <p class="text-white fs-6 pt-3">Our competitive pricing ensures cost-effective
                                    solutions</p>
                            </div>
                        </div>
                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div class="wcu-box">
                                <img src="<?php bloginfo('template_directory'); ?>/img/index_images/coding.jpg"
                                    alt="Slide 4" style="width: 70px; height: 70px;">
                                <p class="text-white fs-6 pt-3">Our software is highly secure, portable, and
                                    responsive</p>
                            </div>
                        </div>
                        <!-- Slide 5 -->
                        <div class="swiper-slide">
                            <div class="wcu-box">
                                <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_implemention.jpg"
                                    alt="Slide 5" style="width: 70px; height: 70px;">
                                <p class="text-white fs-6 pt-3">We provide flawless communication and project
                                    management</p>
                            </div>
                        </div>
                        <!-- Slide 6 -->
                        <div class="swiper-slide">
                            <div class="wcu-box">
                                <img src="<?php bloginfo('template_directory'); ?>/img/index_images/badge.png"
                                    alt="Slide 6" style="width: 70px; height: 70px;">
                                <p class="text-white fs-6 pt-3">Our quality assurance is backed by industry
                                    certifications</p>
                            </div>
                        </div>
                        <!-- Slide 7 -->
                        <div class="swiper-slide">
                            <div class="wcu-box">
                                <img src="<?php bloginfo('template_directory'); ?>/img/index_images/app-development.jpg"
                                    alt="Slide 7" style="width: 70px; height: 70px;">
                                <p class="text-white fs-6 pt-3">Custom app development to meet your business needs
                                </p>
                            </div>
                        </div>
                        <!-- Slide 8 -->
                        <div class="swiper-slide">
                            <div class="wcu-box">
                                <img src="<?php bloginfo('template_directory'); ?>/img/index_images/coding (1).png"
                                    alt="Slide 8" style="width: 70px; height: 70px;">
                                <p class="text-white fs-6 pt-3">Advanced coding techniques for seamless user
                                    experience</p>
                            </div>
                        </div>
                        <!-- Slide 9 -->
                        <div class="swiper-slide">
                            <div class="wcu-box">
                                <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_conslutancy.jpg"
                                    alt="Slide 9" style="width: 70px; height: 70px;">
                                <p class="text-white fs-6 pt-3">Expert consultancy to guide your software journey
                                </p>
                            </div>
                        </div>
                        <!-- Slide 10 -->
                        <div class="swiper-slide">
                            <div class="wcu-box">
                                <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_training.jpg"
                                    alt="Slide 10" style="width: 70px; height: 70px;">
                                <p class="text-white fs-6 pt-3">Hands-on training to ensure effective software
                                    adoption</p>
                            </div>
                        </div>
                    </div>
                    <!-- Swiper Pagination -->
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
            <div class="modal-header border-0">
                <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-light p-3"
                        placeholder="Type search keyword">
                    <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- About Start -->
<section class="bg-light pt-4">
    <div class="container my-5">
        <div class="row text-center">
            <!-- Our Mission Box -->
            <div class="col-lg-3 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.2s">
                <div class="section-box text-start text-lg-center">
                    <h3 class="fw-bold">Our Mission</h3>
                    <div class="section-line"></div>
                    <p>Our mission is to empower businesses with innovative software solutions that enhance
                        efficiency,
                        drive growth, and deliver exceptional value through cutting-edge technology and dedicated
                        support.
                    </p>
                </div>
            </div>

            <!-- Our Values Box -->
            <div class="col-lg-3 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="section-box text-start text-lg-center">
                    <h3 class="fw-bold">Our Values</h3>
                    <div class="section-line"></div>
                    <p>Our values are innovation, integrity, customer-centricity, collaboration, and excellence. We
                        strive to
                        deliver top-tier software solutions while maintaining a commitment to ethical practices and
                        outstanding
                        customer service.
                    </p>
                </div>
            </div>

            <!-- Consulting Box -->
            <div class="col-lg-3 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">
                <div class="section-box text-start text-lg-center">
                    <h3 class="fw-bold">Consulting</h3>
                    <div class="section-line"></div>
                    <p>Our consulting services focus on providing expert guidance and tailored strategies to help
                        businesses
                        optimize their operations, embrace digital transformation, and achieve their goals with
                        confidence and efficiency.
                    </p>
                </div>
            </div>

            <!-- Business Goals Box -->
            <div class="col-lg-3 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="section-box text-start text-lg-center">
                    <h3 class="fw-bold">Business Goals</h3>
                    <div class="section-line"></div>
                    <p>Our business goals are to drive technological innovation, foster long-term client
                        partnerships,
                        expand
                        our global presence, and continuously improve our services to deliver maximum value and
                        impact for our clients.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About End -->


<!-- Services -->
<section class="py-0 py-lg-4">
    <div class="wow fadeIn" data-wow-delay="0.2s">
        <h1 class="strategy-heading text-center" style="font-size: 2.5rem; color: rgb(63, 63, 63);">What <span
                class="highlight-red" style="color: rgb(197, 81, 81);">are</span> <span class="highlight-blue"
                style="color: #007bff;;">our sevrvices</span>?</h1>

        <p class="strategy-desc px-3 text-start text-lg-center">
            Leal Software Solution, we specialize in delivering innovative and efficient solutions tailored to your
            business needs. From developing cutting-edge software and web applications to streamlining HVAC heat
            load calculations, enhancing business operations with Odoo ERP services, boosting your online presence
            through digital marketing, and offering advanced task tracking with TaskTrak Hub, we provide
            comprehensive services to empower your success.
        </p>
    </div>
    <div class="container py-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-4">
            <!-- Card 1 -->
            <div class="col wow fadeIn" data-wow-delay="0.1s">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <i class="fas icon-cdn">01</i>
                            <i class="fas fa-laptop-code icon-cdn-no"></i>
                            <div>
                                <h3 class="index-heading-text">Software Development</h3>
                                <p>Expert software development services tailored to your business needs, delivering
                                    innovative solutions with cutting-edge technology. Achieve operational
                                    efficiency and seamless user experiences through customized, scalable software
                                    solutions.
                                </p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/software_development.jpg"
                                alt="Avatar">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col wow fadeIn" data-wow-delay="0.2s">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <i class="fas icon-cdn">02</i>
                            <i class="fas fa-mobile-alt icon-cdn-no"></i>
                            <div>
                                <h3 class="index-heading-text">Application Development</h3>
                                <p>Custom application development that transforms ideas into powerful, user-friendly
                                    apps. Our expertise ensures seamless functionality, performance optimization,
                                    and intuitive design for mobile, web, and enterprise applications across various
                                    platforms.
                                </p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/software_ab_development.jpg"
                                alt="Avatar">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col wow fadeIn" data-wow-delay="0.3s">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <i class="fas icon-cdn">03</i>
                            <i class="fas fa-globe icon-cdn-no"></i>
                            <div>
                                <h3 class="index-heading-text">Website Development</h3>
                                <p>Professional web development services creating responsive, visually appealing
                                    websites. We deliver high-performance, SEO-friendly websites that enhance user
                                    engagement, drive conversions, and support your business growth with modern,
                                    scalable solutions.
                                </p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/website_development.jpg"
                                alt="Avatar">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col wow fadeIn" data-wow-delay="0.4s">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <i class="fas icon-cdn">04</i>
                            <i class="fas fa-mobile icon-cdn-no"></i>
                            <div>
                                <h3 class="index-heading-text">Mobility Services</h3>
                                <p>Comprehensive mobility app services, developing high-performance, user-centric
                                    mobile apps for iOS and Android. Empower your business with seamless,
                                    cross-platform solutions that enhance accessibility, productivity, and customer
                                    engagement.
                                </p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/mobile_dev.jpg"
                                alt="Avatar">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col wow fadeIn" data-wow-delay="0.5s">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <i class="fas icon-cdn">05</i>
                            <i class="fas fa-cloud icon-cdn-no"></i>
                            <div>
                                <h3 class="index-heading-text">Odoo Development</h3>
                                <p>Transform your business with Odoo ERP and cloud solutions. Automate processes,
                                    streamline operations, optimize workflows, and scale effortlessly with flexible,
                                    cloud-based ERP services designed to fit your business's evolving demands and
                                    drive innovation.</p>

                            </div>
                        </div>
                        <div class="flip-card-back">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/Odoo-ERP-Development.jpg"
                                alt="Avatar">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col wow fadeIn" data-wow-delay="0.6s">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <i class="fas icon-cdn">06</i>
                            <i class="fas fa-bullhorn icon-cdn-no"></i>
                            <div>
                                <h3 class="index-heading-text">Digital Marketing</h3>
                                <p>Elevate your brand's visibility with tailored digital marketing solutions. Our
                                    innovative strategies encompass SEO, content marketing, and social media,
                                    driving engagement and conversion while crafting compelling narratives that
                                    resonate.</p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/digital_marketing.jpg"
                                alt="Avatar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  -->


<!-- Product Start -->
<div class="container-fluid bg-light mt-0 mt-lg-5 py-5">
    <div class="container py-0 py-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.6s">
                <h1 class="mb-4">What are our Products</h1>
                <p class="mb-4">Leal Software Solution products are designed to empower businesses with reliable,
                    high-performance tools that streamline processes and enhance productivity. From enterprise
                    applications to specialized software solutions, each product is built to address critical needs,
                    ensuring seamless operation and scalability as your business grows. Our offerings are crafted
                    with a commitment to innovation and user-centered design, providing intuitive, robust, and
                    secure functionality.<br><br>

                    With a focus on adaptability, our products integrate smoothly with existing systems, meeting
                    unique business requirements and delivering measurable impact. Whether you need mobile
                    solutions, productivity tools, or advanced data management, our comprehensive product suite
                    drives efficiency and gives you a competitive edge. Transform your operations with products
                    designed to fuel growth and success.

                </p>
                <!-- <a class="btn btn-primary rounded-pill px-4" href="service.html#services-leal">Read More</a> -->
            </div>
            <div class="col-lg-7">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon btn-square">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/about_images/hvac.png"
                                            alt="Service Icon" style="width: 50px; height: 50px;">
                                    </div>
                                    <h5 class="mb-3">Leal HeatLoad Calculator</h5>
                                    <p>Leal HeatLoad Calculator simplifies HVAC design by providing precise heat
                                        load calculations for efficient energy and system optimization.
                                    </p>
                                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.6s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon btn-square">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_implemention.jpg"
                                            alt="Service Icon" style="width: 50px; height: 50px;">
                                    </div>
                                    <h5 class="mb-3">Odoo/Cloud Services</h5>
                                    <p>
                                        Odoo/Cloud Services optimize business operations with customizable ERP
                                        solutions, seamless cloud integration, and enhanced scalability for your
                                        organization.</p>
                                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pt-md-4">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon btn-square">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/about_images/task.png"
                                            alt="Service Icon" style="width: 50px; height: 50px;">
                                    </div>
                                    <h5 class="mb-3">TaskTrak Hub</h5>
                                    <p>TaskTrak Hub streamlines project management with efficient task tracking,
                                        team collaboration, and real-time progress monitoring for optimal
                                        productivity.</p>
                                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.6s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon btn-square">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_development.jpg"
                                            alt="Service Icon" style="width: 50px; height: 50px;">
                                    </div>
                                    <h5 class="mb-3">Software Development</h5>
                                    <p>Software Development delivers tailored, high-quality applications designed to
                                        meet unique business needs, ensuring scalability, efficiency, and
                                        innovation.</p>
                                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!--Key Features  -->
<section class="bg-primary myhome-container wow fadeIn" data-wow-delay="0.3s">
    <div class="opacity">
        <div class="container pb-3 pb-lg-5">
            <div class="text-center mb-5">
                <h2 class="text-white">Key Features Of Leal Software Solution</h2>
                <p class="text-white">Empowering businesses with innovative software solutions and exceptional
                    services.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border key-rounded shadow-sm">
                        <div class="me-3 index-key-feature">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/services_main/software-development.png"
                                alt="Service Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Custom Software Development</h5>
                            <p>Deliver tailored software solutions designed to meet your unique
                                business needs, ensuring enhanced efficiency, scalability, and seamless integration.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border key-rounded shadow-sm">
                        <div class="me-3 index-key-feature">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/services_main/app-dev.png"
                                alt="Service Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Software Consultancy</h5>
                            <p>Expert guidance to optimize your software strategy, ensuring the right
                                solutions align with your business goals for maximum efficiency and growth.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border key-rounded shadow-sm">
                        <div class="me-3 index-key-feature">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/services_main/native.png"
                                alt="Service Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Web & Mobile App Development</h5>
                            <p>Build dynamic, user-friendly web and mobile applications tailored to
                                your business needs, ensuring seamless performance across all devices.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border key-rounded shadow-sm">
                        <div class="me-3 index-key-feature"> <img
                                src="<?php bloginfo('template_directory'); ?>/img/services/services_main/erp_odoo.png"
                                alt="Service Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">ERP Integration</h5>
                            <p class="mb-2">Streamline your business processes with ERP integration, enabling
                                seamless data flow, improved efficiency, and centralized management.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border key-rounded shadow-sm">
                        <div class="me-3 index-key-feature"> <img
                                src="<?php bloginfo('template_directory'); ?>/img/services/services_main/sw_conslutancy.jpg"
                                alt="Service Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Cloud Integration</h5>
                            <p>Enable secure and efficient cloud integration to enhance scalability,
                                streamline operations, and ensure seamless access to data anytime, anywhere.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border key-rounded shadow-sm">
                        <div class="me-3 index-key-feature"> <img
                                src="<?php bloginfo('template_directory'); ?>/img/services/services_main/seo.png"
                                alt="Service Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">SEO Optimization</h5>
                            <p>Boost your online visibility with SEO optimization, driving higher
                                search rankings, increased traffic, and improved engagement for your business.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Key Featured -->


<!-- Content Section -->
<div class="home-services-container bg-light">
    <!-- Image -->
    <div class="home-services-image flex-grow-1 wow fadeIn" data-wow-delay="0.3s">
        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/bg-client.jpg"
            alt="Business Analytics Strategy" class="img-fluid w-100">
    </div>

    <!-- Text Box -->
    <div class="home-services-text text-start text-lg-center wow fadeIn" data-wow-delay="0.3s">
        <h2 class="fw-bold text-start">Building a successful business analytics strategy</h2>
        <p class="text-muted text-start">
            Leal Software Solution is a dynamic software company specializing in delivering tailored ERP solutions
            and business automation. With a focus on efficiency, scalability, and innovation, Leal helps businesses
            streamline operations through cutting-edge technologies.</p>
        <p class="text-start">Process by <a href="service.html" class="fw-bold text-decoration-none text-primary ">Click
                More!</a></p>
    </div>
</div>
<!-- End Content Section -->


<!-- Feature Start -->
<div class="container-fluid bg-dark feature pt-5">
    <div class="container pt-0 pt-lg-5 ">
        <div class="row g-5">
            <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.2s">
                <!-- <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Why Choose Us</div> -->
                <h1 class="text-white mb-4">Why Choose Us<br> Leal Software Solution</h1>
                <p class="text-light mb-4">Leal Software Solution, we combine innovative design, precise execution,
                    and top-quality maintenance to deliver exceptional refrigeration solutions. Our expertise,
                    cost-effective approaches, and commitment to energy efficiency and sustainability set us apart.
                    Choose us for reliable, tailored solutions that exceed industry standards and client
                    expectations.</p>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>Customized Software Solutions for Optimal Performance</span>
                </div>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>Empowering Your Business with Cutting-Edge Software</span>
                </div>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>Delivering Excellence Through Innovative Software Solutions</span>
                </div>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>Experience Excellence with Our Bespoke Software Services</span>
                </div>
                <div class="row g-4 pt-3">
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-users fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-white mb-0" data-toggle="counter-up">200</h2>
                                <p class="text-white mb-0">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-check fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-white mb-0" data-toggle="counter-up">50</h2>
                                <p class="text-white mb-0">Project Completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-user-tie fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-white mb-0" data-toggle="counter-up">12</h2>
                                <p class="text-white mb-0">Employees</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-map-marker-alt fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-white mb-0" data-toggle="counter-up">2</h2>
                                <p class="text-white mb-0">Location</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pb-5">
                <!-- First Flex Column Div -->
                <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4 wow fadeIn"
                    data-wow-delay="0.3s" style="background-color: rgba(256, 256, 256, 0.1);">
                    <div class="d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/coding.jpg" alt="Client 4"
                            class="me-3 mb-3" style="width: 70px; height: 70px;">
                        <div class="px-3">
                            <h4 class="text-white mb-3">Software Development</h4>
                        </div>
                    </div>
                    <p class="text-white mb-4">Our software development services offer robust, scalable solutions
                        tailored to business needs, combining industry knowledge with technical expertise to deliver
                        innovative products that improve efficiency, productivity, and competitive advantage.</p>
                </div>

                <!-- Second Flex Column Div -->
                <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4 wow fadeIn"
                    data-wow-delay="0.4s" style="background-color: rgba(256, 256, 256, 0.1);">
                    <div class="d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/app-development.jpg"
                            alt="Client 4" class="me-3 mb-3" style="width: 70px; height: 70px;">
                        <div class="px-3">
                            <h4 class="text-white mb-3">Application Development</h4>
                        </div>
                    </div>
                    <p class="text-white mb-4">Our application development process emphasizes intuitive design and
                        functionality, creating solutions that align with business goals and user expectations,
                        ensuring seamless integration, scalability, and exceptional user experiences.</p>
                </div>

                <!-- Third Flex Column Div -->
                <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4 wow fadeIn"
                    data-wow-delay="0.5s" style="background-color: rgba(256, 256, 256, 0.1);">
                    <div class="d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_development.jpg"
                            alt="Client 4" class="me-3 mb-3" style="width: 70px; height: 70px;">
                        <div class="px-3">
                            <h4 class="text-white mb-3">Website Development</h4>
                        </div>
                    </div>
                    <p class="text-white mb-4">Our website development team specializes in creating dynamic,
                        visually engaging websites that enhance online presence, align with brand values, and
                        provide seamless experiences across all devices to meet diverse client requirements.</p>
                </div>

                <!-- Fourth Flex Column Div -->
                <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4 wow fadeIn"
                    data-wow-delay="0.6s" style="background-color: rgba(256, 256, 256, 0.1);">
                    <div class="d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/digital-marketing.jpg"
                            alt="Client 4" class="me-3 mb-3" style="width: 70px; height: 70px;">
                        <div class="px-3">
                            <h4 class="text-white mb-3">Digital Marketing</h4>
                        </div>
                    </div>
                    <p class="text-white mb-4">Our digital marketing team focuses on data-driven strategies,
                        delivering targeted campaigns that maximize brand visibility, drive customer engagement, and
                        provide valuable insights to help businesses grow in today’s competitive digital landscape.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Case Study  -->
<section class="py-5 text-center bg-light">
    <div class="container">
        <h2 class="pb-5 fw-bold text-dark wow fadeIn" data-wow-delay="0.2s">Case Studies</h2>
        <div class="row g-4">
            <!-- Success Story 1 -->
            <div class="col-12 col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.2s">
                <div class="success-card"
                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/blogs_images/blogs2_group-developers-men-women-working-together.jpg');">
                    <div class="success-card-content">
                        <h6 class="bg-dark text-white px-2 py-1 d-inline-block rounded-pill mb-2">Case 1</h6>
                        <p class="mb-3"><strong>Healthcare Data Integration</strong>A healthcare provider sought a
                            solution to centralize patient records from multiple sources.</p>
                        <a href="case_study1.html"
                            class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 10%; aspect-ratio: 1; margin-left: 140px;">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Success Story 2 -->
            <div class="col-12 col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="success-card"
                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/blogs_images/blogs4_side-view-man-working-office.jpg');">
                    <div class="success-card-content">
                        <h6 class="bg-dark text-white px-2 py-1 d-inline-block rounded-pill mb-2">Case 2</h6>
                        <p class="mb-3"><strong>E-commerce Platform</strong>Our team partnered with a
                            growing e-commerce business to revamp its outdated platform.</p>
                        <a href="case_study2.html"
                            class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 10%; aspect-ratio: 1; margin-left: 140px;">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Success Story 3 -->
            <div class="col-12 col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.4s">
                <div class="success-card"
                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/blogs_images/blogs1_software_industry.jpg');">
                    <div class="success-card-content">
                        <h6 class="bg-dark text-white px-2 py-1 d-inline-block rounded-pill mb-2">Case 3</h6>
                        <p class="mb-3"><strong>TaskTrak</strong> global logistics firm upgraded its tracking
                            system.
                            Our end-to-end solution provided real-time tracking.</p>
                        <a href="case_study3.html"
                            class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 10%; aspect-ratio: 1; margin-left: 140px;">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Case Study  -->


<!--  -->
<div class="myhome-container wow fadeIn" data-wow-delay="0.4s">
    <div class="opacity">
        <div class="container text-center">
            <h6 class="text-warning fw-bold text-uppercase text-start text-lg-center">Cerate A System That Grows
                With You </h6>
            <h2 class="section-heading fs-3 fw-medium my-3 text-start text-lg-center">How we stand out - Our
                significant proposition</h2>
            <p class="text-white text-start">We are focused on providing cost-effective services with an emphasis on
                Customer
                First. We excel in creating innovative software solutions that are user-friendly & cross- browser
                compatible. We, as the best professional custom software development company in Pune, provides you
                the full service from consulting, Integrating software development consultancy into your business
                and then, custom financial software development to software integration with third-party CRM, and,
                then software maintenance and support
                <br><br>

                We are focused on providing cost-effective services with an emphasis on Customer First. We excel in
                creating innovative software solutions that are user-friendly & cross- browser compatible. We, as
                the best professional custom software development company in Pune, provides you the full service
                from consulting, Integrating software development consultancy into your business and then, custom
                financial software development to software integration with third-party CRM, and, then software
                maintenance and support
            </p>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="wcu-box">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/software-developer.png"
                                alt="Client 1" class="me-3 mb-0" style="width: 70px; height: 70px;">
                            <p class="text-white fs-6 pt-3">We deliver top-notch, innovative software solutions</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wcu-box">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/professional-success.png"
                                alt="Client 2" class="me-3 mb-0" style="width: 70px; height: 70px;">
                            <p class="text-white fs-6 pt-3">We’re dedicated to meeting deadlines and client
                                expectations</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wcu-box">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/save-time.png"
                                alt="Client 3" class="me-3 mb-0" style="width: 70px; height: 70px;">
                            <p class="text-white fs-6 pt-3">Our competitive pricing ensures cost-effective solutions
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wcu-box">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/coding.jpg"
                                alt="Client 4" class="me-3 mb-0" style="width: 70px; height: 70px;">
                            <p class="text-white fs-6 pt-3">Our software is highly secure, portable, and responsive
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wcu-box">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_implemention.jpg"
                                alt="Client 5" class="me-3 mb-0" style="width: 70px; height: 70px;">
                            <p class="text-white fs-6 pt-3">We provide flawless communication and project management
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wcu-box">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/badge.png"
                                alt="Client 6" class="me-3 mb-0" style="width: 70px; height: 70px;">
                            <p class="text-white fs-6 pt-3">Our quality assurance is backed by industry
                                certifications</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wcu-box">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/app-development.jpg"
                                alt="Client 7" class="me-3 mb-0" style="width: 70px; height: 70px;">
                            <p class="text-white fs-6 pt-3">Custom app development to meet your business needs</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wcu-box">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/coding (1).png"
                                alt="Client 8" class="me-3 mb-0" style="width: 70px; height: 70px;">
                            <p class="text-white fs-6 pt-3">Advanced coding techniques for seamless user experience
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wcu-box">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_conslutancy.jpg"
                                alt="Client 9" class="me-3 mb-0" style="width: 70px; height: 70px;">
                            <p class="text-white fs-6 pt-3">Expert consultancy to guide your software journey</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wcu-box">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_training.jpg"
                                alt="Client 10" class="me-3 mb-0" style="width: 70px; height: 70px;">
                            <p class="text-white fs-6 pt-3">Hands-on training to ensure effective software adoption
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>
<!--  -->


<!-- FAQs Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="mb-4">Frequently Asked Questions</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="accordion" id="accordionFAQ1">
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                What is software development?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Software development is the process of designing, creating, testing, and maintaining
                                applications, frameworks, or other software components.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What programming languages do you use?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                We use a variety of programming languages including Java, Python, JavaScript, C#,
                                and PHP, depending on the project's requirements.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How long does it take to develop software?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Development timelines depend on project complexity, but typical projects take
                                anywhere from a few weeks to several months.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Do you provide software maintenance services?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Yes, we offer ongoing maintenance to ensure the software remains secure, updated,
                                and functional.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordion" id="accordionFAQ2">
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.5s">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Can you integrate third-party tools with the software?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Yes, we specialize in integrating third-party APIs, plugins, and tools to enhance
                                functionality.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                How do you ensure the quality of the software?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                We follow strict quality assurance practices, including automated and manual
                                testing, to ensure the software meets all standards.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Do you provide custom software development?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Absolutely. We specialize in creating tailored software solutions that address
                                unique business needs.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                What industries do you work with?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                We serve a wide range of industries, including healthcare, finance, retail,
                                logistics, and education.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQs Start -->


<!--  -->
<!-- <section class="h-auto pb-5 bg-light">
        <div class="container">
            <h2 class="text-start text-lg-center pt-5 pb-3">CLIENTS CONFIRM OUR QUALITY</h2>
            <p class="text-start text-lg-center" style="font-weight: 500;">Our clients across the globe have nothing but
                good things
                to say about our services
                and cooperation. Don’t take our word for it, read our customer testimonials to learn more about our
                partnerships.</p>

            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-dark"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class=" bg-dark"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class=" bg-dark"></li>
                </ol>
                <div class="carousel-inner my-5">

                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-md-6 testimonial-container">
                                <div class="card p-4  testimonial text-center" style="border-radius: 0px; border: 0px;">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/md_leal.jpg" alt="Tomasz Stosio" class="me-3">
                                        <div class="px-3">
                                            <h5 class="mb-0 text-start">Mr. Subodh Murkewar</h5>
                                            <p class="small text-start">Director of Payment and Currency Exchange
                                                Department</p>
                                        </div>
                                    </div>
                                    <p class="text-start" style="font-size: 13px;">The team’s expertise and dedication
                                        are evident in their high-quality
                                        deliverables and proactive support. They quickly understood our complex
                                        requirements and delivered a tailored solution that exceeded our expectations.
                                        Their innovative approach and reliable performance have made them a valuable
                                        partner in our success. We highly recommend their services to anyone looking for
                                        top-notch software solutions and exceptional customer support."</p>
                                    <p><strong>Clutch: </strong><span class="text-primary">★★★★★</span></p>
                                </div>
                            </div>

                            <div class="col-md-6 testimonial-container">
                                <div class="card p-4  testimonial text-center" style="border-radius: 0px; border: 0px;">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/testimonial-2.jpg" alt="Wiktor Grabarczyk" class="me-3">
                                        <div class="px-3">
                                            <h5 class="mb-0 text-start">Mr. Suraj Patil</h5>
                                            <p class="small text-start">Director of Payment and Currency Exchange
                                                Department</p>
                                        </div>
                                    </div>
                                    <p class="text-start" style="font-size: 13px;">The team’s expertise and dedication
                                        are evident in their high-quality
                                        deliverables and proactive support. They quickly understood our complex
                                        requirements and delivered a tailored solution that exceeded our expectations.
                                        Their innovative approach and reliable performance have made them a valuable
                                        partner in our success. We highly recommend their services to anyone looking for
                                        top-notch software solutions and exceptional customer support."</p>
                                    <p><strong>Clutch: </strong><span class="text-primary">★★★★★</span></p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-6 testimonial-container">
                                <div class="card p-4  testimonial text-center" style="border-radius: 0px; border: 0px;">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/testimonial-2.jpg" alt="Client 3" class="me-3">
                                        <div class="px-3">
                                            <h5 class="mb-0 text-start">Mr. Aijnkya Dongare</h5>
                                            <p class="small text-start">Director of Payment and Currency Exchange
                                                Department</p>
                                        </div>
                                    </div>
                                    <p class="text-start" style="font-size: 13px;">The team’s expertise and dedication
                                        are evident in their high-quality
                                        deliverables and proactive support. They quickly understood our complex
                                        requirements and delivered a tailored solution that exceeded our expectations.
                                        Their innovative approach and reliable performance have made them a valuable
                                        partner in our success. We highly recommend their services to anyone looking for
                                        top-notch software solutions and exceptional customer support."</p>
                                    <p><strong>Clutch: </strong><span class="text-primary">★★★★★</span></p>
                                </div>
                            </div>

                            <div class="col-md-6 testimonial-container">
                                <div class="card p-4  testimonial text-center" style="border-radius: 0px; border: 0px;">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/testimonial-3.jpg" alt="Client 4" class="me-3">
                                        <div class="px-3">
                                            <h5 class="mb-0 text-start">Mr. Sunil Jatkar</h5>
                                            <p class="small text-start">Director of Payment and Currency Exchange
                                                Department</p>
                                        </div>
                                    </div>
                                    <p class="text-start" style="font-size: 13px;">The team’s expertise and dedication
                                        are evident in their high-quality
                                        deliverables and proactive support. They quickly understood our complex
                                        requirements and delivered a tailored solution that exceeded our expectations.
                                        Their innovative approach and reliable performance have made them a valuable
                                        partner in our success. We highly recommend their services to anyone looking for
                                        top-notch software solutions and exceptional customer support."</p>
                                    <p><strong>Clutch: </strong><span class="text-primary">★★★★★</span></p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-6 testimonial-container">
                                <div class="card p-4  testimonial text-center" style="border-radius: 0px; border: 0px;">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/testimonial-1.jpg" alt="Client 5" class="me-3">
                                        <div class="px-3">
                                            <h5 class="mb-0 text-start">Ms. Anjali Survase</h5>
                                            <p class="small text-start">Director of Payment and Currency Exchange
                                                Department</p>
                                        </div>
                                    </div>
                                    <p class="text-start" style="font-size: 13px;">The team’s expertise and dedication
                                        are evident in their high-quality
                                        deliverables and proactive support. They quickly understood our complex
                                        requirements and delivered a tailored solution that exceeded our expectations.
                                        Their innovative approach and reliable performance have made them a valuable
                                        partner in our success. We highly recommend their services to anyone looking for
                                        top-notch software solutions and exceptional customer support."</p>
                                    <p><strong>Clutch: </strong><span class="text-primary">★★★★★</span></p>
                                </div>
                            </div>

                            <div class="col-md-6 testimonial-container">
                                <div class="card p-4  testimonial text-center" style="border-radius: 0px; border: 0px;">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/testimonial-1.jpg" alt="Client 5" class="me-3">
                                        <div class="px-3">
                                            <h5 class="mb-0 text-start">Ms. Anamika</h5>
                                            <p class="small text-start">Director of Payment and Currency Exchange
                                                Department</p>
                                        </div>
                                    </div>
                                    <p class="text-start" style="font-size: 13px;">The team’s expertise and dedication
                                        are evident in their high-quality
                                        deliverables and proactive support. They quickly understood our complex
                                        requirements and delivered a tailored solution that exceeded our expectations.
                                        Their innovative approach and reliable performance have made them a valuable
                                        partner in our success. We highly recommend their services to anyone looking for
                                        top-notch software solutions and exceptional customer support."</p>
                                    <p><strong>Clutch: </strong><span class="text-primary">★★★★★</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span aria-hidden="true" class="fw-bold"><- Privious</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                    <span aria-hidden="true" class="fw-bold">Next -></span>
                </button>
            </div>
        </div>
    </section> -->
<!--  -->


<!-- Contact Us Start -->
<!-- <section class="bg-light py-5">
        <div class="container contact-section">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="h3 fw-bold mb-4 text-dark">Contact us</h3>
                    <div class="contact-info">
                        <p class="mb-0 text-muted ">Green Life Society B-102 Pune, 74-100-16-111</p>
                        <p class="mb-0 text-muted ">Mon - Fri: 9:00 am - 8:00 pm</p>
                        <p class="mb-2 text-muted ">Sat - Sun: 9:00 am - 10 pm</p>
                        <p class="text-primary fw-bold my-2">career@lealsolution.com</p>
                        <p class="text-primary fw-bold">Phone: +91 7410016111/13/14</p>
                    </div>

                    <h4 class="mt-5 pt-3">Follow us</h4>
                    <div class="follow-us-icons">
                        <a href="https://www.linkedin.com/company/leal-software-solution/" target="_blank"><i
                                class="bi bi-linkedin"></i></a>
                        <a href="https://www.instagram.com/smurkewar/" target="_blank"><i
                                class="bi bi-instagram"></i></a>
                        <a href="https://www.facebook.com/LealSoftwareSolution" target="_blank"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://www.youtube.com/@lealsoftwaresolutionpvtltd8833" target="_blank"><i
                                class="bi bi-youtube"></i></a>
                        <a href="https://wa.me/7410016111" target="_blank"><i class="bi bi-whatsapp"></i></a>
                    </div>

                    <p class="mt-4 text-muted text-dark">Copyright © 2024 www.lealsolution.com - All rights reserved</p>
                </div>

                <div class="col-md-6">
                    <h3 class="contact-title">Join Us</h3>
                    <form>
                        <div class="mb-3">
                            <label for="productSelect" class="form-label">Product</label>
                            <select class="form-select form-control" id="productSelect">
                                <option selected>HVAC Heat Load Calculator</option>
                                <option value="1">HLC Leal Bussiness Solution</option>
                                <option value="2">HVAC GADraw</option>
                                <option value="2">TaskTrak Hub Manager</option>
                                <option value="2">Odoo ERP Cloud</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Enter your name:</label>
                            <input type="text" class="form-control" id="nameInput" placeholder="Your name">
                        </div>
                        <div class="mb-3">
                            <label for="emailInput" class="form-label">Enter your email:</label>
                            <input type="email" class="form-control" id="emailInput" placeholder="Your email">
                        </div>
                        <div class="mb-3">
                            <label for="messageInput" class="form-label">Enter your message:</label>
                            <textarea class="form-control" id="messageInput" rows="3"
                                placeholder="Your message"></textarea>
                        </div>
                        <button class="btn btn-primary w-100 fw-bold py-2 bg-primary"
                            style=" border: none; border-radius: 5px; transition: background-color 0.3s;">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
<!-- Contact Us End -->



<?php
// get_sidebar();
get_footer();