<?php
/**
 * The main template file
 * Template Name: Digital Marketing
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
                <h1 class="display-4 text-white mb-4 animated slideInRight">Digital Marketing & SEO</h1>
                <p class="text-white mb-4 pt-3 animated fadeInLeftBig">Leal Software Solution is a trusted software
                    company, dedicated to delivering cutting-edge technology solutions tailored to your business
                    needs. Our expertise spans various industries, enabling businesses to optimize their processes,
                    boost productivity, and drive innovation. Partner with us to transform your operations and
                    achieve long-term success through reliable software solutions.</p>
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
            <div class="col-12 col-md-12 col-lg-6 d-flex justify-content-center">
                <div>
                    <h5 class="fw-bold fs-3 lh-base">Accelerate Your Growth with Digital Marketing & SEO Services
                    </h5>
                    <p class="text-muted mt-3">
                        In today’s competitive digital landscape, a strong online presence is the foundation of
                        success. At Leal Software Solution, we specialize in transforming businesses with our
                        comprehensive Digital Marketing and SEO services.
                        <br>
                        <br>
                        • <strong>SEO Optimization & Content Strategy:</strong> Boost your website’s search rankings
                        with tailored strategies, including keyword optimization, engaging content creation.<br>
                        • <strong>PPC Advertising & Social Media Marketing:</strong> Reach your target audience
                        effectively with data-driven ad campaigns, and expand your brand's presence on platforms
                        like Facebook, Instagram, and LinkedIn.<br>
                        • <strong>Analytics & Reporting:</strong> Stay informed with detailed reports on campaign
                        performance, traffic metrics, and ROI analysis to continually optimize your strategy.
                    </p>
                </div>
            </div>

            <div class="ol-12 col-md-12 col-lg-6 mt-4 mt-md-0">
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


    <!-- Second div -->
    <div class="container text-start  py-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center" style="font-weight: bold;">Digital Marketing & SEO</h1>
                <p class="text-center" style="font-style: italic; font-size: 1.2rem;">“Empowering your digital
                    presence with proven
                    strategies.”</p>
            </div>
        </div>
        <div class="row align-items-center mt-4">
            <div class="col-md-12 col-lg-6">
                <img src="<?php bloginfo('template_directory'); ?>/img/adv_prg_framework/mobile_adf.webp"
                    alt="Digital Marketing Image" class="img-fluid" style="max-height: 400px;">
            </div>
            <div class="col-md-12 col-lg-6 pt-3">
                <p>Boost your brand’s visibility and achieve tangible results with our cutting-edge <strong>Digital
                        Marketing</strong> and <strong>SEO</strong> services. We focus on delivering strategies that
                    make a lasting impact:</p>
                <ul>
                    <li><strong>SEO Optimization & Content Strategy:</strong> Build a strong foundation for your
                        online presence with data-driven content and technical optimization to rank higher on search
                        engines.</li>
                    <li><strong>PPC Advertising & Social Media Marketing:</strong> Drive targeted traffic with
                        high-performing ad campaigns, creative content, and social media strategies tailored to your
                        audience.</li>
                    <li><strong>Analytics & Reporting:</strong> Stay ahead with real-time data insights, helping you
                        measure, analyze, and refine your campaigns for sustained success.</li>
                </ul>
                <p>Our solutions ensure that your brand stands out in today’s competitive digital landscape,
                    fostering growth and engagement across platforms.</p>
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


    <!--  third div -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row">
            <!-- Left Section -->
            <div class="col-12 col-md-12 col-lg-6 wp-left-section">
                <h1 class="fw-bold text-start"
                    style="font-size: 45px; -webkit-text-stroke: 2px #000000; paint-order: stroke fill; color: transparent; margin-bottom: 10px;">
                    Digital Marketing & SEO, Sales Engineer</h1>
                <h2 style="font-size: 1.5rem; font-weight: bold;">Empowering Brands with Result-Driven Strategies
                </h2>
                <p class="text-dark" style="line-height: 1.8;">
                    Unlock your brand’s potential with our comprehensive <strong>Digital Marketing</strong>
                    solutions. From
                    <strong>SEO Optimization</strong> and <strong>Content Strategy</strong> to managing effective
                    <strong>PPC Advertising</strong> campaigns and <strong>Social Media Marketing</strong>, we
                    ensure your
                    business thrives online. Partner with us for in-depth <strong>Analytics and Reporting</strong>
                    that
                    guide your success.
                </p>
                <p class="text-dark" style="line-height: 1.8;">
                    Enhance your sales operations with our expert <strong>Sales Engineer</strong> services. From
                    <strong>Technical Sales Support</strong> and delivering compelling <strong>Product
                        Demonstrations</strong>
                    to conducting detailed <strong>Customer Requirements Analysis</strong> and crafting tailored
                    <strong>Proposal Development</strong>, we empower your team.
                </p>
            </div>

            <!-- Right Section -->
            <div class="col-12 col-md-12 col-lg-6 wp-right-section">
                <!-- Digital Marketing & SEO -->
                <div class="scroll-item" style="border-top: 2px solid #007bff; background-color: #e3f2fd;">
                    <h4 style="font-weight: bold;">Digital Marketing & SEO</h4>
                    <ul>
                        <li>SEO Optimization & Content Strategy</li>
                        <li>PPC Advertising & Social Media Marketing</li>
                        <li>Analytics & Reporting</li>
                    </ul>
                </div>
                <!-- Sales Engineer -->
                <div class="scroll-item" style="border-top: 2px solid #dc3545; background-color: #fdecea;">
                    <h4 style="font-weight: bold;">Sales Engineer</h4>
                    <ul>
                        <li>Technical Sales Support & Product Demonstrations</li>
                        <li>Customer Requirements Analysis & Proposal Development</li>
                        <li>Pre/Post-Sales Support</li>
                    </ul>
                </div>
                <!-- Digital Strategy -->
                <div class="scroll-item" style="border-top: 2px solid #17a2b8; background-color: #e0f7fa;">
                    <h4 style="font-weight: bold;">Digital Strategy</h4>
                    <p>We craft digital strategies that align with your business goals, focusing on enhancing online
                        visibility and customer engagement.</p>
                </div>
                <!-- Lead Generation -->
                <div class="scroll-item" style="border-top: 2px solid #28a745; background-color: #e8f5e9;">
                    <h4 style="font-weight: bold;">Lead Generation</h4>
                    <p>Our lead generation services help you connect with the right audience, driving conversions
                        through targeted campaigns.</p>
                </div>
                <!-- Social Media Management -->
                <div class="scroll-item" style="border-top: 2px solid #007bff; background-color: #e3f2fd;">
                    <h4 style="font-weight: bold;">Social Media Management</h4>
                    <p>We manage your social media platforms to build your brand presence, engage with your
                        audience, and drive traffic to your business.</p>
                </div>
                <!-- Email Marketing -->
                <div class="scroll-item" style="border-top: 2px solid #dc3545; background-color: #fdecea;">
                    <h4 style="font-weight: bold;">Email Marketing</h4>
                    <p>Reach your customers with targeted email campaigns designed to inform, engage, and drive
                        conversions effectively.</p>
                </div>
                <!-- Brand Awareness Campaigns -->
                <div class="scroll-item" style="border-top: 2px solid #17a2b8; background-color: #e0f7fa;">
                    <h4 style="font-weight: bold;">Brand Awareness Campaigns</h4>
                    <p>Boost your brand recognition with tailored campaigns that highlight your business's unique
                        strengths and offerings.</p>
                </div>
                <!-- Customer Engagement Strategies -->
                <div class="scroll-item" style="border-top: 2px solid #28a745; background-color: #e8f5e9;">
                    <h4 style="font-weight: bold;">Customer Engagement Strategies</h4>
                    <p>Develop tailored engagement strategies to strengthen customer loyalty and improve
                        satisfaction with your offerings.</p>
                </div>
                <!-- Market Research & Analysis -->
                <div class="scroll-item" style="border-top: 2px solid #007bff; background-color: #e3f2fd;">
                    <h4 style="font-weight: bold;">Market Research & Analysis</h4>
                    <p>Gain valuable insights into your target audience and market trends to inform your strategies
                        and drive business growth.</p>
                </div>
            </div>

        </div>
    </div>
    <!-- end third div -->


    <!-- fourth div -->
    <div class="container py-5 my-0 my-lg-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-7 d-flex justify-content-center">
                <div>
                    <h5 class="fw-bold fs-3 text-start">Empower Your Business with Digital Marketing & SEO</h5>
                    <p class="text-muted mt-3 text-start">
                        Elevate your online presence with our comprehensive expertise in Digital Marketing and SEO.
                        We deliver cutting-edge strategies to help your business grow and thrive in the digital
                        space. Our team specializes in driving organic growth, creating compelling marketing
                        campaigns, and optimizing your online assets for success.<br><br>

                        <strong>SEO Optimization & Content Strategy:</strong> Boost your website's visibility with
                        our tailored SEO solutions. From in-depth keyword research to on-page and off-page
                        optimization, we ensure your site ranks higher and attracts targeted traffic. Our content
                        strategies are designed to engage users and build brand authority.<br><br>

                        <strong>PPC Advertising & Social Media Marketing:</strong> Maximize your reach with targeted
                        pay-per-click (PPC) advertising and strategic social media marketing. Our campaigns are
                        designed to deliver measurable results, driving conversions and brand awareness while
                        optimizing your ad spend.<br><br>

                        <strong>Analytics & Reporting:</strong> Gain valuable insights into your marketing
                        performance with our comprehensive analytics and reporting services. We track key metrics,
                        analyze trends, and provide actionable recommendations to improve your marketing
                        strategies.<br><br>

                        Partner with us to revolutionize your digital marketing efforts and achieve sustained growth
                        through SEO, PPC, and advanced online strategies.
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-5 p-md-5 mt-4 mt-md-0 d-flex justify-content-center align-items-center">
                <img src="<?php bloginfo('template_directory'); ?>/img/web_app_images/Web App Development photos (2).jpg"
                    alt="Digital Marketing & SEO" class="img-fluid" style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>


    <!-- fifth div -->
    <div class="container text-start text-lg-center my-5 wow fadeIn" data-wow-delay="0.3s">
        <h5 class="fw-bold fs-3">Digital Marketing & SEO for Your Projects</h5>
        <p class="pb-3">Explore our comprehensive services in SEO Optimization, PPC Advertising, Analytics &
            Reporting, and Sales Engineer support to elevate your business to new heights.</p>

        <div class="row g-4">
            <!-- SEO Optimization & Content Strategy -->
            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/coding (1).png"
                            alt="SEO Optimization & Content Strategy" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">SEO Optimization & Content Strategy</h5>
                    <p style="font-size: 15px;">Improve your site's ranking and visibility with expert SEO
                        techniques and a tailored content strategy for maximum engagement.</p>
                </div>
            </div>

            <!-- PPC Advertising & Social Media Marketing -->
            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_integration.jpg"
                            alt="PPC Advertising & Social Media Marketing" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">PPC Advertising & Social Media Marketing</h5>
                    <p style="font-size: 15px;">Boost brand awareness and generate high-quality leads through
                        strategically targeted PPC ads and social media campaigns.</p>
                </div>
            </div>

            <!-- Analytics & Reporting -->
            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_support.jpg"
                            alt="Analytics & Reporting" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">Analytics & Reporting</h5>
                    <p style="font-size: 15px;">Track and analyze key metrics to assess the performance of your
                        campaigns and gain valuable insights for optimization.</p>
                </div>
            </div>

            <!-- Technical Sales Support & Product Demonstrations -->
            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_training.jpg"
                            alt="Technical Sales Support & Product Demonstrations" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">Technical Sales Support & Product Demonstrations</h5>
                    <p style="font-size: 15px;">Provide expert technical support to your sales team and demonstrate
                        your products' full potential to clients.</p>
                </div>
            </div>

            <!-- Customer Requirements Analysis & Proposal Development -->
            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_implemention.jpg"
                            alt="Customer Requirements Analysis & Proposal Development" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">Customer Requirements Analysis & Proposal Development</h5>
                    <p style="font-size: 15px;">Analyze client needs to develop customized solutions and create
                        compelling proposals that meet business objectives.</p>
                </div>
            </div>

            <!-- Pre/Post-Sales Support -->
            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_conslutancy.jpg"
                            alt="Pre/Post-Sales Support" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">Pre/Post-Sales Support</h5>
                    <p style="font-size: 15px;">Ensure continuous support throughout the sales cycle, addressing
                        technical queries and enhancing client relationships.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- fifth end div -->


    <!-- six div -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row">
            <!-- Left Section -->
            <div class="col-12 col-md-12 col-lg-6 wp-left-section">
                <h1 class="fw-bold text-start"
                    style="font-size: 35px; -webkit-text-stroke: 2px #000000; paint-order: stroke fill; color: transparent; margin-bottom: 10px;">
                    Digital Marketing & SEO
                </h1>
                <h2 style="font-size: 1.5rem; font-weight: bold;">Deliver Web and App Development Services</h2>
                <p style="line-height: 1.8;">
                    We follow an agile approach to development services to transform your ideas into reality. Our
                    experienced developers assist your software development journey and involve you at every stage
                    to ensure transparency.
                </p>

                <!-- New content section -->
                <div class="mt-4">
                    <h3 style="font-size: 1.2rem; font-weight: bold;">Digital Marketing & SEO</h3>
                    <ul style="list-style: none; padding-left: 0; line-height: 1.8;">
                        <li>
                            <strong>SEO Optimization & Content Strategy:</strong> We develop comprehensive SEO
                            strategies
                            and create engaging content to improve search engine rankings and drive organic traffic
                            to
                            your website.
                        </li>
                        <li>
                            <strong>PPC Advertising & Social Media Marketing:</strong> Our PPC campaigns and social
                            media
                            marketing services help you reach your target audience effectively, ensuring higher ROI
                            and
                            visibility.
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
                                <i class="fas fa-list-alt" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Project Scope Definition</h5>
                            <p style="margin: 0;">We define the project scope by understanding your business goals,
                                user
                                requirements, and expectations. This phase ensures a clear vision and alignment
                                between
                                stakeholders for a smooth execution plan.</p>
                        </div>
                    </div>
                </div>

                <!-- 2 -->
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
                            <p style="margin: 0;">We select the best-fit technologies, tools, and frameworks to
                                ensure
                                scalability, performance, and ease of integration, keeping your current and future
                                business needs in mind.</p>
                        </div>
                    </div>
                </div>

                <!-- 3 -->
                <div class="scroll-item web-section-2 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-laptop-code" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Development & Coding</h5>
                            <p style="margin: 0;">Our skilled developers write clean, well-structured code to bring
                                your
                                ideas to life. Using agile methodologies, we ensure faster delivery and adaptability
                                throughout the development process.</p>
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
                                and
                                security. Bugs are identified and resolved to deliver a seamless and error-free user
                                experience.</p>
                        </div>
                    </div>
                </div>

                <!-- 5 -->
                <div class="scroll-item web-section-2 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-cloud-upload-alt" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Deployment & Launch</h5>
                            <p style="margin: 0;">Once your application is thoroughly tested and approved, we deploy
                                it
                                to your desired platforms, ensuring a smooth and hassle-free launch experience.</p>
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
                                addressing
                                any issues, updates, or optimizations to ensure continuous system performance.</p>
                        </div>
                    </div>
                </div>

                <!-- 7 -->
                <div class="scroll-item web-section-2 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-sync-alt" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">System Integration</h5>
                            <p style="margin: 0;">We integrate your system with existing enterprise software and
                                external
                                APIs, ensuring data flows seamlessly across platforms for streamlined operations.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 8 -->
                <div class="scroll-item web-section-2 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-palette" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Creative Design & Branding</h5>
                            <p style="margin: 0;">Our design team works with you to create unique, creative branding
                                that captures the essence of your business, ensuring a memorable digital presence
                                for
                                your brand.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- six div -->


    <!-- seven div -->
    <div class="container text-start text-lg-center py-5 my-0 wow fadeIn" data-wow-delay="0.3s">
        <h5 class="fw-bold fs-3 pb-5">Technical Stack used in our Digital Marketing & SEO Company</h5>
        <p>
            As a forerunner in the field of WordPress Website development services, we rely upon the latest tools
            and
            technologies to provide you with top-notch solutions of your choice.
        </p>

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
    <!-- end seven div  -->



    <!-- eight div -->
    <div class="container text-start text-lg-center py-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row align-items-center">
            <!-- Left Content -->
            <div>
                <h1 style="font-weight: bold;">Trusted Digital Marketing & SEO Company in India</h1>
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
                    <!-- Digital Marketing & SEO -->
                    <div class="col-md-5 custom-card-container">
                        <div class="custom-card-image-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/wp_images/Divi.jpg"
                                alt="Digital Marketing & SEO" style="max-width: 100%; height: auto;">
                        </div>
                        <div class="text-start">
                            <h5>Digital Marketing & SEO</h5>
                            <p>Expert SEO optimization, content strategy, and targeted PPC advertising to enhance
                                your
                                online visibility. We drive organic traffic and help you achieve higher conversion
                                rates
                                through data-driven marketing strategies.</p>
                        </div>
                    </div>

                    <!-- SEO Optimization & Content Strategy -->
                    <div class="col-md-5 custom-card-container">
                        <div class="custom-card-image-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/wp_images/Elementor.jpg"
                                alt="SEO Optimization" style="max-width: 90%; height: auto;">
                        </div>
                        <div class="text-start">
                            <h5>SEO Optimization & Content Strategy</h5>
                            <p>We offer comprehensive SEO strategies and optimized content that enhance your
                                website's
                                ranking on search engines, ensuring long-term success for your digital presence.</p>
                        </div>
                    </div>

                    <!-- PPC Advertising & Social Media Marketing -->
                    <div class="col-md-5 custom-card-container">
                        <div class="custom-card-image-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/wp_images/woocommerce-1.jpg"
                                alt="Social Media Marketing" style="max-width: 100%; height: auto;">
                        </div>
                        <div class="text-start">
                            <h5>PPC Advertising & Social Media Marketing</h5>
                            <p>Leverage targeted ads across Google, Facebook, and other platforms to generate
                                immediate
                                traffic. We help you reach a wider audience through impactful paid campaigns and
                                social
                                media engagement.</p>
                        </div>
                    </div>

                    <!-- Sales Engineer Section -->
                    <div class="col-md-5 custom-card-container">
                        <div class="custom-card-image-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/wp_images/Jetpack.jpg"
                                alt="Sales Engineer" style="max-width: 100%; height: auto;">
                        </div>
                        <div class="text-start">
                            <h5>Sales Engineer</h5>
                            <p>Our sales engineers provide technical support, product demonstrations, and customer
                                requirement analysis to tailor solutions for specific business needs.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 p-md-5 align-self-center text-center text-lg-center">
                <img src="<?php bloginfo('template_directory'); ?>/img/web_app_images/Web App Development photos (2).jpg"
                    alt="Team Image" class="img-fluid">
            </div>
        </div>
        <div class="text-center text-md-start mt-4">
            <button class="btn btn-primary px-4 py-2"
                style="background-color: #1363C6; border: none; border-radius: 5px;">
                LET’S TEAM UP
            </button>
        </div>
    </div>
    <!-- end eight div -->


    <!-- nine div -->
    <div class="container text-start py-5 wow fadeIn" data-wow-delay="0.3s">
        <h1 class="fw-bold mb-3" style="font-size: 2rem;">Why Choose #1 Digital Marketing & SEO
            Solution?</h1>
        <p class="mb-4" style="font-size: 1rem; color: #555;">
            Choosing #1 Digital Marketing & SEO Solution offers an array of benefits, providing you with
            cutting-edge digital solutions to meet your business needs. Here’s why we stand out:
        </p>
        <div class="row gy-4">
            <!-- Card 1 - SEO Optimization & Content Strategy -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3"
                    style="background-color: #f8f9fa; border-radius: 10px;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/coding (1).png" alt="SEO Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">SEO Optimization & Content
                            Strategy:</h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">
                            Our expertise in SEO optimization and content strategy ensures higher search engine
                            rankings, driving organic traffic and improving visibility for your business.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 2 - PPC Advertising & Social Media Marketing -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3"
                    style="background-color: #f8f9fa; border-radius: 10px;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_training.jpg" alt="PPC Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">PPC Advertising & Social
                            Media Marketing:</h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">
                            Boost your brand’s reach with our expert PPC advertising and social media marketing
                            services, ensuring targeted ads that convert and engaging social media strategies.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 3 - Analytics & Reporting -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3"
                    style="background-color: #f8f9fa; border-radius: 10px;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_support.jpg"
                        alt="Analytics Icon" style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Analytics & Reporting:
                        </h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">
                            Our comprehensive analytics and reporting services provide deep insights into your
                            digital marketing performance, helping you make data-driven decisions for greater
                            business impact.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 4 - Technical Sales Support & Product Demonstrations -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3"
                    style="background-color: #f8f9fa; border-radius: 10px;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_integration.jpg"
                        alt="Sales Icon" style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Technical Sales Support &
                            Product Demonstrations:</h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">
                            Our technical sales support team is ready to assist with product demonstrations and
                            customer requirements analysis, ensuring tailored solutions for every prospect.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 5 - Customer Requirements Analysis & Proposal Development -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3"
                    style="background-color: #f8f9fa; border-radius: 10px;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_implemention.jpg"
                        alt="Proposal Icon" style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Customer Requirements
                            Analysis & Proposal Development:</h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">
                            We conduct thorough customer requirements analysis to craft well-defined proposals that
                            align with your business goals, providing clear and actionable solutions.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 6 - Pre/Post-Sales Support -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3"
                    style="background-color: #f8f9fa; border-radius: 10px;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_development.jpg"
                        alt="Support Icon" style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Pre/Post-Sales Support:
                        </h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">
                            We provide comprehensive pre and post-sales support to ensure customer satisfaction,
                            guiding you through the entire journey and offering assistance even after the sale is
                            complete.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- nine div -->
</section>
<!-- End Section -->


<!--  -->
<div class="container-fluid bg-primary text-white wow fadeIn" data-wow-delay="0.3s">
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="fw-bold text-start"
                    style="font-size: 45px; -webkit-text-stroke: 2px #000000; paint-order: stroke fill; color: transparent; margin-bottom: 10px;">
                    Digital Marketing & SEO</h1>
                <h5 class="text-start" style="font-size: 1.5rem; font-weight: bold; color: #ffffff;">Building Robust
                    Solutions With Expertise in SEO, PPC, Social Media, and More!</h5>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <p style="font-size: 1rem; line-height: 1.8;">
                    Unlock the full potential of your business with our Digital Marketing & SEO services. We
                    specialize in SEO optimization and content strategy to increase your online visibility, improve
                    your search engine rankings, and drive targeted traffic to your website. Our strategies are
                    tailored to your business goals and designed to achieve long-term success in the digital
                    landscape.
                </p>
            </div>
            <div class="col-md-6">
                <p style="font-size: 1rem; line-height: 1.8;">
                    With our expertise in PPC advertising and social media marketing, we ensure that your campaigns
                    reach the right audience at the right time. We optimize every aspect of your ad strategy, from
                    keyword targeting to conversion tracking, to help you maximize your ROI and grow your online
                    presence across major platforms like Google, Facebook, and LinkedIn.
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <p style="font-size: 1rem; line-height: 1.8;">
                    We offer detailed analytics and reporting to track the performance of your digital marketing
                    campaigns. Our data-driven insights help you make informed decisions, fine-tune your strategies,
                    and achieve optimal results. Whether it's tracking SEO performance or PPC campaign
                    effectiveness, we provide the necessary tools to measure success.
                </p>
            </div>
            <div class="col-md-6">
                <p style="font-size: 1rem; line-height: 1.8;">
                    Our Sales Engineers provide comprehensive technical support and product demonstrations to
                    showcase the benefits of your solutions. We conduct customer requirements analysis and develop
                    proposals to ensure that the right solutions are offered. Our pre and post-sales support ensures
                    that your customers get the most value from your products and services.
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <p style="font-size: 1rem; line-height: 1.8;">
                    At the heart of our services is a commitment to delivering high-quality and result-oriented
                    solutions. Whether you're looking for SEO optimization, PPC advertising, or technical sales
                    support, our team brings years of experience to the table. We work with you to build effective
                    strategies that drive growth and success. Ready to elevate your business in the digital world?
                    Let’s connect and make it happen!
                </p>
            </div>
        </div>
    </div>
</div>
<!-- -->


<!-- Start this challenges section -->
<section class="pt-5 pt-lg-0 wow fadeIn" data-wow-delay="0.3s">
    <div class="container text-start text-lg-center py-0 py-lg-5">
        <div>
            <h2>Key Areas in Digital Marketing & Sales Engineering</h2>
            <p>
                In today's competitive landscape, businesses need effective strategies to excel in Digital Marketing
                & SEO and
                leverage the technical expertise of Sales Engineers to meet customer needs. Below are some crucial
                focus areas.
            </p>
        </div>

        <!-- Key Areas Section -->
        <div class="row text-center g-4 mt-5">
            <!-- Digital Marketing & SEO -->
            <div class="col-md-4 key-area-item text-start services-number-container"
                style="border: 3px solid #1363C6; border-radius: 10px;">
                <span class="number-background">01</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">SEO Optimization & Content Strategy</h4>
                    <p>
                        Effective SEO strategies help businesses improve online visibility and attract organic
                        traffic. Crafting engaging content aligned with targeted keywords ensures a strong online
                        presence. Regular performance tracking and optimization further help brands maintain a
                        competitive edge in search engine rankings while connecting with their audience effectively.
                    </p>
                </div>
            </div>
            <div class="col-md-4 key-area-item text-start services-number-container"
                style="border: 3px solid #1363C6; border-radius: 10px;">
                <span class="number-background">02</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">PPC Advertising & Social Media Marketing</h4>
                    <p>
                        PPC campaigns and social media strategies empower businesses to engage with their target
                        audience. With precise targeting and measurable results, businesses can generate
                        high-quality leads. Creative ads, relevant messaging, and consistent monitoring of campaign
                        performance ensure maximum impact and return on investment for every marketing dollar spent.
                    </p>
                </div>
            </div>
            <div class="col-md-4 key-area-item text-start services-number-container"
                style="border: 3px solid #1363C6; border-radius: 10px;">
                <span class="number-background">03</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Analytics & Reporting</h4>
                    <p>
                        Analytics and reporting provide actionable insights into marketing efforts, enabling smarter
                        decision-making. By identifying trends, monitoring campaign effectiveness, and understanding
                        audience behavior, businesses can refine strategies. This data-driven approach helps
                        allocate resources efficiently and achieve long-term success through continuous optimization
                        and improvement.
                    </p>
                </div>
            </div>

            <!-- Sales Engineer -->
            <div class="col-md-4 key-area-item text-start services-number-container"
                style="border: 3px solid #1363C6; border-radius: 10px;">
                <span class="number-background">04</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Technical Sales Support & Product Demonstrations</h4>
                    <p>
                        Sales Engineers play a vital role by providing technical expertise and delivering impactful
                        product demonstrations. These demonstrations highlight the unique value of solutions and
                        address specific client challenges. Effective communication and a deep understanding of
                        product capabilities build customer confidence and drive successful sales conversions.
                    </p>
                </div>
            </div>
            <div class="col-md-4 key-area-item text-start services-number-container"
                style="border: 3px solid #1363C6; border-radius: 10px;">
                <span class="number-background">05</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Customer Requirements Analysis & Proposal Development</h4>
                    <p>
                        Understanding customer needs is critical for developing tailored proposals that meet their
                        unique challenges. A thorough analysis of requirements ensures that proposed solutions align
                        with client objectives. Clear, concise proposals backed by detailed research help establish
                        trust and pave the way for successful project implementation.
                    </p>
                </div>
            </div>
            <div class="col-md-4 key-area-item text-start services-number-container"
                style="border: 3px solid #1363C6; border-radius: 10px;">
                <span class="number-background">06</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Pre/Post-Sales Support</h4>
                    <p>
                        Delivering reliable support during pre-sales and post-sales stages enhances the customer
                        experience and builds trust. From answering technical queries to ensuring seamless solution
                        deployment, Sales Engineers are instrumental in creating long-term partnerships. Their
                        proactive approach ensures customers feel valued and supported at every stage.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End this challenges section -->


<!-- Feature Start -->
<section class="pb-5 wow fadeIn" data-wow-delay="0.3s">
    <div class="container mt-5">
        <h2 class="text-start py-3">Digital Marketing & SEO - Leal Software Solution</h2>
        <div class="text-start">
            <p>
                At Leal Software Solution, we empower businesses with comprehensive digital marketing strategies and
                expert sales engineering solutions. From SEO optimization and PPC advertising to technical sales
                support, we ensure your business thrives in today’s competitive environment. Explore our key
                features below.
            </p>

            <div class="row mt-4">
                <!-- SEO Optimization & Content Strategy -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/technical-support.png"
                            alt="SEO Optimization & Content Strategy" class="feature-icon" width="50" height="50">
                        <span class="ps-3">SEO Optimization & Content Strategy: Boost visibility with effective
                            content and keyword strategies.</span>
                    </div>
                </div>

                <!-- PPC Advertising & Social Media Marketing -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/suitcase.png"
                            alt="PPC Advertising & Social Media Marketing" class="feature-icon" width="50" height="50">
                        <span class="ps-3">PPC Advertising & Social Media Marketing: Target your audience with
                            precision for high-quality leads.</span>
                    </div>
                </div>

                <!-- Technical Sales Support & Product Demonstrations -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/mobile-shopping.png"
                            alt="Technical Sales Support & Product Demonstrations" class="feature-icon" width="50"
                            height="50">
                        <span class="ps-3">Technical Sales Support & Product Demonstrations: Showcase your solutions
                            effectively to clients.</span>
                    </div>
                </div>

                <!-- Analytics & Reporting -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/cooperation.png"
                            alt="Analytics & Reporting" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Analytics & Reporting: Gain actionable insights to optimize campaigns and
                            strategies.</span>
                    </div>
                </div>

                <!-- Pre/Post-Sales Support -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/suitcase.png"
                            alt="Pre/Post-Sales Support" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Pre/Post-Sales Support: Ensure seamless transitions and continuous client
                            satisfaction.</span>
                    </div>
                </div>

                <!-- Security Focused -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/reposting.png"
                            alt="Security Focused" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Security Focused: Protect sensitive data with robust security
                            measures.</span>
                    </div>
                </div>

                <!-- Customer Requirements Analysis & Proposal Development -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/user-experience.png"
                            alt="Customer Requirements Analysis & Proposal Development" class="feature-icon" width="50"
                            height="50">
                        <span class="ps-3">Customer Requirements Analysis & Proposal Development.</span>
                    </div>
                </div>

                <!-- Performance Optimization -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/needs.png"
                            alt="Performance Optimization" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Performance Optimization: Fine-tune applications for speed and
                            efficiency.</span>
                    </div>
                </div>

                <!-- 24/7 Support -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/technical-support.png"
                            alt="24/7 Support" class="feature-icon" width="50" height="50">
                        <span class="ps-3">24/7 Support: Reliable troubleshooting and assistance anytime you
                            need.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature End -->


<!-- Digital Marketing & SEO Section -->
<div class="container text-start text-lg-center wow fadeIn" data-wow-delay="0.3s" style="background-color: #f9f9f9;">
    <div style="padding: 10px; max-width: 1200px; margin: auto;">
        <div>
            <h5 class="fs-2 fw-bold">Why Choose <span style="color: #007bff;">Leal Software Solution</span> for
                Digital Marketing & SEO Services?</h5>
            <p class="py-3" style="font-size: 1rem;">Our team offers a wide range of expert solutions to power your
                next project, including:</p>
        </div>
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 300px; padding: 10px;">
                <ul style="list-style-type: none; padding-left: 0; font-size: 1rem;">
                    <li class="list-item"><span>&#9670;</span> Drive visibility with expert <strong>SEO
                            Optimization</strong> and tailored <strong>Content Strategy</strong> to boost your
                        online presence.</li>
                    <li class="list-item"><span>&#9670;</span> Leverage targeted <strong>PPC Advertising</strong>
                        campaigns and impactful <strong>Social Media Marketing</strong> strategies.</li>
                    <li class="list-item"><span>&#9670;</span> Utilize advanced <strong>Analytics &
                            Reporting</strong> tools to track performance and optimize your marketing efforts.</li>
                    <li class="list-item"><span>&#9670;</span> Utilize advanced <strong>Analytics &
                            Reporting</strong> tools to track performance and optimize your marketing efforts.</li>

                </ul>
            </div>
            <div style="flex: 1; min-width: 300px; padding: 10px;">
                <ul style="list-style-type: none; padding-left: 0; font-size: 1rem;">
                    <li class="list-item"><span>&#9670;</span> Provide in-depth <strong>Technical Sales
                            Support</strong> and deliver impactful product demonstrations.</li>
                    <li class="list-item"><span>&#9670;</span> Analyze customer requirements and develop customized
                        <strong>Proposals</strong> for effective solutions.
                    </li>
                    <li class="list-item"><span>&#9670;</span> Deliver exceptional <strong>Pre and Post-Sales
                            Support</strong> to ensure seamless customer satisfaction.</li>
                    <li class="list-item"><span>&#9670;</span> Deliver exceptional <strong>Pre and Post-Sales
                            Support</strong> to ensure seamless customer satisfaction.</li>

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End code -->


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
                                What is SEO Optimization & Content Strategy?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                SEO Optimization & Content Strategy involves improving your website's visibility on
                                search engines and creating tailored content to attract and engage your target
                                audience effectively.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How does PPC Advertising & Social Media Marketing help?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                PPC Advertising drives targeted traffic to your website through paid campaigns,
                                while Social Media Marketing builds brand awareness and engages your audience across
                                various platforms.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What is the role of Analytics & Reporting in Digital Marketing?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Analytics & Reporting provide insights into campaign performance, helping you make
                                data-driven decisions to optimize your marketing efforts and achieve better results.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Do you provide Technical Sales Support?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Yes, we offer Technical Sales Support, including product demonstrations, to help you
                                effectively communicate the value of your solutions to potential clients.
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
                                What is Customer Requirements Analysis & Proposal Development?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                This process involves understanding client needs and creating customized proposals
                                that align with their goals, ensuring effective solutions for their requirements.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                What is Pre/Post-Sales Support?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Pre/Post-Sales Support ensures a seamless customer journey, from initial
                                consultations to ongoing assistance after the sale, enhancing client satisfaction
                                and retention.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Can you provide Product Demonstrations?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Yes, we offer detailed product demonstrations to showcase the features and benefits
                                of your solutions, helping you convert leads into satisfied customers.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                How do you ensure seamless integration of these services?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Our team ensures a smooth integration of all services, leveraging advanced tools and
                                methodologies to deliver cohesive and effective results.
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