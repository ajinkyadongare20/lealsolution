<?php
/**
 * The main template file
 * Template Name: TaskTrak Hub
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
                <h1 class="display-4 text-white mb-4 animated slideInRight">TaskTrak Hub</h1>
                <nav aria-label="breadcrumb">
                </nav>
                <p class="text-white mb-4 pt-3 animated fadeInLeftBig">TaskTrak Hub is your all-in-one solution for
                    efficient task management, empowering teams to stay organized, meet deadlines, and optimize
                    productivity. With user-friendly tools for tracking, collaboration, and automation, TaskTrak Hub
                    helps you focus on what matters most—delivering results. Designed for teams of any size, our
                    platform ensures every task is streamlined and every project stays on track.</p>
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


<!-- Hero Start -->
<section>
    <div class="container-fluid bg-primary tasktrak-header">
        <div class="container pt-5 text-start text-lg-center wow fadeIn" data-wow-delay="0.3s">
            <div class="row g-5 pt-5">
                <!-- Section Heading -->
                <div class="col-12">
                    <h3 class="display-6 text-dark mb-4">TaskTrak Hub</h3>
                    <p class="text-dark mb-4">
                        TaskTrak Hub is a comprehensive task management solution that boosts productivity and
                        simplifies workflows. With real-time tracking, task assignments, and collaboration features,
                        it helps teams stay organized and focused. Manage tasks, monitor progress, and ensure
                        efficient execution in a centralized platform, making it easier to achieve project goals and
                        meet deadlines.
                    </p>
                </div>

                <!-- Images Row -->
                <div class="d-flex flex-wrap justify-content-center align-items-center">
                    <div class="col-4 col-sm-3 p-2">
                        <img src="<?php bloginfo('template_directory'); ?>/img/tasktrak/iphone-12-pro-frame.png"
                            alt="Image 1" class="img-fluid rounded">
                    </div>
                    <div class="col-4 col-sm-3 p-2">
                        <img src="<?php bloginfo('template_directory'); ?>/img/tasktrak/iphone-12-pro-frame.png"
                            alt="Image 2" class="img-fluid rounded">
                    </div>
                    <div class="col-4 col-sm-3 p-2">
                        <img src="<?php bloginfo('template_directory'); ?>/img/tasktrak/iphone-12-pro-frame.png"
                            alt="Image 3" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>

        <!-- App Store and Google Play Download Section -->
        <div class="container text-center my-5 wow fadeIn" data-wow-delay="0.5s">
            <h2>Get TaskTrak Hub App</h2>
            <p class="text-dark">Download the app on your device and start managing tasks effortlessly!</p>

            <div class="d-flex justify-content-center align-items-center mt-4">
                <!-- App Store Button -->
                <a href="your-website-url/app-store-download" target="_blank" class="btn app-store-btn">
                    <img src="<?php bloginfo('template_directory'); ?>/https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg"
                        alt="App Store" class="img-fluid" style="height: 100px;">
                </a>

                <!-- Google Play Button -->
                <a href="your-website-url/google-play-download" target="_blank" class="btn google-play-btn ms-3">
                    <img src="<?php bloginfo('template_directory'); ?>/https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                        alt="Google Play" class="img-fluid" style="height: 100px;">
                </a>
            </div>
        </div>

        <div class="pb-5">
            <!-- 1 -->
            <div class="container py-5 position-relative wow fadeIn" data-wow-delay="0.3s">
                <div class="tasktrak-background-half"></div>
                <div class="row align-items-center">
                    <div class="col-md-6 d-flex justify-content-center tasktrak-image-container">
                        <img src="<?php bloginfo('template_directory'); ?>/img/tasktrak/1.jpg" alt="Smart Home App"
                            class="img-fluid rounded-3"
                            style="max-width: 300px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    </div>
                    <div class="col-md-6 text-start pt-5">
                        <h2 class="fw-bold mb-3">Task Creation - Task-Trak Hub</h2>
                        <p class="text-muted">
                            Task-Trak Hub simplifies task creation for seamless project management. Select a
                            company, choose a project, and assign users effortlessly. Add task details, including
                            start and end times, to ensure timely completion and better organization. Enhance
                            collaboration with additional information fields, streamlining workflows and improving
                            productivity. Create tasks with ease today!
                        </p>
                        <a href="#" class="btn btn-dark">Create Task</a>
                    </div>
                </div>
            </div>

            <!-- 2 -->
            <div class="container py-5 position-relative wow fadeIn" data-wow-delay="0.4s">
                <div class="tasktrak-background-half-i"></div>
                <div class="row align-items-center">
                    <div class="col-md-6 text-start pb-5">
                        <h2 class="fw-bold mb-3">Manage Projects and Tags - Task-Trak Hub</h2>
                        <p class="text-muted">
                            Efficiently manage your projects and categorize tasks with custom tags using Task-Trak
                            Hub. Assign projects to teams, track progress, and ensure timely completion. Organize
                            tasks with tags for quick filtering and better visibility across workflows. Simplify
                            project management, streamline collaboration, and enhance productivity with our
                            intuitive tagging system.
                        </p>
                        <a href="#" class="btn btn-dark">Learn More</a>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center tasktrak-image-container">
                        <img src="<?php bloginfo('template_directory'); ?>/img/tasktrak/2.jpg" alt="Smart Home App"
                            class="img-fluid rounded-3"
                            style="max-width: 300px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    </div>
                </div>
            </div>

            <!-- 3 -->
            <div class="container py-5 position-relative wow fadeIn" data-wow-delay="0.5s">
                <div class="tasktrak-background-half"></div>
                <div class="row align-items-center">
                    <div class="col-md-6 d-flex justify-content-center tasktrak-image-container">
                        <img src="<?php bloginfo('template_directory'); ?>/img/tasktrak/6.jpg" alt="Smart Home App"
                            class="img-fluid rounded-3"
                            style="max-width: 300px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    </div>
                    <div class="col-md-6 text-start pt-5">
                        <h2 class="fw-bold mb-3">Task Features and Benefits - Task-Trak Hub</h2>
                        <p class="text-muted">
                            Task-Trak Hub offers powerful task management features designed to increase productivity
                            and streamline collaboration. Assign tasks easily, track progress in real-time, and
                            manage deadlines efficiently. With customizable tags and project organization, tasks
                            become more manageable and accessible. Benefit from increased team accountability,
                            faster decision-making, and improved task completion rates. Empower your team to work
                            smarter, not harder.
                        </p>
                        <a href="#" class="btn btn-dark">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- 4 -->
            <div class="container py-5 position-relative wow fadeIn" data-wow-delay="0.6s">
                <div class="tasktrak-background-half-i"></div>
                <div class="row align-items-center">
                    <div class="col-md-6 text-start pb-5">
                        <h2 class="fw-bold mb-3">Task Information and User Access - Task-Trak Hub</h2>
                        <p class="text-muted">
                            Task-Trak Hub provides detailed task information along with flexible user access
                            controls. Assign roles and permissions to users, ensuring appropriate access to tasks
                            based on their responsibilities. Track task progress, add updates, and keep all team
                            members informed. Whether managing tasks or overseeing projects, our platform ensures
                            smooth collaboration and efficient task execution across all levels.
                        </p>
                        <a href="#" class="btn btn-dark">Learn More</a>
                    </div>

                    <div class="col-md-6 d-flex justify-content-center tasktrak-image-container">
                        <img src="<?php bloginfo('template_directory'); ?>/img/tasktrak/2.jpg" alt="Smart Home App"
                            class="img-fluid rounded-3"
                            style="max-width: 300px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero End -->

<!-- Start Section  -->
<section class="bg-primary myhome-container wow fadeIn" data-wow-delay="0.5s">
    <div class="opacity">
        <div class="container pb-5">
            <div class="text-center mb-5">
                <h2 class="text-white">Key Features of TaskTrak Hub</h2>
                <p class="text-white">Efficient task management and collaboration for streamlined productivity.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border rounded shadow-sm"
                        style="background-color: #f8fbff;">
                        <div class="me-3"
                            style="flex-shrink: 0; width: 60px; height: 60px; background-color: #eef7ff; display: flex; justify-content: center; align-items: center; border-radius: 5px;">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/software-developer.png"
                                alt="Service Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Comprehensive Task Management</h5>
                            <p class="mb-2"> TaskTrak Hub allows you to prioritize, assign, and manage tasks
                                effortlessly, keeping your team on track.</p>
                            <a href="#" class="text-primary text-decoration-none fw-bold">Read More →</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border rounded shadow-sm"
                        style="background-color: #f8fbff;">
                        <div class="me-3"
                            style="flex-shrink: 0; width: 60px; height: 60px; background-color: #eef7ff; display: flex; justify-content: center; align-items: center; border-radius: 5px;">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_conslutancy.jpg"
                                alt="Service Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Seamless Calendar Integration</h5>
                            <p class="mb-2">Easily sync your tasks with your calendar to stay on top of deadlines
                                and appointments.</p>
                            <a href="#" class="text-primary text-decoration-none fw-bold">Read More →</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border rounded shadow-sm"
                        style="background-color: #f8fbff;">
                        <div class="me-3"
                            style="flex-shrink: 0; width: 60px; height: 60px; background-color: #eef7ff; display: flex; justify-content: center; align-items: center; border-radius: 5px;">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/app-development.jpg"
                                alt="Service Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Customizable Dashboards</h5>
                            <p class="mb-2">Create personalized dashboards to track progress, deadlines, and team
                                activities all in one place.</p>
                            <a href="#" class="text-primary text-decoration-none fw-bold">Read More →</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border rounded shadow-sm"
                        style="background-color: #f8fbff;">
                        <div class="me-3"
                            style="flex-shrink: 0; width: 60px; height: 60px; background-color: #eef7ff; display: flex; justify-content: center; align-items: center; border-radius: 5px;">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_implemention.jpg"
                                alt="Service Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Advanced Reporting</h5>
                            <p class="mb-2">Generate insightful reports to analyze task completion, team
                                performance, and productivity trends.</p>
                            <a href="#" class="text-primary text-decoration-none fw-bold">Read More →</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border rounded shadow-sm"
                        style="background-color: #f8fbff;">
                        <div class="me-3"
                            style="flex-shrink: 0; width: 60px; height: 60px; background-color: #eef7ff; display: flex; justify-content: center; align-items: center; border-radius: 5px;">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_implemention.jpg"
                                alt="Service Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Real-Time Collaboration</h5>
                            <p class="mb-2">Collaboration is made easy with TaskTrak Hub's real-time chat and
                                file-sharing features.</p>
                            <a href="#" class="text-primary text-decoration-none fw-bold">Read More →</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border rounded shadow-sm"
                        style="background-color: #f8fbff;">
                        <div class="me-3"
                            style="flex-shrink: 0; width: 60px; height: 60px; background-color: #eef7ff; display: flex; justify-content: center; align-items: center; border-radius: 5px;">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_implemention.jpg"
                                alt="Service Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Automated Notifications & Alerts</h5>
                            <p class="mb-2">Stay on top of your tasks with automated notifications and reminders.
                            </p>
                            <a href="#" class="text-primary text-decoration-none fw-bold">Read More →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->


<!-- Start this services security -->
<section class="container-fluid p-0">
    <div class="container text-start text-lg-center py-5 wow fadeIn" data-wow-delay="0.3s">
        <h1 class="fw-bold mb-3">TaskTrak Hub: Your Secure Task Management Solution</h1>
        <p class="mb-4">Empowering your team with secure, efficient, and reliable task management tools.</p>
        <button class="btn btn-primary mb-5">Start for Free</button>

        <div class="row text-start">
            <div class="col-12 col-md-6 d-flex align-items-start mb-4">
                <div class="me-3">
                    <span class="badge bg-dark rounded-circle" style="padding: 8px;">
                        <i class="bi bi-check-lg text-white"></i>
                    </span>
                </div>
                <div>
                    <h5 class="fw-bold">Role-Based Access Control <span
                            class="badge bg-warning text-dark">PREMIUM</span></h5>
                    <p class="mb-0">Ensure data privacy by restricting access to tasks, reports, and dashboards
                        based on user roles.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-start mb-4">
                <div class="me-3">
                    <span class="badge bg-dark rounded-circle" style="padding: 8px;">
                        <i class="bi bi-check-lg text-white"></i>
                    </span>
                </div>
                <div>
                    <h5 class="fw-bold">End-to-End Encryption</h5>
                    <p class="mb-0">Protect your sensitive data with advanced encryption both in transit and at
                        rest.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-start mb-4">
                <div class="me-3">
                    <span class="badge bg-dark rounded-circle" style="padding: 8px;">
                        <i class="bi bi-check-lg text-white"></i>
                    </span>
                </div>
                <div>
                    <h5 class="fw-bold">Single Sign-On (SSO) <span class="badge bg-warning text-dark">PREMIUM</span>
                    </h5>
                    <p class="mb-0">Simplify access with SSO integration, enhancing security and user convenience.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-start mb-4">
                <div class="me-3">
                    <span class="badge bg-dark rounded-circle" style="padding: 8px;">
                        <i class="bi bi-check-lg text-white"></i>
                    </span>
                </div>
                <div>
                    <h5 class="fw-bold">Real-Time Activity Monitoring</h5>
                    <p class="mb-0">Track changes, task updates, and team activity in real-time to ensure
                        accountability and transparency.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Trust & Security Section -->
    <div class="bg-dark text-white py-5 wow fadeIn" data-wow-delay="0.5s">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Section -->
                <div class="col-12 col-lg-8 mb-4 mb-lg-0 text-center text-lg-start">
                    <h2 class="fw-bold text-white">Trust & Security in Task Management</h2>
                    <p class="my-4">
                        At TaskTrak Hub, we prioritize your data's security and privacy. With cutting-edge measures
                        in place,
                        we ensure a reliable and compliant environment for managing your tasks effectively.
                    </p>
                    <button class="btn btn-light">Visit the trust center</button>
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
</section>
<!-- End this services security  -->


<!-- Start Images Gallary -->
<section class="container-fluid py-3">
    <div class="container client-container pt-5 px-0 mx-auto" style="max-width: 1200px;">
        <h2 class="fs-2 text-center" style="margin-bottom: 20px;">Feature Of Task-Trak </h2>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/tasktrak/1.jpg" alt="Image 1"
                        class="tasktrak-feature-img shadow">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/tasktrak/2.jpg" alt="Image 2"
                        class="tasktrak-feature-img shadow">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/tasktrak/3.jpg" alt="Image 3"
                        class="tasktrak-feature-img shadow">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/tasktrak/4.jpg" alt="Image 4"
                        class="tasktrak-feature-img shadow">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/tasktrak/3.jpg" alt="Image 5"
                        class="tasktrak-feature-img shadow">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/tasktrak/4.jpg" alt="Image 6"
                        class="tasktrak-feature-img shadow">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/tasktrak/2.jpg" alt="Image 7"
                        class="tasktrak-feature-img shadow">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Images Gallary -->


<!-- Pricing Start -->
<section class="container-fluid bg-light py-5">
    <div class="container wow fadeIn" data-wow-delay="0.3s">
        <h2 class="text-center fw-bold mb-3">Pricing Plans</h2>
        <p class="text-center mb-5">Choose a plan that fits your needs and unlock the full potential of
            <strong>TaskTrak
                Hub</strong>
            for efficient task management and collaboration.
        </p>
        <div class="row g-4">

            <!-- Basic Plan -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 shadow h-100 pricing-card" style="border-radius: 12px;">
                    <div class="card-body text-center px-4 py-5">
                        <h5 class="card-title fw-bold">Basic Plan</h5>
                        <h2 class="fw-bold">$9.9<span class="fs-6 fw-normal"> / month</span></h2>
                        <p class="my-3 text-muted">Perfect for small teams getting started with task tracking and
                            simple
                            project management.</p>
                        <h6 class="fw-bold">Features Included:</h6>
                        <ul class="list-unstyled text-start mt-3">
                            <li class="mb-2"><span class="text-primary">&#10004;</span> Unlimited Tasks</li>
                            <li class="mb-2"><span class="text-primary">&#10004;</span> 5 Team Members</li>
                            <li class="mb-2"><span class="text-primary">&#10004;</span> Basic Reporting Tools</li>
                            <li class="mb-2"><span class="text-primary">&#10004;</span> Task Priority Settings</li>
                            <li class="mb-2"><span class="text-primary">&#10004;</span> Email Notifications</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100" style="border-radius: 8px;">Buy Now →</a>
                    </div>
                </div>
            </div>

            <!-- Standard Plan -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 h-100 bg-primary text-white" style="border-radius: 12px;">
                    <div class="card-body text-center position-relative px-4 py-5">
                        <div class="badge bg-light text-primary position-absolute top-0 start-50 translate-middle-x mt-4 px-3 py-1 fw-bold"
                            style="border-radius: 12px;">Most Popular</div>
                        <h5 class="card-title fw-bold mt-4">Standard Plan</h5>
                        <h2 class="fw-bold">$19.9<span class="fs-6 fw-normal text-white-50"> / month</span></h2>
                        <p class="my-3">Best for growing teams managing multiple projects with enhanced
                            collaboration
                            features.</p>
                        <h6 class="fw-bold">Features Included:</h6>
                        <ul class="list-unstyled text-start mt-3">
                            <li class="mb-2"><span class="text-light">&#10004;</span> Unlimited Tasks & Projects
                            </li>
                            <li class="mb-2"><span class="text-light">&#10004;</span> 20 Team Members</li>
                            <li class="mb-2"><span class="text-light">&#10004;</span> Advanced Analytics & Reporting
                            </li>
                            <li class="mb-2"><span class="text-light">&#10004;</span> Priority Support</li>
                        </ul>
                        <a href="#" class="btn btn-light w-100 mt-3" style="border-radius: 8px;">Buy Now →</a>
                    </div>
                </div>
            </div>

            <!-- Premium Plan -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 shadow h-100 pricing-card" style="border-radius: 12px;">
                    <div class="card-body text-center px-4 py-5">
                        <h5 class="card-title fw-bold">Premium Plan</h5>
                        <h2 class="fw-bold">$39.9<span class="fs-6 fw-normal"> / month</span></h2>
                        <p class="my-3 text-muted">Designed for enterprises seeking complete control, scalability,
                            and
                            custom integrations.</p>
                        <h6 class="fw-bold">Features Included:</h6>
                        <ul class="list-unstyled text-start mt-3">
                            <li class="mb-2"><span class="text-primary">&#10004;</span> Unlimited Team Members</li>
                            <li class="mb-2"><span class="text-primary">&#10004;</span> Custom Workflows</li>
                            <li class="mb-2"><span class="text-primary">&#10004;</span> API Access & Integrations
                            </li>
                            <li class="mb-2"><span class="text-primary">&#10004;</span> Dedicated Account Manager
                            </li>
                            <li class="mb-2"><span class="text-primary">&#10004;</span> 24/7 Premium Support</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100" style="border-radius: 8px;">Buy Now →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing End -->


<!-- FAQs Start -->
<div class="container-fluid">
    <div class="container py-5">
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
                                What is TaskTrak Hub?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                TaskTrak Hub is a comprehensive task management platform designed to streamline team
                                collaboration, track progress, and enhance productivity through task assignment,
                                real-time updates, and reporting.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How does TaskTrak Hub improve team collaboration?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                TaskTrak Hub allows team members to collaborate seamlessly with built-in messaging,
                                file sharing, and task comments, ensuring that all project-related discussions and
                                updates are centralized.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Can I track task progress in real-time?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Yes, TaskTrak Hub provides real-time progress tracking for all tasks. You can view
                                detailed progress updates, including completion percentage, deadlines, and current
                                status at a glance.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Does TaskTrak Hub integrate with other tools?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Yes, TaskTrak Hub supports integration with several popular third-party tools such
                                as Google Drive, Slack, and Microsoft Teams to enhance your workflow and streamline
                                communication.
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
                                Can I assign tasks to multiple team members?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Yes, TaskTrak Hub allows you to assign tasks to multiple team members, set
                                priorities, and track their individual contributions to ensure smooth project
                                progress.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Can I set deadlines and reminders for tasks?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Yes, TaskTrak Hub lets you set deadlines for each task and sends automatic reminders
                                to ensure team members stay on track.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                How can I monitor task performance?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                TaskTrak Hub provides detailed analytics and performance reports, allowing you to
                                monitor task completion rates, bottlenecks, and team productivity in real-time.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Does TaskTrak Hub offer mobile access?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Yes, TaskTrak Hub offers a mobile-friendly version that ensures you can manage
                                tasks, communicate with your team, and track progress on-the-go.
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