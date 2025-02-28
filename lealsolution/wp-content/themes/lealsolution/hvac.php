<?php
/**
 * The main template file
 * Template Name: HVAC
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
                <h1 class="display-4 text-white mb-4 animated slideInRight">HVAC Heat Load Calculator</h1>
                <p class="text-white mb-4 pt-3 animated fadeInLeftBig">What’s revolutionary today can turn ordinary
                    tomorrow. Therefore, brands must continuously evolve and transform for better customer
                    experience, engagement, and profitability. Our software development services and capabilities
                    are curated to help you create a positive and engaging brand image. You get extensive
                    capabilities under one roof, from software product engineering and DevOps to quality engineering
                    and AI/ML development.</p>
            </div>
            <div class="col-lg-6 align-self-end text-center text-lg-end mt-0 pb-4">
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


<!-- Main Start -->
<section class="hvac-container position-relative wow fadeIn" data-wow-delay="0.3s">
    <svg class="background-hvac-svg">
        <defs>
            <style>
                .cls-1 {
                    fill: #2b59c5;
                }

                .cls-2 {
                    fill: #ffffff;
                }
            </style>
        </defs>
        <rect class="cls-1" y="211.56" width="100%" height="500px"></rect>
        <path class="cls-2"
            d="M.69.86V605.2c131,110.66,484.6,172.91,726.41-47.54,325-296.26,585.24-265.24,639-254.71V.86Z"
            transform="translate(-0.4 -0.86)"></path>
    </svg>

    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between h-100">
        <div class="text-start text-md-start mb-4 mb-md-0 py-5">
            <h1 class="fw-bold display-5 text-primary">#1 for HVAC Solution</h1>
            <p class="text-dark">
                <strong>Leal Software Solution</strong> is the most affordable and easiest-to-use construction
                management software. It’s rated as the Best Value and Top App for:
                <br><br>
                <span class="fw-bold text-primary">Heat Load Calculation, Business Solution, HVAC Task
                    Manager and Project Tracking.</span> Our user-friendly interface, comprehensive features, and
                exceptional customer support empower HVAC professionals to optimize their workflow, ensuring
                efficient project execution and cost savings.
            </p>
            <div class="mt-4">
                <a href="#" class="btn btn-outline-primary me-3">Start For Free</a>
                <a href="#" class="btn btn-primary">Book a Demo</a>
            </div>
        </div>

        <!-- Image Section -->
        <div class="d-flex justify-content-center align-items-center">
            <div class="image-container">
                <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/hvac_main1.jpg"
                    alt="HVAC Illustration" class="img-fluid rounded hvac-img-banner"
                    style=" border: 1px solid #007bff;">
                <button class="play-btn" data-bs-toggle="modal" data-bs-target="#videoModal">
                    <i class="bi bi-play-circle play-icon"></i>
                </button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="videoModalLabel">HVAC Heat Load Calculator Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="embed-responsive" style="padding-bottom: 56.25%; position: relative; height: 0;">
                            <iframe id="videoIframe" class="embed-responsive-item"
                                src="<?php bloginfo('template_directory'); ?>/https://www.youtube.com/embed/8r33gAykHA0?si=BrDOWtYApUiZWFol"
                                allowfullscreen
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->


<!-- Start Section -->
<section class="bg-light py-5 wow fadeIn" data-wow-delay="0.5s">
    <div class="container text-center my-5">
        <h1>Take the HVAC Heat Load Calculation Videos</h1>
        <p>See for yourself why Forbes ranked Contractor Foreman as Easiest to Use.</p>
        <div class="row py-5">
            <!-- Video Card 1 -->
            <div class="col-md-3 mb-4">
                <div class="card rounded-0 service-item p-0"
                    onclick="openVideo('https://www.youtube.com/embed/8r33gAykHA0')">
                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/hvac_cal.jpg"
                        class="card-img-top px-5 py-3" alt="Project Management">
                    <!-- <div class="play-btn">
                            <i class="bi bi-play-circle play-icon"></i>
                        </div> -->
                    <div class="card-body px-3">
                        <h5 class="card-title">Project Overview</h5>
                        <p class="pt-2">Streamline HVAC projects with efficient planning and resource management
                            tools.</p>
                    </div>
                </div>
            </div>

            <!-- Video Card 2 -->
            <div class="col-md-3 mb-4">
                <div class="card rounded-0 service-item p-0"
                    onclick="openVideo('https://www.youtube.com/embed/8r33gAykHA0')">
                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/hvac_main1.jpg"
                        class="card-img-top px-5 py-3" alt="Project Management">
                    <!-- <div class="play-btn">
                            <i class="bi bi-play-circle play-icon"></i>
                        </div> -->
                    <div class="card-body px-3">
                        <h5 class="card-title">Project Management</h5>
                        <p class="pt-2">Streamline HVAC projects with efficient planning and resource management
                            tools.</p>
                    </div>
                </div>
            </div>

            <!-- Video Card 3 -->
            <div class="col-md-3 mb-4">
                <div class="card rounded-0 service-item p-0"
                    onclick="openVideo('https://www.youtube.com/embed/8r33gAykHA0')">
                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/hvac_team.jpg"
                        class="card-img-top px-5 py-3" alt="Documentation">
                    <!-- <div class="play-btn">
                            <i class="bi bi-play-circle play-icon"></i>
                        </div> -->
                    <div class="card-body px-3">
                        <h5 class="card-title">Documentation</h5>
                        <p class="pt-2">Comprehensive documentation for HVAC systems ensures efficient operation &
                            maintenance.</p>
                    </div>
                </div>
            </div>

            <!-- Video Card 4 -->
            <div class="col-md-3 mb-4">
                <div class="card  rounded-0 service-item p-0"
                    onclick="openVideo('https://www.youtube.com/embed/8r33gAykHA0')">
                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/hvac_cal.jpg"
                        class="card-img-top px-5 py-3" alt="Finance">
                    <!-- <div class="play-btn">
                            <i class="bi bi-play-circle play-icon"></i>
                        </div> -->
                    <div class="card-body px-3">
                        <h5 class="card-title">Finance</h5>
                        <p class="pt-2">Optimize HVAC investments with financial analysis and cost-saving
                            strategies.</p>
                    </div>
                </div>
            </div>
        </div>
        <p>All of your project management needs in one easy and affordable tool.</p>
    </div>
</section>
<!-- End Section -->


<section class="wow fadeIn" data-wow-delay="0.3s">
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-12">
                <h1 style="font-weight: bold;">HVAC Heat Load Calculator</h1>
                <p style="font-style: italic; font-size: 1.2rem;">“Simplify HVAC planning with precise heat load
                    calculations.”</p>
            </div>
        </div>
        <div class="row align-items-center mt-4">
            <div class="col-md-6 text-center">
                <img src="<?php bloginfo('template_directory'); ?>/img/adv_prg_framework/mobile_adf.webp"
                    alt="HVAC Heat Load Image" class="img-fluid" style="max-height: 400px;">
            </div>
            <div class="col-md-6">
                <p>Accurate HVAC heat load calculations are crucial for optimizing energy efficiency and ensuring
                    comfortable environments. Our advanced tools and expertise provide detailed insights into heat
                    gains and losses, enabling you to select the most suitable HVAC systems.</p>
                <p>With our user-friendly HVAC heat load calculator, you can effortlessly analyze factors like
                    building size, insulation, occupancy, and climate conditions to determine the perfect system for
                    your needs.</p>
                <p>Partner with us to streamline your HVAC projects, reduce operational costs, and deliver top-notch
                    solutions that meet client expectations every time.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <button class="btn btn-primary btn-lg" style="border-radius: 30px; padding: 8px 15px;">Start
                    Calculating</button>
            </div>
        </div>
    </div>
</section>


<!-- Service Start -->
<div class="container-fluid bg-light py-5">
    <div class="container pt-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <div class="col-lg-12 pb-5">
                    <!-- First Flex Column Div -->
                    <div class="d-flex flex-column align-items-start justify-content-center p-4 mb-4 wow fadeIn"
                        data-wow-delay="0.3s" style="background-color: rgba(256, 256, 256, 1);">
                        <div class="d-flex align-items-center">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/coding.jpg"
                                alt="Client 4" style="width: 55px; height: 55px;">
                            <div class="px-3">
                                <h4 class="text-dark mb-3">Accurate Heat Load Calculations</h4>
                            </div>
                        </div>
                        <p class="text-dark mb-4">Achieve optimal HVAC performance with our precise heat load
                            calculation services. By analyzing your building’s specifications, occupancy patterns,
                            and climate conditions, we ensure that your heating and cooling systems are perfectly
                            sized and balanced.</p>
                    </div>

                    <!-- Second Flex Column Div -->
                    <div class="d-flex flex-column align-items-start justify-content-center p-4 mb-4 wow fadeIn"
                        data-wow-delay="0.4s" style="background-color: rgba(256, 256, 256, 1);">
                        <div class="d-flex align-items-center">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_implemention.jpg"
                                alt="Client 4" style="width: 55px; height: 55px;">
                            <div class="px-3">
                                <h4 class="text-dark mb-3">Comprehensive System Analysis</h4>
                            </div>
                        </div>
                        <p class="text-dark mb-4">Gain valuable insights into your HVAC system's performance with
                            our comprehensive analysis services. We assess factors such as energy consumption,
                            system efficiency, and load distribution to identify areas for improvement. Our expert
                            recommendations help you optimize performance.</p>
                    </div>

                    <!-- Third Flex Column Div -->
                    <div class="d-flex flex-column align-items-start justify-content-center p-4 mb-4 wow fadeIn"
                        data-wow-delay="0.5s" style="background-color: rgba(256, 256, 256, 1);">
                        <div class="d-flex align-items-center">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_development.jpg"
                                alt="Client 4" style="width: 55px; height: 55px;">
                            <div class="px-3">
                                <h4 class="text-dark mb-3">HVAC Integration with Other Tools</h4>
                            </div>
                        </div>
                        <p class="text-dark mb-4">Seamlessly connect your HVAC system with various software and
                            tools for enhanced efficiency. Our integration capabilities allow for real-time data
                            sharing, streamlined project management, and improved communication across platforms,
                            ensuring your HVAC operations.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.2s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon btn-square">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/hvac_cal.jpg"
                                            alt="Service Icon" class="rounded" style="width: 120px; height: 120px;">
                                    </div>
                                    <h5 class="mb-3">35+ Powerful Features</h5>
                                    <p>35+ powerful features including automated reports, task management,
                                        collaboration tools, and streamlined workflows to enhance productivity and
                                        efficiency for your business operations.</p>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon btn-square">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/hvac_main1.jpg"
                                            alt="Service Icon" class="rounded" style="width: 120px; height: 120px;">
                                    </div>
                                    <h5 class="mb-3">Unlimited Projects
                                    </h5>
                                    <p>Take on as many projects as you want, with no limitations. Enjoy the freedom
                                        to manage multiple initiatives seamlessly and effectively.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pt-md-4">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.4s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon btn-square">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/hvac_team.jpg"
                                            alt="Service Icon" class="rounded" style="width: 120px; height: 120px;">
                                    </div>
                                    <h5 class="mb-3">Training & Support</h5>
                                    <p>Effortlessly manage your data with intuitive tools for organization,
                                        analysis, and visualization, ensuring you have insights at your fingertips
                                        without the hassle.</p>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon btn-square">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/hvac_cal.jpg"
                                            alt="Service Icon" class="rounded" style="width: 120px; height: 120px;">
                                    </div>
                                    <h5 class="mb-3">Easy and Affordable</h5>
                                    <p>Experience a user-friendly platform designed for everyone, offering
                                        affordable solutions without compromising on quality or functionality.
                                    </p>
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


<!--  -->
<section class="container-fluid py-5 wow fadeIn" data-wow-delay="0.3s">
    <h2 class="fw-bold text-center py-3"> Starting at yearly Subscriptions.</h2>
    <p class="text-center px-3 pb-5"> <b>Heat Load Calculator</b> is an all-in-one construction management suite for
        your tablet, phone or
        computer.<br> With
        plans starting at <b>$49/month</b>, it is the most affordable project management software for contractors.
    </p>
    <div class="container py-5 px-4 bg-light wow fadeIn" data-wow-delay="0.3s">
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-md-7 mb-4 mb-md-0">
                <h2 class="fw-bold">Heat Load Calculation In HVAC</h2>
                <p class="text-muted">
                    Reduce your designing time from 10 days to 30 minutes with HLC (Leal Heat load Calculator). Heat
                    load Calculation are made easy. This simple-looking and very easy-to-use software is a
                    masterpiece. Leal Heat Load Calculator is best hvac heat load calculation software in India.
                    When you consider the huge amount of time required in designing an HVAC project, this seems a
                    must-have for every designer to reduce human errors and improve accuracy. This heat load
                    calculator is best for huge time savings.
                </p>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Project
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Punchlist
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Daily Logs
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Service Tickets
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Glass Wall Scheduling
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Client Portal
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>TO DO's
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Opportunities
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Permit Manager
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Service Tickets
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Scheduling
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Door Scheduling
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Work Orders
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Inspections
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Image Section -->
            <div class="col-md-5 text-center">
                <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/hvac_main1.jpg"
                    class="img-fluid rounded" alt="Project Management Image">
            </div>
        </div>
        <p class="text-muted mt-5 fst-italic">
            HVAC Heat Load Calculator is designed to make your job easier, faster, and more accurate. Tailored for
            HVAC professionals, our user-friendly interface and advanced algorithms ensure precise load calculations
            every time. Save time and reduce errors with our automated system, which considers factors such as
            building size, insulation, occupancy, and climate conditions. With detailed reports and customizable
            options, our calculator is perfect for residential and commercial projects. Trust our reliable,
            efficient solution to optimize your HVAC designs, improve energy efficiency, and enhance customer
            satisfaction. Streamline your workflow with our innovative heat load calculator.
        </p>
    </div>

    <div class="container my-5 py-5 px-4 bg-light wow fadeIn" data-wow-delay="0.4s">
        <div class="row align-items-center">
            <div class="col-md-5 text-center">
                <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/Software development web application (2).png"
                    class="img-fluid rounded pb-5" alt="Project Management Image">
            </div>
            <div class="col-md-7 mb-4 mb-md-0">
                <h2 class="fw-bold">HVAC Project Estimates with Our BOQ Generator</h2>
                <p class="text-muted">
                    Automate HVAC Project Estimates with Our BOQ Generator" streamlines the creation of accurate
                    project estimates by automatically generating a detailed Bill of Quantities (BOQ). This tool
                    reduces manual effort, ensures precision, and accelerates the estimation process, helping you
                    deliver reliable cost projections for HVAC projects quickly and efficiently
                </p>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Accuracy
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Efficiency
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Time-Saving
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Cost-Effective
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Automation
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Consistency
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Error-Reduction
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Scalability
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Customization
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Transparency
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Scheduling
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Resource Planning
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Simplification
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Precision
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-muted mt-5 fst-italic">
            HVAC Heat Load Calculator is designed to make your job easier, faster, and more accurate. Tailored for
            HVAC professionals, our user-friendly interface and advanced algorithms ensure precise load calculations
            every time. Save time and reduce errors with our automated system, which considers factors such as
            building size, insulation, occupancy, and climate conditions. With detailed reports and customizable
            options, our calculator is perfect for residential and commercial projects. Trust our reliable,
            efficient solution to optimize your HVAC designs, improve energy efficiency, and enhance customer
            satisfaction. Streamline your workflow with our innovative heat load calculator.
        </p>
    </div>

    <div class="container my-5 py-5 px-4 bg-light wow fadeIn" data-wow-delay="0.5s">
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-md-7 mb-4 mb-md-0">
                <h2 class="fw-bold">Comprehensive Load Summary Reports</h2>
                <p class="text-muted">
                    Comprehensive Load Summary Reports" provide a detailed overview of your HVAC heat load
                    calculations, summarizing critical data such as cooling and heating loads, ventilation needs,
                    and energy efficiency. These reports ensure you have all the essential information for optimal
                    HVAC system design, helping to make informed decisions for efficient performance.
                </p>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Clarity
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Insightful
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Actionable Data
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Performance Tracking
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Design Optimization
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Decision Support
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Standardization
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Data Visualization
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Regulatory Compliance
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Energy Savings
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Time Efficiency
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Risk Mitigation
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Image Section -->
            <div class="col-md-5 text-center">
                <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/hvac_team.jpg"
                    class="img-fluid rounded" alt="Project Management Image">
            </div>
        </div>
        <p class="text-muted mt-5 fst-italic">
            HVAC Heat Load Calculator is designed to make your job easier, faster, and more accurate. Tailored for
            HVAC professionals, our user-friendly interface and advanced algorithms ensure precise load calculations
            every time. Save time and reduce errors with our automated system, which considers factors such as
            building size, insulation, occupancy, and climate conditions. With detailed reports and customizable
            options, our calculator is perfect for residential and commercial projects. Trust our reliable,
            efficient solution to optimize your HVAC designs, improve energy efficiency, and enhance customer
            satisfaction. Streamline your workflow with our innovative heat load calculator.
        </p>
    </div>

    <div class="container my-5 py-5 px-4 bg-light wow fadeIn" data-wow-delay="0.6s">
        <div class="row align-items-center">
            <div class="col-md-5 text-center">
                <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/hvac_main1.jpg"
                    class="img-fluid rounded pb-5" alt="Project Management Image">
            </div>
            <div class="col-md-7 mb-4 mb-md-0">
                <h2 class="fw-bold">Duct and Airflow Design for Optimal Climate Control</h2>
                <p class="text-muted">
                    Duct and Airflow Design for Optimal Climate Control" focuses on creating efficient duct systems
                    that enhance air distribution and maintain ideal indoor temperatures. Our solutions ensure
                    balanced airflow, reduce energy consumption, and improve comfort. With precise design and
                    analysis, we help you achieve optimal climate control for residential and commercial spaces.
                </p>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Efficiency
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>System Longevity
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Energy Savings
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Design Flexibility
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Noise Reduction
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Temperature Balance
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Custom Solutions
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Comfort
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Cost-Effectiveness
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Improved Ventilation
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Air Quality
                            </li>
                            <li class="d-flex align-items-start fw-medium mb-2">
                                <i class="bi bi-check-circle text-primary me-2"></i>Enhanced Performance
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-muted mt-5 fst-italic">
            HVAC Heat Load Calculator is designed to make your job easier, faster, and more accurate. Tailored for
            HVAC professionals, our user-friendly interface and advanced algorithms ensure precise load calculations
            every time. Save time and reduce errors with our automated system, which considers factors such as
            building size, insulation, occupancy, and climate conditions. With detailed reports and customizable
            options, our calculator is perfect for residential and commercial projects. Trust our reliable,
            efficient solution to optimize your HVAC designs, improve energy efficiency, and enhance customer
            satisfaction. Streamline your workflow with our innovative heat load calculator.
        </p>
    </div>
</section>


<section class="wow fadeIn" data-wow-delay="0.5s">
    <div class="container mt-5">
        <h2 class="font-weight-bold text-center">Here is a list of all the<br> benefits you get with HLC
        </h2>
        <p class="text-center mt-3">
            Accurate load calculations, energy efficiency optimization, <span class="text-primary font-weight-bold">cost
                savings</span>, easy-to-use interface, <span class="text-primary font-weight-bold">detailed
                reports</span>,
            compliance with industry standards, <span class="text-primary font-weight-bold">customizable
                settings</span>, real-time updates, <span class="text-primary font-weight-bold">reduced calculation
                time</span>,
            improved system design, <span class="text-primary font-weight-bold">enhanced comfort levels</span>, and
            support for <span class="text-primary font-weight-bold">multiple HVAC systems</span>.
        </p>

        <div class="row mt-4 py-5">
            <!-- Image 1 -->
            <div class="col-md-4 p-3">
                <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/1-Splash-Screen.jpg"
                    class="img-fluid border" alt="Image 1" data-toggle="modal" data-target="#imageModal1"
                    style="width: 100%; height: 300px; cursor: pointer;">
            </div>

            <!-- Image 2 -->
            <div class="col-md-4 p-3">
                <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/2-Design-Basis.jpg"
                    class="img-fluid border" alt="Image 2" data-toggle="modal" data-target="#imageModal2"
                    style="width: 100%; height: 300px; cursor: pointer;">
            </div>

            <!-- Image 3 -->
            <div class="col-md-4 p-3">
                <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/document-sheet.jpg"
                    class="img-fluid border" alt="Image 3" data-toggle="modal" data-target="#imageModal3"
                    style="width: 100%; height: 300px; cursor: pointer;">
            </div>

            <!-- Image 4 -->
            <div class="col-md-4 mt-4 p-3">
                <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/input-sheet.jpg"
                    class="img-fluid border" alt="Image 4" data-toggle="modal" data-target="#imageModal4"
                    style="width: 100%; height: 300px; cursor: pointer;">
            </div>

            <!-- Image 5 -->
            <div class="col-md-4 mt-4 p-3">
                <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/Summary-Report-Generator.jpg"
                    class="img-fluid border" alt="Image 5" data-toggle="modal" data-target="#imageModal5"
                    style="width: 100%; height: 300px; cursor: pointer;">
            </div>

            <!-- Image 6 -->
            <div class="col-md-4 mt-4 p-3">
                <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/Leal-HLC-tab.jpg"
                    class="img-fluid border" alt="Image 6" data-toggle="modal" data-target="#imageModal6"
                    style="width: 100%; height: 300px; cursor: pointer;">
            </div>

            <!-- Image 7 -->
            <div class="col-md-4 mt-4 p-3">
                <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/AHU-report-1.jpg"
                    class="img-fluid border" alt="Image 7" data-toggle="modal" data-target="#imageModal7"
                    style="width: 100%; height: 300px; cursor: pointer;">
            </div>

            <!-- Image 8 -->
            <div class="col-md-4 mt-4 p-3">
                <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/AHU-report-2.jpg"
                    class="img-fluid border" alt="Image 8" data-toggle="modal" data-target="#imageModal8"
                    style="width: 100%; height: 300px; cursor: pointer;">
            </div>

            <!-- Image 9 -->
            <div class="col-md-4 mt-4 p-3">
                <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/AHU-report-3.jpg"
                    class="img-fluid border" alt="Image 9" data-toggle="modal" data-target="#imageModal9"
                    style="width: 100%; height: 300px; cursor: pointer;">
            </div>
        </div>

    </div>

    <!-- Modal for Image 1 -->
    <div class="modal fade" id="imageModal1" tabindex="-1" role="dialog" aria-labelledby="imageModal1Label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModal1Label">Image 1</h5>
                    <button type="button" class="close border-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/1-Splash-Screen.jpg"
                        class="img-fluid" alt="Image 1">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Image 2 -->
    <div class="modal fade" id="imageModal2" tabindex="-1" role="dialog" aria-labelledby="imageModal2Label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModal2Label">Image 2</h5>
                    <button type="button" class="close border-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/2-Design-Basis.jpg"
                        class="img-fluid" alt="Image 2">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Image 3 -->
    <div class="modal fade" id="imageModal3" tabindex="-1" role="dialog" aria-labelledby="imageModal3Label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModal3Label">Image 3</h5>
                    <button type="button" class="close border-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/document-sheet.jpg"
                        class="img-fluid" alt="Image 3">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Image 4 -->
    <div class="modal fade" id="imageModal4" tabindex="-1" role="dialog" aria-labelledby="imageModal4Label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModal4Label">Image 4</h5>
                    <button type="button" class="close border-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/input-sheet.jpg"
                        class="img-fluid" alt="Image 4">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Image 5 -->
    <div class="modal fade" id="imageModal5" tabindex="-1" role="dialog" aria-labelledby="imageModal5Label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModal5Label">Image 5</h5>
                    <button type="button" class="close border-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/Summary-Report-Generator.jpg"
                        class="img-fluid" alt="Image 5">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Image 6 -->
    <div class="modal fade" id="imageModal6" tabindex="-1" role="dialog" aria-labelledby="imageModal6Label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModal6Label">Image 6</h5>
                    <button type="button" class="close border-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/Leal-HLC-tab.jpg"
                        class="img-fluid" alt="Image 6">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Image 7 -->
    <div class="modal fade" id="imageModal7" tabindex="-1" role="dialog" aria-labelledby="imageModal7Label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModal7Label">Image 7</h5>
                    <button type="button" class="close border-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/AHU-report-1.jpg"
                        class="img-fluid" alt="Image 7">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Image 8 -->
    <div class="modal fade" id="imageModal8" tabindex="-1" role="dialog" aria-labelledby="imageModal8Label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModal8Label">Image 8</h5>
                    <button type="button" class="close border-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/AHU-report-2.jpg"
                        class="img-fluid" alt="Image 8">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Image 9 -->
    <div class="modal fade" id="imageModal9" tabindex="-1" role="dialog" aria-labelledby="imageModal9Label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModal9Label">Image 9</h5>
                    <button type="button" class="close border-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_images/AHU-report-3.jpg"
                        class="img-fluid" alt="Image 9">
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-4">
        <!-- Heading Section -->

        <h4 class="text-primary">Easy to use</h4>
        <p>avoid searching for data as L-HLC contains authentic data based on the ISHRAE database with additional
            features for the cleanroom at your fingertips.</p>

        <h4 class="text-primary">Saves your time</h4>
        <p>as L-HLC contains RDS(Room Data Sheet), Glass Wall Schedule, Door Schedule(For Cleanrooms) in table
            formats in a single file, and provides importing RDS which avoids surfing in multiple windows this also
            helps to verify input data conveniently. For a 100TR plant with traditional methods, it takes 2 to 3
            working days whereas with L-HLC you can calculate within 2-3 hours</p>

        <h4 class="text-primary">Error reduction</h4>
        <p>Reduce Your Manual Errors To Almost to Zero. Software Calculation Process Flow Gives NO Scope For Errors.
        </p>

        <h4 class="text-primary">Improve Accuracy</h4>
        <p>Software is developed considering many factors which are ignored in regular excel calculations. We have
            focused on adding more accuracy without additional work, rather than reducing the existing repeated
            work.</p>

        <h4 class="text-primary">Low cost and time investment</h4>
        <p>Annual service with updates. Software is benefiting in maintaining accuracy, time-saving, reducing stress
            levels, and faster solutions. Generating BOQ within a day will attract more customers.</p>

        <h4 class="text-primary">Psychrometric Chart</h4>
        <p>Leal HLC automatically generates System Wise psychrometric charts for you. It is very helpful in
            understanding the system-wise process.</p>

        <h4 class="text-primary">Simplified and summarized results</h4>
        <p>Room-wise data and easy-to-read format, generates AHU Enquiry, Ventilation Selection, DX Coil Selection,
            Split AC / Cassette Selection, Dehumidifier Enquiry, Chilled / Brine / Hot Water Manifold sizing and
            Valves and Pipe Quantity, Heater Enquiry, Coil Inlet/Outlet Condition, HEPA / Diffuser / Grill Size and
            quantity, etc.</p>

        <h4 class="text-primary">BOQ Generator Addon</h4>
        <p>Now generates your project BOQ with a few simple clicks, and at lightning speed. No other software in the
            market gives you this much flexibility under Heat load calculations.</p>

        <h4 class="text-primary">Orientation Shifter</h4>
        <p>Now you won’t need to wait for proper building orientation from the client. You can consider any
            orientation and change the orientation of the project with a few clicks.</p>

        <h4 class="text-primary">Psychrometric Calculations</h4>
        <p>Heat Load Calculator is developed with critical inbuilt psychrometric calculations. Now you won’t need to
            calculate Psychrometric calculations from any external software.</p>

        <h4 class="text-primary">Easy to customize and edit</h4>
        <p>This feature gives designer flexibility for working with L-HLC. Work with just 3 tables to create
            complete Heatload Calculations, which saves a lot of time and rechecking makes it very easy and
            efficient.</p>

        <!-- Additional bullet point section -->
        <ul class="list-unstyled">
            <li><strong>-Room Data Sheet in excel used for complete automated calculations</strong></li>
            <li><strong>-No need of entering each data manually on many different screens or windows</strong></li>
            <li><strong>-Room infiltration/exfiltration data in the same single input file makes it easy to
                    understand, easy
                    to recheck, and faster in updating the changes</strong></li>
            <li><strong>-Eliminates / Reduces manual errors is made possible because of extensive
                    Automation</strong>
            </li>
            <li><strong>-Tremendous time-saving in creating heatload and rechecking the data</strong></li>
            <li><strong>-External wall data and partition wall data can be added in the same calculation
                    file</strong></li>
            <li><strong>-Summarizes data - Room wise</strong></li>
            <li><strong>-Manual / Calculated ADP selection available</strong></li>
            <li><strong>-Reheat calculated for No-load condition and using ESHF factor</strong></li>
            <li><strong>-Auto Suggestion for using Dehumidifier and Pre-cooling Unit</strong></li>
        </ul>
    </div>
</section>

<!-- FAQs Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="mb-4">Frequently Asked Questions</h1>
        </div>
        <div class="row pt-5">
            <div class="col-lg-6">
                <div class="accordion" id="accordionFAQ1">
                    <div class="accordion-item wow fadeIn shadow-sm" data-wow-delay="0.1s">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <i class="fas fa-question-circle me-2"></i> What is a heat load calculator, and why
                                do I need it?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                A heat load calculator helps estimate the amount of heating or cooling a building
                                needs. It ensures the HVAC system is properly sized for energy efficiency and
                                comfort.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn shadow-sm" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fas fa-question-circle me-2"></i> How do I calculate the heat load for my
                                building?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Heat load is calculated by considering factors like building size, insulation,
                                occupancy, and climate. A professional HVAC contractor or heat load calculator tool
                                can help provide accurate results.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn shadow-sm" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fas fa-question-circle me-2"></i> Can I use a heat load calculator for
                                both heating and cooling?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Yes, heat load calculators are designed to estimate both heating and cooling
                                requirements, ensuring your HVAC system meets seasonal demands efficiently.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn shadow-sm" data-wow-delay="0.4s">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fas fa-question-circle me-2"></i> Is a professional required to perform a
                                heat load calculation?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                While DIY tools exist, it's highly recommended to have a professional perform the
                                heat load calculation for precision and to prevent costly HVAC sizing errors.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordion" id="accordionFAQ2">
                    <div class="accordion-item wow fadeIn shadow-sm" data-wow-delay="0.5s">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <i class="fas fa-question-circle me-2"></i> How accurate is an online heat load
                                calculator?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Online heat load calculators provide rough estimates, which can vary based on input
                                accuracy. For precise results, professional tools or services are recommended.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn shadow-sm" data-wow-delay="0.6s">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <i class="fas fa-question-circle me-2"></i> What factors impact the heat load of a
                                building?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Factors include building size, insulation quality, climate, number of occupants,
                                appliances, and window placements. All these influence heating and cooling
                                requirements.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn shadow-sm" data-wow-delay="0.7s">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <i class="fas fa-question-circle me-2"></i> How often should I recalculate my
                                building's heat load?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                It's recommended to recalculate the heat load if there are significant changes in
                                your building's structure, occupancy, or insulation to maintain HVAC efficiency.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn shadow-sm" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <i class="fas fa-question-circle me-2"></i> Can a properly calculated heat load save
                                energy?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Yes, a properly calculated heat load ensures that your HVAC system is neither under-
                                nor over-sized, leading to energy savings and reduced operational costs.
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