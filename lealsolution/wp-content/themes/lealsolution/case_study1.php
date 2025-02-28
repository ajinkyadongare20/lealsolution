<?php
/**
 * The main template file
 * Template Name: Case Study 1
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
                <h1 class="display-4 text-white mb-4 animated slideInRight">Success Story</h1>
                <p class="text-white mb-4 pt-3 animated fadeInLeftBig">Leal Software Solution Offers Straightforward
                    Industrial Refrigeration Solutions Tailored For Efficiency And Reliability. We Streamline
                    Complex Systems, Ensuring Seamless Performance And Minimal Downtime. Trust Us To Simplify Your
                    Refrigeration Needs With Innovative Technology And Expert Support For Optimal Cooling And Energy
                    Savings.</p>
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



<!--  -->
<div class="container pt-5 pb-0 py-lg-5">
    <!-- About the Client Section -->
    <div class="text-start mb-5 wow fadeIn" data-wow-delay="0.1s">
        <img src="<?php bloginfo('template_directory'); ?>/img/about_images/Client Gallery/RadicalGrooming.jpg"
            alt="AISC Logo" class="border" style="width: 150px; height: 100px; object-fit: contain;">
        <h5 class="mt-3 fs-2">About the Client</h5>
        <p class="mt-4" style="font-size: 16px; line-height: 1.6;">
            Established in 1995, The American International School of Chennai (AISC) offers a curriculum based on
            North American academic standards. Hosting an international faculty, AISC offers advanced programs and
            facilities for children of American and international expats. The school offers state-of-the-art
            facilities and a diverse range of extracurricular activities - including sports, music, drama, and
            clubs. AISC thrives on strong parent engagement and digital connectivity and aims to offer an inclusive
            environment for every student.
        </p>
        <div class="row text-center mt-4">
            <div class="col-md-4">
                <h6>Country</h6>
                <p>India</p>
            </div>
            <div class="col-md-4">
                <h6>Industry</h6>
                <p>Education</p>
            </div>
            <div class="col-md-4">
                <h6>Services used</h6>
                <p>
                    <span class="badge badge-warning text-white bg-primary">Custom Software Development
                        Services</span>
                    <span class="badge badge-warning text-white bg-primary">UI/UX Design</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Business Situation Section -->
    <div class="wow fadeIn" data-wow-delay="0.2s">
        <h5 class="mb-4 fs-2">Business Situation</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            The client, a growing software development company, faced challenges in managing its project workflows
            and team collaborations. The lack of an integrated system to monitor development progress and coordinate
            tasks across teams led to delays and inefficiencies.
        </p>
        <p style="font-size: 16px; line-height: 1.6;">
            Firstly, the development teams were using multiple disconnected tools for project tracking, code
            management, and communication. This created silos of information, making it difficult to track project
            timelines and identify bottlenecks in real-time.
        </p>
        <p style="font-size: 16px; line-height: 1.6;">
            Managing client requirements and change requests was another significant challenge. The manual tracking
            of changes often resulted in missed updates and misaligned deliverables, affecting client satisfaction.
        </p>
        <p style="font-size: 16px; line-height: 1.6;">
            Another hurdle was resource allocation and time tracking. Without a centralized system, assigning tasks
            and monitoring resource utilization became time-consuming and prone to errors. This impacted the overall
            productivity and cost management of projects.
        </p>
        <p style="font-size: 16px; line-height: 1.6;">
            The client also needed a solution to enhance code quality and automate testing processes. The absence of
            integrated tools for version control and automated testing slowed down the development lifecycle and
            increased the chances of bugs in the final product.
        </p>
        <p style="font-size: 16px; line-height: 1.6;">
            Recognizing these challenges, the client approached our team to develop a comprehensive, tailored
            software solution.
        </p>
        <p style="font-size: 16px; line-height: 1.6;">
            The solution required us to:<br>
            <i class="fas fa-check-circle text-primary" style="font-size: 16px; line-height: 2.5;"></i> Develop an
            integrated project management platform to
            streamline workflows and task tracking.<br>
            <i class="fas fa-check-circle text-primary" style="font-size: 16px; line-height: 2.5;"></i> Design a
            centralized requirement management system for
            better handling of client requests and changes.<br>
            <i class="fas fa-check-circle text-primary" style="font-size: 16px; line-height: 2.5;"></i> Implement
            resource management tools to optimize task
            assignments and track utilization.<br>
            <i class="fas fa-check-circle text-primary" style="font-size: 16px; line-height: 2.5;"></i> Integrate
            version control and automated testing tools
            to enhance code quality and accelerate development cycles.<br>
            <i class="fas fa-check-circle text-primary" style="font-size: 16px; line-height: 2.5;"></i> Provide
            real-time reporting and analytics to improve
            decision-making and project visibility.
        </p>
    </div>

    <div class="py-5 wow fadeIn" data-wow-delay="0.3s">
        <h5 class="mb-4 fs-2">The Solution</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            Through thorough collaboration with key AISC stakeholders, we gathered detailed insights into the
            client’s specific challenges and pain points that hindered their operational efficiency.</p>
        <p style="font-size: 16px; line-height: 1.6;">
            Our approach was to develop an integrated, web-based platform that would address all of AISC’s
            challenges, automate tasks, and provide a better user experience for parents, students, and
            administrators. </p>
        <p style="font-size: 16px; line-height: 1.6;">
            Team Daffodil designed a responsive web application architecture with the following modules:<br>
            ◉ Activity Management Module: To automate activity bookings, and scheduling, while offering flexible
            payment
            options for parents. <br>
            ◉ School Merchandise Panel: To allow parents to place school merchandise orders
            online, track order statuses, and pay through the integrated payment gateway.<br>
            ◉ Procurement Management System: To handle budgets, purchase orders, and vendor management.<br>
            ◉ School Admin Portal: To manage student registrations, activities, and schedules; generate reports and
            track purchases.
        </p>
        <p style="font-size: 16px; line-height: 1.6;">
            For the backend, Laravel (PHP) was chosen for its scalability and robust architecture. React.js was used
            to build a highly interactive and responsive front end for parents, students, staff, and
            administrators.</p>
    </div>

    <div class="wow fadeIn" data-wow-delay="0.4s">
        <h5 class="mb-4 fs-2">Results:</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            ◉ Streamlined Development Processes: The implementation of an integrated project management system
            helped the software development company streamline workflows, enabling teams to manage tasks, track
            progress, and collaborate effectively. Automated processes reduced redundancies, saving time and effort.
        </p>
        <p style="font-size: 16px; line-height: 1.6;">
            ◉ Improved Code Quality: By integrating version control systems and automated testing tools, the
            company achieved higher code reliability and reduced bugs during deployment. These tools ensured
            adherence to coding standards and accelerated the development lifecycle.
        </p>
        <p style="font-size: 16px; line-height: 1.6;">
            ◉ Enhanced Team Collaboration: The centralization of communication and resource allocation fostered
            improved collaboration among developers, testers, and stakeholders. Real-time updates and task
            monitoring allowed for seamless coordination and faster decision-making.
        </p>
        <p style="font-size: 16px; line-height: 1.6;">
            ◉ Higher Client Satisfaction: The tailored requirement management system ensured better handling of
            client requests and change logs. Timely updates and delivery of projects as per client expectations led
            to increased trust and satisfaction levels.
        </p>
        <p style="font-size: 16px; line-height: 1.6;">
            ◉ Business Growth: The combination of streamlined workflows, enhanced collaboration, and improved
            client satisfaction resulted in better project outcomes, increased revenue, and market expansion
            opportunities for the software development company.
        </p>
    </div>

    <div class="py-5 wow fadeIn" data-wow-delay="0.5s">
        <h5 class="mb-4 fs-2">Conclusion:</h5>
        <p style="font-size: 16px; line-height: 1.6;">
            This case study highlights the transformative impact of adopting modernized software development
            practices. By addressing the challenges of workflow management, resource allocation, and code quality,
            the company achieved enhanced operational efficiency, better collaboration, and superior client
            satisfaction.
        </p>
        <p style="font-size: 16px; line-height: 1.6;">
            The successful implementation of advanced tools like Git for version control, Jenkins for automated
            builds, and React.js for interactive front-end development showcases the power of technological
            innovation. These solutions not only improved the development lifecycle but also positioned the company
            as a market leader in delivering high-quality software products.
        </p>
    </div>
</div>
<!--  -->


<!-- Case Study  -->
<section class="container-fluid py-5 text-center bg-light wow fadeIn" data-wow-delay="0.6s">
    <div class="container">
        <h2 class="pb-5 fw-bold text-dark">Case Studies</h2>
        <div class="row g-4">
            <!-- Success Story 1 -->
            <div class="col-12 col-md-6 col-lg-4 p-3">
                <div class="success-card"
                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/blogs_images/blogs2_group-developers-men-women-working-together.jpg');">
                    <div class="success-card-content">
                        <h6 class="bg-dark text-white px-2 py-1 d-inline-block rounded-pill mb-2">Case 1</h6>
                        <p class="mb-3"><strong>Healthcare Data Integration</strong>A healthcare provider sought a
                            solution to centralize patient records from multiple sources.</p>
                        <a href="case_study1.html"
                            class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 10%; aspect-ratio: 1; margin-left: 140px;">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Success Story 2 -->
            <div class="col-12 col-md-6 col-lg-4 p-3">
                <div class="success-card"
                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/blogs_images/blogs4_side-view-man-working-office.jpg');">
                    <div class="success-card-content">
                        <h6 class="bg-dark text-white px-2 py-1 d-inline-block rounded-pill mb-2">Case 2</h6>
                        <p class="mb-3"><strong>E-commerce Platform</strong>Our team partnered with a
                            growing e-commerce business to revamp its outdated platform.</p>
                        <a href="case_study2.html"
                            class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 10%; aspect-ratio: 1; margin-left: 140px;">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Success Story 3 -->
            <div class="col-12 col-md-6 col-lg-4 p-3">
                <div class="success-card"
                    style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/blogs_images/blogs1_software_industry.jpg');">
                    <div class="success-card-content">
                        <h6 class="bg-dark text-white px-2 py-1 d-inline-block rounded-pill mb-2">Case 3</h6>
                        <p class="mb-3"><strong>TaskTrak</strong> global logistics firm upgraded its tracking
                            system.
                            Our end-to-end solution provided real-time tracking.</p>
                        <a href="case_study3.html"
                            class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 10%; aspect-ratio: 1; margin-left: 140px;">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Case Study  -->


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