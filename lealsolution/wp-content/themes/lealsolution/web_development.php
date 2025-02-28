<?php
/**
 * The main template file
 * Template Name: Web/App Development
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
                <h1 class="display-4 text-white mb-4 animated slideInRight">Web App Development</h1>
                <p class="text-white mb-4 pt-3 animated fadeInLeftBig">Leal Software Solution is a trusted software
                    company, dedicated to delivering cutting-edge technology solutions tailored to your business
                    needs. Our expertise spans various industries, enabling businesses to optimize their processes,
                    boost productivity, and drive innovation. Partner with us to transform your operations and
                    achieve long-term success through reliable software solutions.</p>
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
                                    alt="Slide 1" style="width: 70px; height: 70px;">
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



<section class="container-fluid">
    <!-- first div -->
    <div class="container pt-5 pb-0 pb-lg-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row">
            <!-- Left Side (Heading and Description) -->
            <div class="col-12 col-md-12 col-lg-6 d-flex justify-content-center">
                <div>
                    <h5 class="fw-bold fs-3 lh-base">Gain Website APP Development Services from Leal Software
                        Solution to
                        Upraise Your Digital Presence</h1>
                        <p class="text-muted mt-3">
                            Agile, functional, responsive, and highly functional, what else do you expect from your
                            Website?
                            We believe that without expertise, no impeccable website with a phenomenal interface
                            that can bind
                            users can come into existence. Thus, if you want it all on your website, show your trust
                            and rely on OrangeMantra.<br><br>
                            We are a reputed and competent WordPress Development Company that likes to cross our
                            creative boundaries
                            to deliver SEO-laden, efficient, and robust solutions based on WordPress.
                        </p>
                </div>
            </div>

            <!-- Right Side (Stats Section) -->
            <div class="col-12 col-md-12 col-lg-6 mt-4 mt-md-0">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-center mb-3">
                        <div class="text-center border border-secondary rounded-3 p-4 w-100 max-w-250">
                            <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center mx-auto"
                                style="width: 50px; height: 50px;">
                                <i class="bi bi-briefcase-fill fs-4"></i>
                            </div>
                            <h2 class="fw-bold my-2 text-primary">300+</h2>
                            <p class="text-muted fs-6">Clients Worldwide</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-center mb-3">
                        <div class="text-center border border-secondary rounded-3 p-4 w-100 max-w-250">
                            <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center mx-auto"
                                style="width: 50px; height: 50px;">
                                <i class="bi bi-award-fill fs-4"></i>
                            </div>
                            <h2 class="fw-bold my-2 text-primary">99%</h2>
                            <p class="text-muted fs-6">Success Rate</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-center mb-3">
                        <div class="text-center border border-secondary rounded-3 p-4 w-100 max-w-250">
                            <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center mx-auto"
                                style="width: 50px; height: 50px;">
                                <i class="bi bi-person-check-fill fs-4"></i>
                            </div>
                            <h2 class="fw-bold my-2 text-primary">80+</h2>
                            <p class="text-muted fs-6">WordPress Experts</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-center mb-3">
                        <div class="text-center border border-secondary rounded-3 p-4 w-100 max-w-250">
                            <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center mx-auto"
                                style="width: 50px; height: 50px;">
                                <i class="bi bi-emoji-smile-fill fs-4"></i>
                            </div>
                            <h2 class="fw-bold my-2 text-primary">89%</h2>
                            <p class="text-muted fs-6">Retention Rate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--first End div -->


    <!-- second div -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row">
            <!-- Left Section -->
            <div class="col-md-12 col-lg-6 col-12 wp-left-section">
                <h1 class="fw-bold text-start" style="font-size: 45px; -webkit-text-stroke: 2px #000000; paint-order: stroke fill; color: transparent;
                    margin-bottom: 10px;">Web App <br> Development</h1>
                <h2 style="font-size: 1.5rem; font-weight: bold;">Deliver Web and App Development Services</h2>
                <p style="line-height: 1.8;">
                    We specialize in delivering cutting-edge web and app development services tailored to meet the
                    unique
                    needs of your business. From crafting dynamic websites to building intuitive mobile apps, we
                    have the
                    expertise to bring your ideas to life. Feel free to contact us now for tailored solutions to
                    match all
                    your business requirements.
                </p>
            </div>

            <!-- Right Section -->
            <div class="col-md-12 col-lg-6 col-12 wp-right-section">
                <!-- Web Development -->
                <div class="scroll-item web-section-1"
                    style="border-top: 2px solid #007bff; background-color: #e3f2fd;">
                    <h4 style="font-weight: bold;">Custom Web Development</h4>
                    <p>
                        We provide high-quality custom web development services to help your business establish a
                        strong
                        online presence. Let us build feature-rich and dynamic websites tailored to your needs.
                    </p>
                </div>
                <div class="scroll-item web-section-2"
                    style="border-top: 2px solid #dc3545; background-color: #fdecea;">
                    <h4 style="font-weight: bold;">E-commerce Solutions</h4>
                    <p>
                        Boost your online sales with our custom e-commerce solutions. We create secure, scalable,
                        and user-friendly online stores tailored to your specific business requirements.
                    </p>
                </div>
                <div class="scroll-item web-section-3"
                    style="border-top: 2px solid #28a745; background-color: #e8f5e9;">
                    <h4 style="font-weight: bold;">Responsive Web Design</h4>
                    <p>
                        We ensure your website looks and performs flawlessly across all devices. Our responsive web
                        designs provide an excellent user experience on desktops, tablets, and mobile devices.
                    </p>
                </div>

                <!-- App Development -->
                <div class="scroll-item app-section-1"
                    style="border-top: 2px solid #ffc107; background-color: #fff8e1;">
                    <h4 style="font-weight: bold;">Mobile App Development</h4>
                    <p>
                        We specialize in building intuitive and user-friendly mobile applications. Partner with us
                        to create apps that deliver exceptional user experiences.
                    </p>
                </div>
                <div class="scroll-item app-section-2"
                    style="border-top: 2px solid #6c757d; background-color: #f8f9fa;">
                    <h4 style="font-weight: bold;">Cross-Platform App Development</h4>
                    <p>
                        Our cross-platform app development services ensure consistent performance across devices,
                        saving time and cost for your business.
                    </p>
                </div>
                <div class="scroll-item app-section-3"
                    style="border-top: 2px solid #17a2b8; background-color: #e0f7fa;">
                    <h4 style="font-weight: bold;">Custom App Solutions</h4>
                    <p>
                        We provide custom app development services to meet unique business requirements. Share your
                        ideas, and we'll turn them into reality.
                    </p>
                </div>

                <!-- PHP Laravel -->
                <div class="scroll-item php-section-1"
                    style="border-top: 2px solid #6610f2; background-color: #ede7f6;">
                    <h4 style="font-weight: bold;">PHP Laravel Development</h4>
                    <p>
                        Build robust and scalable web applications with our PHP Laravel development services. We
                        ensure high performance and security in every project we deliver.
                    </p>
                </div>
                <div class="scroll-item php-section-2"
                    style="border-top: 2px solid #fd7e14; background-color: #fff3e0;">
                    <h4 style="font-weight: bold;">Custom Laravel Solutions</h4>
                    <p>
                        Get tailor-made Laravel solutions that fit your business requirements perfectly. We craft
                        efficient, feature-rich, and high-performing web apps.
                    </p>
                </div>
                <div class="scroll-item php-section-3"
                    style="border-top: 2px solid #20c997; background-color: #e8f5e9;">
                    <h4 style="font-weight: bold;">Laravel API Development</h4>
                    <p>
                        We offer Laravel API development services to enhance the connectivity and functionality of
                        your web and mobile applications.
                    </p>
                </div>
            </div>

        </div>
    </div>
    <!-- end second div -->


    <!-- third div -->
    <div class="container py-5 my-0 my-lg-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-7 d-flex justify-content-center">
                <div>
                    <h5 class="fw-bold fs-3 text-start">Elevate Your Web Presence with Our PHP Laravel Development
                        Services</h5>
                    <p class="text-muted mt-3 text-start">
                        Looking to create a feature-rich, secure, and scalable business website or web application?
                        Look no further than our top-notch PHP Laravel development services. With a proven track
                        record in delivering cutting-edge web solutions, we specialize in leveraging the power of
                        Laravel, one of the most robust PHP frameworks, to transform your business ideas into
                        reality.<br><br>

                        Laravel stands out as a highly efficient framework, offering an elegant syntax, seamless
                        integration capabilities, and unmatched flexibility. With its extensive ecosystem and active
                        community support, Laravel enables the development of dynamic, high-performing, and
                        future-ready web applications.<br><br>

                        Our team of skilled Laravel developers excels in crafting tailor-made solutions that cater
                        to your unique business needs. Whether you require a custom web app, API integration, or
                        enterprise-grade solutions, we are here to deliver exceptional quality at cost-effective
                        rates.<br><br>

                        Partner with us to unlock the potential of PHP Laravel development and take your online
                        presence to the next level.
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-5 mt-4 mt-md-0 d-flex justify-content-center align-items-center">
                <img src="<?php bloginfo('template_directory'); ?>/img/web_app_images/Web App Development photos (1).jpg"
                    alt="Description of Image" class="img-fluid" style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>


    <!-- fourth div -->
    <div class="container my-5 wow fadeIn" data-wow-delay="0.3s">
        <h5 class="fw-bold fs-3 text-start text-lg-center">Comprehensive Web Application Development Services</h5>
        <p class="pb-3 text-start text-lg-center">Explore our range of services to bring your web application
            development project to life with
            PHP Laravel.</p>

        <div class="row g-4 text-start">
            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/app-development.jpg"
                            alt="Custom Laravel Development" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">Custom Laravel Development</h5>
                    <p style="font-size: 15px;">We specialize in developing tailor-made web applications with
                        Laravel, ensuring scalability, performance, and seamless functionality.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/software-developer.png"
                            alt="API Integration" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">API Integration</h5>
                    <p style="font-size: 15px;">Our team provides seamless API integrations, enabling your web app
                        to connect with third-party services effortlessly.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_support.jpg"
                            alt="Maintenance & Support" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">Maintenance & Support</h5>
                    <p style="font-size: 15px;">We ensure your Laravel web app stays up-to-date, secure, and
                        functional with our maintenance and support services.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_development.jpg"
                            alt="UI/UX Design" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">UI/UX Design</h5>
                    <p style="font-size: 15px;">Our design experts focus on creating intuitive and visually
                        appealing interfaces to enhance user experiences.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_implemention.jpg"
                            alt="Enterprise Solutions" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">Enterprise Solutions</h5>
                    <p style="font-size: 15px;">We build enterprise-grade web applications to meet complex business
                        requirements and deliver robust solutions.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_integration.jpg"
                            alt="Third-Party Integration" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">Third-Party Integration</h5>
                    <p style="font-size: 15px;">Our developers integrate third-party modules and plugins seamlessly
                        to expand your web application's capabilities.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- fifth div -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row">
            <!-- Left Section -->
            <div class="col-md-12 col-lg-6 col-12 wp-left-section">
                <h1 class="fw-bold text-start"
                    style="font-size: 35px; -webkit-text-stroke: 2px #000000; paint-order: stroke fill; color: transparent; margin-bottom: 10px;">
                    Procedure of Our<br> PHP Development Services</h1>
                <h2 style="font-size: 1.5rem; font-weight: bold;">Deliver Web and App Development Services</h2>
                <p style="line-height: 1.8;">
                    We follow an agile approach to the PHP Development services to transform your ideas into
                    reality. Our experienced PHP developers with vast years of experience assist your software
                    development journey. Even involve you at every stage to ensure transparency.<br><br>

                    Our strong PHP web development company focuses on adaptability and versatility to meet your
                    particular business needs. We offer end to end development services, including custom
                    arrangements, outsider mixes, and execution enhancement.
                </p>
            </div>

            <!-- Right Section -->
            <div class="col-md-12 col-lg-6 col-12 wp-right-section">
                <!-- Web Development -->
                <div class="scroll-item web-section-1 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-list-alt" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Project Scope Definition</h5>
                            <p style="margin: 0;">We start by defining the scope of your PHP project by
                                understanding your business goals, requirements, and desired features. This helps
                                create a clear blueprint for the development process.</p>
                        </div>
                    </div>
                </div>

                <div class="scroll-item web-section-2 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-cogs" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Technology Selection</h5>
                            <p style="margin: 0;">We carefully choose the best technologies and tools to ensure the
                                performance, security, and scalability of your PHP project. Our team ensures that
                                the best-fit technology stack is selected for your needs.</p>
                        </div>
                    </div>
                </div>

                <div class="scroll-item web-section-3 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-laptop-code" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Development & Coding</h5>
                            <p style="margin: 0;">Our skilled PHP developers start coding based on the defined
                                project scope, ensuring best practices, quality code, and following the latest PHP
                                frameworks to deliver high-performance web applications.</p>
                        </div>
                    </div>
                </div>

                <!-- App Development -->
                <div class="scroll-item app-section-1 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-bug" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Testing & Debugging</h5>
                            <p style="margin: 0;">Before launching, we thoroughly test and debug your PHP
                                application to ensure it meets all quality standards, ensuring a bug-free and
                                user-friendly experience.</p>
                        </div>
                    </div>
                </div>

                <div class="scroll-item app-section-2 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-cloud-upload-alt" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Deployment & Launch</h5>
                            <p style="margin: 0;">We deploy your PHP application on the selected servers or hosting
                                environments, ensuring seamless integration and readiness for public access with
                                full functionality.</p>
                        </div>
                    </div>
                </div>

                <div class="scroll-item app-section-3 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-headset" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Post-Launch Support</h5>
                            <p style="margin: 0;">After launching your PHP application, we provide ongoing support
                                and maintenance to resolve any issues, implement updates, and ensure the application
                                continues to meet your needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- six div -->
    <div class="container text-start text-lg-center py-5 my-0 my-lg-3 wow fadeIn" data-wow-delay="0.3s">
        <h5 class="fw-bold fs-3 pb-3">Technical Stack used in our Web App Development Company</h5>
        <p>As a forerunner in the field of WordPress Website development services, we rely upon the latest tools and
            technologies to provide you with top-notch solutions of your choice.</p>

        <div class="row g-4">
            <!-- Languages -->
            <div class="col-md-6 col-lg-3">
                <div class="p-3"
                    style="border: 2px solid #1363C6; border-radius: 10px; background-color: rgb(240, 244, 245);">
                    <h5 class="text-white text-center bg-primary py-2" style="border-radius: 10px 10px 0 0;">
                        Languages</h5>
                    <ul class="list-unstyled text-start">
                        <li class=py-2><img src="<?php bloginfo('template_directory'); ?>/img/wp_images/php.jpg"
                                alt="PHP" style="width: 25px;"> PHP</li>
                        <li class=py-2><img src="<?php bloginfo('template_directory'); ?>/img/wp_images/html.jpg"
                                alt="HTML" style="width: 25px;"> HTML</li>
                        <li class=py-2><img src="<?php bloginfo('template_directory'); ?>/img/wp_images/CSS.jpg"
                                alt="CSS" style="width: 25px;"> CSS</li>
                        <li class=py-2><img src="<?php bloginfo('template_directory'); ?>/img/wp_images/MySQL.jpg"
                                alt="MySQL" style="width: 25px;"> MySQL
                        </li>
                        <li class=py-2><img src="<?php bloginfo('template_directory'); ?>/img/wp_images/Javascript.jpg"
                                alt="JavaScript" style="width: 25px;">
                            JavaScript</li>
                    </ul>
                </div>
            </div>

            <!-- Tools -->
            <div class="col-md-6 col-lg-3">
                <div class="p-3"
                    style="border: 2px solid #1363C6; border-radius: 10px; background-color: rgb(240, 244, 245);">
                    <h5 class="text-white text-center bg-primary py-2" style="border-radius: 10px 10px 0 0;">Tools
                    </h5>
                    <ul class="list-unstyled text-start">
                        <li class=py-2><img src="<?php bloginfo('template_directory'); ?>/img/wp_images/sublime.jpg"
                                alt="Sublime Text" style="width: 25px;">
                            Sublime Text</li>
                        <li class=py-2><img src="<?php bloginfo('template_directory'); ?>/img/wp_images/PhpStorm-1.jpg"
                                alt="PhpStorm" style="width: 25px;">
                            PhpStorm
                        </li>
                        <li class=py-2><img src="<?php bloginfo('template_directory'); ?>/img/wp_images/mamp.jpg"
                                alt="MAMP" style="width: 25px;"> MAMP</li>
                        <li class=py-2><img src="<?php bloginfo('template_directory'); ?>/img/wp_images/xamp.jpg"
                                alt="XAMPP" style="width: 25px;"> XAMPP
                        </li>
                        <li class=py-2><img src="<?php bloginfo('template_directory'); ?>/img/wp_images/git.jpg"
                                alt="Git" style="width: 25px;"> Git</li>
                    </ul>
                </div>
            </div>

            <!-- Frameworks -->
            <div class="col-md-6 col-lg-3">
                <div class="p-3"
                    style="border: 2px solid #1363C6; border-radius: 10px; background-color: rgb(240, 244, 245);">
                    <h5 class="text-white text-center bg-primary py-2" style="border-radius: 10px 10px 0 0;">
                        Frameworks</h5>
                    <ul class="list-unstyled text-start">
                        <li class=py-2><img src="<?php bloginfo('template_directory'); ?>/img/wp_images/Wordpress.jpg"
                                alt="Beans" style="width: 25px;">
                            Beans
                        </li>
                        <li class=py-2><img src="<?php bloginfo('template_directory'); ?>/img/wp_images/bootstrap.jpg"
                                alt="Bootstrap" style="width: 25px;">
                            Bootstrap</li>
                        <li class=py-2><img src="<?php bloginfo('template_directory'); ?>/img/wp_images/Elementor.jpg"
                                alt="Elementor" style="width: 25px;">
                            Elementor</li>
                        <li class=py-2><img src="<?php bloginfo('template_directory'); ?>/img/wp_images/Divi.jpg"
                                alt="Divi" style="width: 25px;"> Divi</li>
                        <li class=py-2><img
                                src="<?php bloginfo('template_directory'); ?>/img/wp_images/genesis-framework.jpg"
                                alt="Genesis Framework" style="width: 25px;">
                            Genesis Framework</li>
                    </ul>
                </div>
            </div>

            <!-- Plugins -->
            <div class="col-md-6 col-lg-3">
                <div class="p-3"
                    style="border: 2px solid #1363C6; border-radius: 10px; background-color: rgb(240, 244, 245);">
                    <h5 class="text-white text-center bg-primary py-2" style="border-radius: 10px 10px 0 0;">Plugins
                    </h5>
                    <ul class="list-unstyled text-start">
                        <li class=py-2><img src="<?php bloginfo('template_directory'); ?>/img/wp_images/Jetpack.jpg"
                                alt="Jetpack" style="width: 25px;">
                            Jetpack
                        </li>
                        <li class=py-2><img src="<?php bloginfo('template_directory'); ?>/img/wp_images/yoast.jpg"
                                alt="Yoast SEO" style="width: 25px;">
                            Yoast
                            SEO</li>
                        <li class=py-2><img
                                src="<?php bloginfo('template_directory'); ?>/img/wp_images/woocommerce-1.jpg"
                                alt="WooCommerce" style="width: 25px;">
                            WooCommerce</li>
                        <li class=py-2><img
                                src="<?php bloginfo('template_directory'); ?>/img/wp_images/wp-super-cache.jpg"
                                alt="WP Super Cache" style="width: 25px;"> WP
                            Super Cache</li>
                        <li class=py-2><img src="<?php bloginfo('template_directory'); ?>/img/wp_images/WPForms.jpg"
                                alt="WPForms" style="width: 25px;">
                            WPForms
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- seven div -->
    <div class="container my-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row align-items-center">
            <!-- Left Content -->

            <div class="text-start text-lg-center">
                <h5 class="fw-bold fs-3 pb-3">Trusted Web App Development Company in India</h5>
                <p style="color: #555;">
                    From ideation to deployment with custom development and API integration - we offer
                    a comprehensive web app solution for your business.
                    Recognized as a top web app development company in India, ensuring client satisfaction is
                    at the heart of our service. Here’s why you should engage
                    <span style="font-weight: bold; color: #1363C6;">web app development services</span> from us:
                </p>
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="row g-4 pt-5 justify-content-center">
                    <!-- Experienced Professionals -->
                    <div class="col-md-5 custom-card-container">
                        <div class="custom-card-image-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/wp_images/php.jpg" alt="Icon"
                                style="max-width: 100%; height: auto;">
                        </div>
                        <div class="text-start">
                            <h5>Experienced Professionals</h5>
                            <p>We hire only accomplished and seasoned developers to provide an unparalleled web
                                solution.
                                Irrespective of the project complexity, we can deliver you the perfect service.</p>
                        </div>
                    </div>

                    <!-- User-Friendly Interface -->
                    <div class="col-md-5 custom-card-container">
                        <div class="custom-card-image-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/wp_images/bootstrap.jpg" alt="Icon"
                                style="max-width: 100%; height: auto;">
                        </div>
                        <div class="text-start">
                            <h5>User-Friendly Interface</h5>
                            <p>We design intuitive and user-friendly interfaces to ensure a seamless experience for
                                all users, regardless of their technical expertise.</p>
                        </div>
                    </div>

                    <!-- Scalable Web Solutions -->
                    <div class="col-md-5 custom-card-container">
                        <div class="custom-card-image-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/wp_images/xamp.jpg" alt="Icon"
                                style="max-width: 95%; height: auto;">
                        </div>
                        <div class="text-start">
                            <h5>Scalable Web Solutions</h5>
                            <p>Our web apps are built to scale, ensuring that they can grow alongside your business
                                needs and handle increased traffic and data.</p>
                        </div>
                    </div>

                    <!-- Tailored Web Development Strategy -->
                    <div class="col-md-5 custom-card-container">
                        <div class="custom-card-image-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/wp_images/sublime.jpg" alt="Icon"
                                style="max-width: 100%; height: auto;">
                        </div>
                        <div class="text-start">
                            <h5>Tailored Web Development Strategy</h5>
                            <p>Our web development team employs a personalized, results-driven approach to create
                                robust, user-friendly applications that are optimized for performance and designed
                                to scale with your business.</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Image Section -->
            <div class="col-md-12 col-lg-4 p-md-5 align-self-center text-center text-lg-center">
                <img src="<?php bloginfo('template_directory'); ?>/img/web_app_images/Web App Development photos (1).jpg"
                    alt="Team Image" class="img-fluid">
            </div>
        </div>
        <!-- Button Section -->
        <div class="d-flex justify-content-center text-center text-md-start mt-4">
            <button class="btn btn-primary px-4 py-2"
                style="background-color: #1363C6; border: none; border-radius: 5px;">LET’S TEAM UP</button>
        </div>
    </div>


    <!-- eight div -->
    <div class="container text-start py-5 wow fadeIn" data-wow-delay="0.3s">
        <h1 class="fw-bold mb-3" style="font-size: 2rem;">Why Choose #1 Web App Development Solution?
        </h1>
        <p class="mb-4" style="font-size: 1rem; color: #555;">Choosing #1 Web App Development Solution
            comes
            with a host of compelling reasons that set us apart and make us the preferred choice for your digital
            needs:
        </p>
        <div class="row gy-4">
            <!-- Card 1 -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3" style="background-color: #f8f9fa;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_development.jpg" alt="Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Experience:</h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">With a foundation dating back to 1999,
                            we bring over two decades of experience in web app development and digital solutions.
                            Our long-standing presence speaks volumes about our expertise and reliability.</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3" style="background-color: #f8f9fa;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_implemention.jpg" alt="Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Comprehensive Web
                            Solutions:</h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">We offer a wide range of web app
                            services,
                            including Custom Development, API Integration, UX/UI Design, Cloud Solutions, and more.
                            You can find all your web development needs under one roof.</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3" style="background-color: #f8f9fa;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_training.jpg" alt="Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Creative and Customized
                            Approach:</h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">Our team is driven by passion and
                            creativity, ensuring that each web app is tailor-made to suit your brand's unique
                            requirements and target audience.</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3" style="background-color: #f8f9fa;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_support.jpg" alt="Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Agile Development
                            Methodology:</h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">We follow agile methodologies to
                            ensure flexibility and efficiency in our development process, allowing for quick
                            iterations and timely delivery.</p>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3" style="background-color: #f8f9fa;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/coding.jpg" alt="Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Robust Security Measures:
                        </h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">We prioritize security in our web app
                            development, implementing best practices to protect your data and ensure a safe user
                            experience.</p>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3" style="background-color: #f8f9fa;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/coding (1).png" alt="Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Post-Launch Support:</h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">Our commitment to you doesn't end at
                            launch. We provide ongoing support and maintenance to ensure your web app runs smoothly.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3" style="background-color: #f8f9fa;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/software-developer.png"
                        alt="Icon" style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Client-Centric Approach:
                        </h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">We believe in building strong
                            relationships with our clients, ensuring that your feedback is integral to our
                            development process.</p>
                    </div>
                </div>
            </div>
            <!-- Card 8 -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3" style="background-color: #f8f9fa;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/save-time.png" alt="Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Innovative Technologies:
                        </h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">We leverage the latest technologies
                            and frameworks to build high-performance web apps that meet modern standards.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->


<!--  -->
<div class="container-fluid bg-primary text-white wow fadeIn" data-wow-delay="0.3s">
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="fw-bold text-start"
                    style="font-size: 45px; -webkit-text-stroke: 2px #000000; paint-order: stroke fill; color: transparent; margin-bottom: 10px;">
                    Web App Development</h1>
                <h5 class="text-start" style="font-size: 1.5rem; font-weight: bold; color: #ffffff;">Delivering
                    Excellence<br> With Over Two Decades of Experience!</h5>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <p style="font-size: 1rem; line-height: 1.8;">
                    Looking to elevate your web application? At Pixlogix, we don’t just focus on web app design &
                    development; we also provide support with API integrations, custom backend development, modern
                    frameworks, and much more.
                </p>
            </div>
            <div class="col-md-6">
                <p style="font-size: 1rem; line-height: 1.8;">
                    We are well-versed in popular web technologies and frameworks. Our team works daily with
                    renowned tools and platforms such as React, Angular, Node.js, and more to deliver high-quality
                    web applications.
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <p style="font-size: 1rem; line-height: 1.8;">
                    Our experts can assist you with eCommerce solutions, empowering your online stores with robust
                    functionalities. As a leading web app development company in India, we adopt a modern
                    development approach to implement high-end technology projects.
                </p>
            </div>
            <div class="col-md-6">
                <p style="font-size: 1rem; line-height: 1.8;">
                    We also provide advanced integrations and plugins for your web applications, including but not
                    limited to payment gateways, analytics tools, and custom APIs. Ready to bring your vision to
                    life with our Web App Development Services? Share your idea, and we will connect you with
                    high-quality personalized solutions to match your requirements.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- -->


<!-- Start this challenges section -->
<section class="wow fadeIn" data-wow-delay="0.3s">
    <div class="container py-5">
        <div class="text-start text-lg-center">
            <h2>Challenges Faced By Businesses In Web App Development</h2>
            <p>
                In the rapidly evolving landscape of web app development, companies encounter numerous challenges
                when they lack an integrated and high-performance web application solution. Below are some common
                obstacles that organizations can easily overcome with the implementation of a reliable and scalable
                web app system.
            </p>
        </div>

        <!-- Challenges Section -->
        <div class="row text-center g-4 mt-2 mt-lg-5">
            <div class="col-md-4 challenge-item text-start services-number-container"
                style=" border: 3px solid #1363C6; border-radius: 10px;">
                <span class="number-background">01</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Weak User Experience (UX)</h4>
                    <p>Many web applications struggle to provide a seamless user experience, which is crucial
                        for
                        user retention and satisfaction. Issues such as poor navigation, slow load times, and
                        unresponsive designs can lead to user frustration and high bounce rates. By implementing
                        user-centered design principles, conducting usability testing, and gathering user
                        feedback,
                        businesses can significantly enhance the overall experience and ensure that their
                        applications meet user expectations.
                    </p>
                </div>
            </div>
            <div class="col-md-4 challenge-item text-start services-number-container"
                style=" border: 3px solid #1363C6; border-radius: 10px;">
                <span class="number-background">02</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Lack of Scalability</h4>
                    <p>As businesses grow, their web applications must be able to scale accordingly to handle
                        increased traffic and data. Many applications are built without considering future growth,
                        leading to performance issues and downtime. Adopting a microservices architecture can help
                        ensure that applications can scale efficiently as demand increases, allowing businesses to
                        add new features and services without compromising performance or user experience.</p>
                </div>
            </div>
            <div class="col-md-4 challenge-item text-start services-number-container"
                style=" border: 3px solid #1363C6; border-radius: 10px;">
                <span class="number-background">03</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Data Security and Privacy Concerns</h4>
                    <p>With increasing cyber threats and stringent regulations, ensuring data security and
                        compliance with laws like GDPR is a major challenge for web app developers. Protecting
                        sensitive user data from breaches and unauthorized access is paramount. Implementing robust
                        security measures, such as encryption, regular security audits, and secure coding practices,
                        is essential to safeguard user information and maintain trust in the application.</p>
                </div>
            </div>

            <!-- New Challenges 04, 05, 06 -->
            <div class="col-md-4 challenge-item text-start services-number-container"
                style=" border: 3px solid #1363C6; border-radius: 10px;">
                <span class="number-background">04</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Integration Challenges</h4>
                    <p>Integrating various third-party services and APIs can be complex and time-consuming, often
                        leading to compatibility issues and delays in development. Many businesses face challenges
                        when trying to connect their web applications with existing systems or external services. A
                        well-planned integration strategy, thorough documentation, and extensive testing can help
                        mitigate these challenges, ensuring that all components work together seamlessly and
                        efficiently.</p>
                </div>
            </div>
            <div class="col-md-4 challenge-item text-start services-number-container"
                style=" border: 3px solid #1363C6; border-radius: 10px;">
                <span class="number-background">05</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Performance Optimization</h4>
                    <p>Web applications often face performance issues due to inefficient code, large file sizes, or
                        unoptimized databases. Slow load times can lead to user dissatisfaction and increased bounce
                        rates. Regular performance testing and optimization techniques, such as caching, code
                        minification, and database indexing, are crucial for maintaining a fast and responsive
                        application. Ensuring optimal performance is essential for user retention and overall
                        business success.</p>
                </div>
            </div>
            <div class="col-md-4 challenge-item text-start services-number-container"
                style=" border: 3px solid #1363C6; border-radius: 10px;">
                <span class="number-background">06</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Talent Acquisition and Retention</h4>
                    <p>Finding and retaining skilled developers can be a significant challenge in the competitive
                        tech landscape. Many companies struggle to attract top talent due to high demand and limited
                        resources. To overcome this challenge, businesses must invest in training, create a positive
                        work environment, and offer competitive salaries and benefits. Fostering a culture of
                        innovation and continuous learning can also help in attracting and retaining skilled
                        professionals in web app development.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End this challenges section -->


<!-- Feature Start -->
<section class="pb-5 wow fadeIn" data-wow-delay="0.3s">
    <div class="container mt-5">
        <h2 class="text-start py-3">Web App Development Services - Leal Software Solution</h2>
        <div class="text-start">
            <p>
                At Leal Software Solution, we specialize in creating dynamic and scalable web applications tailored
                to
                your business needs. From user-friendly interfaces to robust backends, our solutions empower
                businesses
                to achieve their goals with cutting-edge technology. Explore our key features below.
            </p>

            <div class="row mt-4">
                <!-- Custom Web Application Development -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/technical-support.png"
                            alt="Custom Web Application Development" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Custom Web Application Development: Build tailored solutions for unique
                            business requirements.</span>
                    </div>
                </div>

                <!-- Cloud-Based Solutions -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/gaps.png"
                            alt="Cloud-Based Solutions" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Cloud-Based Solutions: Enhance accessibility and scalability with cloud
                            integration.</span>
                    </div>
                </div>

                <!-- Maintenance & Support -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/suitcase.png"
                            alt="Maintenance & Support" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Maintenance & Support: Ensure your web app runs smoothly with our ongoing
                            support services.</span>
                    </div>
                </div>

                <!-- Responsive UI/UX Design -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/technical-support.png"
                            alt="Responsive UI/UX Design" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Responsive UI/UX Design: Deliver intuitive and engaging user
                            experiences across devices.</span>
                    </div>
                </div>

                <!-- Backend Development -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/needs.png"
                            alt="Backend Development" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Backend Development: Build secure and scalable server-side
                            architectures.</span>
                    </div>
                </div>

                <!-- API Integration -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/mobile-shopping.png"
                            alt="API Integration" class="feature-icon" width="50" height="50">
                        <span class="ps-3">API Integration: Seamlessly integrate third-party services and tools into
                            your web app.</span>
                    </div>
                </div>


                <!-- Security-Focused Development -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/enterprise.png"
                            alt="Security-Focused Development" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Security-Focused Development: Protect your data with advanced security
                            measures.</span>
                    </div>
                </div>

                <!-- Performance Optimization -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/cooperation.png"
                            alt="Performance Optimization" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Performance Optimization: Fine-tune web apps for speed and seamless
                            performance.</span>
                    </div>
                </div>

                <!-- Real-Time Data Integration -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/user-experience.png"
                            alt="Real-Time Data Integration" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Real-Time Data Integration: Leverage real-time data to power your
                            applications.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature End -->



<!-- Web App Development Section -->
<div class="container text-start text-lg-center wow fadeIn" data-wow-delay="0.3s" style="background-color: #f9f9f9;">
    <div style="padding: 10px; max-width: 1200px; margin: auto;">
        <div>
            <h5 class="fs-2 fw-bold">Why Choose <span style="color: #007bff;">Leal Software Solution</span> for
                Web App Development Services?</h5>
            <p class="py-3" style="font-size: 1rem;">We provide a wide range of solutions through our
                Web App Development Services that can be extremely beneficial for you and your clients, including:
            </p>
        </div>
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 300px; padding: 10px;">
                <ul style="list-style-type: none; padding-left: 0; font-size: 1rem;">
                    <li class="list-item"><span>&#9670;</span> We can develop robust, creative, and fully functional
                        web applications tailored to your company’s requirements.</li>
                    <li class="list-item"><span>&#9670;</span> If you need to add specific features to your
                        application,
                        we can develop innovative modules to enhance its functionality.</li>
                    <li class="list-item"><span>&#9670;</span> Our designs are completely responsive, ensuring that
                        users
                        on any device can access your web app seamlessly.</li>
                    <li class="list-item"><span>&#9670;</span> We provide a range of customization options, allowing
                        our
                        experts to develop smart features based on your needs.</li>
                    <li class="list-item"><span>&#9670;</span> Our tech experts can help you build a smart and
                        customized content management system for your web application.</li>
                    <li class="list-item"><span>&#9670;</span> We also offer e-commerce development services to
                        create
                        productive and highly profitable online stores.</li>
                </ul>
            </div>
            <div style="flex: 1; min-width: 300px; padding: 10px;">
                <ul style="list-style-type: none; padding-left: 0; font-size: 1rem;">
                    <li class="list-item"><span>&#9670;</span> If you already have a web application and want to
                        migrate
                        it to a new platform, we can help ensure a smooth transition.</li>
                    <li class="list-item"><span>&#9670;</span> To enhance your company’s content marketing, we can
                        build
                        a robust blog or content platform for you.</li>
                    <li class="list-item"><span>&#9670;</span> If you want a customized theme for your application
                        that
                        aligns with your brand image, our team can create that creatively!</li>
                    <li class="list-item"><span>&#9670;</span> Not just the theme, but with our <strong>Web App
                            Development Services</strong>, you can get a completely customized template.</li>
                    <li class="list-item"><span>&#9670;</span> Our experts can also install pre-designed templates
                        in
                        your application and ensure they function smoothly.</li>
                    <li class="list-item"><span>&#9670;</span> We provide quick and dedicated support services
                        during
                        your use of any of our products or services.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


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
                                What is web app development?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="# accordionFAQ1">
                            <div class="accordion-body">
                                Web app development involves designing and building applications that run on web
                                servers, ensuring custom functionality and seamless performance across various
                                devices.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Can you customize web app themes?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Yes, we can customize existing web app themes to meet your specific design and
                                functionality needs.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Do you offer web app plugin development?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Absolutely. We specialize in developing custom plugins to add unique features to
                                your web application.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Is web app development secure for my application?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Yes, web app development can be secure when configured properly. We implement best
                                practices to ensure your application is protected from vulnerabilities.
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
                                Can you integrate third-party tools with my web app?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Yes, we can seamlessly integrate third-party tools, APIs, and services with your web
                                application.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                How do you optimize web applications for performance?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                We optimize web applications using caching, CDN integration, image optimization, and
                                clean coding practices.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Can you migrate my existing application to a new platform?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordion FAQ2">
                            <div class="accordion-body">
                                Yes, we provide migration services to transfer your existing application to a new
                                platform without any data loss.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Do you provide ongoing support for web applications?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Yes, we offer ongoing support and maintenance to keep your web application running
                                smoothly and securely.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->


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