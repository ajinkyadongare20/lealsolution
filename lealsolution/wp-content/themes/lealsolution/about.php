<?php
/**
 * The main template file
 * Template Name: About
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
                <h1 class="display-4 text-white mb-4 animated slideInRight">About Us</h1>
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


<!-- Start About  -->
<section class="container pt-5 py-lg-5 mb-4 wow fadeIn" data-wow-delay="0.3s" id="about-leal-history">
    <h2 class="text-center mb-4">ABOUT Leal Software Solution</h2>
    <div class="row">
        <div class="col-12">
            <p>Leal Software Solution, founded in 2012 by Mr. Subodh Murkewar, has been a pioneer in delivering
                innovative IT services and solutions. With a strong focus on excellence and customer satisfaction,
                we specialize in software development, web application creation, digital marketing, HVAC heat load
                calculators, Odoo ERP services, and task management tools like TaskTrak Hub. Our comprehensive suite
                of services is designed to empower businesses with the tools they need to thrive in a competitive
                landscape.</p>
            <p> Our expertise lies in transforming complex business challenges into seamless, scalable, and
                efficient solutions tailored to meet our clients’ unique needs. Over the years, Leal Software
                Solution has built a reputation for reliability, innovation, and professionalism. Our client-centric
                approach ensures that every project is delivered with precision, fostering long-lasting partnerships
                and measurable results.</p>
            <p>Driven by a vision to enable businesses to embrace digital transformation, we leverage
                state-of-the-art technologies and industry best practices. At Leal Software Solution, we are
                committed to creating solutions that optimize operations, enhance productivity, and drive
                sustainable growth. With a decade of experience and an unwavering dedication to innovation, we
                continue to help businesses unlock their full potential in a constantly evolving digital world.</p>
            <p>Leal Software Solution, we envision a future where businesses seamlessly integrate technology to
                achieve unparalleled growth. With our innovative solutions and client-focused approach, we strive to
                be a trusted partner in your journey toward digital excellence.</p>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row g-4">
            <!-- First Card -->
            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="hover-border">
                    <div class="custom-card bg-dark text-white">
                        <h3 class="p-3">Leal Software Solution Overview</h3>
                        <p class="px-3 pb-3">Leal Software Solution provides innovative IT services, specializing in
                            software development, web applications, digital marketing, HVAC heat load calculators,
                            Odoo ERP solutions, and task management tools. We focus on empowering businesses with
                            scalable, efficient, customizable solutions, helping clients enhance productivity,
                            streamline operations, and achieve sustainable growth in today’s dynamic digital
                            landscape.
                        </p>
                        <div class="img-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/about_images/guest/1726810541077.JPEG"
                                alt="Refrigeration Image" class="custom-img">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Card -->
            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="hover-border">
                    <div class="custom-card bg-dark text-white">
                        <h3 class="p-3">Strengths of the Company</h3>
                        <p class="px-3 pb-3">Leal Software Solution stands out for its strong focus on innovation,
                            customer satisfaction, and reliability. Our team of skilled professionals delivers
                            tailored IT solutions, from software development to digital marketing. We empower
                            businesses with cutting-edge technology, ensuring scalable growth, operational
                            efficiency, and long-term success across various industries with a client-first
                            approach.
                        </p>
                        <div class="img-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/about_images/guest/1726810541468.JPEG"
                                alt="Verve Image" class="custom-img">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Third Card -->
            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.6s">
                <div class="hover-border">
                    <div class="custom-card bg-dark text-white">
                        <h3 class="p-3">Innovation Through Inclusive Diversity</h3>
                        <p class="px-3 pb-3">Leal Software Solution, we believe that innovation stems from the power
                            of diverse perspectives. By promoting inclusive diversity, we cultivate a collaborative
                            environment where unique ideas thrive. This approach allows us to develop creative
                            solutions, drive business growth, enhance customer experiences, and deliver exceptional
                            value to our clients, ensuring long-term success in a dynamic marketplace.</p>
                        <div class="img-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/about_images/guest/acrex.JPG"
                                alt="Verve Image" class="custom-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About  -->

<!-- About Process -->
<div class="container py-5">
    <div class="row justify-content-center text-center g-4 px-3 px-lg-0">
        <!-- Step 1 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2 bg-light p-3 my-2 wow fadeIn" data-wow-delay="0.3s">
            <div>
                <div class="d-flex justify-content-center">
                    <div class="step-number mb-4">01</div>
                </div>
                <div class="flow-icon bg-primary"><i class="fas fa-users-cog"></i></div>
                <h5 class="mt-3">Choose A Service</h5>
                <p class="text-muted">Select from a variety of services tailored to meet your business needs and
                    goals
                    effectively.</p>
            </div>
        </div>

        <!-- Arrow -->
        <div class="col-12 col-sm-6 col-md-2 col-lg-1 d-flex align-items-center arrow wow fadeIn" data-wow-delay="0.3s">
            <div class="arrow">➔</div>
        </div>

        <!-- Step 2 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2 bg-light p-3 my-2 wow fadeIn" data-wow-delay="0.4s">
            <div>
                <div class="d-flex justify-content-center">
                    <div class="step-number mb-4">02</div>
                </div>
                <div class="flow-icon bg-primary"><i class="fas fa-handshake"></i></div>
                <h5 class="mt-3">Request A Meeting</h5>
                <p class="text-muted">Schedule a meeting with our experts to discuss your specific requirements and
                    goals.</p>
            </div>
        </div>

        <!-- Arrow -->
        <div class="col-12 col-sm-6 col-md-2 col-lg-1 d-flex align-items-center arrow wow fadeIn" data-wow-delay="0.5s">
            <div class="arrow">➔</div>
        </div>

        <!-- Step 3 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2 bg-light p-3 my-2 wow fadeIn" data-wow-delay="0.5s">
            <div>
                <div class="d-flex justify-content-center">
                    <div class="step-number mb-4">03</div>
                </div>
                <div class="flow-icon bg-primary"><i class="fas fa-briefcase"></i></div>
                <h5 class="mt-3">Start Planning</h5>
                <p class="text-muted">Collaborate with our team to develop a comprehensive plan tailored to your
                    needs.</p>
            </div>
        </div>

        <!-- Arrow -->
        <div class="col-12 col-sm-6 col-md-2 col-lg-1 d-flex align-items-center arrow wow fadeIn" data-wow-delay="0.7s">
            <div class="arrow">➔</div>
        </div>

        <!-- Step 4 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2 bg-light p-3 my-2 wow fadeIn" data-wow-delay="0.6s">
            <div>
                <div class="d-flex justify-content-center">
                    <div class="step-number mb-4">04</div>
                </div>
                <div class="flow-icon bg-primary"><i class="fas fa-rocket"></i></div>
                <h5 class="mt-3">Let's Make It Happen</h5>
                <p class="text-muted">Execute the plan and watch your vision come to life with seamless
                    implementation.</p>
            </div>
        </div>
        <!-- Arrow -->
        <div class="col-12 col-sm-6 col-md-2 col-lg-1 d-flex align-items-center arrow wow fadeIn" data-wow-delay="0.7s">
            <div class="arrow arrow-hide">➔</div>
        </div>
    </div>
</div>

<!-- End Process  -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container py-0 py-lg-5">
        <div class="row g-5">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.3s">
                <!-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Testimonial</div> -->
                <h1 class="mb-4">Leal Software Solution: A History of Innovation and Excellence</h1>
                <p class="mb-4"> Leal Software Solution has been at the forefront of delivering cutting-edge
                    software solutions. With a commitment to innovation, quality, and customer satisfaction, we have
                    continuously evolved, providing industry-leading services that empower businesses and drive
                    their success in a fast-changing digital world.</p>
                <!-- <a class="btn btn-primary rounded-pill px-4" href="">Read More</a> -->
            </div>
            <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel testimonial-carousel border-start border-primary">
                    <div class="testimonial-item ps-5">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Founded in 2012, Leal Software Solution started as a small yet ambitious team of
                            developers committed to transforming business operations through innovative software.
                            With a focus on delivering tailored, high-quality solutions, the company began by
                            addressing the specific needs of local clients. From the outset, Leal Software Solution
                            prioritized customer satisfaction and scalable, robust digital products, laying the
                            groundwork for its future success in the competitive software industry.</p>
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-1">2012</h5>
                                <span>The Beginning of Leal Software Solution</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item ps-5">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>In 2014, Leal Software Solution experienced significant expansion, growing its team and
                            extending its service reach beyond local clients. The company began working on more
                            complex, large-scale projects, which helped establish a reputation for excellence in
                            software development. With a growing client base across various industries, Leal
                            Software Solution strengthened its position as a trusted partner for businesses seeking
                            innovative digital solutions and set the stage for continued growth in the years to
                            come.</p>
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-1">2014</h5>
                                <span>Early Growth and Expansion</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item ps-5">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>By 2016, Leal Software Solution had earned recognition as a leader in delivering
                            innovative, custom software. The company completed its 100th project, marking a major
                            milestone in its growth. Through collaborations with international clients, Leal
                            Software Solution expanded its reach, providing cutting-edge digital tools and solutions
                            to businesses worldwide. This year also marked the company’s first industry award,
                            acknowledging its commitment to quality and technical expertise. </p>
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-1">2016</h5>
                                <span>Industry Recognition and Milestones</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item ps-5">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>In 2018, Leal Software Solution took a bold step forward by embracing emerging
                            technologies such as artificial intelligence (AI), machine learning, and cloud
                            computing. This expansion of services enabled the company to provide even more advanced
                            and future-proof solutions to its clients, helping them stay competitive in an evolving
                            digital landscape. Leal Software Solution’s commitment to staying ahead of technological
                            trends solidified its reputation as an innovator in the software industry. </p>
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-1">2018</h5>
                                <span>Embracing New Technologies</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item ps-5">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>As the global pandemic disrupted industries in 2020, Leal Software Solution responded
                            quickly, supporting businesses with the tools needed to shift to remote operations. The
                            company introduced cloud-based platforms and collaborative solutions that allowed
                            businesses to adapt and continue operating efficiently. Leal Software Solution’s agile
                            response to these challenges demonstrated its resilience and ability to deliver
                            effective, scalable solutions during times of crisis, helping its clients navigate an
                            uncertain landscape. </p>
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-1">2020</h5>
                                <span>Adapting to Global Challenges</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item ps-5">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>In 2022, Leal Software Solution further expanded its global footprint by opening offices
                            in key international markets and forming strategic partnerships. This year marked a
                            significant step in the company’s global growth strategy, allowing it to deliver digital
                            transformation services to a broader audience. With its focus on driving innovation and
                            optimizing client operations, Leal Software Solution became a go-to partner for
                            businesses worldwide, particularly in sectors undergoing rapid digital change. </p>
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-1">2022</h5>
                                <span>Expanding Global Presence</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item ps-5">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>In 2023, Leal Software Solution focused heavily on digital transformation initiatives,
                            helping businesses modernize their operations through automation, AI-driven solutions,
                            and cloud-based technologies. The company launched several flagship projects, designed
                            to streamline processes and boost efficiency for clients across multiple sectors. This
                            year also saw an increase in global partnerships, reinforcing Leal Software Solution's
                            role as a trusted partner for companies seeking innovative, scalable solutions in a
                            rapidly evolving technological landscape. </p>
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-1">2023</h5>
                                <span>Pioneering Digital Transformation</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item ps-5">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Celebrating 12 years of excellence in 2024, Leal Software Solution continues to lead the
                            software industry with a commitment to innovation, client empowerment, and
                            sustainability. The company remains at the forefront of digital transformation,
                            providing future-ready solutions to businesses around the globe. Looking ahead, Leal
                            Software Solution aims to deepen its impact by leveraging emerging technologies and
                            driving efficiency in industries ranging from healthcare to finance and beyond. </p>
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-1">2024</h5>
                                <span>A Decade of Innovation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- About Process -->
<!-- <div class="container-fluid bg-light px-3 py-5">
        <div class="col-lg-12 py-4">
            <div class="d-flex flex-wrap justify-content-between">
                <div class="service-item d-flex flex-column justify-content-center text-center m-2 pt-0 services-about">
                    <div class="service-icon btn-square py-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/about_images/sw_development.png" alt="Service Icon" style="width: 60px;"
                            height="60px">
                    </div>
                    <h5 class="mb-3">Software Development</h5>
                    <p>Software development involves designing, creating, testing, and maintaining applications or
                        systems tailored to meet specific business needs. It combines coding, problem-solving, and
                        innovation to deliver efficient, scalable, and high-quality software solutions.</p>
                </div>

                <div class="service-item d-flex flex-column justify-content-center text-center m-2 pt-0 services-about">
                    <div class="service-icon btn-square py-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/about_images/erp.png" alt="Service Icon" style="width: 60px;" height="60px">
                    </div>
                    <h5 class="mb-3">Odoo ERP Development</h5>
                    <p>Odoo’s open-source platform is designed to streamline business operations. It enhances workflows,
                        automates tasks, and provides a comprehensive suite of tools that are specifically tailored to
                        manage everything from sales to inventory, accounting, and beyond with exceptional efficiency.
                    </p>
                </div>

                <div class="service-item d-flex flex-column justify-content-center text-center m-2 pt-0 services-about">
                    <div class="service-icon btn-square py-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/about_images/task.png" alt="Service Icon" style="width: 60px;" height="60px">
                    </div>
                    <h5 class="mb-3">TaskTrak Hub Manager</h5>
                    <p>TaskTrak Hub Manager is a comprehensive task management system designed to streamline project
                        workflows, enhance team collaboration, and boost productivity. It offers real-time tracking,
                        task prioritization, and customizable dashboards to keep projects on track efficiently.</p>
                </div>

                <div class="service-item d-flex flex-column justify-content-center text-center m-2 pt-0 services-about">
                    <div class="service-icon btn-square py-3">
                        <img src="<?php bloginfo('template_directory'); ?>/img/about_images/hvac.png" alt="Service Icon" style="width: 60px;" height="60px">
                    </div>
                    <h5 class="mb-3">HVAC HeatLoad Application</h5>
                    <p>The HVAC HeatLoad Application simplifies the calculation of heat load requirements for buildings.
                        It helps HVAC professionals accurately determine cooling and heating needs, ensuring
                        energy-efficient system design and optimal climate control solutions.</p>
                </div>
            </div>
        </div>
    </div>  -->
<!-- End Process -->


<!-- Start Mission, Vision & Values -->
<div class="container" style="max-width: 1200px;">
    <h2 class="text-center wow fadeIn" data-wow-delay="0.3s">Our Mission, Vision & Values</h2>
    <div class="row justify-content-center my-5">
        <!-- Mission Card -->
        <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
            <div class="card-vision wow fadeIn" data-wow-delay="0.3s">
                <div class="card-vision-header">
                    <img src="<?php bloginfo('template_directory'); ?>/img/about_images/mission.png" alt="Mission Icon"
                        class="card-vision-icon">
                    <h5 class="mb-0">Our Mission</h5>
                </div>
                <div class="card-vision-content">
                    <p class="card-text">
                        At Leal Software Solution, our mission is to create innovative, user-centric websites that
                        empower businesses to thrive in the digital landscape. We strive to deliver tailored
                        solutions that enhance user experiences, boost engagement, and drive measurable results. By
                        combining cutting-edge technology with creative design, we ensure that each website is
                        optimized for performance, security, and scalability. Our commitment is to provide clients
                        with reliable, high-quality web development services that help them achieve their goals and
                        build strong digital identities.
                    </p>
                </div>
            </div>
        </div>

        <!-- Vision Card -->
        <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
            <div class="card-vision wow fadeIn" data-wow-delay="0.5s">
                <div class="card-vision-header">
                    <img src="<?php bloginfo('template_directory'); ?>/img/about_images/visionary.png" alt="Vision Icon"
                        class="card-vision-icon">
                    <h5 class="card-title mb-0">Our Vision</h5>
                </div>
                <div class="card-vision-content">
                    <p class="card-text">
                        At Leal Software Solution, our vision is to be a global leader in web development, setting
                        the standard for innovation, creativity, and excellence in the digital space. We aim to
                        continuously evolve with the ever-changing technology landscape, offering cutting-edge
                        solutions that help businesses succeed in a connected world. By fostering a culture of
                        collaboration, learning, and innovation, we aspire to empower organizations of all sizes to
                        achieve their full potential online and create meaningful digital experiences that drive
                        growth and lasting impact.
                    </p>
                </div>
            </div>
        </div>

        <!-- Values Card -->
        <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
            <div class="card-vision wow fadeIn" data-wow-delay="0.6s">
                <div class="card-vision-header">
                    <img src="<?php bloginfo('template_directory'); ?>/img/about_images/values.png" alt="Values Icon"
                        class="card-vision-icon">
                    <h5 class="card-title mb-0">Our Values</h5>
                </div>
                <div class="card-vision-content">
                    <p class="card-text">
                        At Leal Software Solution, our core values drive everything we do. We prioritize innovation,
                        constantly pushing boundaries to deliver creative and effective solutions. Integrity and
                        transparency guide our business practices, ensuring trust and strong partnerships with our
                        clients. Collaboration is key to our success, as we work closely with clients to understand
                        their unique needs. We value quality, aiming for excellence in every project, and are
                        committed to continuous learning and growth, ensuring we stay at the forefront of web
                        development trends and technologies.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mission, Vision & Values -->

<!-- Start Client Company -->
<div class="container client-container py-5 px-0 mx-auto">
    <h2 class="text-center py-3">Our Top Clients</h2>

    <!-- Swiper Container -->
    <div class="swiper-container py-2">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img
                    src="<?php bloginfo('template_directory'); ?>/img/about_images/Client Gallery/AESlogofinal.jpg"
                    alt="Capgemini" class="client-logo"></div>
            <div class="swiper-slide"><img
                    src="<?php bloginfo('template_directory'); ?>/img/about_images/Client Gallery/Air-Miracle.jpg"
                    alt="Cognizant" class="client-logo"></div>
            <div class="swiper-slide"><img
                    src="<?php bloginfo('template_directory'); ?>/img/about_images/Client Gallery/BottomGrass.jpg"
                    alt="Deloitte" class="client-logo"></div>
            <div class="swiper-slide"><img
                    src="<?php bloginfo('template_directory'); ?>/img/about_images/Client Gallery/CoolWell.jpg"
                    alt="Darwinbox" class="client-logo"></div>
            <div class="swiper-slide"><img
                    src="<?php bloginfo('template_directory'); ?>/img/about_images/Client Gallery/evercrest.jpg"
                    alt="Bajaj-finserv" class="client-logo"></div>
            <div class="swiper-slide"><img
                    src="<?php bloginfo('template_directory'); ?>/img/about_images/Client Gallery/icetonair.jpg"
                    alt="HCL" class="client-logo"></div>
            <div class="swiper-slide"><img
                    src="<?php bloginfo('template_directory'); ?>/img/about_images/Client Gallery/lotus.jpg"
                    alt="Hexaware" class="client-logo"></div>
            <div class="swiper-slide"><img
                    src="<?php bloginfo('template_directory'); ?>/img/about_images/Client Gallery/RadicalGrooming.jpg"
                    alt="Persistent" class="client-logo"></div>
            <div class="swiper-slide"><img
                    src="<?php bloginfo('template_directory'); ?>/img/about_images/Client Gallery/TransTech.jpg"
                    alt="Powersoft" class="client-logo"></div>
            <div class="swiper-slide"><img
                    src="<?php bloginfo('template_directory'); ?>/img/about_images/Client Gallery/asfrev_1.jpg"
                    alt="Liberty" class="client-logo"></div>
        </div>

        <!-- Swiper Pagination -->
        <!-- <div class="swiper-pagination"></div> -->
    </div>
</div>
<!-- End Client Company -->




<!-- Team Start -->
<!-- <div class="container-fluid bg-light pt-5" id="about-history-team">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Meet Our Experienced Team Members</h1>
                    <p class="mb-4">Discover the expertise behind our success—meet our skilled team members who
                        bring
                        years of experience and innovation to every project. Our professionals are dedicated to
                        delivering top-notch web development solutions, ensuring your vision becomes a reality with
                        precision and excellence. Explore our team's profiles and learn more about their
                        contributions.
                    </p>
                </div>
                <div class="container mt-5">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <div class="col-md-12">
                                <div class="row g-4">
                                    <div class="col-12 col-sm-6 col-md-3 wow fadeIn" data-wow-delay="0.1s">
                                        <div class="team-item bg-white text-center rounded p-4 pt-0">
                                            <img class="img-fluid rounded-circle p-4" src="<?php bloginfo('template_directory'); ?>/img/team-1.jpg" alt="">
                                            <h5 class="mb-0">Mr.Subodh Murkewar</h5>
                                            <small>Founder & CEO</small>
                                            <div class="d-flex justify-content-center mt-3">
                                                <a class="btn btn-square btn-primary" href=""><i
                                                        class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3 wow fadeIn" data-wow-delay="0.5s">
                                        <div class="team-item bg-white text-center rounded p-4 pt-0">
                                            <img class="img-fluid rounded-circle p-4" src="<?php bloginfo('template_directory'); ?>/img/team-2.jpg" alt="">
                                            <h5 class="mb-0">Mr.Suraj Patil</h5>
                                            <small>Project Head</small>
                                            <div class="d-flex justify-content-center mt-3">
                                                <a class="btn btn-square btn-primary"
                                                    href="https://in.linkedin.com/in/nandkishor-kotkar-14a4361a"
                                                    target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3 wow fadeIn" data-wow-delay="0.3s">
                                        <div class="team-item bg-white text-center rounded p-4 pt-0">
                                            <img class="img-fluid rounded-circle p-4" src="<?php bloginfo('template_directory'); ?>/img/team-3.jpg" alt="">
                                            <h5 class="mb-0">Kapil Sardana</h5>
                                            <small>Senior Technician</small>
                                            <div class="d-flex justify-content-center mt-3">
                                                <a class="btn btn-square btn-primary" href=""><i
                                                        class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3 wow fadeIn" data-wow-delay="0.7s">
                                        <div class="team-item bg-white text-center rounded p-4 pt-0">
                                            <img class="img-fluid rounded-circle p-4" src="<?php bloginfo('template_directory'); ?>/img/team-4.jpg" alt="">
                                            <h5 class="mb-0">Anamika Shukhla</h5>
                                            <small>Senior Software Engineer</small>
                                            <div class="d-flex justify-content-center mt-3">
                                                <a class="btn btn-square btn-primary"
                                                    href="https://in.linkedin.com/in/shubham-amrutkar-8a67a3111"
                                                    target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pt-md-4">
                                <div class="row g-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Team End -->


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

                    <p class="mt-4 text-muted text-dark">Copyright © 2024 www.lealsolution.com - All rights reserved
                    </p>
                </div>

                <div class="col-md-6">
                    <h3 class="contact-title">Join Us</h3>
                    <form>
                        <div class="mb-3">
                            <label for="productSelect" class="form-label">Product</label>
                            <select class="form-select form-control" id="productSelect">
                                <option selected>About Us</option>
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