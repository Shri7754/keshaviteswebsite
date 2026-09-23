@extends('layouts.app')

@section('title', 'About Us | Keshav Ites - Software Development Experts')

@section('content')
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Search about our company...">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Keshav Ites</h5>
                        <h1 class="mb-0">Pioneering Digital Innovation Since 2014</h1>
                    </div>
                    <p class="mb-4">Keshav Ites is a leading software development and IT services company based in Mumbai,
                        India. For over a decade, we have been at the forefront of digital innovation, helping businesses of
                        all sizes transform their operations through custom software solutions, web development, and
                        strategic technology consulting.</p>

                    <p class="mb-4">Our mission is to empower businesses with intelligent, scalable, and secure technology
                        solutions that drive growth and increase operational efficiency. We combine technical expertise with
                        business acumen to deliver solutions that not only meet today's requirements but anticipate
                        tomorrow's challenges.</p>

                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Expert Development Team</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Proven Track Record</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Technical Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Competitive Pricing</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to discuss your project</h5>
                            <h4 class="text-primary mb-0">+91 7754908252</h4>
                        </div>
                    </div>
                    <a href="/contact" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Schedule
                        Consultation</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="{{ asset('assets/img/about.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Why Keshav Ites Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Expertise</h5>
                <h1 class="mb-0">Why Choose Keshav Ites?</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.2s">
                    <h4 class="mb-3">Over 10 Years of Excellence</h4>
                    <p class="mb-3">Since our inception in 2014, we have successfully delivered more than 1000 projects
                        across diverse industries including healthcare, e-commerce, finance, education, and more.</p>
                    <ul class="list-unstyled mb-4">
                        <li><i class="fa fa-check text-primary me-2"></i>500+ Satisfied Clients</li>
                        <li><i class="fa fa-check text-primary me-2"></i>1000+ Projects Completed</li>
                        <li><i class="fa fa-check text-primary me-2"></i>15+ Industry Awards</li>
                        <li><i class="fa fa-check text-primary me-2"></i>50+ Dedicated Team Members</li>
                    </ul>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.4s">
                    <h4 class="mb-3">Cutting-Edge Technology Stack</h4>
                    <p class="mb-3">We leverage the latest technologies and frameworks including Laravel, Python, React,
                        Vue.js, Node.js, AWS, and Azure to build robust, scalable solutions.</p>
                    <ul class="list-unstyled mb-4">
                        <li><i class="fa fa-check text-primary me-2"></i>Modern Web Frameworks</li>
                        <li><i class="fa fa-check text-primary me-2"></i>Cloud Infrastructure</li>
                        <li><i class="fa fa-check text-primary me-2"></i>Mobile Technologies</li>
                        <li><i class="fa fa-check text-primary me-2"></i>AI & Machine Learning</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Keshav Ites End -->

    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">TEAM MEMBERS</h5>
                <h1 class="mb-0">Expert Professionals Ready to Help Your Business</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <a href="#founder-profile-details" class="team-member-link">
                        <div class="team-item team-card-circle bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('assets/img/1746718230.jpg') }}"
                                    alt="ER Shriram Mishra">
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.twitter.com"
                                        target="_blank"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href="https://www.facebook.com" target="_blank"><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href="https://www.instagram.com" target="_blank"><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                        href="https://www.linkedin.com" target="_blank"><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">ER Shriram Mishra</h4>
                                <p class="text-uppercase m-0">Founder</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item team-card-portrait bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/sanjayprofile.jpeg') }}"
                                alt="Sanjay Kumar Yadav">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.twitter.com"
                                    target="_blank"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.facebook.com"
                                    target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.instagram.com"
                                    target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.linkedin.com"
                                    target="_blank"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Sanjay Kumar Yadav</h4>
                            <p class="text-uppercase m-0">CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item team-card-placeholder bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/WIN_20260121_20_24_31_Pro.jpg') }}"
                                alt="Work in progress">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.twitter.com"
                                    target="_blank"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.facebook.com"
                                    target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.instagram.com"
                                    target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.linkedin.com"
                                    target="_blank"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Work in progress</h4>
                            <p class="text-uppercase m-0">Work in progress</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Founder Spotlight -->
    <div class="container-fluid py-5 founder-spotlight wow fadeInUp" data-wow-delay="0.1s" id="founder-profile-details">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Founder Profile</h5>
                <h1 class="mb-0">ER Shriram Mishra</h1>
            </div>

            <div class="marquee-strip mb-5">
                <div class="marquee-track">
                    <span>PHP</span>
                    <span>Laravel</span>
                    <span>Node.js</span>
                    <span>React.js</span>
                    <span>REST APIs</span>
                    <span>RBAC</span>
                    <span>CI/CD</span>
                    <span>HRMS</span>
                    <span>Healthcare Systems</span>
                    <span>Government Portals</span>
                    <span>Full Stack Development</span>
                    <span>PHP</span>
                    <span>Laravel</span>
                    <span>Node.js</span>
                    <span>React.js</span>
                    <span>REST APIs</span>
                    <span>RBAC</span>
                    <span>CI/CD</span>
                    <span>HRMS</span>
                    <span>Healthcare Systems</span>
                    <span>Government Portals</span>
                    <span>Full Stack Development</span>
                </div>
            </div>

            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="founder-photo-card">
                        <img src="{{ asset('assets/img/1746718230.jpg') }}" alt="ER Shriram Mishra">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="founder-profile-card">
                        <span class="founder-role">Senior Full Stack Developer</span>
                        <h2 class="mb-3">ER Shriram Mishra</h2>
                        <p class="lead mb-4">Results-driven full stack developer with 5+ years of experience in PHP,
                            Laravel, Node.js, and React.js, delivering secure and scalable platforms for government, HRMS,
                            healthcare, and SaaS businesses.</p>

                        <div class="founder-stats row g-3 mb-4">
                            <div class="col-md-4">
                                <div class="founder-stat">
                                    <span>Experience</span>
                                    <strong>5+ Years</strong>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="founder-stat">
                                    <span>Education</span>
                                    <strong>B.Tech</strong>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="founder-stat">
                                    <span>Location</span>
                                    <strong>Mumbai</strong>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <h4 class="profile-subtitle">Professional Experience</h4>
                                <ul class="feature-list">
                                    <li>Senior Software Engineer at SilverTouch Technology</li>
                                    <li>Government and judiciary portal development with Laravel</li>
                                    <li>Bombay High Court Case Management System</li>
                                    <li>RBAC, workflow automation, secure API implementation</li>
                                    <li>CI/CD deployment and performance tuning</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4 class="profile-subtitle">Education</h4>
                                <ul class="feature-list">
                                    <li>B.Tech (Computer Science) – Lucknow AKTU University</li>
                                    <li>Intermediate – ST Joseph School</li>
                                    <li>High School – ST Thomas School</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="{{ asset('assets/img/vendor-1.jpg') }}" alt="">
                    <img src="{{ asset('assets/img/vendor-2.jpg') }}" alt="">
                    <img src="{{ asset('assets/img/vendor-3.jpg') }}" alt="">
                    <img src="{{ asset('assets/img/vendor-4.jpg') }}" alt="">
                    <img src="{{ asset('assets/img/vendor-5.jpg') }}" alt="">
                    <img src="{{ asset('assets/img/vendor-6.jpg') }}" alt="">
                    <img src="{{ asset('assets/img/vendor-7.jpg') }}" alt="">
                    <img src="{{ asset('assets/img/vendor-8.jpg') }}" alt="">
                    <img src="{{ asset('assets/img/vendor-9.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
@endsection
