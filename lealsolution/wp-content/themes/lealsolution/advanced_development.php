<?php
/**
 * The main template file
 * Template Name: Advanced Development
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
                <h1 class="display-4 text-white mb-4 animated slideInRight">Advanced Programming & Frameworks</h1>
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
    <div class="container my-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row">
            <div class="col-12 text-start text-lg-center">
                <h5 class="fw-bold fs-3">Gain WordPress Website Development Services from Leal Software Solution to
                    Upraise
                    Your
                    Digital Presence</h1>
                    <p class="text-muted mt-3">
                        Agile, functional, responsive, and highly functional, what else do you expect from your
                        Website?
                        We believe that without expertise, no impeccable website with a phenomenal interface that
                        can
                        bind
                        users can come into existence. Thus, if you want it all on your website, show your trust and
                        rely on OrangeMantra.
                        We are a reputed and competent WordPress Development Company that likes to cross our
                        creative
                        boundaries
                        to deliver SEO-laden, efficient, and robust solutions based on WordPress.
                    </p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center mb-3">
                <div class="text-center border border-secondary rounded-3 p-4 w-100 max-w-250">
                    <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center mx-auto"
                        style="width: 70px; height: 70px;">
                        <i class="bi bi-briefcase-fill fs-2"></i>
                    </div>
                    <h2 class="fw-bold my-2 text-primary">300+</h2>
                    <p class="text-muted fs-6">Clients Worldwide</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center mb-3">
                <div class="text-center border border-secondary rounded-3 p-4 w-100 max-w-250">
                    <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center mx-auto"
                        style="width: 70px; height: 70px;">
                        <i class="bi bi-award-fill fs-2"></i>
                    </div>
                    <h2 class="fw-bold my-2 text-primary">99%</h2>
                    <p class="text-muted fs-6">Success Rate</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center mb-3">
                <div class="text-center border border-secondary rounded-3 p-4 w-100 max-w-250">
                    <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center mx-auto"
                        style="width: 70px; height: 70px;">
                        <i class="bi bi-person-check-fill fs-2"></i>
                    </div>
                    <h2 class="fw-bold my-2 text-primary">10+</h2>
                    <p class="text-muted fs-6">WordPress Experts</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center mb-3">
                <div class="text-center border border-secondary rounded-3 p-4 w-100 max-w-250">
                    <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center mx-auto"
                        style="width: 70px; height: 70px;">
                        <i class="bi bi-emoji-smile-fill fs-2"></i>
                    </div>
                    <h2 class="fw-bold my-2 text-primary">89%</h2>
                    <p class="text-muted fs-6">Retention Rate</p>
                </div>
            </div>
        </div>
    </div>
    <!--first End div -->


    <!-- Second div -->
    <div class="container mt-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row text-start text-lg-center">
            <div class="col-12">
                <h1 style="font-weight: bold;">Advanced Programming & Frameworks</h1>
                <p style="font-style: italic; font-size: 1.2rem;">“Empowering your digital solutions with
                    cutting-edge technology.”</p>
            </div>
        </div>
        <div class="row align-items-center mt-4">
            <div class="col-md-12 col-lg-6 text-center">
                <img src="<?php bloginfo('template_directory'); ?>/img/adv_prg_framework/mobile_adf.webp"
                    alt="Mobile Image" class="img-fluid" style="max-height: 400px;">
            </div>
            <div class="col-md-12 col-lg-6 pt-5 pt-lg-0">
                <p>In the fast-paced world of technology, leveraging advanced programming languages and frameworks
                    is essential for building robust applications. Our expertise in <strong>Python and
                        Django</strong> allows us to deliver full-stack web development solutions that provide
                    powerful backend capabilities and seamless API integrations.</p>
                <p>We also offer comprehensive <strong>manual testing</strong> services to ensure that your
                    applications meet the highest quality standards, providing you with peace of mind and confidence
                    in your product.</p>
                <p>Additionally, our team specializes in developing mobile applications using <strong>Ionic and
                        Angular</strong>, with over 7 years of experience in creating high-performance,
                    user-friendly apps that engage users and drive business growth.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <button class="btn btn-primary btn-lg" style="border-radius: 30px; padding: 10px 20px;">Get A
                    Quote</button>
            </div>
        </div>
    </div>
    <!-- end second div  -->


    <!-- third div -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row">
            <!-- Left Section -->
            <div class="col-12 col-md-12 col-lg-6 wp-left-section">
                <h1 class="fw-bold text-start"
                    style="font-size: 45px; -webkit-text-stroke: 2px #000000; paint-order: stroke fill; color: transparent; margin-bottom: 10px;">
                    Advanced Programming & Frameworks</h1>
                <h2 style="font-size: 1.5rem; font-weight: bold;">Delivering Cutting-Edge Development Services</h2>
                <p style="line-height: 1.8;">
                    We specialize in providing advanced programming solutions tailored to meet the unique needs of
                    your business. Our expertise in <strong>Python and Django</strong> allows us to deliver powerful
                    backend solutions and APIs. Additionally, we offer comprehensive <strong>manual testing</strong>
                    services to ensure that your applications meet the highest quality standards. Partner with us to
                    leverage our skills in <strong>Ionic and Angular</strong> for building exceptional mobile
                    applications.
                </p>
            </div>

            <!-- Right Section -->
            <div class="col-12 col-md-12 col-lg-6 wp-right-section">
                <!-- Python/Django Development -->
                <div class="scroll-item" style="border-top: 2px solid #007bff; background-color: #e3f2fd;">
                    <h4 style="font-weight: bold;">Python / Django Development</h4>
                    <p>We offer full-stack web development using Python and Django, providing powerful backend
                        solutions and APIs that are scalable and efficient.</p>
                </div>
                <!-- Manual Testing -->
                <div class="scroll-item" style="border-top: 2px solid #dc3545; background-color: #fdecea;">
                    <h4 style="font-weight: bold;">Comprehensive Manual Testing</h4>
                    <p>Our manual testing services are designed to ensure that your applications meet the highest
                        quality standards, identifying and resolving any issues.</p>
                </div>
                <!-- Ionic & Angular Development -->
                <div class="scroll-item" style="border-top: 2px solid #28a745; background-color: #e8f5e9;">
                    <h4 style="font-weight: bold;">Ionic & Angular Development</h4>
                    <p>With over 7 years of experience, we specialize in building mobile applications using Ionic
                        and Angular, creating intuitive and user-friendly apps.</p>
                </div>
                <!-- Custom Web Development -->
                <div class="scroll-item" style="border-top: 2px solid #007bff; background-color: #e3f2fd;">
                    <h4 style="font-weight: bold;">Custom Web Development</h4>
                    <p>We provide high-quality custom web development services to help your business establish a
                        strong online presence with feature-rich websites.</p>
                </div>
                <!-- E-commerce Solutions -->
                <div class="scroll-item" style="border-top: 2px solid #dc3545; background-color: #fdecea;">
                    <h4 style="font-weight: bold;">E-commerce Solutions</h4>
                    <p>Boost your online sales with our custom e-commerce solutions, creating secure, scalable, and
                        user-friendly online stores tailored to your needs.</p>
                </div>
                <!-- Responsive Web Design -->
                <div class="scroll-item" style="border-top: 2px solid #28a745; background-color: #e8f5e9;">
                    <h4 style="font-weight: bold;">Responsive Web Design</h4>
                    <p>We ensure your website looks and performs flawlessly across all devices, providing an
                        excellent user experience on desktops, tablets, and mobiles.</p>
                </div>
                <!-- Mobile App Development -->
                <div class="scroll-item" style="border-top: 2px solid #ffc107; background-color: #fff8e1;">
                    <h4 style="font-weight: bold;">Mobile App Development</h4>
                    <p>We specialize in building intuitive and user-friendly mobile applications that deliver
                        exceptional user experiences and meet your business goals.</p>
                </div>
                <!-- Cross-Platform App Development -->
                <div class="scroll-item" style="border-top: 2px solid #6c757d; background-color: #f8f9fa;">
                    <h4 style="font-weight: bold;">Cross-Platform App Development</h4>
                    <p>Our cross-platform app development services ensure consistent performance across devices,
                        saving time and cost for your business.</p>
                </div>
                <!-- Custom App Solutions -->
                <div class="scroll-item" style="border-top: 2px solid #17a2b8; background-color: #e0f7fa;">
                    <h4 style="font-weight: bold;">Custom App Solutions</h4>
                    <p>We provide custom app development services to meet unique business requirements, turning
                        your ideas into reality with tailored solutions.</p>
                </div>
                <!-- PHP Laravel Development -->
                <div class="scroll-item" style="border-top: 2px solid #6610f2; background-color: #ede7f6;">
                    <h4 style="font-weight: bold;">PHP Laravel Development</h4>
                    <p>Build robust and scalable web applications with our PHP Laravel development services,
                        ensuring high performance and security in every project.</p>
                </div>
                <!-- Custom Laravel Solutions -->
                <div class="scroll-item" style="border-top: 2px solid #fd7e14; background-color: #fff3e0;">
                    <h4 style="font-weight: bold;">Custom Laravel Solutions</h4>
                    <p>Get tailor-made Laravel solutions that fit your business requirements perfectly, crafting
                        efficient and feature-rich web apps.</p>
                </div>
                <!-- Laravel API Development -->
                <div class="scroll-item" style="border-top: 2px solid #20c997; background-color: #e8f5e9;">
                    <h4 style="font-weight: bold;">Laravel API Development</h4>
                    <p>We offer Laravel API development services to enhance the connectivity and functionality
                        of your web and mobile applications.</p>
                </div>
                <!-- Additional Frameworks -->
                <div class="scroll-item" style="border-top: 2px solid #17a2b8; background-color: #e0f7fa;">
                    <h4 style="font-weight: bold;">Additional Frameworks</h4>
                    <p>Explore our expertise in various other frameworks and technologies that can elevate your
                        project to the next level.</p>
                </div>
                <!-- Cloud Solutions -->
                <div class="scroll-item" style="border-top: 2px solid #007bff; background-color: #e3f2fd;">
                    <h4 style="font-weight: bold;">Cloud Solutions</h4>
                    <p>Leverage cloud technologies to enhance scalability and performance, ensuring your
                        applications are always available and secure.</p>
                </div>
                <!-- DevOps Services -->
                <div class="scroll-item" style="border-top: 2px solid #dc3545; background-color: #fdecea;">
                    <h4 style="font-weight: bold;">DevOps Services</h4>
                    <p>Our DevOps services streamline your development and operations, improving collaboration
                        and efficiency across teams.</p>
                </div>
                <!-- Data Analytics -->
                <div class="scroll-item" style="border-top: 2px solid #28a745; background-color: #e8f5e9;">
                    <h4 style="font-weight: bold;">Data Analytics</h4>
                    <p>Utilize data analytics to gain insights into your business performance and make informed
                        decisions for future growth.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end third div -->


    <!-- fourth div -->
    <div class="container py-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-7 d-flex justify-content-center">
                <div>
                    <h5 class="fw-bold fs-3 text-start">Empower Your Business with Advanced Programming & Frameworks
                    </h5>
                    <p class="text-muted mt-3 text-start">
                        Elevate your digital solutions with our expertise in cutting-edge programming frameworks and
                        comprehensive development services. Our team specializes in creating robust, scalable, and
                        efficient applications to meet your unique business demands.<br><br>

                        <strong>Python / Django:</strong> Leverage the power of Python and Django for full-stack web
                        development. From building seamless APIs to delivering high-performing backend solutions, we
                        transform your ideas into reality.<br><br>

                        <strong>Manual Testing:</strong> Ensure your applications achieve the highest quality
                        standards with our meticulous manual testing services. Our experts leave no stone unturned
                        in identifying potential issues, guaranteeing a flawless user experience.<br><br>

                        <strong>Ionic & Angular:</strong> With over 7 years of expertise, we excel in developing
                        cross-platform mobile applications using Ionic and Angular. Experience the perfect blend of
                        performance, flexibility, and user-centric designs.<br><br>

                        Partner with us to drive innovation and bring your business to the forefront of technology
                        with advanced programming and frameworks.
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-5 p-md-5 mt-4 mt-md-0 d-flex justify-content-center align-items-center">
                <img src="<?php bloginfo('template_directory'); ?>/img/web_app_images/Web App Development photos (2).jpg"
                    alt="Advanced Programming & Frameworks" class="img-fluid" style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>


    <!-- fifth div -->
    <div class="container text-start text-lg-center py-0 py-lg-5 wow fadeIn" data-wow-delay="0.3s">
        <h5 class="fw-bold fs-3">Advanced Programming & Frameworks for Your Projects</h5>
        <p class="pb-3">Explore our comprehensive services in Python/Django, Manual Testing, and Ionic & Angular to
            bring your web and mobile applications to life with cutting-edge technologies.</p>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_development.jpg"
                            alt="Python/Django Development" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">Python/Django Development</h5>
                    <p style="font-size: 15px;">Build powerful backend solutions and dynamic web applications using
                        Python and Django, ensuring scalability and performance.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_development.jpg"
                            alt="Manual Testing" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">Manual Testing</h5>
                    <p style="font-size: 15px;">Deliver flawless applications with our meticulous manual testing
                        services, ensuring top-notch quality and user experience.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_implemention.jpg"
                            alt="Ionic & Angular Development" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">Ionic & Angular Development</h5>
                    <p style="font-size: 15px;">Create high-performance, cross-platform mobile applications with 7+
                        years of expertise in Ionic and Angular frameworks.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_integration.jpg"
                            alt="API Integration" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">API Integration</h5>
                    <p style="font-size: 15px;">Enable seamless communication between your applications and
                        third-party services with robust API integration solutions.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_conslutancy.jpg"
                            alt="UI/UX Design" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">UI/UX Design</h5>
                    <p style="font-size: 15px;">Enhance user experience with intuitive and visually appealing
                        designs tailored to your web and mobile applications.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/save-time.png"
                            alt="Third-Party Integration" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">Third-Party Integration</h5>
                    <p style="font-size: 15px;">Expand your application's functionality with seamless integration of
                        third-party modules and plugins.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- six div -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row">
            <!-- Left Section -->
            <div class="col-12 col-md-12 col-lg-6 wp-left-section">
                <h1 class="fw-bold text-start"
                    style="font-size: 35px; -webkit-text-stroke: 2px #000000; paint-order: stroke fill; color: transparent; margin-bottom: 10px;">
                    Advanced Programming & Frameworks
                </h1>
                <h2 style="font-size: 1.5rem; font-weight: bold;">Deliver Web and App Development Services</h2>
                <p style="line-height: 1.8;">
                    We follow an agile approach to development services to transform your ideas into reality. Our
                    experienced developers assist your software development journey and involve you at every stage
                    to ensure transparency.
                </p>

                <!-- New content section -->
                <div class="mt-4">
                    <h3 style="font-size: 1.2rem; font-weight: bold;">Advanced Programming & Frameworks</h3>
                    <ul style="list-style: none; padding-left: 0; line-height: 1.8;">
                        <li>
                            <strong>Python / Django:</strong> Full-stack web development using Python and Django,
                            offering powerful backend solutions and APIs.
                        </li>
                        <li>
                            <strong>Manual Testing:</strong> Comprehensive manual testing services to ensure that
                            your applications meet the highest quality standards.
                        </li>
                        <li>
                            <strong>Ionic & Angular:</strong> Expertise in building mobile applications using Ionic
                            and Angular with 7+ years of experience.
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right Section -->
            <div class="col-12 col-md-12 col-lg-6 wp-right-section">
                <!-- 1 -->
                <div class="scroll-item web-section-1 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-clipboard-list" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Project Scope Definition</h5>
                            <p style="margin: 0;">We define the project scope by understanding your business goals,
                                user requirements, and expectations. This phase ensures a clear vision and alignment
                                between stakeholders for a smooth execution plan.</p>
                        </div>
                    </div>
                </div>

                <!-- 2 -->
                <div class="scroll-item web-section-2 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-laptop-code" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Technology Selection</h5>
                            <p style="margin: 0;">We select the best-fit technologies, tools, and frameworks to
                                ensure scalability, performance, and ease of integration, keeping your current and
                                future business needs in mind.</p>
                        </div>
                    </div>
                </div>

                <!-- 3 -->
                <div class="scroll-item web-section-2 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-code" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Development & Coding</h5>
                            <p style="margin: 0;">Our skilled developers write clean, well-structured code to bring
                                your ideas to life. Using agile methodologies, we ensure faster delivery and
                                adaptability throughout the development process.</p>
                        </div>
                    </div>
                </div>

                <!-- 4 -->
                <div class="scroll-item web-section-2 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-bug" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Testing & Debugging</h5>
                            <p style="margin: 0;">We rigorously test your application for functionality, usability,
                                and security. Bugs are identified and resolved to deliver a seamless and error-free
                                user experience.</p>
                        </div>
                    </div>
                </div>

                <!-- 5 -->
                <div class="scroll-item web-section-2 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-rocket" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Deployment & Launch</h5>
                            <p style="margin: 0;">Once your application is thoroughly tested and approved, we deploy
                                it to your desired platforms, ensuring a smooth and hassle-free launch experience.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 6 -->
                <div class="scroll-item web-section-2 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-headset" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Post-Launch Support</h5>
                            <p style="margin: 0;">We provide comprehensive post-launch support and maintenance,
                                addressing any issues, updates, or optimizations to ensure continuous system
                                performance.</p>
                        </div>
                    </div>
                </div>

                <!-- 7 -->
                <div class="scroll-item web-section-2 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-plug" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">System Integration</h5>
                            <p style="margin: 0;">Our experts integrate your application with third-party APIs,
                                payment gateways, and other tools to expand its capabilities and ensure seamless
                                operations.</p>
                        </div>
                    </div>
                </div>

                <!-- 8 -->
                <div class="scroll-item web-section-2 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-tools" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Custom Tools Development</h5>
                            <p style="margin: 0;">We develop custom tools and modules tailored to your business
                                processes, boosting efficiency and adding unique functionalities to your system.</p>
                        </div>
                    </div>
                </div>

                <!-- 9 -->
                <div class="scroll-item web-section-2 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-shield-alt" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Security Compliance</h5>
                            <p style="margin: 0;">We implement the latest security protocols to protect your
                                software, ensuring compliance with industry standards and safeguarding user data
                                against potential threats.</p>
                        </div>
                    </div>
                </div>

                <!-- 10 -->
                <div class="scroll-item web-section-2 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-tachometer-alt" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Performance Monitoring</h5>
                            <p style="margin: 0;">We continuously monitor your system’s performance and provide
                                insights to optimize speed, reliability, and resource utilization for enhanced
                                productivity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- seven div -->
    <div class="container text-start text-lg-center py-5 wow fadeIn" data-wow-delay="0.3s">
        <h5 class="fw-bold fs-3">Technical Stack used in our Advanced Programming & Frameworks Company</h5>
        <p>As a forerunner in the field of WordPress Website development services, we rely upon the latest tools
            and
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


    <!-- eight div -->
    <div class="container text-start text-lg-center py-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row align-items-center">
            <!-- Left Content -->
            <div class="text-start">
                <h1 style="font-weight: bold;">Trusted Advanced Programming & Frameworks Company in India</h1>
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
                    <!-- .NET Full-Stack Development -->
                    <div class="col-md-5 custom-card-container">
                        <div class="custom-card-image-container">
                            <img src="<?php bloginfo('template_directory'); ?>/https://upload.wikimedia.org/wikipedia/commons/e/ee/.NET_Core_Logo.svg"
                                alt=".NET Development" style="max-width: 100%; height: auto;">
                        </div>
                        <div class="text-start">
                            <h5>.NET Full-Stack Development</h5>
                            <p>Expertise in building scalable, high-performance applications with .NET, delivering
                                both robust backend and responsive frontend solutions for web and enterprise
                                applications.</p>
                        </div>
                    </div>

                    <!-- PHP Full-Stack Development -->
                    <div class="col-md-5 custom-card-container">
                        <div class="custom-card-image-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/wp_images/php.jpg"
                                alt="PHP Development" style="max-width: 100%; height: auto;">
                        </div>
                        <div class="text-start">
                            <h5>PHP Full-Stack Development</h5>
                            <p>Specializing in full-stack development with PHP, we create dynamic websites and
                                applications, integrating modern PHP frameworks to ensure scalability and
                                performance for your business needs.</p>
                        </div>
                    </div>

                    <!-- Angular Full-Stack Development -->
                    <div class="col-md-5 custom-card-container">
                        <div class="custom-card-image-container">
                            <img src="<?php bloginfo('template_directory'); ?>/https://angular.io/assets/images/logos/angular/angular.svg"
                                alt="Angular Development" style="max-width: 100%; height: auto;">
                        </div>
                        <div class="text-start">
                            <h5>Angular Full-Stack Development</h5>
                            <p>With Angular, we develop dynamic, single-page web applications that provide a
                                seamless user experience, backed by a solid and scalable backend structure.</p>
                        </div>
                    </div>

                    <!-- Java Full-Stack Development -->
                    <div class="col-md-5 custom-card-container">
                        <div class="custom-card-image-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/wp_images/Java.jpg"
                                alt="Java Development" style="max-width: 100%; height: auto;">
                        </div>
                        <div class="text-start">
                            <h5>Java Full-Stack Development</h5>
                            <p>Leveraging the power of Java, we build secure, high-performance web applications that
                                meet your business goals with an emphasis on stability and scalability for long-term
                                growth.</p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Right Image Section -->
            <div class="col-md-12 col-lg-4 p-md-5 align-self-center text-center text-lg-center">
                <img src="<?php bloginfo('template_directory'); ?>/img/web_app_images/Web App Development photos (3).jpg"
                    alt="Team Image" class="img-fluid">
            </div>
        </div>
        <!-- Button Section -->
        <div class="text-center text-md-start mt-4">
            <button class="btn btn-primary px-4 py-2"
                style="background-color: #1363C6; border: none; border-radius: 5px;">
                LET’S TEAM UP
            </button>
        </div>
    </div>



    <!-- nine div -->
    <div class="container text-start py-5 wow fadeIn" data-wow-delay="0.3s">
        <h1 class="fw-bold mb-3" style="font-size: 2rem;">Why Choose #1 Advanced Programming &
            Frameworks Solution?</h1>
        <p class="mb-4" style="font-size: 1rem; color: #555;">
            Choosing #1 Advanced Programming & Frameworks Solution offers an array of benefits, providing you with
            cutting-edge digital solutions to meet your business needs. Here’s why we stand out:
        </p>
        <div class="row gy-4">
            <!-- Card 1 - Python/Django -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3" style="background-color: #f8f9fa;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_development.jpg" alt="Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Python & Django Expertise:
                        </h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">
                            Our team excels in full-stack web development with Python and Django, providing scalable
                            backend architectures and robust APIs to power dynamic web applications.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 2 - Manual Testing -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3"
                    style="background-color: #f8f9fa; border-radius: 10px;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_conslutancy.jpg" alt="Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Thorough Manual Testing:
                        </h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">
                            We offer in-depth manual testing services, ensuring that each application is rigorously
                            tested to meet your performance and quality standards before launch.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 3 - Ionic & Angular -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3"
                    style="background-color: #f8f9fa; border-radius: 10px;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_development.jpg" alt="Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Mobile Apps with Ionic &
                            Angular:</h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">
                            Leverage our 7+ years of expertise in building seamless mobile applications using Ionic
                            and Angular, delivering responsive, high-performance apps for both iOS and Android.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 4 - Version Control -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3"
                    style="background-color: #f8f9fa; border-radius: 10px;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_integration.jpg" alt="Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Efficient Version Control:
                        </h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">
                            Our expertise in version control systems like Git, GitHub, GitLab, and Bitbucket ensures
                            smooth and organized collaboration, enabling teams to work efficiently on large
                            projects.
                        </p>
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
                    Advanced Programming & Frameworks</h1>
                <h5 class="text-start" style="font-size: 1.5rem; font-weight: bold; color: #ffffff;">Building Robust
                    Solutions
                    With Expertise in Python, Django, Ionic, and More!</h5>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <p style="font-size: 1rem; line-height: 1.8;">
                    Unlock the true potential of your web applications with our expertise in full-stack development
                    using Python and Django. Our team is equipped to deliver high-performance backend solutions,
                    scalable APIs, and dynamic databases to power complex applications. Whether you're building
                    custom CMS platforms, eCommerce solutions, or data-driven applications, we provide tailored
                    solutions to meet your exact requirements.
                </p>
            </div>
            <div class="col-md-6">
                <p style="font-size: 1rem; line-height: 1.8;">
                    Our developers are seasoned in creating seamless, responsive mobile applications using Ionic and
                    Angular, ensuring your apps are user-friendly and optimized for performance across devices. With
                    over 7 years of experience in mobile development, we bring expert knowledge in hybrid mobile app
                    creation, API integration, and ensuring high-quality user experiences.
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <p style="font-size: 1rem; line-height: 1.8;">
                    We don’t stop at just development. We also provide extensive manual testing services to
                    guarantee that your applications are reliable, secure, and of the highest quality. Our testing
                    methodologies ensure that all components of your application function perfectly, minimizing
                    errors and downtime for end-users.
                </p>
            </div>
            <div class="col-md-6">
                <p style="font-size: 1rem; line-height: 1.8;">
                    With our expert use of modern version control systems like Git, GitHub, GitLab, and Bitbucket,
                    we ensure that your development projects are managed efficiently. This allows your team to work
                    collaboratively in real-time, track changes seamlessly, and deliver solutions on time. Our
                    version control practices provide transparency and smooth collaboration, crucial for both small
                    and large-scale projects.
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <p style="font-size: 1rem; line-height: 1.8;">
                    At the heart of our services is a commitment to quality and efficiency. Whether you're looking
                    for custom backend solutions, advanced mobile applications, or thorough testing, our team brings
                    over two decades of experience to the table. We work with you at every stage of your project,
                    ensuring that each solution is perfectly tailored to your needs. Ready to elevate your project
                    with the best in advanced programming and frameworks? Let's connect, and together we will bring
                    your vision to life.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- -->


<!-- Start this challenges section -->
<section class="wow fadeIn" data-wow-delay="0.3s">
    <div class="container text-start text-lg-center py-5">
        <div>
            <h2>Key Obstacles in Advanced Programming & Frameworks</h2>
            <p>
                As technology evolves, businesses face numerous obstacles when it comes to implementing advanced
                programming solutions and frameworks. Below are some common challenges and how they can be tackled
                with the right approach and tools.
            </p>
        </div>

        <!-- Challenges Section -->
        <div class="row text-center g-4 mt-5">
            <div class="col-md-4 challenge-item text-start services-number-container"
                style="border: 3px solid #1363C6; border-radius: 10px;">
                <span class="number-background">01</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Subpar Application Usability</h4>
                    <p>Many businesses struggle with creating applications that provide an intuitive and smooth user
                        experience. Navigation issues, slow performance, and mobile responsiveness concerns often
                        frustrate users. By applying user-centered design techniques, conducting usability tests,
                        and gathering feedback, companies can drastically improve their apps' usability, leading to
                        higher user engagement and retention.</p>
                </div>
            </div>
            <div class="col-md-4 challenge-item text-start services-number-container"
                style="border: 3px solid #1363C6; border-radius: 10px;">
                <span class="number-background">02</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Inadequate Scalability</h4>
                    <p>As businesses scale, their applications must handle growing user demands and increasing data
                        volumes. Many apps are built without scalability in mind, resulting in performance
                        bottlenecks. Leveraging cloud-based architectures and microservices allows businesses to
                        scale seamlessly, ensuring that applications can evolve with the growing needs of the
                        organization.</p>
                </div>
            </div>
            <div class="col-md-4 challenge-item text-start services-number-container"
                style="border: 3px solid #1363C6; border-radius: 10px;">
                <span class="number-background">03</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Vulnerabilities in Data Protection</h4>
                    <p>With the rise in cyber-attacks and strict data privacy laws like GDPR, protecting sensitive
                        user data is a top priority for developers. Security breaches can cause irreparable harm to
                        both users and businesses. Implementing encrypted data storage, regular security audits, and
                        best practices for secure coding can ensure data protection and compliance with regulatory
                        standards.</p>
                </div>
            </div>

            <!-- New Challenges 04, 05, 06 -->
            <div class="col-md-4 challenge-item text-start services-number-container"
                style="border: 3px solid #1363C6; border-radius: 10px;">
                <span class="number-background">04</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Challenges in Third-Party Integrations</h4>
                    <p>Integrating with third-party services and APIs is often a complicated and resource-heavy
                        task, with compatibility issues and integration delays being common problems. A strategic
                        integration plan, proper documentation, and extensive testing can help mitigate these
                        challenges, making sure that all systems and services work cohesively without disruptions.
                    </p>
                </div>
            </div>
            <div class="col-md-4 challenge-item text-start services-number-container"
                style="border: 3px solid #1363C6; border-radius: 10px;">
                <span class="number-background">05</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Lagging Application Performance</h4>
                    <p>Slow load times, unoptimized code, and inefficient databases can cause web apps to
                        underperform, damaging user experience and engagement. Regular performance reviews, caching,
                        and database optimization techniques like indexing and query tuning help maintain high
                        performance, ensuring users enjoy a seamless and swift experience.</p>
                </div>
            </div>
            <div class="col-md-4 challenge-item text-start services-number-container"
                style="border: 3px solid #1363C6; border-radius: 10px;">
                <span class="number-background">06</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Difficulty in Attracting Top Talent</h4>
                    <p>In a competitive tech environment, attracting and retaining qualified developers can be a
                        challenge. With a shortage of skilled professionals and high demand, businesses need to
                        prioritize employee development and create an environment that supports innovation. Offering
                        attractive compensation, training programs, and fostering a collaborative culture can help
                        companies stand out and retain top talent.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End this challenges section -->


<section class="container py-0 py-lg-5 wow fadeIn" data-wow-delay="0.3s">
    <h2 class="text-start py-3">Advanced Programming & Frameworks - Leal Software Solution</h2>
    <div class="text-start">
        <p>At Leal Software Solution, we leverage cutting-edge technologies and frameworks to deliver
            high-performing, scalable, and secure solutions. Our expertise spans full-stack development, mobile
            applications, manual testing, and version control, ensuring that we can meet the diverse needs of
            modern businesses.</p>

        <div class="row mt-4">
            <!-- Python/Django -->
            <div class="col-md-6 col-lg-4 icon-feature">
                <div class="feature-item d-flex align-items-center">
                    <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/technical-support.png"
                        alt="Python / Django" class="feature-icon" width="50" height="50">
                    <span class="ps-3">Python / Django: Full-stack web development with powerful backend
                        solutions and APIs</span>
                </div>
            </div>

            <!-- Manual Testing -->
            <div class="col-md-6 col-lg-4 icon-feature">
                <div class="feature-item d-flex align-items-center">
                    <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/suitcase.png"
                        alt="Manual Testing" class="feature-icon" width="50" height="50">
                    <span class="ps-3">Manual Testing: Comprehensive testing services ensuring quality and
                        reliability</span>
                </div>
            </div>

            <!-- Ionic & Angular -->
            <div class="col-md-6 col-lg-4 icon-feature">
                <div class="feature-item d-flex align-items-center">
                    <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/cooperation.png"
                        alt="Ionic & Angular" class="feature-icon" width="50" height="50">
                    <span class="ps-3">Ionic & Angular: 7+ years of experience in building mobile apps with user
                        experiences</span>
                </div>
            </div>

            <!-- Version Control -->
            <div class="col-md-6 col-lg-4 icon-feature">
                <div class="feature-item d-flex align-items-center">
                    <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/mobile-shopping.png"
                        alt="Version Control" class="feature-icon" width="50" height="50">
                    <span class="ps-3">Version Control: Expertise in Git, GitHub, GitLab, and Bitbucket for
                        smooth collaboration and project management</span>
                </div>
            </div>

            <!-- Fast Deployment -->
            <div class="col-md-6 col-lg-4 icon-feature">
                <div class="feature-item d-flex align-items-center">
                    <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/user-experience.png"
                        alt="Fast Deployment" class="feature-icon" width="50" height="50">
                    <span class="ps-3">Fast Deployment: Ensuring quick and efficient deployment of applications
                        for rapid time-to-market</span>
                </div>
            </div>

            <!-- Cloud Integration -->
            <div class="col-md-6 col-lg-4 icon-feature">
                <div class="feature-item d-flex align-items-center">
                    <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/suitcase.png"
                        alt="Cloud Integration" class="feature-icon" width="50" height="50">
                    <span class="ps-3">Cloud Integration: Seamless integration with cloud services for
                        scalability and enhanced performance</span>
                </div>
            </div>

            <!-- Security Focused -->
            <div class="col-md-6 col-lg-4 icon-feature">
                <div class="feature-item d-flex align-items-center">
                    <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/reposting.png"
                        alt="Security Focused" class="feature-icon" width="50" height="50">
                    <span class="ps-3">Security Focused: Prioritizing application security to protect your
                        business data and users</span>
                </div>
            </div>

            <!-- Performance Optimization -->
            <div class="col-md-6 col-lg-4 icon-feature">
                <div class="feature-item d-flex align-items-center">
                    <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/needs.png"
                        alt="Performance Optimization" class="feature-icon" width="50" height="50">
                    <span class="ps-3">Performance Optimization: Fine-tuning applications for maximum speed and
                        efficiency</span>
                </div>
            </div>

            <!-- 24/7 Support -->
            <div class="col-md-6 col-lg-4 icon-feature">
                <div class="feature-item d-flex align-items-center">
                    <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/technical-support.png"
                        alt="24/7 Support" class="feature-icon" width="50" height="50">
                    <span class="ps-3">24/7 Support: Providing continuous support and troubleshooting.</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Advanced Programming & Frameworks Section -->
<div class="container py-5 text-start text-lg-center wow fadeIn" data-wow-delay="0.3s"
    style="background-color: #f9f9f9;">
    <div style="padding: 10px; max-width: 1200px; margin: auto;">
        <div>
            <h5 class="fs-2 fw-bold">Why Choose <span style="color: #007bff;">Leal Software Solution</span> for
                Advanced Programming & Frameworks Services?</h5>
            <p class="py-3" style="font-size: 1rem;">Our team offers a wide range of expert solutions to power your
                next project, including:</p>
        </div>
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 300px; padding: 10px;">
                <ul style="list-style-type: none; padding-left: 0; font-size: 1rem;">
                    <li class="list-item"><span>&#9670;</span> Develop full-stack web applications using
                        <strong>Python & Django</strong>, enabling powerful backend solutions and seamless
                        integrations.
                    </li>
                    <li class="list-item"><span>&#9670;</span> Provide comprehensive <strong>Manual Testing</strong>
                        services to ensure the highest quality and flawless performance for your web applications.
                    </li>
                    <li class="list-item"><span>&#9670;</span> Build responsive mobile apps with <strong>Ionic &
                            Angular</strong>, combining dynamic features and user-friendly interfaces with 7+ years
                        of expertise.</li>
                    <li class="list-item"><span>&#9670;</span> Efficiently manage your codebase using
                        <strong>Version Control</strong> tools like Git, GitHub, GitLab, and Bitbucket, ensuring
                        smooth collaboration and version tracking.
                    </li>
                </ul>
            </div>
            <div style="flex: 1; min-width: 300px; padding: 10px;">
                <ul style="list-style-type: none; padding-left: 0; font-size: 1rem;">
                    <li class="list-item"><span>&#9670;</span> Enhance your application's capabilities by building
                        innovative <strong>custom modules</strong> to extend its functionality.</li>
                    <li class="list-item"><span>&#9670;</span> Optimize your web apps for all devices with
                        responsive design, ensuring a seamless user experience.</li>
                    <li class="list-item"><span>&#9670;</span> Leverage our <strong>customized CMS</strong>
                        solutions to easily manage and update content in your web application.</li>
                    <li class="list-item"><span>&#9670;</span> Create feature-rich, secure <strong>e-commerce
                            solutions</strong> to power your online store and increase profitability.</li>
                    <li class="list-item"><span>&#9670;</span> Seamlessly migrate your existing applications to new
                        platforms, ensuring minimal disruption and data integrity.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- FAQs Start -->
<div class="container-fluid py-0 py-lg-5">
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
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Web app development is the process of building interactive applications that run in
                                a web browser. It involves using technologies like HTML, CSS, JavaScript, and
                                server-side languages like Python and PHP to create responsive and functional
                                solutions.
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
                                Yes, we offer full customization services for web app themes. We can tailor the look
                                and feel of your app to match your brand, ensuring a seamless and engaging user
                                experience.
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
                                Yes, we specialize in developing custom plugins that extend the functionality of
                                your web app. Whether it's adding new features or integrating third-party tools,
                                we've got you covered.
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
                                Yes, security is a top priority. We implement industry best practices to safeguard
                                your application, including data encryption, authentication protocols, and regular
                                security audits.
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
                                Yes, we can integrate a variety of third-party APIs and services into your web app,
                                from payment gateways to analytics and marketing tools, ensuring a seamless
                                experience.
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
                                We focus on optimizing load times, improving server-side performance, and reducing
                                unnecessary code. Techniques like lazy loading, caching, and using CDNs ensure high
                                performance across all devices.
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
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Yes, we offer migration services to move your application to newer platforms or
                                technologies, ensuring a smooth transition and minimal downtime.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Do you provide long-term maintenance and support?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Yes, we offer ongoing maintenance and support packages to keep your web application
                                running smoothly and securely, with updates and optimizations as required.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



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