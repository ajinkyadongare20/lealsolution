<?php
/**
 * The main template file
 * Template Name: Career
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
                <h1 class="display-4 text-white mb-4 animated slideInRight">Career</h1>
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


<section class="py-3">
    <div class="container">
        <h5 class="fs-3 text-center p-4 wow fadeIn" data-wow-delay="0.1s">Apply to Leal Software Solution Jobs</h2>
            <!-- Job Listings -->
            <div class="row">
                <!-- Job Listing 1 -->
                <div class="col-12 col-md-12  wow fadeIn" data-wow-delay="0.2s">
                    <div class="job-listing card p-3 my-4">
                        <div
                            class="d-flex flex-column flex-lg-row justify-content-between align-items-start align-items-lg-center">
                            <div class="mb-3 mb-lg-0">
                                <h5 class="mb-0 text-start">
                                    <a href="#" class="toggle-form text-decoration-none text-dark"
                                        data-bs-toggle="collapse" data-bs-target="#job1-form">
                                        Junior Software Engineer
                                    </a>
                                </h5>
                                <p class="small text-start">Pune, Maharashtra, India</p>
                                <p class="small text-start">10/01/2025</p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-apply-job fw-bold py-2"
                                    style="width: 150px; border: none; border-radius: 5px; transition: background-color 0.3s;">
                                    Apply Now
                                </button>
                            </div>
                        </div>
                        <!-- Application Form -->
                        <div id="job1-form" class="collapse show apply-form card p-2 p-lg-4 mt-5 rounded-0 border-0">
                            <h3>Apply for Junior Software Developer</h3>
                            <div class="badge bg-secondary rounded-0 mb-2 p-2">EXPERIENCE - 0 TO 2 YEARS</div>
                            <ul class="list-unstyled">
                                <li class="py-1">Collaborating with senior developers to design and implement
                                    software
                                    applications</li>
                                <li class="py-1">Writing clean, maintainable, and efficient code in programming
                                    languages such as JavaScript, Python, or Java</li>
                                <li class="py-1">Assisting in debugging and troubleshooting software issues</li>
                                <li class="py-1">Working on software development projects under supervision</li>
                                <li class="py-1">Testing and maintaining software systems to ensure high performance
                                </li>
                                <li class="py-1">Participating in code reviews to ensure adherence to best practices
                                </li>
                                <li class="py-1">Collaborating with cross-functional teams to gather requirements
                                    and
                                    develop user-friendly applications</li>
                                <li class="py-1">Contributing to continuous learning and knowledge sharing within
                                    the
                                    development team</li>
                            </ul>
                            <div class="container p-0">
                                <div class="card border-0 shadow-sm rounded-0">
                                    <div class="card-body px-2 py-3">
                                        <form action="https://api.web3forms.com/submit" method="POST"
                                            class="px-1 px-lg-3">
                                            <div class="row g-3">
                                                <!-- Hidden Input for Web3Forms Access Key -->
                                                <input type="hidden" name="access_key"
                                                    value="7b32a9fd-f2c6-4a55-98db-92ac1526dedb">

                                                <div class="col-md-6">
                                                    <label class="form-label">Your Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Enter your name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Your Email <span
                                                            class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Enter your email" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Experience (in years) <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="experience"
                                                        placeholder="Enter your experience" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Mobile Number <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="mobile_number"
                                                        placeholder="Enter your mobile number" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="roleDropdown" class="form-label">Choose Your
                                                        Field: <span class="text-danger">*</span></label>
                                                    <select class="form-select" id="roleDropdown" name="role" required>
                                                        <option value="" selected disabled>Select an option</option>
                                                        <option value="junior_software_engineer">Junior Software
                                                            Engineer</option>
                                                        <option value="software_engineer">Software Engineer</option>
                                                        <option value="senior_software_engineer">Senior Software
                                                            Engineer</option>
                                                        <option value="hvac_engineer">HVAC Engineer</option>
                                                        <option value="sales_marketing_engineer">Sales/Marketing
                                                            Engineer</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Upload Resume <span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" class="form-control" name="resume" required>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">Message (optional)</label>
                                                    <textarea class="form-control" rows="4" name="message"
                                                        placeholder="Write your message here"></textarea>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn btn-primary px-5">Submit
                                                        Application</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Job Listing 2 -->
                <div class="col-12 col-md-12 wow fadeIn" data-wow-delay="0.3s">
                    <div class="job-listing card p-3 my-4">
                        <div
                            class="d-flex flex-column flex-lg-row justify-content-between align-items-start align-items-lg-center">
                            <div class="mb-3 mb-lg-0">
                                <h5 class="mb-0 text-start">
                                    <a href="#" class="toggle-form text-decoration-none text-dark"
                                        data-bs-toggle="collapse" data-bs-target="#job1-form">
                                        Software Engineer
                                    </a>
                                </h5>
                                <p class="small text-start">Pune, Maharashtra, India</p>
                                <p class="small text-start">20/01/2025</p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-apply-job fw-bold py-2"
                                    style="width: 150px; border: none; border-radius: 5px; transition: background-color 0.3s;">
                                    Apply Now
                                </button>
                            </div>
                        </div>

                        <!-- Application Form -->
                        <div class="apply-form card p-3 mt-5 rounded-0 border-0">
                            <h3>Apply for Software Engineer</h3>
                            <div class="badge bg-secondary rounded-0 mb-2 p-2">EXPERIENCE - 2 TO 4 YEARS</div>
                            <ul class="list-unstyled">
                                <li class="py-1">Collaborating with cross-functional teams to design, develop, and
                                    deploy software applications</li>
                                <li class="py-1">Writing clean, efficient, and maintainable code in multiple
                                    programming
                                    languages</li>
                                <li class="py-1">Managing the full software development lifecycle, from concept
                                    through
                                    to implementation</li>
                                <li class="py-1">Optimizing applications for maximum speed and scalability</li>
                                <li class="py-1">Writing and maintaining technical documentation for software
                                    systems
                                </li>
                                <li class="py-1">Performing code reviews and ensuring compliance with coding
                                    standards
                                </li>
                                <li class="py-1">Identifying and resolving bugs and issues in the software</li>
                                <li class="py-1">Staying up to date with emerging trends and technologies to improve
                                    system functionality</li>
                            </ul>
                            <div class="container p-0">
                                <div class="card border-0 shadow-sm rounded-0">
                                    <div class="card-body px-2 py-3">
                                        <form action="https://api.web3forms.com/submit" method="POST"
                                            class="px-1 px-lg-3">
                                            <div class="row g-3">
                                                <!-- Hidden Input for Web3Forms Access Key -->
                                                <input type="hidden" name="access_key"
                                                    value="7b32a9fd-f2c6-4a55-98db-92ac1526dedb">

                                                <div class="col-md-6">
                                                    <label class="form-label">Your Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Enter your name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Your Email <span
                                                            class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Enter your email" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Experience (in years) <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="experience"
                                                        placeholder="Enter your experience" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Mobile Number <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="mobile_number"
                                                        placeholder="Enter your mobile number" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="roleDropdown" class="form-label">Choose Your
                                                        Field: <span class="text-danger">*</span></label>
                                                    <select class="form-select" id="roleDropdown" name="role" required>
                                                        <option value="" selected disabled>Select an option</option>
                                                        <option value="junior_software_engineer">Junior Software
                                                            Engineer</option>
                                                        <option value="software_engineer">Software Engineer</option>
                                                        <option value="senior_software_engineer">Senior Software
                                                            Engineer</option>
                                                        <option value="hvac_engineer">HVAC Engineer</option>
                                                        <option value="sales_marketing_engineer">Sales/Marketing
                                                            Engineer</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Upload Resume <span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" class="form-control" name="resume" required>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">Message (optional)</label>
                                                    <textarea class="form-control" rows="4" name="message"
                                                        placeholder="Write your message here"></textarea>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn btn-primary px-5">Submit
                                                        Application</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Job Listing 3 -->
                <div class="col-12 col-md-12 wow fadeIn" data-wow-delay="0.4s">
                    <div class="job-listing card p-3 my-4">
                        <div
                            class="d-flex flex-column flex-lg-row justify-content-between align-items-start align-items-lg-center">
                            <div class="mb-3 mb-lg-0">
                                <h5 class="mb-0 text-start">
                                    <a href="#" class="toggle-form text-decoration-none text-dark"
                                        data-bs-toggle="collapse" data-bs-target="#job1-form">
                                        Senior Software Engineer
                                    </a>
                                </h5>
                                <p class="small text-start">Pune, Maharashtra, India</p>
                                <p class="small text-start">08/12/2024</p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-apply-job fw-bold py-2"
                                    style="width: 150px; border: none; border-radius: 5px; transition: background-color 0.3s;">
                                    Apply Now
                                </button>
                            </div>
                        </div>

                        <!-- Application Form -->
                        <div class="apply-form card p-3 mt-5 rounded-0 border-0">
                            <h3>Apply for Senior Software Engineer</h3>
                            <div class="badge bg-secondary rounded-0 mb-2 p-2">EXPERIENCE - 5 TO 7 YEARS</div>
                            <ul class="list-unstyled">
                                <li class="py-1">Leading software development projects and mentoring junior team
                                    members
                                </li>
                                <li class="py-1">Designing and architecting scalable software solutions to meet
                                    client
                                    requirements</li>
                                <li class="py-1">Reviewing and optimizing code to ensure efficiency, quality, and
                                    security</li>
                                <li class="py-1">Collaborating with cross-functional teams to gather requirements
                                    and
                                    deliver solutions</li>
                                <li class="py-1">Troubleshooting and resolving complex technical issues in
                                    production
                                    environments</li>
                                <li class="py-1">Ensuring best practices in software development and recommending
                                    improvements</li>
                                <li class="py-1">Providing technical leadership and guidance on complex projects
                                </li>
                                <li class="py-1">Staying current with new technologies and industry trends to drive
                                    innovation</li>
                            </ul>
                            <div class="container p-0">
                                <div class="card border-0 shadow-sm rounded-0">
                                    <div class="card-body px-2 py-3">
                                        <form action="https://api.web3forms.com/submit" method="POST"
                                            class="px-1 px-lg-3">
                                            <div class="row g-3">
                                                <!-- Hidden Input for Web3Forms Access Key -->
                                                <input type="hidden" name="access_key"
                                                    value="7b32a9fd-f2c6-4a55-98db-92ac1526dedb">

                                                <div class="col-md-6">
                                                    <label class="form-label">Your Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Enter your name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Your Email <span
                                                            class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Enter your email" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Experience (in years) <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="experience"
                                                        placeholder="Enter your experience" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Mobile Number <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="mobile_number"
                                                        placeholder="Enter your mobile number" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="roleDropdown" class="form-label">Choose Your
                                                        Field:<span class="text-danger">*</span></label>
                                                    <select class="form-select" id="roleDropdown" name="role" required>
                                                        <option value="" selected disabled>Select an option</option>
                                                        <option value="junior_software_engineer">Junior Software
                                                            Engineer</option>
                                                        <option value="software_engineer">Software Engineer</option>
                                                        <option value="senior_software_engineer">Senior Software
                                                            Engineer</option>
                                                        <option value="hvac_engineer">HVAC Engineer</option>
                                                        <option value="sales_marketing_engineer">Sales/Marketing
                                                            Engineer</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Upload Resume <span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" class="form-control" name="resume" required>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">Message (optional)</label>
                                                    <textarea class="form-control" rows="4" name="message"
                                                        placeholder="Write your message here"></textarea>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn btn-primary px-5">Submit
                                                        Application</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Job Listing 4 -->
                <div class="col-12 col-md-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class="job-listing card p-3 my-4">
                        <div
                            class="d-flex flex-column flex-lg-row justify-content-between align-items-start align-items-lg-center">
                            <div class="mb-3 mb-lg-0">
                                <h5 class="mb-0 text-start">
                                    <a href="#" class="toggle-form text-decoration-none text-dark"
                                        data-bs-toggle="collapse" data-bs-target="#job1-form">
                                        HVAC Engineer
                                    </a>
                                </h5>
                                <p class="small text-start">Pune, Maharashtra, India</p>
                                <p class="small text-start">12/02/2025</p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-apply-job fw-bold py-2"
                                    style="width: 150px; border: none; border-radius: 5px; transition: background-color 0.3s;">
                                    Apply Now
                                </button>
                            </div>
                        </div>

                        <!-- Application Form -->
                        <div class="apply-form card p-3 mt-5 rounded-0 border-0">
                            <h3>Apply for HVAC Systems Manager</h3>
                            <div class="badge bg-secondary rounded-0 mb-2 p-2">EXPERIENCE - 5 TO 7 YEARS</div>
                            <ul class="list-unstyled">
                                <li class="py-1">Overseeing the installation, operation, and maintenance of HVAC
                                    systems
                                </li>
                                <li class="py-1">Managing and guiding a team of HVAC engineers and technicians</li>
                                <li class="py-1">Ensuring strict adherence to safety protocols and building codes
                                </li>
                                <li class="py-1">Planning and coordinating preventive maintenance schedules for HVAC
                                    systems</li>
                                <li class="py-1">Managing project budgets, cost estimation, and resource allocation
                                </li>
                                <li class="py-1">Reviewing and approving HVAC system designs and installations</li>
                                <li class="py-1">Maintaining effective communication with clients and stakeholders
                                </li>
                                <li class="py-1">Troubleshooting and resolving HVAC system issues to ensure
                                    operational
                                    efficiency</li>
                            </ul>
                            <div class="container p-0">
                                <div class="card border-0 shadow-sm rounded-0">
                                    <div class="card-body px-2 py-3">
                                        <form action="https://api.web3forms.com/submit" method="POST"
                                            class="px-1 px-lg-3">
                                            <div class="row g-3">
                                                <!-- Hidden Input for Web3Forms Access Key -->
                                                <input type="hidden" name="access_key"
                                                    value="7b32a9fd-f2c6-4a55-98db-92ac1526dedb">

                                                <div class="col-md-6">
                                                    <label class="form-label">Your Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Enter your name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Your Email <span
                                                            class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Enter your email" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Experience (in years) <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="experience"
                                                        placeholder="Enter your experience" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Mobile Number <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="mobile_number"
                                                        placeholder="Enter your mobile number" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="roleDropdown" class="form-label">Choose Your
                                                        Field: <span class="text-danger">*</span></label>
                                                    <select class="form-select" id="roleDropdown" name="role" required>
                                                        <option value="" selected disabled>Select an option</option>
                                                        <option value="junior_software_engineer">Junior Software
                                                            Engineer</option>
                                                        <option value="software_engineer">Software Engineer</option>
                                                        <option value="senior_software_engineer">Senior Software
                                                            Engineer</option>
                                                        <option value="hvac_engineer">HVAC Engineer</option>
                                                        <option value="sales_marketing_engineer">Sales/Marketing
                                                            Engineer</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Upload Resume <span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" class="form-control" name="resume" required>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">Message (optional)</label>
                                                    <textarea class="form-control" rows="4" name="message"
                                                        placeholder="Write your message here"></textarea>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn btn-primary px-5">Submit
                                                        Application</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Job Listing 5 -->
                <div class="col-12 col-md-12 wow fadeIn" data-wow-delay="0.6s">
                    <div class="job-listing card p-3 my-4">
                        <div
                            class="d-flex flex-column flex-lg-row justify-content-between align-items-start align-items-lg-center">
                            <div class="mb-3 mb-lg-0">
                                <h5 class="mb-0 text-start">
                                    <a href="#" class="toggle-form text-decoration-none text-dark"
                                        data-bs-toggle="collapse" data-bs-target="#job1-form">
                                        Sales/Marketing Engineer
                                    </a>
                                </h5>
                                <p class="small text-start">Nashik, Maharashtra, India</p>
                                <p class="small text-start">25/01/2025</p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-apply-job fw-bold py-2"
                                    style="width: 150px; border: none; border-radius: 5px; transition: background-color 0.3s;">
                                    Apply Now
                                </button>
                            </div>
                        </div>

                        <!-- Application Form -->
                        <div class="apply-form card p-3 mt-5 rounded-0 border-0">
                            <h3>Apply for Sales/Marketing Engineer</h3>
                            <div class="badge bg-secondary rounded-0 mb-2 p-2">EXPERIENCE - 0 TO 2 YEARS</div>
                            <ul class="list-unstyled">
                                <li class="py-1">Identifying and pursuing new sales opportunities in the HVAC
                                    industry
                                </li>
                                <li class="py-1">Developing and executing marketing strategies to promote HVAC
                                    products
                                    and services</li>
                                <li class="py-1">Building and maintaining strong relationships with clients and
                                    potential customers</li>
                                <li class="py-1">Conducting market research to understand customer needs and
                                    industry
                                    trends</li>
                                <li class="py-1">Collaborating with technical teams to prepare customized HVAC
                                    solutions
                                    for clients</li>
                                <li class="py-1">Negotiating contracts and pricing with clients while ensuring
                                    profitability</li>
                                <li class="py-1">Monitoring and reporting on sales performance and adjusting
                                    strategies
                                    as needed</li>
                                <li class="py-1">Representing the company at industry events, trade shows, and
                                    meetings
                                </li>
                            </ul>
                            <div class="container p-0">
                                <div class="card border-0 shadow-sm rounded-0">
                                    <div class="card-body px-2 py-3">
                                        <form action="https://api.web3forms.com/submit" method="POST"
                                            class="px-1 px-lg-3">
                                            <div class="row g-3">
                                                <!-- Hidden Input for Web3Forms Access Key -->
                                                <input type="hidden" name="access_key"
                                                    value="7b32a9fd-f2c6-4a55-98db-92ac1526dedb">

                                                <div class="col-md-6">
                                                    <label class="form-label">Your Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Enter your name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Your Email <span
                                                            class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Enter your email" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Experience (in years) <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="experience"
                                                        placeholder="Enter your experience" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Mobile Number <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="mobile_number"
                                                        placeholder="Enter your mobile number" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="roleDropdown" class="form-label">Choose Your
                                                        Field: <span class="text-danger">*</span></label>
                                                    <select class="form-select" id="roleDropdown" name="role" required>
                                                        <option value="" selected disabled>Select an option</option>
                                                        <option value="junior_software_engineer">Junior Software
                                                            Engineer</option>
                                                        <option value="software_engineer">Software Engineer</option>
                                                        <option value="senior_software_engineer">Senior Software
                                                            Engineer</option>
                                                        <option value="hvac_engineer">HVAC Engineer</option>
                                                        <option value="sales_marketing_engineer">Sales/Marketing
                                                            Engineer</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Upload Resume <span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" class="form-control" name="resume" required>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">Message (optional)</label>
                                                    <textarea class="form-control" rows="4" name="message"
                                                        placeholder="Write your message here"></textarea>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn btn-primary px-5">Submit
                                                        Application</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>
<!-- End Section -->


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