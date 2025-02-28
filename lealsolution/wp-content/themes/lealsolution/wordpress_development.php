<?php
/**
 * The main template file
 * Template Name: Wordpress Development
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
                <h1 class="display-4 text-white mb-4 animated slideInRight">Wordpress Development</h1>
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
    <div class="container text-start text-lg-center my-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row">
            <div class="col-12">
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

    <!-- start new div -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row">
            <!-- Left Section -->
            <div class="col-12 col-md-12 col-lg-6 wp-left-section">
                <h1 class="fw-bold text-start"
                    style="font-size: 45px; -webkit-text-stroke: 2px #000000; paint-order: stroke fill; color: transparent; margin-bottom: 10px;">
                    WordPress Development</h1>
                <h2 style="font-size: 1.5rem; font-weight: bold;">Deliver Tailored WordPress Development Services
                </h2>
                <p style="line-height: 1.8;">
                    We specialize in delivering cutting-edge WordPress solutions tailored to meet the unique needs
                    of your business. From creating custom themes to building high-performing e-commerce sites, our
                    team ensures your online presence stands out. Our expertise spans plugin development, site
                    optimization for speed and SEO, and seamless third-party integrations, enabling your website to
                    deliver exceptional user experiences. Whether you’re a small startup or a large enterprise, we
                    provide scalable and secure WordPress development services. Contact us now for custom WordPress
                    development services that match all your business requirements and help you achieve your digital
                    goals.
                </p>
            </div>

            <!-- Right Section -->
            <div class="col-12 col-md-12 col-lg-6 wp-right-section">
                <!-- Custom WordPress Development -->
                <div class="scroll-item wp-section-1" style="border-top: 2px solid #007bff; background-color: #e3f2fd;">
                    <h4 style="font-weight: bold;">Custom WordPress Development</h4>
                    <p>
                        Get fully customized WordPress websites tailored to your brand’s specific needs. We deliver
                        dynamic, feature-rich websites with seamless functionality.
                    </p>
                </div>
                <!-- WordPress Theme Development -->
                <div class="scroll-item wp-section-2" style="border-top: 2px solid #dc3545; background-color: #fdecea;">
                    <h4 style="font-weight: bold;">WordPress Theme Development</h4>
                    <p>
                        Create visually stunning and fully responsive themes for your WordPress website. We ensure
                        your site aligns with your brand identity and engages visitors.
                    </p>
                </div>
                <!-- Plugin Development -->
                <div class="scroll-item wp-section-3" style="border-top: 2px solid #28a745; background-color: #e8f5e9;">
                    <h4 style="font-weight: bold;">WordPress Plugin Development</h4>
                    <p>
                        Enhance your website's functionality with custom WordPress plugins designed to meet your
                        unique requirements and business goals.
                    </p>
                </div>

                <!-- E-commerce Solutions -->
                <div class="scroll-item wp-section-4" style="border-top: 2px solid #ffc107; background-color: #fff8e1;">
                    <h4 style="font-weight: bold;">WooCommerce Development</h4>
                    <p>
                        Build a powerful online store with our WooCommerce development services. We create secure,
                        scalable, and user-friendly e-commerce solutions.
                    </p>
                </div>
                <!-- Speed Optimization -->
                <div class="scroll-item wp-section-5" style="border-top: 2px solid #6c757d; background-color: #f8f9fa;">
                    <h4 style="font-weight: bold;">WordPress Speed Optimization</h4>
                    <p>
                        Ensure your WordPress site loads lightning-fast with our speed optimization services,
                        improving performance and user experience.
                    </p>
                </div>
                <!-- Website Maintenance -->
                <div class="scroll-item wp-section-6" style="border-top: 2px solid #17a2b8; background-color: #e0f7fa;">
                    <h4 style="font-weight: bold;">WordPress Maintenance Services</h4>
                    <p>
                        Keep your WordPress site secure, updated, and fully functional with our ongoing maintenance
                        services.
                    </p>
                </div>

                <!-- SEO-Friendly Development -->
                <div class="scroll-item wp-section-7" style="border-top: 2px solid #6610f2; background-color: #ede7f6;">
                    <h4 style="font-weight: bold;">SEO-Friendly WordPress Development</h4>
                    <p>
                        Develop WordPress sites optimized for search engines to improve your online visibility and
                        attract more organic traffic.
                    </p>
                </div>
                <!-- API Integration -->
                <div class="scroll-item wp-section-8" style="border-top: 2px solid #fd7e14; background-color: #fff3e0;">
                    <h4 style="font-weight: bold;">WordPress API Integration</h4>
                    <p>
                        Integrate third-party APIs seamlessly into your WordPress site for added functionality and
                        enhanced user experience.
                    </p>
                </div>
                <!-- Migration Services -->
                <div class="scroll-item wp-section-9" style="border-top: 2px solid #20c997; background-color: #e8f5e9;">
                    <h4 style="font-weight: bold;">WordPress Migration Services</h4>
                    <p>
                        Safely migrate your website to WordPress without data loss or downtime. Let us handle the
                        transition for a seamless experience.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end new div -->

    <!-- Second div -->
    <div class="container py-5 my-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-7 d-flex justify-content-center">
                <div>
                    <h5 class="fw-bold fs-3 text-start">Transform your Website with our WordPress Development
                        Services to Accelerate Your Business Growth</h5>
                    <p class="text-muted mt-3 text-start">If you wish to set up your special contributions to a blog
                        webpage or are hoping to make a feature-rich and intuitive business site, then look no
                        further than one of the best WordPress development service providers: OrangeMantra. We are
                        one of the most recognized WordPress development organizations around the globe and have
                        been in this business for two decades. Our skilled group of WordPress developers has the
                        intuition to deliver out-of-the-box web solutions utilizing state-of-the-art WordPress
                        innovation.<br><br>

                        WordPress is one of the easiest and most powerful content management systems and comes with
                        numerous features to make your experience pleasing and appealing. It maintains a worldwide
                        community to help you 24*7. Numerous plugins are available to add features to your
                        site.<br><br>

                        Orange Mantra offers WordPress development and solutions at cost-effective prices as well as
                        high-end solutions. We strive hard to offer everyone with top-notch WordPress Website
                        development services.
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-5 p-md-5 mt-4 mt-md-0 d-flex justify-content-center align-items-center">
                <img src="<?php bloginfo('template_directory'); ?>/img/wp_images/wp2.jpg" alt="Description of Image"
                    class="img-fluid" style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>

    <!-- Third div -->
    <div class="container text-start text-lg-center my-5 wow fadeIn" data-wow-delay="0.3s">
        <h5 class="fw-bold fs-3">Diverse WordPress Services Offered By Us</h5>
        <p class="pb-3">Check out the range of services we provide to get your WordPress website development project
            done.</p>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_support.jpg"
                            alt="WordPress Services" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">WordPress Services</h5>
                    <p style="font-size: 15px;">OrangeMantra offers all possible WordPress services, ranging from
                        custom
                        WordPress theme development, plugin customization, WordPress speed optimization, SEO, and
                        integration.p>
                </div>
            </div>


            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/app-development.jpg"
                            alt="WordPress Services" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">WordPress SEO</h5>
                    <p style="font-size: 15px;">OrangeMantra follows the best practices as per the latest strategy
                        to
                        advance your site for web indexing. We search for relevant keywords, valuable content,
                        backlinks
                        for websites, and more.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/coding (1).png"
                            alt="WordPress Support" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">WordPress Support</h5>
                    <p style="font-size: 15px;">We offer quality WordPress support services including customization,
                        migration, staging, maintenance, and troubleshooting to match the pace of updates.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_implemention.jpg"
                            alt="WordPress Design" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">WordPress Design</h5>
                    <p style="font-size: 15px;">The design remains our foremost focus. We offer a full service that
                        includes a simple and user-friendly interface, ensuring high-end service levels on your
                        site.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_integration.jpg"
                            alt="WordPress Upgradation Service" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">WordPress Upgradation Service</h5>
                    <p style="font-size: 15px;">A site without security is life without breath. We provide high-end
                        security levels on your site with WordPress upgradation services.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="p-3 service-card">
                    <div class="mb-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_conslutancy.jpg"
                            alt="WordPress Customization" style="width: 50px;">
                    </div>
                    <h5 style="font-weight: bold;">WordPress Customization</h5>
                    <p style="font-size: 15px;">WordPress customization is done according to client requirements.
                        Our
                        developers integrate third-party plugins and modules seamlessly.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Fourth div -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row">
            <!-- Left Section -->
            <div class="col-12 col-md-12 col-lg-6 wp-left-section">
                <h1 class="fw-bold text-start"
                    style="font-size: 35px; -webkit-text-stroke: 2px #000000; paint-order: stroke fill; color: transparent; margin-bottom: 10px;">
                    Procedure of Our<br> WordPress Development Services</h1>
                <h2 style="font-size: 1.5rem; font-weight: bold;">Deliver Exceptional Web Development Solutions</h2>
                <p style="line-height: 1.8;">
                    We follow an agile methodology for WordPress development services, transforming your ideas into
                    dynamic and responsive websites. Our expert WordPress developers have years of experience to
                    assist your web development journey and ensure transparency at every stage.<br><br>

                    Our WordPress development company focuses on scalability, adaptability, and customization to
                    meet your business needs. We provide end-to-end services, including theme customization, plugin
                    development, and optimization for performance and SEO.
                </p>
            </div>

            <!-- Right Section -->
            <div class="col-12 col-md-12 col-lg-6 wp-right-section">
                <!-- Web Development -->
                <div class="scroll-item web-section-1 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-lightbulb" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Project Scope Definition</h5>
                            <p style="margin: 0;">We begin by defining the scope of your WordPress project,
                                understanding your business goals, design requirements, and desired functionalities.
                                This ensures a clear roadmap for the development process.</p>
                        </div>
                    </div>
                </div>

                <div class="scroll-item web-section-2 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-tools" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Theme and Plugin Selection</h5>
                            <p style="margin: 0;">We carefully select or create custom WordPress themes and plugins
                                to meet your project requirements, ensuring a seamless and feature-rich user
                                experience.</p>
                        </div>
                    </div>
                </div>

                <div class="scroll-item web-section-3 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-code" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Custom Development</h5>
                            <p style="margin: 0;">Our skilled WordPress developers create custom features, ensuring
                                the website aligns with your unique business needs. We focus on clean, efficient
                                coding practices for optimal performance.</p>
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
                            <p style="margin: 0;">Before deployment, we rigorously test your WordPress website to
                                identify and resolve bugs, ensuring a secure, responsive, and user-friendly
                                experience.</p>
                        </div>
                    </div>
                </div>

                <div class="scroll-item app-section-2 wp-scroll-item">
                    <div class="col-md-12 d-flex flex-column flex-md-row">
                        <div class="d-flex flex-column justify-content-start align-items-center"
                            style="min-height: 100px;">
                            <div class="text-center development-icons">
                                <i class="fas fa-rocket" style="font-size: 25px;"></i>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column justify-content-center">
                            <h5 style="font-weight: bold;">Deployment & Launch</h5>
                            <p style="margin: 0;">We deploy your WordPress website to your hosting environment,
                                ensuring smooth integration and readiness for public access with full functionality.
                            </p>
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
                            <p style="margin: 0;">After launch, we offer ongoing support and maintenance, including
                                updates, troubleshooting, and feature enhancements to keep your WordPress website
                                running smoothly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fifth div -->
    <div class="container text-start text-lg-center py-5 my-5 wow fadeIn" data-wow-delay="0.3s">
        <h5 class="fw-bold fs-3">Technical Stack used in our WordPress Development Company</h5>
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

    <!-- Six div -->
    <div class="container my-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row align-items-center">
            <!-- Left Content -->

            <div class="text-start text-lg-center">
                <h1 style="font-weight: bold;">Trusted WordPress Development Company in India</h1>
                <p style="color: #555;">
                    From conceptualization to deployment with plugin development and API integration - we offer
                    a comprehensive WordPress solution for your business.
                    Recognized as a top WordPress development company in India, ensuring client satisfaction is
                    at the heart of our service. Here’s why you should engage
                    <span style="font-weight: bold; color: #1363C6;">website design services</span> from us:
                </p>
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="row g-4 pt-5 justify-content-center">
                    <!-- Experienced Professionals -->
                    <div class="col-md-5 custom-card-container">
                        <div class="custom-card-image-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/wp_images/Wordpress.jpg" alt="Icon"
                                style="max-width: 100%; height: auto;">
                        </div>
                        <div class="text-start">
                            <h5>Experienced Professionals</h5>
                            <p>We hire only accomplished and seasoned developers to provide an unparalleled web
                                solution.
                                Irrespective of the project complexity, we can deliver you the perfect service.</p>
                        </div>
                    </div>

                    <!-- Intuitive Admin Panel -->
                    <div class="col-md-5 custom-card-container">
                        <div class="custom-card-image-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/wp_images/Elementor.jpg" alt="Icon"
                                style="max-width: 90%; height: auto;">
                        </div>
                        <div class="text-start">
                            <h5>Intuitive Admin Panel</h5>
                            <p>We create intuitive and simple admin panels to allow even the non-technical site
                                owners to
                                easily customize and manage the website.</p>
                        </div>
                    </div>

                    <!-- SEO-Friendly Web Solution -->
                    <div class="col-md-5 custom-card-container">
                        <div class="custom-card-image-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/wp_images/xamp.jpg" alt="Icon"
                                style="max-width: 100%; height: auto;">
                        </div>
                        <div class="text-start">
                            <h5>SEO-Friendly Web Solution</h5>
                            <p>We comply with the latest SEO guidelines while coding a WordPress site. We can also
                                optimize
                                your site to ensure a high rank on the search engine.</p>
                        </div>
                    </div>

                    <!-- WordPress Development Expertise -->
                    <div class="col-md-5 custom-card-container">
                        <div class="custom-card-image-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/wp_images/Magento.jpg" alt="Icon"
                                style="max-width: 100%; height: auto;">
                        </div>
                        <div class="text-start">
                            <h5>WordPress Development Expertise</h5>
                            <p>Our WordPress development team specializes in creating highly customizable and
                                scalable websites. We focus on building user-friendly, responsive sites that provide
                                seamless performance and an exceptional user experience.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Image Section -->
            <div class="col-md-12 col-lg-4 p-md-5 align-self-center text-center text-lg-center">
                <img src="<?php bloginfo('template_directory'); ?>/img/wp_images/wp4.jpg" alt="Team Image"
                    class="img-fluid">
            </div>
        </div>
        <!-- Button Section -->
        <div class="text-center text-md-start mt-4">
            <button class="btn btn-primary px-4 py-2"
                style="background-color: #1363C6; border: none; border-radius: 5px;">LET’S TEAM UP</button>
        </div>
    </div>


    <!-- Seven div -->
    <div class="container text-start py-5 wow fadeIn" data-wow-delay="0.3s">
        <h1 class="fw-bold mb-3" style="font-size: 2rem;">Why Choose #1 Leal Software Solution?</h1>
        <p class="mb-4" style="font-size: 1rem; color: #555;">Choosing #1 Leal Software Solution comes
            with
            a host of compelling reasons that set us apart and make us the preferred choice for your digital needs:
        </p>
        <div class="row gy-4">
            <!-- Card 1 -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3"
                    style="background-color: #f8f9fa; border-radius: 10px;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/coding (1).png" alt="Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Experience:</h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">With a foundation dating back to 1999,
                            we
                            bring over two decades of experience in the digital marketing and website design
                            industry.
                            Our long-standing presence speaks volumes about our expertise and reliability.</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3"
                    style="background-color: #f8f9fa; border-radius: 10px;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_support.jpg" alt="Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Comprehensive Digital
                            Solutions:</h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">We offer a wide range of digital
                            services,
                            including Website Designing, Digital Strategy, Social Media Marketing, SEO, Web
                            Development,
                            Video Corporate Presentation, and more. You can find all your digital marketing needs
                            under
                            one roof.</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3"
                    style="background-color: #f8f9fa; border-radius: 10px;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_development.jpg" alt="Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Creative and Customized
                            Approach:</h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">Our team is driven by passion and
                            creativity, ensuring that each website and marketing strategy is tailor-made to suit
                            your
                            brand's unique requirements and target audience.</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3"
                    style="background-color: #f8f9fa; border-radius: 10px;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_integration.jpg" alt="Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Creative and Customized
                            Approach:</h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">Our team is driven by passion and
                            creativity, ensuring that each website and marketing strategy is tailor-made to suit
                            your
                            brand's unique requirements and target audience.</p>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3"
                    style="background-color: #f8f9fa; border-radius: 10px;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/app-development.jpg" alt="Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Creative and Customized
                            Approach:</h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">Our team is driven by passion and
                            creativity, ensuring that each website and marketing strategy is tailor-made to suit
                            your
                            brand's unique requirements and target audience.</p>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3"
                    style="background-color: #f8f9fa; border-radius: 10px;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_conslutancy.jpg" alt="Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Creative and Customized
                            Approach:</h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">Our team is driven by passion and
                            creativity, ensuring that each website and marketing strategy is tailor-made to suit
                            your
                            brand's unique requirements and target audience.</p>
                    </div>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3"
                    style="background-color: #f8f9fa; border-radius: 10px;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/coding.jpg" alt="Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Creative and Customized
                            Approach:</h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">Our team is driven by passion and
                            creativity, ensuring that each website and marketing strategy is tailor-made to suit
                            your
                            brand's unique requirements and target audience.</p>
                    </div>
                </div>
            </div>
            <!-- Card 8 -->
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row align-items-start p-3"
                    style="background-color: #f8f9fa; border-radius: 10px;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_training.jpg" alt="Icon"
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    <div>
                        <h5 style="font-weight: 600; margin-bottom: 0.3rem; color: #000;">Creative and Customized
                            Approach:</h5>
                        <p style="margin: 0; font-size: 0.9rem; color: #555;">Our team is driven by passion and
                            creativity, ensuring that each website and marketing strategy is tailor-made to suit
                            your
                            brand's unique requirements and target audience.</p>
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
                <h1 class="fw-bold text-start" style="font-size: 50px; -webkit-text-stroke: 2px #000000; paint-order: stroke fill; color: transparent;
                    margin-bottom: 10px;">WordPress</h1>
                <h5 class="text-start" style="font-size: 1.5rem; font-weight: bold; color: #ffffff;">Availing
                    excellence<br> With over decades
                    experience!</h5>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <p style="font-size: 1rem; line-height: 1.8;">
                    Have a WordPress website and want to take it to the next level? We can better assist you at
                    Pixlogix as we don’t “DO” merely WordPress design & development but can even back you with
                    WooCommerce, API Integrations, Custom PHP development, modern-day CSS, Bootstrap, and much
                    more.
                </p>
            </div>
            <div class="col-md-6">
                <p style="font-size: 1rem; line-height: 1.8;">
                    We are aware of popular WordPress Themes and Page builder plugins. We work on a daily basis
                    with famous WordPress themes such as Avada, The7, Betheme, Enfold, X | The Theme, Flatsome,
                    and Bridge.
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <p style="font-size: 1rem; line-height: 1.8;">
                    Our teams can help you with WooCommerce, which runs on WordPress and empowers your online
                    stores globally. As the best WordPress development company in India, we take a modern Web
                    development approach with custom PHP to implement high-end technology projects.
                </p>
            </div>
            <div class="col-md-6">
                <p style="font-size: 1rem; line-height: 1.8;">
                    Our teams can even back you with advanced WordPress Plugins for your website, comprising but
                    not limited to Contact Form 7, Yoast SEO, RankMath, Woocommerce, All in one migration,
                    Wordfence, Advanced custom field, Redirection, W3 Total cache, WPML and WP mail SMTP. Ready
                    to give the full-fledged online presence of your imagination with WordPress Development
                    Services. Share the idea, and we will contact you with high-quality personalized solutions
                    to match your vision.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- -->


<!-- Feature Start -->
<section class="pb-5 wow fadeIn" data-wow-delay="0.3s">
    <div class="container mt-5">
        <h2 class="text-start py-3">WordPress Development - Leal Software Solution</h2>
        <div class="text-start">
            <p>
                At Leal Software Solution, we specialize in crafting dynamic and scalable WordPress websites
                tailored to meet your unique business requirements. From custom theme development and plugin
                integration to website optimization and ongoing support, we ensure your online presence stands out.
                Explore our key features below.
            </p>

            <div class="row mt-4">
                <!-- Custom Theme Development -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/cooperation.png"
                            alt="Custom Theme Development" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Custom Theme Development: Build unique and visually stunning themes
                            tailored.</span>
                    </div>
                </div>

                <!-- E-commerce Solutions -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/enterprise.png"
                            alt="E-commerce Solutions" class="feature-icon" width="50" height="50">
                        <span class="ps-3">E-commerce Solutions: Develop secure and user-friendly online stores with
                            WooCommerce.</span>
                    </div>
                </div>

                <!-- Website Optimization -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/gaps.png"
                            alt="Website Optimization" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Website Optimization: Improve site speed and performance for a seamless
                            user experience.</span>
                    </div>
                </div>

                <!-- Plugin Development & Integration -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/user-experience.png"
                            alt="Plugin Development & Integration" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Plugin Development & Integration: Enhance website functionality with
                            custom plugins and integration.</span>
                    </div>
                </div>

                <!-- SEO-Friendly Design -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/technical-support.png"
                            alt="SEO-Friendly Design" class="feature-icon" width="50" height="50">
                        <span class="ps-3">SEO-Friendly Design: Boost your site's ranking with optimized and
                            responsive designs.</span>
                    </div>
                </div>

                <!-- Migration & Upgrades -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/suitcase.png"
                            alt="Migration & Upgrades" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Migration & Upgrades: Seamlessly migrate your existing site or upgrade to
                            the latest version.</span>
                    </div>
                </div>

                <!-- Mobile-Responsive Design -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/mobile-shopping.png"
                            alt="Mobile-Responsive Design" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Mobile-Responsive Design: Ensure your website looks perfect on any
                            device.</span>
                    </div>
                </div>

                <!-- Security Enhancements -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/reposting.png"
                            alt="Security Enhancements" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Security Enhancements: Protect your site with robust security measures
                            and regular updates.</span>
                    </div>
                </div>

                <!-- 24/7 Support -->
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/enterprise.png"
                            alt="24/7 Support" class="feature-icon" width="50" height="50">
                        <span class="ps-3">24/7 Support: Reliable troubleshooting and assistance whenever you need
                            it.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature End -->


<!--  -->
<div class="container text-start text-lg-center py-5 wow fadeIn" data-wow-delay="0.3s"
    style="background-color: #f9f9f9;">
    <div style="padding: 10px; max-width: 1200px; margin: auto;">
        <div>
            <h5 class="fs-2 fw-bold">Why Choose <span style="color: #007bff;">Leal Software Solution</span> for
                WordPress Development Services?</h1>
                <p class="py-3" style="font-size: 1rem;">We provide a lot of different solutions through our
                    WordPress Website
                    Development Services which can be extremely helpful for you and your clients including:</p>
        </div>
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 300px; padding: 10px;">
                <ul style="list-style-type: none; padding-left: 0; font-size: 1rem;">
                    <li class="list-item"><span>&#9670;</span> We can develop robust, creative and completely
                        functional
                        WordPress websites for you based on your company’s requirements.</li>
                    <li class="list-item"><span>&#9670;</span> If you need to add specific features to your website,
                        we
                        can also develop different innovative modules to enhance your website.</li>
                    <li class="list-item"><span>&#9670;</span> Our designs are completely responsive, meaning any
                        user
                        having any device can access your website seamlessly.</li>
                    <li class="list-item"><span>&#9670;</span> We also provide a range of customization options
                        wherein
                        our experts develop smart features based on your needs.</li>
                    <li class="list-item"><span>&#9670;</span> Our tech experts can also help you build a smart and
                        customized content management system using WordPress.</li>
                    <li class="list-item"><span>&#9670;</span> At Nevina, we even provide WordPress-based e-commerce
                        development services to build productive and highly profitable websites.</li>
                </ul>
            </div>
            <div style="flex: 1; min-width: 300px; padding: 10px;">
                <ul style="list-style-type: none; padding-left: 0; font-size: 1rem;">
                    <li class="list-item"><span>&#9670;</span> If you already have a website and want to migrate it
                        to a
                        new WordPress-based website, we can help the transition smoothly.</li>
                    <li class="list-item"><span>&#9670;</span> To aid and enhance your company’s content marketing,
                        we
                        can also build a robust WordPress-based blog for you.</li>
                    <li class="list-item"><span>&#9670;</span> If you want a customized theme for your website that
                        is
                        parallel to your brand image, our team can do that creatively!</li>
                    <li class="list-item"><span>&#9670;</span> Not just the theme, but if you get <strong>WordPress
                            Development Services</strong> from Nevina, you can get a completely customized template.
                    </li>
                    <li class="list-item"><span>&#9670;</span> Our experts can also install pre-designed WordPress
                        templates in your website and make them function smoothly and easily.</li>
                    <li class="list-item"><span>&#9670;</span> We also provide quick and dedicated WordPress support
                        services during your course of using any of our products or services.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--  -->


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
                                What is WordPress development?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                WordPress development involves designing and building websites or plugins using the
                                WordPress platform, ensuring custom functionality and seamless performance.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Can you customize WordPress themes?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Yes, we can customize existing WordPress themes to meet your specific design and
                                functionality needs.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Do you offer WordPress plugin development?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Absolutely. We specialize in developing custom WordPress plugins to add unique
                                features to your website.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Is WordPress secure for my website?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Yes, WordPress is secure when configured properly. We implement best practices to
                                ensure your website is protected from vulnerabilities.
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
                                Can you integrate third-party tools with WordPress?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Yes, we can seamlessly integrate third-party tools, APIs, and services with your
                                WordPress website.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                How do you optimize WordPress websites for performance?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                We optimize WordPress websites using caching, CDN integration, image optimization,
                                and clean coding practices.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Can you migrate my existing website to WordPress?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Yes, we provide website migration services to transfer your existing website to
                                WordPress without any data loss.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Do you provide ongoing support for WordPress websites?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Yes, we offer ongoing support and maintenance to keep your WordPress website running
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