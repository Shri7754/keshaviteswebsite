@extends('layouts.app')

@section('title', 'Sanjay Kumar Yadav | CEO - Keshav Ites')

@section('content')
    <!-- Sanjay Spotlight -->
    <div class="container-fluid py-5 founder-spotlight wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">CEO Profile</h5>
                <h1 class="mb-0">Sanjay Kumar Yadav</h1>
            </div>

            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="founder-photo-card">
                        <img src="{{ assetImage('sanjayprofile.jpeg') }}" alt="Sanjay Kumar Yadav">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="founder-profile-card">
                        <span class="founder-role">Chief Executive Officer &amp; PHP Laravel Developer</span>
                        <h2 class="mb-3">Sanjay Kumar Yadav</h2>
                        <div class="d-flex gap-2 mb-4" aria-label="Sanjay contact links">
                            <a class="btn btn-primary btn-lg-square rounded" href="tel:+918519079856"
                                aria-label="Phone">
                                <i class="fa fa-phone-alt"></i>
                            </a>
                            <a class="btn btn-primary btn-lg-square rounded"
                                href="mailto:sanjaykumarsuman331@gmail.com" aria-label="Email">
                                <i class="fa fa-envelope fw-normal"></i>
                            </a>
                            <a class="btn btn-primary btn-lg-square rounded" href="https://www.facebook.com"
                                target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                                <i class="fab fa-facebook-f fw-normal"></i>
                            </a>
                            <a class="btn btn-primary btn-lg-square rounded" href="https://www.instagram.com"
                                target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                <i class="fab fa-instagram fw-normal"></i>
                            </a>
                            <a class="btn btn-primary btn-lg-square rounded" href="https://www.linkedin.com"
                                target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in fw-normal"></i>
                            </a>
                        </div>
                        <p class="lead mb-4">Results-driven PHP Laravel developer with 7+ years of experience across
                            judiciary, enterprise, and product companies, currently building the Bombay High Court
                            case management platform while leading Keshav Ites as CEO.</p>

                        <div class="founder-stats row g-3 mb-4">
                            <div class="col-md-3 col-6">
                                <div class="founder-stat">
                                    <span>Experience</span>
                                    <strong>7+ Years</strong>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="founder-stat">
                                    <span>Education</span>
                                    <strong>B.E.</strong>
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
                                    <span>Current Role</span>
                                    <strong>Programmer, BHC</strong>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <h4 class="profile-subtitle">Professional Experience</h4>
                                <ul class="feature-list">
                                    <li>Programmer, DataSoft Computer Services &mdash; Bombay High Court (Aug 2024 &ndash; Present)</li>
                                    <li>Associate PHP Developer, 4 Pillars Infotech India Pvt Ltd, Pune</li>
                                    <li>Software Application Support Eng., Akal Information Systems &mdash; District Prosecution Office, Saharsa, Bihar (ICJS Project, MHA)</li>
                                    <li>Junior PHP Developer, Mobilestyx Consulting &amp; Solutions, Mumbai</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4 class="profile-subtitle">Education</h4>
                                <ul class="feature-list">
                                    <li>B.E. (RGPV University) &ndash; Bansal Institute of Research &amp; Technology, Bhopal, MP</li>
                                    <li>NPTEL Certification &ndash; Foundation of Cloud, IoT, Edge &amp; ML (8 weeks)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sanjay Spotlight End -->

    <!-- Project Portfolio Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Project Portfolio</h5>
                <h1 class="mb-0">Judiciary &amp; Enterprise Project Experience</h1>
            </div>

            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="project-portfolio-card h-100">
                        <div class="portfolio-icon">
                            <i class="fa fa-gavel"></i>
                        </div>
                        <h4 class="mb-1">Bombay High Court Case Management</h4>
                        <span class="portfolio-count">Judiciary &middot; ICJS Ecosystem</span>
                        <ul class="feature-list mt-3">
                            <li>Bundle creation &amp; matter management</li>
                            <li>Bundle dispatch &amp; scanning process</li>
                            <li>OCR &amp; bookmarking process</li>
                            <li>File checking &amp; quality verification</li>
                            <li>Digital signature &amp; file locking</li>
                            <li>Matter display in BHC Interact for Lordships/Judges</li>
                            <li>Stage-wise &amp; bundle-wise report generation</li>
                            <li>SQL query optimization &amp; REST API development</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="project-portfolio-card h-100">
                        <div class="portfolio-icon">
                            <i class="fa fa-laptop-code"></i>
                        </div>
                        <h4 class="mb-1">Enterprise &amp; Product Development</h4>
                        <span class="portfolio-count">4+ Organizations &middot; PHP, Python &amp; React</span>
                        <ul class="feature-list mt-3">
                            <li>Payment gateway integration (RazorPay) with Laravel</li>
                            <li>Laravel email delivery via Gmail SMTP</li>
                            <li>Python-based web applications &amp; REST APIs</li>
                            <li>Interactive UIs built with React components</li>
                            <li>Secure user authentication &amp; authorization</li>
                            <li>Software application support for government systems (MHA)</li>
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
                <h1 class="mb-0">Skills &amp; Proficiency</h1>
            </div>

            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="skill-item">
                        <div class="skill-head">
                            <span>PHP (CodeIgniter, Laravel, Yii)</span>
                            <span class="skill-percent">92%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-fill" style="--w: 92%; animation-delay: 0.1s;"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-head">
                            <span>MySQL &amp; PostgreSQL</span>
                            <span class="skill-percent">88%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-fill" style="--w: 88%; animation-delay: 0.2s;"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-head">
                            <span>HTML5 &amp; CSS3</span>
                            <span class="skill-percent">90%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-fill" style="--w: 90%; animation-delay: 0.3s;"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-head">
                            <span>JavaScript</span>
                            <span class="skill-percent">82%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-fill" style="--w: 82%; animation-delay: 0.4s;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="skill-item">
                        <div class="skill-head">
                            <span>Python</span>
                            <span class="skill-percent">75%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-fill" style="--w: 75%; animation-delay: 0.2s;"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-head">
                            <span>React</span>
                            <span class="skill-percent">70%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-fill" style="--w: 70%; animation-delay: 0.3s;"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-head">
                            <span>Bootstrap</span>
                            <span class="skill-percent">85%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-fill" style="--w: 85%; animation-delay: 0.4s;"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-head">
                            <span>Microsoft Power BI</span>
                            <span class="skill-percent">65%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-fill" style="--w: 65%; animation-delay: 0.5s;"></div>
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
                <span>Judiciary Case Management</span>
                <span>PHP &amp; Laravel</span>
                <span>REST API Development</span>
                <span>MySQL &amp; PostgreSQL</span>
                <span>OCR &amp; Digital Signatures</span>
                <span>Python Web Applications</span>
                <span>React Components</span>
                <span>Payment Gateway Integration</span>
                <span>Judiciary Case Management</span>
                <span>PHP &amp; Laravel</span>
                <span>REST API Development</span>
                <span>MySQL &amp; PostgreSQL</span>
                <span>OCR &amp; Digital Signatures</span>
                <span>Python Web Applications</span>
                <span>React Components</span>
                <span>Payment Gateway Integration</span>
            </div>
        </div>
    </div>
    <!-- Domain Expertise Marquee End -->
@endsection
