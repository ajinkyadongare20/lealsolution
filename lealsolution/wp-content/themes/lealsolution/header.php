<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lealsolution
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/Leal_Logo.jpg" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Font Stylesheet Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> 
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a href="index.html" class="navbar-brand">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/leal-software-logo.jpg"
                        alt="Button Image" class="animated slideInDown">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">

                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'container' => false,
                            'container_class' => '',
                            'menu_class' => 'navbar-nav ms-auto',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'depth' => 3,
                            'walker' => new wp_bootstrap_navwalker()
                        ));
                    ?>

                    <!-- 
                    <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link active">HOME</a>
                        <a href="about.php" class="nav-item nav-link">ABOUT</a>
                        <div class="dropdown nav-item">
                            <button class="dropdown-toggle border-0 bg-transparent pe-4 rounded py-2 py-lg-0 px-0"
                                type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" style="color: rgba(255, 255, 255, 0.9);">
                                SERVICES
                            </button>
                            <div class="dropdown-menu dropdown-menu-end shadow-lg rounded border-0 mt-2"
                                aria-labelledby="dropdownMenuButton" style="background-color: #f8f9fa;">
                                <a class="dropdown-item py-3 px-4 text-dark" href="service.html">
                                    <i class="fas fa-code me-2"></i> SOFTWARE DEVELOPMENT
                                </a>
                                <a class="dropdown-item py-3 px-4 text-dark" href="web-development.html">
                                    <i class="fas fa-laptop-code me-2"></i> WEB APP DEVELOPMENT
                                </a>
                                <a class="dropdown-item py-3 px-4 text-dark" href="programming_frameworks.html">
                                    <i class="fas fa-layer-group me-2"></i> FULLSTACK DEVELOPMENT
                                </a>
                                <a class="dropdown-item py-3 px-4 text-dark" href="wordpress-development.html">
                                    <i class="fab fa-wordpress me-2"></i> WORDPRESS DEVELOPMENT
                                </a>
                                <a class="dropdown-item py-3 px-4 text-dark" href="digital_marketing.html">
                                    <i class="fas fa-chart-line me-2"></i> DIGITAL MARKETING & SEO
                                </a>
                            </div>
                        </div>

                        <div class="dropdown nav-item">
                            <button class="dropdown-toggle border-0 bg-transparent pe-4 rounded py-2 py-lg-0 px-0"
                                type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" style="color: rgba(255, 255, 255, 0.9);">
                                PRODUCT
                            </button>
                            <div class="dropdown-menu dropdown-menu-end shadow-lg rounded border-0 mt-2"
                                aria-labelledby="dropdownMenuButton" style="background-color: #f8f9fa;">
                                <a class="dropdown-item py-3 px-4 text-dark" href="odoo.html">
                                    <i class="fas fa-cloud me-2"></i> ODOO/CLOUD ERP
                                </a>
                                <a class="dropdown-item py-3 px-4 text-dark" href="tasktrak.html">
                                    <i class="fas fa-tasks me-2"></i> TASK-TRAK HUB MANAGER
                                </a>
                                <a class="dropdown-item py-3 px-4 text-dark" href="hvac.html">
                                    <i class="fas fa-wind me-2"></i> HVAC HEAT LOAD CALCULATOR
                                </a>
                                <a class="dropdown-item py-3 px-4 text-dark" href="#">
                                    <i class="fas fa-drafting-compass me-2"></i> HVAC LEAL GADraw
                                </a>
                            </div>
                        </div>
                        <a href="career.html" class="nav-item nav-link">CAREER</a>
                        <div class="dropdown nav-item">
                            <button class="dropdown-toggle border-0 bg-transparent pe-4 rounded py-2 py-lg-0 px-0"
                                type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" style="color: rgba(255, 255, 255, 0.9);">
                                INSIGHTS
                            </button>
                            <div class="dropdown-menu dropdown-menu-end shadow-lg rounded border-0 mt-2"
                                aria-labelledby="dropdownMenuButton" style="background-color: #f8f9fa;">
                                <a class="dropdown-item py-3 px-4 text-dark" href="blogs.html">
                                    <i class="fas fa-drafting-compass me-2"></i> BLOGS
                                </a>
                                <a class="dropdown-item py-3 px-4 text-dark" href="case_study1.html">
                                    <i class="fas fa-tasks me-2"></i> CASE STUDY
                                </a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">CONTACT US</a>
                    </div> 
                    -->

                    <butaton type="button" class="btn text-white p-0 d-none d-lg-block" data-bs-toggle="modal"
                        data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

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
    <div class="clearfix"></div>