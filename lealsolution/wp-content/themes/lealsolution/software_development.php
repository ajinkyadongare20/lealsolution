<?php
/**
 * The main template file
 * Template Name: Software Development
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
                <h1 class="display-4 text-white mb-4 animated slideInRight">Services</h1>
                <p class="text-white mb-4 pt-3 animated fadeInLeftBig">What’s revolutionary today can turn ordinary
                    tomorrow. Therefore, brands must continuously evolve and transform for better customer
                    experience, engagement, and profitability. Our software development services and capabilities
                    are curated to help you create a positive and engaging brand image. You get extensive
                    capabilities under one roof, from software product engineering and DevOps to quality engineering
                    and AI/ML development.</p>
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


<!-- Start Services -->
<section class="container pt-5 pb-0 pb-lg-5 wow fadeIn" data-wow-delay="0.3s" id="services-leal">
    <h2 class="text-center mb-4">Capabilities</h2>
    <div class="row ">
        <div class="col-12">
            <p>Our software development capabilities encompass a vast range of modern technologies to ensure the
                creation of scalable, secure, and versatile software solutions as per business demand. We can meet
                all your enterprise needs, from AI/ML development to Cloud Enablement and Automation.</p>

            <p>Our capabilities include delivering tailored software solutions across various industries. We
                specialize in building scalable web and mobile applications, cloud integration, and automation
                tools. Our focus is on enhancing business efficiency through robust security, data management, and
                innovative technologies, ensuring seamless operations and driving digital transformation.</p>

        </div>
    </div>

    <div class="container my-5">
        <!-- First Row -->
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm rounded-0 py-2" style="border: none; background-color: #fff3e0;">
                    <div class="d-flex p-3 pb-0 justify-content-start align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_development.jpg"
                            class="service-icon" alt="Software Engineering">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mt-3">Software Development</h5>
                        <p class="card-text">Engineering next-gen products with next-gen technologies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm rounded-0 py-2" style="border: none; background-color: #e0f7fa;">
                    <div class="d-flex p-3 pb-0 justify-content-start align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/services/services_main/native.png"
                            class="card-img-top service-icon" alt="Mobile App Development">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mt-3">Mobile App Development</h5>
                        <p class="card-text">Elevating customer interactions with innovative eCommerce strategies.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm rounded-0 py-2" style="border: none; background-color: #e8eaf6;">
                    <div class="d-flex p-3 pb-0 justify-content-start align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/services/services_main/app-dev.png"
                            class="service-icon" alt="Web App Development">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mt-3">Web App Development</h5>
                        <p class="card-text">Streamlining software development and IT operations.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm rounded-0 py-2" style="border: none; background-color: #fce4ec;">
                    <div class="d-flex p-3 pb-0 justify-content-start align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/about_images/task.png"
                            class="service-icon" alt="TaskTrak Hub Manager">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mt-3">TaskTrak Hub Manager</h5>
                        <p class="card-text">Maintaining quality standards for every product.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm rounded-0 py-2" style="border: none; background-color:#fff8e1;">
                    <div class="d-flex p-3 pb-0 justify-content-start align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/services/services_main/erp_odoo.png"
                            class="service-icon" alt="Oddo ERP Services">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mt-3">Oddo ERP Services</h5>
                        <p class="card-text">Bringing flexibility and accessibility on the go.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm rounded-0 py-2" style="border: none; background-color: #e1f5fe;">
                    <div class="d-flex p-3 pb-0 justify-content-start align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/about_images/hvac.png"
                            class="service-icon" alt="HVAC Task Manager">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mt-3">HVAC HeatLoad Calculator</h5>
                        <p class="card-text">Adopting cutting-edge technologies for transformation.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm rounded-0 py-2" style="border: none; background-color: #fce4ec;">
                    <div class="d-flex p-3 pb-0 justify-content-start align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/about_images/erp.png"
                            class="service-icon" alt="CRM Task Manager">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mt-3">CRM Project Dashboard</h5>
                        <p class="card-text">Maintaining quality standards for every product.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm rounded-0 py-2" style="border: none; background-color: #e1f5fe;">
                    <div class="d-flex p-3 pb-0 justify-content-start align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/services/services_main/seo.png"
                            class="service-icon" alt="SEO Optimization / Digital Marketing">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mt-3">SEO Optimization / Digital Marketing</h5>
                        <p class="card-text">Bringing flexibility and accessibility on the go.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm rounded-0 py-2" style="border: none; background-color: #fff8e1;">
                    <div class="d-flex p-3 pb-0 justify-content-start align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/services/services_main/software-development.png"
                            class="service-icon" alt="Software Engineering">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mt-3">Software Engineering</h5>
                        <p class="card-text">Adopting cutting-edge technologies for transformation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service -->


<!--Services Feature Start -->
<section>
    <div class="container-fluid bg-light feature pt-5">
        <div class="container pt-0 pt-lg-5">
            <div class="row g-5">
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                    <!-- <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Why Choose Us</div> -->
                    <h1 class="text-dark mb-4">Build Next Gen Products With Our Software Product Engineering
                        Services
                    </h1>
                    <p class="text-dark mb-4">We are not just a software development company. We are a team of 300+
                        skilled developers, business analysts, strategy planners, creative designers, problem
                        solvers,
                        and engagement-boosting marketers who deliver transformational outcomes for a new digital
                        world.
                    </p>
                    <p class="text-dark mb-4">We work with you and complement your digital product engineering
                        efforts
                        by adopting new-age technologies, providing competencies and talent, and leveraging product
                        engineering best practices.</p>
                    <p class="text-dark mb-4">Our services straddle the whole product engineering lifecycle, from
                        the
                        ideation phase to product design and development and from support to market growth.</p>
                    <p class="text-dark mb-4">WOur digital product engineering services cover a whole spectrum of
                        services, including product re-engineering to meet market demands in terms of cost,
                        features,
                        and performance.</p>
                    <div class="d-flex align-items-center text-dark mb-3">
                        <div class="btn-sm-square bg-primary text-white rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Customized Software Solutions for Optimal Performance</span>
                    </div>
                    <div class="d-flex align-items-center text-dark mb-3">
                        <div class="btn-sm-square bg-primary text-white rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Empowering Your Business with Cutting-Edge Software</span>
                    </div>
                    <div class="d-flex align-items-center text-dark mb-3">
                        <div class="btn-sm-square bg-primary text-white rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Delivering Excellence Through Innovative Software Solutions</span>
                    </div>
                    <div class="d-flex align-items-center text-dark mb-3">
                        <div class="btn-sm-square bg-primary text-white rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Experience Excellence with Our Bespoke Software Services</span>
                    </div>
                </div>

                <div class="col-lg-6 pb-5">
                    <!-- First Flex Column Div -->
                    <div class="d-flex flex-column align-items-start justify-content-center bg-primary px-4 pt-4 mb-4 wow fadeIn"
                        data-wow-delay="0.4s">
                        <div class="d-flex align-items-center">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/coding.jpg"
                                alt="Client 4" class="me-3 mb-3" style="width: 70px; height: 70px;">
                            <div class="px-3">
                                <h4 class="text-white mb-3">Software Development</h4>
                            </div>
                        </div>
                        <p class="text-white mb-4">Our software development services offer robust, scalable
                            solutions
                            tailored to business needs, combining industry knowledge with technical expertise to
                            deliver
                            innovative products that improve efficiency, productivity, and competitive advantage.
                        </p>
                    </div>

                    <!-- Second Flex Column Div -->
                    <div class="d-flex flex-column align-items-start justify-content-center bg-primary px-4 pt-4 mb-4 wow fadeIn"
                        data-wow-delay="0.4s">
                        <div class="d-flex align-items-center">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/app-development.jpg"
                                alt="Client 4" class="me-3 mb-3" style="width: 70px; height: 70px;">
                            <div class="px-3">
                                <h4 class="text-white mb-3">Application Development</h4>
                            </div>
                        </div>
                        <p class="text-white mb-4">Our application development process emphasizes intuitive design
                            and
                            functionality, creating solutions that align with business goals and user expectations,
                            ensuring seamless integration, scalability, and exceptional user experiences.</p>
                    </div>

                    <!-- Third Flex Column Div -->
                    <div class="d-flex flex-column align-items-start justify-content-center bg-primary px-4 pt-4 mb-4 wow fadeIn"
                        data-wow-delay="0.5s">
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
                    <div class="d-flex flex-column align-items-start justify-content-center bg-primary px-4 pt-4 mb-4 wow fadeIn"
                        data-wow-delay="0.5s">
                        <div class="d-flex align-items-center">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/digital-marketing.jpg"
                                alt="Client 4" class="me-3 mb-3" style="width: 70px; height: 70px;">
                            <div class="px-3">
                                <h4 class="text-white mb-3">Digital Marketing</h4>
                            </div>
                        </div>
                        <p class="text-white mb-4">Our digital marketing team focuses on data-driven strategies,
                            delivering targeted campaigns that maximize brand visibility, drive customer engagement,
                            and
                            provide valuable insights to help businesses grow in today’s competitive digital
                            landscape.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Start Technology stack -->
<section class="container-fluid p-0 wow fadeIn" data-wow-delay="0.3s">
    <div class="container py-5">
        <h2 class="text-dark mb-4">Technology Stack</h2>
        <p class="mb-5">
            Our software development technology stack for creating a website focuses on a responsive and dynamic
            user
            interface,
            efficient server-side processing, and reliable database management. This ensures a seamless user
            experience,
            quick load times, and robust data handling, resulting in a high-performance, scalable web application.
        </p>

        <!-- Tab Navigation -->
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-front-end-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-front-end" type="button" role="tab" aria-controls="pills-front-end"
                    aria-selected="true">Front-End</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-back-end-tab" data-bs-toggle="pill" data-bs-target="#pills-back-end"
                    type="button" role="tab" aria-controls="pills-back-end" aria-selected="false">Back-End</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-mobile-tab" data-bs-toggle="pill" data-bs-target="#pills-mobile"
                    type="button" role="tab" aria-controls="pills-mobile" aria-selected="false">Mobile</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-database-tab" data-bs-toggle="pill" data-bs-target="#pills-database"
                    type="button" role="tab" aria-controls="pills-database" aria-selected="false">Database</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-cloud-tab" data-bs-toggle="pill" data-bs-target="#pills-cloud"
                    type="button" role="tab" aria-controls="pills-cloud" aria-selected="false">Cloud</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-open-source-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-open-source" type="button" role="tab" aria-controls="pills-open-source"
                    aria-selected="false">Open Source</button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content mt-5 py-5" id="pills-tabContent">
            <!-- Front-End Technologies -->
            <div class="tab-pane fade show active" id="pills-front-end" role="tabpanel"
                aria-labelledby="pills-front-end-tab">
                <div class="row text-center">
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="https://angular.io/assets/images/logos/angular/angular.svg" alt="Angular"
                                class="technology-logo">
                            <h5>Angular</h5>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="https://reactjs.org/logo-og.png" alt="React-JS" class="technology-logo">
                            <h5>React-JS</h5>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Bootstrap"
                                class="technology-logo">
                            <h5>Bootstrap</h5>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="https://vuejs.org/images/logo.png" alt="Vue-JS" class="technology-logo">
                            <h5>Vue-JS</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back-End Technologies -->
            <div class="tab-pane fade" id="pills-back-end" role="tabpanel" aria-labelledby="pills-back-end-tab">
                <div class="row text-center">
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4f/Csharp_Logo.png" alt="Angular"
                                class="technology-logo">
                            <h5>C#</h5>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/e/ee/.NET_Core_Logo.svg"
                                alt="React-JS" class="technology-logo">
                            <h5>.NET</h5>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/Java.jpg" alt="Bootstrap"
                                class="technology-logo" style="object-fit: scale-down;">
                            <h5>JAVA</h5>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/php.jpg" alt="Vue-JS"
                                class="technology-logo" style="object-fit: scale-down;">
                            <h5>PHP</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Technologies -->
            <div class="tab-pane fade" id="pills-mobile" role="tabpanel" aria-labelledby="pills-mobile-tab">
                <div class="row text-center">
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/Android.jpg" alt="Angular"
                                class="technology-logo" style="object-fit: scale-down;">
                            <h5>Andriod</h5>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/ios.jpg" alt="React-JS"
                                class="technology-logo" style="object-fit: scale-down;">
                            <h5>IOS</h5>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/Kotlin.jpg" alt="Bootstrap"
                                class="technology-logo" style="object-fit: scale-down;">
                            <h5>Kotlin</h5>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/Swift.jpg" alt="Vue-JS"
                                class="technology-logo" style="object-fit: scale-down;">
                            <h5>Swift</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Database Technologies -->
            <div class="tab-pane fade" id="pills-database" role="tabpanel" aria-labelledby="pills-database">
                <div class="row text-center">
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/MySQL.jpg" alt="Angular"
                                class="technology-logo" style="object-fit: scale-down;">
                            <h5>MySQL</h5>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/Mongo.jpg" alt="React-JS"
                                class="technology-logo" style="object-fit: scale-down;">
                            <h5>Mongo-DB</h5>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/SQL-Server.jpg"
                                alt="Bootstrap" class="technology-logo" style="object-fit: scale-down;">
                            <h5>SQL-Server</h5>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/PostgreSQL.jpg" alt="Vue-JS"
                                class="technology-logo" style="object-fit: scale-down;">
                            <h5>PostgreSQL</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cloud Technologies -->
            <div class="tab-pane fade" id="pills-cloud" role="tabpanel" aria-labelledby="pills-cloud">
                <div class="row text-center">
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/Google-Cloud.jpg"
                                alt="Angular" class="technology-logo" style="object-fit: scale-down;">
                            <h5>Google Cloud</h5>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/AWS.jpg" alt="React-JS"
                                class="technology-logo" style="object-fit: scale-down;">
                            <h5>AWS Cloud</h5>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/Azure.jpg" alt="Bootstrap"
                                class="technology-logo" style="object-fit: scale-down;">
                            <h5>Azure Cloud</h5>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/oracle-cloud.jpg"
                                alt="Vue-JS" class="technology-logo" style="object-fit: scale-down;">
                            <h5>Oracle Cloud</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Open Source Technologies -->
            <div class="tab-pane fade" id="pills-open-source" role="tabpanel" aria-labelledby="pills-open-source">
                <div class="row text-center">
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/Wordpress.jpg" alt="Angular"
                                class="technology-logo" style="object-fit: scale-down;">
                            <h5>Wordpress</h5>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/Magento.jpg" alt="React-JS"
                                class="technology-logo" style="object-fit: scale-down;">
                            <h5>Magento</h5>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/Shopify.jpg" alt="Bootstrap"
                                class="technology-logo" style="object-fit: scale-down;">
                            <h5>Shopify</h5>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="tech-card">
                            <img src="<?php bloginfo('template_directory'); ?>/img/services/Kentico.jpg" alt="Vue-JS"
                                class="technology-logo" style="object-fit: scale-down;">
                            <h5>Kentico</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Services Feature End -->


<!-- Section Start -->
<section class="container-fluid py-0 py-lg-5 wow fadeIn" data-wow-delay="0.3s">
    <div class="container-fluid py-0 py-md-5 py-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 ps-lg-5">
                <img src="<?php bloginfo('template_directory'); ?>/img/services/working-office.jpg" alt="Team at work"
                    class="img-fluid rounded-corner-image services-corner-image">
            </div>
            <!-- Text Section -->
            <div class="col-lg-6 col-md-12">
                <h2 class="fw-bold">Leal Software Solution - Your Trusted Product Engineering Services Company</h2>
                <p class="mt-3 mb-4">
                    We have a proven track record of helping companies from different verticals navigate digital
                    platforms. We can help you, too, with our engineering IT services.
                </p>
                <div class="services-list">
                    <div class="row">
                        <div class="col-sm-6 col-12 mb-2">
                            <i class="bi bi-check-circle-fill icon-check"></i> Product Experts
                        </div>
                        <div class="col-sm-6 col-12 mb-2">
                            <i class="bi bi-check-circle-fill icon-check"></i> On-demand Scalability
                        </div>
                        <div class="col-sm-6 col-12 mb-2">
                            <i class="bi bi-check-circle-fill icon-check"></i> Flexible Engagement Models
                        </div>
                        <div class="col-sm-6 col-12 mb-2">
                            <i class="bi bi-check-circle-fill icon-check"></i> Cost-Effective Solution
                        </div>
                        <div class="col-sm-6 col-12 mb-2">
                            <i class="bi bi-check-circle-fill icon-check"></i> On-time Delivery
                        </div>
                        <div class="col-sm-6 col-12 mb-2">
                            <i class="bi bi-check-circle-fill icon-check"></i> Agile Methodology
                        </div>
                        <div class="col-sm-6 col-12 mb-2">
                            <i class="bi bi-check-circle-fill icon-check"></i> Code Authorization
                        </div>
                        <div class="col-sm-6 col-12 mb-2">
                            <i class="bi bi-check-circle-fill icon-check"></i> Streamlined Management
                        </div>
                        <div class="col-sm-6 col-12 mb-2">
                            <i class="bi bi-check-circle-fill icon-check"></i> 100% Customer Satisfaction
                        </div>
                        <div class="col-sm-6 col-12 mb-2">
                            <i class="bi bi-check-circle-fill icon-check"></i> 24*7 Support and Maintenance
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section End -->


<!-- Start this services security -->
<section class="wow fadeIn" data-wow-delay="0.3s">
    <!-- Trust & Security Section -->
    <div class="bg-dark text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Section -->
                <div class="col-12 col-lg-8 mb-4 mb-lg-0 text-center text-lg-start">
                    <h2 class="fw-bold text-white">Trust & Security in Software Development</h2>
                    <p class="my-4">
                        We commit to delivering the highest level of security, reliability, privacy, and compliance
                        in our products.
                        Our Trust Center forges the connection between our operations and products, making it a
                        one-stop shop for all your security needs.
                    </p>
                    <button class="btn btn-light">Visit the Trust Center</button>
                </div>
                <!-- Image Section -->
                <div class="col-12 col-lg-4 text-center">
                    <img src="<?php bloginfo('template_directory'); ?>/img/services/trust_security.png"
                        alt="Trust and Security" class="img-fluid rounded"
                        style="max-height: 300px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center py-3 py-md-5 py-lg-5">
        <h5 class="fs-2 fw-bold mb-3">Software Development Security</h5>
        <p class="mb-4">Ensure your software is secure and reliable with industry-leading practices.</p>
        <button class="btn btn-primary mb-5">Get it Free</button>

        <div class="row text-start">
            <div class="col-12 col-md-6 d-flex align-items-start mb-4">
                <div class="me-3">
                    <span class="badge bg-dark rounded-circle" style="padding: 8px;">
                        <i class="bi bi-check-lg text-white"></i>
                    </span>
                </div>
                <div>
                    <h5 class="fw-bold">IP allowlisting & enforced 2FA <span
                            class="badge bg-warning text-dark">PREMIUM</span></h5>
                    <p class="mb-0">Bitbucket Cloud Premium includes security settings for assigning safe,
                        pre-defined
                        IP addresses and requiring two-factor authentication.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-start mb-4">
                <div class="me-3">
                    <span class="badge bg-dark rounded-circle" style="padding: 8px;">
                        <i class="bi bi-check-lg text-white"></i>
                    </span>
                </div>
                <div>
                    <h5 class="fw-bold">Security key support</h5>
                    <p class="mb-0">Bolster your 2FA with security key devices that use the FIDO U2F standard.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-start mb-4">
                <div class="me-3">
                    <span class="badge bg-dark rounded-circle" style="padding: 8px;">
                        <i class="bi bi-check-lg text-white"></i>
                    </span>
                </div>
                <div>
                    <h5 class="fw-bold">SAML SSO <span class="badge bg-warning text-dark">ATLASSIAN ACCESS</span>
                    </h5>
                    <p class="mb-0">Adding Atlassian Access gives cloud products the ability to connect to your SAML
                        SSO
                        provider.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-start mb-4">
                <div class="me-3">
                    <span class="badge bg-dark rounded-circle" style="padding: 8px;">
                        <i class="bi bi-check-lg text-white"></i>
                    </span>
                </div>
                <div>
                    <h5 class="fw-bold">Data encryption</h5>
                    <p class="mb-0">Repositories are encrypted at rest (AES-256) and encrypted in transit (TLS 1.2+)
                        so
                        your code is always secure.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End this services security  -->


<!-- Start this challenges section -->
<section class="container-fluid wow fadeIn bg-light" data-wow-delay="0.3s">
    <div class="container py-5">
        <div class="text-start text-lg-center">
            <h2>Challenges Faced By Businesses In Software Industry</h2>
            <p>
                In the rapidly advancing software industry, companies face numerous challenges when they lack an
                integrated and high-performance software solution. Below are some common obstacles that
                organizations can easily overcome with the implementation of a reliable and scalable software
                system.
            </p>
        </div>

        <!-- Challenges Section -->
        <div class="row text-center g-4 mt-5">
            <div class="col-md-4 challenge-item border text-start services-number-container">
                <span class="number-background">01</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Weak Inventory & Supply Chain Management</h4>
                    <p>Inventory control and supply chain disruptions have emerged as major challenges for the
                        modular manufacturing industry. Manual stock checks aren’t competent enough and are
                        prone to errors, shortages, and undefined losses. Employing IoT, cloud-based, and
                        AI-enabled systems allows for real-time tracking of goods, better collaboration, and
                        flawless communication.</p>
                </div>
            </div>
            <div class="col-md-4 challenge-item border text-start services-number-container">
                <span class="number-background">02</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Lack of Demand Forecasting</h4>
                    <p>Inventory control and supply chain disruptions have emerged as major challenges for the
                        modular manufacturing industry. Manual stock checks aren’t competent enough and are
                        prone to errors, shortages, and undefined losses. Employing IoT, cloud-based, and
                        AI-enabled systems allows for real-time tracking of goods, better collaboration, and
                        flawless communication.</p>
                </div>
            </div>
            <div class="col-md-4 challenge-item border text-start services-number-container">
                <span class="number-background">03</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Sluggish Operational Efficiency</h4>
                    <p>Inventory control and supply chain disruptions have emerged as major challenges for the
                        modular manufacturing industry. Manual stock checks aren’t competent enough and are
                        prone to errors, shortages, and undefined losses. Employing IoT, cloud-based, and
                        AI-enabled systems allows for real-time tracking of goods, better collaboration, and
                        flawless communication.</p>
                </div>
            </div>

            <!-- New Challenges 04, 05, 06 -->
            <div class="col-md-4 challenge-item border text-start services-number-container">
                <span class="number-background">04</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Data Security and Compliance Issues</h4>
                    <p>Inventory control and supply chain disruptions have emerged as major challenges for the
                        modular manufacturing industry. Manual stock checks aren’t competent enough and are
                        prone to errors, shortages, and undefined losses. Employing IoT, cloud-based, and
                        AI-enabled systems allows for real-time tracking of goods, better collaboration, and
                        flawless communication.</p>
                </div>
            </div>
            <div class="col-md-4 challenge-item border text-start services-number-container">
                <span class="number-background">05</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Integration Challenges</h4>
                    <p>Inventory control and supply chain disruptions have emerged as major challenges for the
                        modular manufacturing industry. Manual stock checks aren’t competent enough and are
                        prone to errors, shortages, and undefined losses. Employing IoT, cloud-based, and
                        AI-enabled systems allows for real-time tracking of goods, better collaboration, and
                        flawless communication.</p>
                </div>
            </div>
            <div class="col-md-4 challenge-item border text-start services-number-container">
                <span class="number-background">06</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Talent Acquisition and Retention</h4>
                    <p>Inventory control and supply chain disruptions have emerged as major challenges for the
                        modular manufacturing industry. Manual stock checks aren’t competent enough and are
                        prone to errors, shortages, and undefined losses. Employing IoT, cloud-based, and
                        AI-enabled systems allows for real-time tracking of goods, better collaboration, and
                        flawless communication.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End this challenges section -->


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