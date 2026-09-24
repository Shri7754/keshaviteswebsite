@extends('layouts.app')

@section('title', 'ER Shriram Mishra | Founder - Keshav Ites')

@section('content')
    <!-- Founder Spotlight -->
    <div class="container-fluid py-5 founder-spotlight wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Founder Profile</h5>
                <h1 class="mb-0">ER Shriram Mishra</h1>
            </div>

            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="founder-photo-card">
                        <img src="{{ assetImage('1746718230.jpg') }}" alt="ER Shriram Mishra">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="founder-profile-card">
                        <span class="founder-role">Senior Full Stack Developer</span>
                        <h2 class="mb-3">ER Shriram Mishra</h2>
                        <p class="lead mb-4">Results-driven full stack developer with 8 years of experience in PHP,
                            Laravel, Node.js, and React.js, delivering secure and scalable platforms for government, HRMS,
                            healthcare, and SaaS businesses.</p>

                        <div class="founder-stats row g-3 mb-4">
                            <div class="col-md-3 col-6">
                                <div class="founder-stat">
                                    <span>Experience</span>
                                    <strong>8 Years</strong>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="founder-stat">
                                    <span>Education</span>
                                    <strong>B.Tech</strong>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="founder-stat">
                                    <span>Location</span>
                                    <strong>Mumbai</strong>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="founder-stat">
                                    <span>Projects</span>
                                    <strong>40+</strong>
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
    <!-- Founder Spotlight End -->

    <!-- Project Portfolio Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Project Portfolio</h5>
                <h1 class="mb-0">Proven Track Record Across Industries</h1>
            </div>

            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="project-portfolio-card h-100">
                        <div class="portfolio-icon">
                            <i class="fa fa-laptop-code"></i>
                        </div>
                        <h4 class="mb-1">Web & Enterprise Projects</h4>
                        <span class="portfolio-count">40+ Projects Delivered</span>
                        <ul class="feature-list mt-3">
                            <li>HRMS (Human Resource Management Systems)</li>
                            <li>Bombay High Court Case Management System</li>
                            <li>Government Digitalization Initiatives</li>
                            <li>E-Commerce Platforms</li>
                            <li>Adani Group Enterprise Solutions</li>
                            <li>Dalmia Cement Enterprise Systems</li>
                            <li>Pulse Clinic Healthcare Management System</li>
                            <li>And many more government & private sector projects</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="project-portfolio-card h-100">
                        <div class="portfolio-icon">
                            <i class="fa fa-mobile-alt"></i>
                        </div>
                        <h4 class="mb-1">Mobile App Development</h4>
                        <span class="portfolio-count">10+ Apps &middot; iOS & Android</span>
                        <ul class="feature-list mt-3">
                            <li>HRMS Mobile Application</li>
                            <li>Quantaassista Fampilot</li>
                            <li>Indivina <span class="text-danger fw-bold">(Launching Soon)</span></li>
                            <li>Pulse Clinic App</li>
                            <li>And more cross-platform mobile solutions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Portfolio End -->

    <!-- Skills & Expertise Start -->
    <div class="container-fluid py-5 skills-panel-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Technical Expertise</h5>
                <h1 class="mb-0">Skills & Proficiency</h1>
            </div>

            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="skill-item">
                        <div class="skill-head">
                            <span>PHP</span>
                            <span class="skill-percent">95%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-fill" style="--w: 95%; animation-delay: 0.1s;"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-head">
                            <span>Laravel</span>
                            <span class="skill-percent">95%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-fill" style="--w: 95%; animation-delay: 0.2s;"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-head">
                            <span>Node.js</span>
                            <span class="skill-percent">85%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-fill" style="--w: 85%; animation-delay: 0.3s;"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-head">
                            <span>React.js</span>
                            <span class="skill-percent">85%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-fill" style="--w: 85%; animation-delay: 0.4s;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="skill-item">
                        <div class="skill-head">
                            <span>REST APIs</span>
                            <span class="skill-percent">90%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-fill" style="--w: 90%; animation-delay: 0.2s;"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-head">
                            <span>RBAC & Security</span>
                            <span class="skill-percent">88%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-fill" style="--w: 88%; animation-delay: 0.3s;"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-head">
                            <span>CI/CD & DevOps</span>
                            <span class="skill-percent">80%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-fill" style="--w: 80%; animation-delay: 0.4s;"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-head">
                            <span>Database Design</span>
                            <span class="skill-percent">85%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-fill" style="--w: 85%; animation-delay: 0.5s;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skills & Expertise End -->

    <!-- Domain Expertise Marquee Start -->
    <div class="container-fluid py-4 domain-marquee-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="marquee-strip">
            <div class="marquee-track">
                <span>Government Portals</span>
                <span>Judiciary Case Management</span>
                <span>Healthcare Systems</span>
                <span>HRMS Platforms</span>
                <span>SaaS Products</span>
                <span>Secure REST APIs</span>
                <span>Scalable Architecture</span>
                <span>CI/CD Automation</span>
                <span>Government Portals</span>
                <span>Judiciary Case Management</span>
                <span>Healthcare Systems</span>
                <span>HRMS Platforms</span>
                <span>SaaS Products</span>
                <span>Secure REST APIs</span>
                <span>Scalable Architecture</span>
                <span>CI/CD Automation</span>
            </div>
        </div>
    </div>
    <!-- Domain Expertise Marquee End -->
@endsection
