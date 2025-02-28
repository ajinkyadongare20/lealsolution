<?php
/**
 * The main template file
 * Template Name: Blogs
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
                <h1 class="display-4 text-white mb-4 animated slideInRight">Blogs</h1>
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


<!-- Main Start -->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 wow fadeIn" data-wow-delay="0.3s">
            <h3>Are you in search of <span class="highlight">tech blogs</span> to stay abreast of the <span
                    class="highlight">latest technology</span> trends?</h2>
                <p>Look no further—your quest ends here! Keep reading...</p>
                <p>From various walks of life, people are captivated by the rapid progress of technology, molding
                    our
                    existence into the digital realm!</p>
                <p>With fresh <span class="highlight">tech trends</span> emerging quarterly and information swiftly
                    becoming outdated as <span class="highlight">technology</span> advances, it's now imperative to
                    remain pertinent and gain insights into the most recent technologies, the digital sphere, social
                    media, and the broader web landscape!</p>

                <h3 class="blue-text">But how can this be achieved?</h2>

                    <p>Enter the realm of <span class="highlight">technology blogs</span>, where countless tech
                        aficionados
                        and businesses from diverse sectors find solace. These blogs deliver the latest tech updates
                        quicker
                        than any other source, serving as a vital conduit.</p>
                    <p>Beyond merely showcasing cutting-edge discoveries, these technology blogs empower readers to
                        consistently stay ahead of the curve by deciphering contemporary tech trends!</p>
                    <p>As a result, we've curated a compilation of the top <span class="highlight">1000+ technology
                            blogs</span>, acting as conduits for the most recent global insights.</p>
                    <p>Embracing these forefront technology blogs promises a continuous flow of ingenious concepts
                        in the
                        realm of technology. Whether it's breaking news or details about the latest market gadgets,
                        these
                        blogs encompass the entirety of the modern tech domain!</p>
        </div>

        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
            <div class="bg-light border p-3">
                <h5 class="fw-bold">About Leal Software Solution Blog</h4>
                    <p><strong>Leal Software Solution</strong> is a dedicated research and content powerhouse
                        specializing in technology blogs. With a keen focus on staying at the forefront of emerging
                        tech
                        trends, we deliver insightful and meticulously researched articles.</p>
                    <p>Our team of experts possesses a deep understanding of the ever-evolving tech landscape,
                        providing
                        readers with up-to-date information, analyses, and reviews. From groundbreaking innovations
                        to
                        the latest <span class="highlight">technology</span>, our content offers a comprehensive
                        view of
                        the dynamic world of technology.</p>
                    <p>Whether you're a tech enthusiast or a professional seeking to stay informed, we are committed
                        to
                        delivering accurate and engaging content that establishes us as a trusted source for all
                        things
                        tech-related.</p>
            </div>
        </div>
    </div>
</div>
<!-- Main End -->


<div class="container pt-5 pb-0 pb-lg-5">
    <!-- Flex container with wrap -->
    <div class="d-flex flex-wrap justify-content-between">
        <!-- Card 1 -->
        <div class="col-md-6 col-lg-4 col-sm-6 col-12 py-3 px-0 p-md-3 px-lg-3 wow fadeIn" data-wow-delay="0.3s">
            <div class="card rounded-0">
                <img src="<?php bloginfo('template_directory'); ?>/img/blogs_images/blogs1_software_industry.jpg"
                    class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                    <span class="fw-bold" style="color: #f94a24;">Admin</span> <span class="fw-bold"
                        style="color: blue">Software Developer</span>
                    <h5 class="card-title mt-2">Meet the Partners: A Conversation with Scott Phillips</h5>
                    <p class="card-text">
                        Leal Software Solution is a dedicated research and content powerhouse specializing in
                        technology blogs. With a keen focus on staying at the forefront of emerging tech trends, we
                        deliver insightful and meticulously researched articles.<br><br>

                        Our team of experts possesses a deep understanding of the ever-evolving tech landscape,
                        providing readers with up-to-date information, analyses, and reviews. From groundbreaking
                        innovations to the latest <b>technology</b>, Our content offers a comprehensive view of the
                        dynamic <b>world of technology.</b>
                    </p>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-6 col-lg-4 col-sm-6 col-12 py-3 px-0 p-md-3 px-lg-3 wow fadeIn" data-wow-delay="0.4s">
            <div class="card rounded-0">
                <img src="<?php bloginfo('template_directory'); ?>/img/blogs_images/blogs2_group-developers-men-women-working-together.jpg"
                    class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                    <span class="fw-bold" style="color: #f94a24;">Admin</span> <span class="fw-bold"
                        style="color: blue">Software Developer</span>
                    <h5 class="card-title mt-2">Stay Ahead with Data-Driven Manufacturing</h5>
                    <p class="card-text">
                        Leal Software Solution is a dedicated research and content powerhouse specializing in
                        technology blogs. With a keen focus on staying at the forefront of emerging tech trends, we
                        deliver insightful and meticulously researched articles.<br><br>

                        Our team of experts possesses a deep understanding of the ever-evolving tech landscape,
                        providing readers with up-to-date information, analyses, and reviews. From groundbreaking
                        innovations to the latest <b>technology</b>, Our content offers a comprehensive view of the
                        dynamic <b>world of technology.</b>
                    </p>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-6 col-lg-4 col-sm-6 col-12 py-3 px-0 p-md-3 px-lg-3 wow fadeIn" data-wow-delay="0.5s">
            <div class="card rounded-0">
                <img src="<?php bloginfo('template_directory'); ?>/img/blogs_images/blogs3_standard-quality-control-.jpg"
                    class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                    <span class="fw-bold" style="color: #f94a24;">Admin</span> <span class="fw-bold"
                        style="color: blue">Software Developer</span>
                    <h5 class="card-title mt-2">Tech Innovation in 2024</h5>
                    <p class="card-text">
                        Leal Software Solution is a dedicated research and content powerhouse specializing in
                        technology blogs. With a keen focus on staying at the forefront of emerging tech trends, we
                        deliver insightful and meticulously researched articles.<br><br>

                        Our team of experts possesses a deep understanding of the ever-evolving tech landscape,
                        providing readers with up-to-date information, analyses, and reviews. From groundbreaking
                        innovations to the latest <b>technology</b>, Our content offers a comprehensive view of the
                        dynamic <b>world of technology.</b>
                    </p>
                </div>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="col-md-6 col-lg-4 col-sm-6 col-12 py-3 px-0 p-md-3 px-lg-3 wow fadeIn" data-wow-delay="0.6s">
            <div class="card rounded-0">
                <img src="<?php bloginfo('template_directory'); ?>/img/blogs_images/blogs3_standard-quality-control-.jpg"
                    class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                    <span class="fw-bold" style="color: #f94a24;">Admin</span> <span class="fw-bold"
                        style="color: blue">Software Developer</span>
                    <h5 class="card-title mt-2">AI in Manufacturing</h5>
                    <p class="card-text">
                        Leal Software Solution is a dedicated research and content powerhouse specializing in
                        technology blogs. With a keen focus on staying at the forefront of emerging tech trends, we
                        deliver insightful and meticulously researched articles.<br><br>

                        Our team of experts possesses a deep understanding of the ever-evolving tech landscape,
                        providing readers with up-to-date information, analyses, and reviews. From groundbreaking
                        innovations to the latest <b>technology</b>, Our content offers a comprehensive view of the
                        dynamic <b>world of technology.</b>
                    </p>
                </div>
            </div>
        </div>
        <!-- Card 5 -->
        <div class="col-md-6 col-lg-4 col-sm-6 col-12 py-3 px-0 p-md-3 px-lg-3 wow fadeIn" data-wow-delay="0.7s">
            <div class="card rounded-0">
                <img src="<?php bloginfo('template_directory'); ?>/img/blogs_images/blogs4_side-view-man-working-office.jpg"
                    class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                    <span class="fw-bold" style="color: #f94a24;">Admin</span> <span class="fw-bold"
                        style="color: blue">Software Developer</span>
                    <h5 class="card-title mt-2">5G and the Future</h5>
                    <p class="card-text">
                        Leal Software Solution is a dedicated research and content powerhouse specializing in
                        technology blogs. With a keen focus on staying at the forefront of emerging tech trends, we
                        deliver insightful and meticulously researched articles.<br><br>

                        Our team of experts possesses a deep understanding of the ever-evolving tech landscape,
                        providing readers with up-to-date information, analyses, and reviews. From groundbreaking
                        innovations to the latest <b>technology</b>, Our content offers a comprehensive view of the
                        dynamic <b>world of technology.</b>
                    </p>
                </div>
            </div>
        </div>
        <!-- Card 6 -->
        <div class="col-md-6 col-lg-4 col-sm-6 col-12 py-3 px-0 p-md-3 px-lg-3 wow fadeIn" data-wow-delay="0.8s">
            <div class="card rounded-0">
                <img src="<?php bloginfo('template_directory'); ?>/img/blogs_images/blogs5_man-suit-standing-office-with-clipboard-pointing.jpg"
                    class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                    <span class="fw-bold" style="color: #f94a24;">Admin</span> <span class="fw-bold"
                        style="color: blue">Software Developer</span>
                    <h5 class="card-title mt-2">Cybersecurity Trends</h5>
                    <p class="card-text">
                        Leal Software Solution is a dedicated research and content powerhouse specializing in
                        technology blogs. With a keen focus on staying at the forefront of emerging tech trends, we
                        deliver insightful and meticulously researched articles.<br><br>

                        Our team of experts possesses a deep understanding of the ever-evolving tech landscape,
                        providing readers with up-to-date information, analyses, and reviews. From groundbreaking
                        innovations to the latest <b>technology</b>, Our content offers a comprehensive view of the
                        dynamic <b>world of technology.</b>
                    </p>
                </div>
            </div>
        </div>
        <!-- Card 7 -->
        <div class="col-md-6 col-lg-4 col-sm-6 col-12 py-3 px-0 p-md-3 px-lg-3 wow fadeIn" data-wow-delay="0.9s">
            <div class="card rounded-0">
                <img src="<?php bloginfo('template_directory'); ?>/img/blogs_images/blogs6_programming-background-with-person-working-.jpg"
                    class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                    <span class="fw-bold" style="color: #f94a24;">Admin</span> <span class="fw-bold"
                        style="color: blue">Software Developer</span>
                    <h5 class="card-title mt-2">Blockchain Technology</h5>
                    <p class="card-text">
                        Leal Software Solution is a dedicated research and content powerhouse specializing in
                        technology blogs. With a keen focus on staying at the forefront of emerging tech trends, we
                        deliver insightful and meticulously researched articles.<br><br>

                        Our team of experts possesses a deep understanding of the ever-evolving tech landscape,
                        providing readers with up-to-date information, analyses, and reviews. From groundbreaking
                        innovations to the latest <b>technology</b>, Our content offers a comprehensive view of the
                        dynamic <b>world of technology.</b>
                    </p>
                </div>
            </div>
        </div>
        <!-- Card 8 -->
        <div class="col-md-6 col-lg-4 col-sm-6 col-12 py-3 px-0 p-md-3 px-lg-3 wow fadeIn" data-wow-delay="1s">
            <div class="card rounded-0">
                <img src="<?php bloginfo('template_directory'); ?>/img/blogs_images/blogs2_group-developers-men-women-working-together.jpg"
                    class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                    <span class="fw-bold" style="color: #f94a24;">Admin</span> <span class="fw-bold"
                        style="color: blue">Software Developer</span>
                    <h5 class="card-title mt-2">Edge Computing</h5>
                    <p class="card-text">
                        Leal Software Solution is a dedicated research and content powerhouse specializing in
                        technology blogs. With a keen focus on staying at the forefront of emerging tech trends, we
                        deliver insightful and meticulously researched articles.<br><br>

                        Our team of experts possesses a deep understanding of the ever-evolving tech landscape,
                        providing readers with up-to-date information, analyses, and reviews. From groundbreaking
                        innovations to the latest <b>technology</b>, Our content offers a comprehensive view of the
                        dynamic <b>world of technology.</b>
                    </p>
                </div>
            </div>
        </div>
        <!-- Card 9 -->
        <div class="col-md-6 col-lg-4 col-sm-6 col-12 py-3 px-0 p-md-3 px-lg-3 wow fadeIn" data-wow-delay="1.1s">
            <div class="card rounded-0">
                <img src="<?php bloginfo('template_directory'); ?>/img/blogs_images/blogs1_software_industry.jpg"
                    class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                    <span class="fw-bold" style="color: #f94a24;">Admin</span> <span class="fw-bold"
                        style="color: blue">Software Developer</span>
                    <h5 class="card-title mt-2">Quantum Computing</h5>
                    <p class="card-text">
                        Leal Software Solution is a dedicated research and content powerhouse specializing in
                        technology blogs. With a keen focus on staying at the forefront of emerging tech trends, we
                        deliver insightful and meticulously researched articles.<br><br>

                        Our team of experts possesses a deep understanding of the ever-evolving tech landscape,
                        providing readers with up-to-date information, analyses, and reviews. From groundbreaking
                        innovations to the latest <b>technology</b>, Our content offers a comprehensive view of the
                        dynamic <b>world of technology.</b>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
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