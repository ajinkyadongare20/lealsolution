<?php
/**
 * The main template file
 * Template Name: Odoo
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
                <h1 class="display-4 text-white mb-4 animated slideInRight">Odoo/Cloud ERP</h1>
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
<section class="bg-light">
    <div class="container py-5 wow fadeIn" data-wow-delay="0.3s">
        <div class="row d-flex align-items-center">
            <!-- Text Section -->
            <div class="col-lg-6 col-md-12">
                <h2>Transforming your Retail Operations with the Power of ERP Software</h2>
                <p>
                    With the rise of e-commerce and the increasing popularity of online shopping, managing an online
                    retail business can be challenging as it involves a wide range of activities, such as inventory
                    management, order fulfillment, shipping, and customer service. This is where ERP software can be
                    a
                    game-changer for online retailers.
                </p>
                <p>
                    <span class="highlight">ERP software</span> is an enterprise resource planning software that
                    helps
                    businesses manage their day-to-day operations by integrating different business processes and
                    functions. It provides a unified view of the entire business, allowing businesses to make
                    informed
                    decisions, streamline processes, and improve overall efficiency.
                </p>
            </div>
            <!-- Image Section -->
            <div class="col-lg-6 col-md-12 image-container text-center">
                <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_main.jpg.png"
                    alt="ERP Illustration" class="img-fluid border rounded">
            </div>
        </div>
    </div>
</section>
<!-- End Main  -->


<!-- Start Second Main -->
<section class="wow fadeIn" data-wow-delay="0.5s">
    <div class="container my-5">
        <div class="text-center">
            <h2 class="text-start">Odoo Implementation and Process Management</h2>
            <p class="text-start">
                involves the strategic deployment of Odoo’s ERP modules
                tailored to your business needs. This process ensures seamless integration of workflows, from setup
                and customization to training and support. Effective management streamlines operations, enhances
                productivity, and maximizes the benefits of Odoo’s comprehensive business solutions.
            </p>
        </div>

        <!-- Challenges Section -->
        <div class="row text-center g-4 mt-5">
            <div class="col-md-4 challenge-item border text-start services-number-container">
                <span class="number-background">01</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Inventory Management</h4>
                    <p>Odoo's inventory management system helps retailers track stock levels across multiple
                        locations, providing real-time updates to avoid overstocking or stockouts. The system
                        supports automated reordering, barcode scanning, and multi-warehouse management, ensuring
                        streamlined operations. It integrates seamlessly with other Odoo modules for comprehensive
                        inventory control and efficient stock management.</p>
                </div>
            </div>
            <div class="col-md-4 challenge-item border text-start services-number-container">
                <span class="number-background">02</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Order Management</h4>
                    <p>Odoo simplifies order processing by automating tasks like invoicing, shipping, and tracking
                        payments. Retailers can manage orders from multiple sales channels in one centralized
                        platform, ensuring timely fulfillment. With real-time updates, order status tracking, and
                        customer notifications, businesses can enhance the customer experience and reduce
                        operational delays.</p>
                </div>
            </div>
            <div class="col-md-4 challenge-item border text-start services-number-container">
                <span class="number-background">03</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">E-commerce Integration</h4>
                    <p>Odoo’s ERP integrates smoothly with e-commerce platforms, allowing businesses to manage
                        online stores, inventory, and orders in one system. Real-time synchronization of products,
                        pricing, and stock ensures consistent information across all channels. This feature enables
                        retailers to handle large volumes of transactions and streamline e-commerce operations
                        effectively.</p>
                </div>
            </div>

            <div class="col-md-4 challenge-item border text-start services-number-container">
                <span class="number-background">04</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Customer Relationship Management (CRM)</h4>
                    <p>IOdoo's CRM feature allows businesses to manage customer data, track interactions, and
                        monitor sales pipelines. It provides detailed insights into customer behavior, helping
                        retailers personalize their communication and improve engagement. Automated follow-ups, lead
                        scoring, and reporting tools further enhance sales strategies and foster long-term customer
                        relationships.</p>
                </div>
            </div>
            <div class="col-md-4 challenge-item border text-start services-number-container">
                <span class="number-background">05</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Accounting & Financial Management</h4>
                    <p>Odoo automates financial tasks like invoicing, expense tracking, and tax compliance, reducing
                        manual work and errors. Retailers can access detailed financial reports, manage multiple
                        currencies, and ensure timely payments. With integrated analytics and automated processes,
                        businesses can maintain accurate financial records and improve decision-making.</p>
                </div>
            </div>
            <div class="col-md-4 challenge-item border text-start services-number-container">
                <span class="number-background">06</span>
                <div class="services-text-content">
                    <h4 class="fw-bold pt-3">Analytics and Reporting</h4>
                    <p>Odoo’s advanced analytics and reporting tools provide real-time insights into key business
                        metrics, including sales, customer behavior, and inventory levels. Retailers can generate
                        customizable reports and dashboards to track performance and identify trends. This feature
                        empowers businesses to make informed decisions and improve overall efficiency.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Open Source Odoo Video -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 mx-auto">
                <div class="ratio ratio-16x9">
                    <video autoplay loop muted class="img-thumbnail">
                        <source src="https://download.odoocdn.com/videos/odoo_com/video_homepage.webm"
                            type="video/webm">
                        <source src="https://download.odoocdn.com/videos/odoo_com/video_homepage.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Second Main  -->


<!-- Start Middle  -->
<section class="p-1 py-5 bg-light wow fadeIn" data-wow-delay="0.5s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="bg-white rounded-3 shadow-sm p-4 h-100">
                    <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_accounting.jpg"
                        alt="Accounting UI Preview" class="img-fluid rounded-3 w-100 h-auto">
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h3 class="my-4">What is Odoo Accounting Software?</h3>
                <p>Odoo accounting software is a part of the Odoo ERP suite, designed to handle all aspects of
                    financial management, from bookkeeping to tax calculations and invoicing. It is widely
                    recognized for its flexibility, offering businesses the ability to customize their accounting
                    systems to fit their specific needs.</p>

                <h4 class="mt-4">Key Features of Odoo Accounting Software</h4>
                <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle me-2"></i> Automated invoicing and billing</li>
                    <li><i class="bi bi-check-circle me-2"></i> Real-time bank synchronization</li>
                    <li><i class="bi bi-check-circle me-2"></i> Multi-currency and multi-company management</li>
                    <li><i class="bi bi-check-circle me-2"></i> Comprehensive financial reporting tools</li>
                    <li><i class="bi bi-check-circle me-2"></i> Integration with other Odoo apps like CRM and
                        Inventory</li>
                    <li><i class="bi bi-check-circle me-2"></i> Comprehensive tax calculation options and audit
                        reports</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Middle  -->


<!-- Start New Div  -->
<div class="container py-5" style="max-width: 1200px;">
    <h2 class="text-center py-5 wow fadeIn" data-wow-delay="0.2s">
        Empower Your Business Decisions with<br> Odoo Accounting Software
    </h2>
    <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-vision wow fadeIn h-100" data-wow-delay="0.3s">
                <div class="card-vision-header">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/coding (1).png"
                        alt="Mission Icon" class="card-vision-icon">
                    <h5 class="mb-0">Automating Financial Reporting</h5>
                </div>
                <div class="card-vision-content">
                    <p class="card-text">
                        Automating Financial Reporting streamlines the process of generating accurate financial
                        statements, reducing manual efforts and minimizing errors. By leveraging automation tools,
                        businesses can ensure real-time data synchronization, compliance, and detailed reporting,
                        empowering decision-makers with insights and efficiency in managing finances.
                    </p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-vision wow fadeIn h-100" data-wow-delay="0.5s">
                <div class="card-vision-header">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_implemention.jpg"
                        alt="Vision Icon" class="card-vision-icon">
                    <h5 class="mb-0">Simplifying Tax Calculations</h5>
                </div>
                <div class="card-vision-content">
                    <p class="card-text">
                        Simplifying Tax Calculations automates the complex process of managing tax rates, deductions,
                        and compliance. With real-time updates and accurate data integration, businesses can ensure
                        precise tax filings, reduce manual errors, and stay compliant with local and international
                        regulations. Save time, avoid penalties, and streamline your tax management effortlessly.
                    </p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-vision wow fadeIn h-100" data-wow-delay="0.7s">
                <div class="card-vision-header">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_conslutancy.jpg"
                        alt="Vision Icon" class="card-vision-icon">
                    <h5 class="mb-0">Enhancing Financial Transparency</h5>
                </div>
                <div class="card-vision-content">
                    <p class="card-text">
                        Enhancing Financial Transparency ensures businesses gain clear and actionable insights into
                        their financial operations. With detailed analytics and automated data reporting,
                        organizations can make informed decisions, identify trends, and address potential financial
                        challenges proactively.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End New Div -->


<!-- Second New Div -->
<section class="p-1 py-5 bg-light wow fadeIn" data-wow-delay="0.5s">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-lg-6 pe-lg-5">
                <h4 class="my-2 fw-bold">Odoo Accounting Implementation Partner: Your Strategic Advantage</h4>
                <p>Partnering with an Odoo accounting implementation partner enhances your business by ensuring
                    seamless integration with other Odoo applications like CRM, HR, and Inventory. This holistic
                    approach provides a unified business management system, streamlining operations and improving
                    efficiency.</p>

                <h4 class="my-2 fw-bold">Integration Across Odoo Suite</h4>
                <p>An implementation partner guarantees that your financial software synchronizes effectively with
                    the entire Odoo suite, offering a cohesive solution that drives better decision-making and
                    operational clarity.</p>

                <h4 class="my-2 fw-bold">Customized Solutions for Your Business</h4>
                <p>Every business has unique needs, and your accounting software should reflect that. An Odoo
                    implementation partner customizes solutions to fit your specific requirements, maximizing the
                    benefits of the Odoo ecosystem and empowering your growth.</p>
            </div>
            <!-- Image Section -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="bg-white rounded-3 shadow-sm p-4 mb-4 h-100">
                    <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/Odoo_Integrations.jpg"
                        alt="Accounting UI Preview" class="img-fluid rounded-0 w-100 h-auto">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Second New   -->


<!-- Start Second Div  -->
<div class="container mt-5 wow fadeIn" data-wow-delay="0.5s" style="max-width: 1200px;">
    <h2 class="text-start pt-3 ps-4">
        Transform Your Business: Benefits of an:<br>
        Odoo Accounting Implementation Partnership
    </h2>
    <div class="row g-4 my-5">
        <!-- Card 1 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-vision wow fadeIn h-100" data-wow-delay="0.4s">
                <div class="card-vision-header">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_development.jpg"
                        alt="Mission Icon" class="card-vision-icon">
                    <h5 class="mb-0">Streamlined Migration and Deployment</h5>
                </div>
                <div class="card-vision-content">
                    <p class="card-text">
                        Migrating to Odoo accounting software can be challenging, but an implementation partner
                        simplifies the process. They ensure a smooth transition by minimizing data loss and downtime,
                        providing expert support throughout the migration. With their guidance, you can confidently
                        embrace Odoo, enhancing your financial management capabilities.
                    </p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-vision wow fadeIn h-100" data-wow-delay="0.6s">
                <div class="card-vision-header">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/software-developer.png"
                        alt="Vision Icon" class="card-vision-icon">
                    <h5 class="card-title mb-0">Reliable Support and Maintenance Services</h5>
                </div>
                <div class="card-vision-content">
                    <p class="card-text">
                        Reliable Support and Maintenance Services ensure your Odoo accounting system operates smoothly
                        and efficiently. With expert assistance available, businesses can quickly resolve issues,
                        receive timely updates, and adapt to changing requirements. This ongoing support maximizes
                        system performance, minimizes downtime, and helps you achieve long-term success with your
                        financial management.
                    </p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-vision wow fadeIn h-100" data-wow-delay="0.8s">
                <div class="card-vision-header">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_support.jpg"
                        alt="Vision Icon" class="card-vision-icon">
                    <h5 class="card-title mb-0">Reliable Support and Maintenance Services</h5>
                </div>
                <div class="card-vision-content">
                    <p class="card-text">
                        Reliable Support and Maintenance Services ensure your Odoo accounting system operates smoothly
                        and efficiently. With expert assistance available, businesses can quickly resolve issues,
                        receive timely updates, and adapt to changing requirements. This ongoing support maximizes
                        system performance, minimizes downtime, and helps you achieve long-term success with your
                        financial management.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Second Div -->


<!-- Start Third Main-->
<section class="pb-5 wow fadeIn" data-wow-delay="0.4s">
    <div class="container mt-5">
        <h2 class="text-start py-3">Choosing an Odoo Implementation Partner - Leal Software Solution</h2>
        <div class="text-start">
            <p>Choosing a Trusted Odoo Partner signifies opting for excellence in Odoo services. At Leal Software
                Solution, we take pride in our decade-long Odoo Partnership, a testament to our commitment to
                delivering top-notch solutions. Our Analysts, Consultants, and Developers undergo rigorous training
                to ensure their proficiency in leveraging the platform's capabilities.</p>
            <p>Moreover, as an Odoo Partner, we maintain a direct relationship with Odoo which further enables
                unparalleled support for your ERP Implementation. Partnering with Kanak means accessing expertise
                and resources essential for maximizing the potential of Odoo Implementation.</p>

            <div class="row mt-4">
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/technical-support.png"
                            alt="Instant Support" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Instant Support</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/suitcase.png"
                            alt="12+ Years of Experience" class="feature-icon" width="50" height="50">
                        <span class="ps-3">12+ Years of Experience</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/cooperation.png"
                            alt="Official Odoo Partner" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Official Odoo Partner</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/mobile-shopping.png"
                            alt="500+ Add Ons on Odoo App Store" class="feature-icon" width="50" height="50">
                        <span class="ps-3">500+ Add Ons on Odoo App Store</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/user-experience.png"
                            alt="Technical and Functional Expertise" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Technical and Functional Expertise</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/gaps.png"
                            alt="Detailed Gap Analysis" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Detailed Gap Analysis</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/reposting.png"
                            alt="Expertise in All Versions of Odoo" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Expertise in All Versions of Odoo</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/enterprise.png"
                            alt="" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Hand-on Experience in Both - Community and
                            Enterprise</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 icon-feature">
                    <div class="feature-item d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/odoo_partner/needs.png"
                            alt="" class="feature-icon" width="50" height="50">
                        <span class="ps-3">Customized Odoo Solutions Tailored to Your Business Needs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Third Main  -->


<!-- Start Function Odoo  -->
<section class="bg-light py-5 wow fadeIn" data-wow-delay="0.3s">
    <h2 class="text-center mb-5">The functionalities of OdooERP are as mentioned below :</h2>
    <div class="container pt-3">
        <div class="row g-3">
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/function/Inventory-Management.jpg"
                            alt="Inventory Management" class="img-fluid mb-3">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h4>Inventory Management :</h4>
                        <p class="p-odoo-erp-text">Efficient tracking and management of stock levels, ensuring
                            optimal use of resources.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/function/Reporting-Analytics.jpg"
                            alt="Reporting and Analytics" class="img-fluid mb-3">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h4>Reporting and Analytics :</h4>
                        <p class="p-odoo-erp-text">Comprehensive reporting and analytics tools to gain insights into
                            business performance.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/function/Sales-Order.jpg"
                            alt="Sales Order Processing" class="img-fluid mb-3">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h4>Sales Order Processing :</h4>
                        <p class="p-odoo-erp-text">Systematic handling of customer orders, ensuring timely delivery
                            and customer satisfaction.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/function/Multi-Location.jpg"
                            alt="Multi-Location Support" class="img-fluid mb-3">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h4>Multi-Location Support :</h4>
                        <p class="p-odoo-erp-text">Ability to manage operations across multiple locations for
                            greater scalability.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/function/Vendor-Management.jpg"
                            alt="Procurement and Vendor Management" class="img-fluid mb-3">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h4>Procurement and Vendor Management :</h4>
                        <p class="p-odoo-erp-text">Streamlined processes for material procurement and effective
                            vendor relationship management.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/function/User-Permissions.jpg"
                            alt="User Permissions and Security" class="img-fluid mb-3">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h4>User Permissions and Security :</h4>
                        <p class="p-odoo-erp-text">Granular control over user access and data security to protect
                            sensitive information.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/function/Quality-Control.jpg"
                            alt="Quality Control and Assurance" class="img-fluid mb-3">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h4>Quality Control and Assurance :</h4>
                        <p class="p-odoo-erp-text">Robust quality control measures to uphold product standards and
                            customer satisfaction.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/function/Work-in-Progress.jpg"
                            alt="Work-in-Progress Tracking" class="img-fluid mb-3">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h4>Work-in-Progress Tracking :</h4>
                        <p class="p-odoo-erp-text">Real-time monitoring of ongoing production processes for enhanced
                            productivity.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/function/Job-Work.jpg"
                            alt="Job Work Management" class="img-fluid mb-3">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h4>Job Work Management :</h4>
                        <p class="p-odoo-erp-text">Seamless handling of outsourced work, ensuring smooth
                            collaboration with external partners.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/function/Product-Assembly.jpg"
                            alt="Final Product Assembly" class="img-fluid mb-3">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h4>Final Product Assembly :</h4>
                        <p class="p-odoo-erp-text">Coordinated assembly processes for the creation of finished goods
                            with precision.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/function/Multi-Location.jpg"
                            alt="Inventory Management" class="img-fluid mb-3">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h4>Inventory Management :</h4>
                        <p class="p-odoo-erp-text">Efficient tracking and management of stock levels, ensuring
                            optimal use of resources.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/function/Material-Planning.jpg"
                            alt="Material Requirement Planning" class="img-fluid mb-3">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h4>Material Requirement Planning :</h4>
                        <p class="p-odoo-erp-text">Proactive planning of materials to meet production demands and
                            reduce waste.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/function/Dispatch-Shipment.jpg"
                            alt="Inventory Management" class="img-fluid mb-3">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h4>Dispatch and Shipment Management :</h4>
                        <p class="p-odoo-erp-text">Organized processes for product dispatch and shipment tracking.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <img src="<?php bloginfo('template_directory'); ?>/img/odoo_images/function/Financial-Integration.jpg"
                            alt="Material Requirement Planning" class="img-fluid mb-3">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h4>Financial Integration :</h4>
                        <p class="p-odoo-erp-text">Integration with popular accounting software like Tally for
                            seamless financial management.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Function Odoo  -->


<!-- FAQs Start -->
<div class="container-fluid">
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
                                <i class="fas fa-question-circle me-2"></i> What is Odoo ERP and why should I use
                                it?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Odoo is an all-in-one ERP solution that helps manage various business functions,
                                including CRM, sales, inventory, and accounting, streamlining operations and
                                boosting efficiency.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn shadow-sm" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fas fa-question-circle me-2"></i> How long does it take to implement Odoo?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                The implementation time varies depending on business requirements, but typically
                                ranges from 2 to 6 months, including customization and data migration.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn shadow-sm" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fas fa-question-circle me-2"></i> Can Odoo be customized for my specific
                                business needs?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Yes, Odoo is highly customizable, allowing it to be tailored to fit unique business
                                processes, workflows, and industry-specific requirements.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn shadow-sm" data-wow-delay="0.4s">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fas fa-question-circle me-2"></i> What support options are available after
                                Odoo implementation?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                We offer ongoing support, including maintenance, troubleshooting, and updates, to
                                ensure smooth operation and continuous improvement of your Odoo system.
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
                                <i class="fas fa-question-circle me-2"></i> What are the costs associated with Odoo
                                development?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Costs vary based on the complexity of customization and the modules needed, but our
                                team can provide a detailed quote after assessing your business needs.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn shadow-sm" data-wow-delay="0.6s">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <i class="fas fa-question-circle me-2"></i> Can Odoo integrate with other software?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Yes, Odoo integrates with various third-party tools, such as payment gateways,
                                shipping providers, and other business applications, enhancing your operational
                                capabilities.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn shadow-sm" data-wow-delay="0.7s">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <i class="fas fa-question-circle me-2"></i> How secure is Odoo ERP?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Odoo includes robust security measures such as user authentication, data encryption,
                                and role-based access control, ensuring your business data is protected.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn shadow-sm" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <i class="fas fa-question-circle me-2"></i> Is Odoo suitable for small and
                                medium-sized businesses?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Yes, Odoo is scalable and can be tailored to fit the needs of businesses of all
                                sizes, offering flexibility and affordability for SMBs.
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