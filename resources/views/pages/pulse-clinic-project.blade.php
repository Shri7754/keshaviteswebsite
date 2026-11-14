@extends('layouts.app')

@section('title', 'Web Development Case Studies | Pulse Clinic, WIS HRMS & MedleyX - Keshav Ites')

@section('description', 'See how Keshav Ites builds real products - Pulse Clinic, a multi-specialty clinic website, WIS HRMS, a role-based Human Resource Management System, and MedleyX, an online pharmacy and healthcare platform.')

@section('content')
    <!-- Case Study Hero Start -->
    <div class="container-fluid py-5 case-study-hero wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7">
                    <span class="case-study-badge">Case Study 01 &middot; Web Development</span>
                    <h1 class="mb-3">Pulse Clinic &mdash; Multi-Specialty Clinic Website</h1>
                    <p class="lead mb-4">
                        A complete healthcare website built by <strong class="text-white">Keshav Ites</strong> for
                        Pulse Clinic, New Delhi &mdash; covering online appointment booking, doctor &amp; treatment
                        showcase, an AI chat assistant, photo gallery, and social media integration, all wrapped in a
                        fast, mobile-friendly design.
                    </p>

                    <div class="case-study-meta mb-4">
                        <div class="case-study-meta-item">
                            <span>Client</span>
                            <strong>Pulse Clinic, New Delhi</strong>
                        </div>
                        <div class="case-study-meta-item">
                            <span>Industry</span>
                            <strong>Healthcare</strong>
                        </div>
                        <div class="case-study-meta-item">
                            <span>Built By</span>
                            <strong>Keshav Ites</strong>
                        </div>
                        <div class="case-study-meta-item">
                            <span>Status</span>
                            <strong><span class="case-study-live-dot"></span>Live</strong>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="https://pulsemultispeciality.in/" target="_blank" rel="noopener noreferrer"
                            class="btn btn-primary py-3 px-4">
                            <i class="fa fa-external-link-alt me-2"></i>Visit Live Website
                        </a>
                        <a href="/contact" class="btn btn-outline-light py-3 px-4">
                            <i class="fa fa-comments me-2"></i>Get a Website Like This
                        </a>
                        <a href="/contact?interest=pulse-clinic" class="btn case-study-buy-btn py-3 px-4">
                            <i class="fa fa-bag-shopping me-2"></i>Buy This Solution
                        </a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="browser-mockup">
                        <div class="browser-mockup-bar">
                            <span></span><span></span><span></span>
                            <div class="browser-mockup-url">pulsemultispeciality.in</div>
                        </div>
                        <img src="{{ assetImage('portfolio/pulse-clinic-home.jpg') }}"
                            alt="Pulse Clinic homepage - laparoscopic surgery banner">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Study Hero End -->

    <!-- Tech / Feature Marquee Start -->
    <div class="container-fluid py-4 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="marquee-strip">
                <div class="marquee-track">
                    <span>Online Appointment Booking</span>
                    <span>AI Chat Assistant</span>
                    <span>Doctor Profiles</span>
                    <span>Treatment Showcase</span>
                    <span>Photo &amp; Certificate Gallery</span>
                    <span>WhatsApp Integration</span>
                    <span>Instagram &amp; Facebook Integration</span>
                    <span>Fully Responsive Design</span>
                    <span>SEO Optimized</span>
                    <span>Laravel Powered</span>
                    <span>Online Appointment Booking</span>
                    <span>AI Chat Assistant</span>
                    <span>Doctor Profiles</span>
                    <span>Treatment Showcase</span>
                    <span>Photo &amp; Certificate Gallery</span>
                    <span>WhatsApp Integration</span>
                    <span>Instagram &amp; Facebook Integration</span>
                    <span>Fully Responsive Design</span>
                    <span>SEO Optimized</span>
                    <span>Laravel Powered</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Tech / Feature Marquee End -->

    <!-- Overview + Requirements Start -->
    <div class="container-fluid py-5 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="case-study-panel">
                        <h4 class="mb-3"><i class="fa fa-info-circle text-primary me-2"></i>What This Project Is</h4>
                        <p>
                            Pulse Clinic Medi &amp; Surgi Care is a multi-speciality clinic in New Delhi led by
                            Dr. Shankar Kumar Gupta and Dr. Neha Gupta. They needed a professional online presence
                            that could build patient trust, explain their surgical specialities, and make it easy for
                            patients to book an appointment without calling the clinic.
                        </p>
                        <p class="mb-0">
                            Keshav Ites designed and developed the complete website &mdash; from the homepage and
                            treatment pages to the appointment system and the built-in AI assistant that answers
                            common patient questions instantly.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="case-study-panel">
                        <h4 class="mb-3"><i class="fa fa-clipboard-list text-primary me-2"></i>Client Requirements</h4>
                        <ul class="feature-list-dark">
                            <li>A trustworthy, professional design for a healthcare brand</li>
                            <li>Online, hassle-free appointment booking for patients</li>
                            <li>Dedicated pages for treatments, doctors, and surgeries</li>
                            <li>An always-available chat assistant to answer patient queries</li>
                            <li>Gallery to display the clinic, certifications, and credentials</li>
                            <li>Direct links to Instagram, Facebook, and WhatsApp for follow-ups</li>
                            <li>Fully responsive on mobile, since most patients search on phone</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Overview + Requirements End -->

    <!-- Screenshots Start -->
    <div class="container-fluid py-5 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Live Website Preview</h5>
                <h1 class="mb-0 text-white">A Look Inside Pulse Clinic</h1>
                <p class="mt-3" style="color:#a9c3de;">Real screenshots captured from the live, deployed website.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="browser-mockup">
                        <div class="browser-mockup-bar">
                            <span></span><span></span><span></span>
                            <div class="browser-mockup-url">pulsemultispeciality.in</div>
                        </div>
                        <img src="{{ assetImage('portfolio/pulse-clinic-home.jpg') }}"
                            alt="Pulse Clinic homepage hero banner with laparoscopic surgery robot">
                        <div class="browser-mockup-caption">
                            <strong>Homepage</strong>
                            <span>Animated hero banner highlighting advanced laparoscopic &amp; robotic surgery.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="browser-mockup">
                        <div class="browser-mockup-bar">
                            <span></span><span></span><span></span>
                            <div class="browser-mockup-url">pulsemultispeciality.in/#about</div>
                        </div>
                        <img src="{{ assetImage('portfolio/pulse-clinic-about.jpg') }}"
                            alt="Pulse Clinic About Us section with doctor credentials and social links ribbon">
                        <div class="browser-mockup-caption">
                            <strong>About Us</strong>
                            <span>Doctor credentials, clinic photo, and a live social-follow marquee ribbon.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="browser-mockup">
                        <div class="browser-mockup-bar">
                            <span></span><span></span><span></span>
                            <div class="browser-mockup-url">pulsemultispeciality.in/treatments</div>
                        </div>
                        <img src="{{ assetImage('portfolio/pulse-clinic-treatments.jpg') }}"
                            alt="Pulse Clinic featured treatments section showing surgical procedures">
                        <div class="browser-mockup-caption">
                            <strong>Featured Treatments</strong>
                            <span>Bariatric surgery, liposuction, and hernia repair presented with real photos.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="browser-mockup">
                        <div class="browser-mockup-bar">
                            <span></span><span></span><span></span>
                            <div class="browser-mockup-url">pulsemultispeciality.in/gallery</div>
                        </div>
                        <img src="{{ assetImage('portfolio/pulse-clinic-gallery.jpg') }}"
                            alt="Pulse Clinic gallery grid with clinic photos and medical certificates">
                        <div class="browser-mockup-caption">
                            <strong>Gallery</strong>
                            <span>Clinic interiors, signage, and verified medical certifications in one grid.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Screenshots End -->

    <!-- What It Can Do Start -->
    <div class="container-fluid py-5 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Capabilities</h5>
                <h1 class="mb-0 text-white">What the Website Can Do</h1>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-calendar-check text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Online Appointment Booking</h4>
                        <p class="mb-0">Patients book a consultation in a few clicks, without calling the clinic.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-robot text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>AI Chat Assistant</h4>
                        <p class="mb-0">Answers FAQs, shares available slots, and connects patients to WhatsApp
                            or a call instantly.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-user-md text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Doctor &amp; Treatment Pages</h4>
                        <p class="mb-0">Dedicated pages build trust by showcasing qualifications and specialities.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-images text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Gallery &amp; Certifications</h4>
                        <p class="mb-0">Clinic photos and verified medical certificates build patient confidence.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-share-alt text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Social Integration</h4>
                        <p class="mb-0">Direct links and QR codes for Instagram and Facebook keep patients engaged.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-mobile-alt text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Fully Responsive</h4>
                        <p class="mb-0">Looks and works perfectly on mobile, tablet, and desktop screens.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- What It Can Do End -->

    <!-- Case Study 1 Divider End -->

    <!-- Case Study 2 Divider Start -->
    <div class="container-fluid pt-5 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="case-study-divider">
                <div class="case-study-divider-num">02</div>
                <div>
                    <h2 class="mb-0">WIS HRMS &mdash; Human Resource Management System</h2>
                    <p>Case study &middot; Web development &amp; admin portal</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Study 2 Divider End -->

    <!-- Case Study 2 Intro Start -->
    <div class="container-fluid pb-5 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7">
                    <span class="case-study-wip-banner mb-3"><i class="fa fa-tools me-1"></i> Actively in
                        Development</span>
                    <p class="lead mb-4 mt-3">
                        A complete Human Resource Management System (HRMS) built by
                        <strong class="text-white">Keshav Ites</strong> for <strong class="text-white">WIS
                            Technosavvy Pvt Ltd</strong> &mdash; covering role-based admin control, employee &amp;
                        team management, attendance tracking, and HR project tracking. The admin portal is live and
                        the web UI and mobile app are currently being built out.
                    </p>

                    <div class="case-study-status-row mb-4">
                        <div class="case-study-status-pill is-live">
                            <span class="case-study-live-dot"></span>Admin Portal <strong>Live</strong>
                        </div>
                        <div class="case-study-status-pill is-wip">
                            <span class="case-study-wip-dot"></span>Web UI <strong>Work in Progress</strong>
                        </div>
                        <div class="case-study-status-pill is-wip">
                            <span class="case-study-wip-dot"></span>Mobile App <strong>Work in Progress</strong>
                        </div>
                    </div>

                    <div class="case-study-meta mb-4">
                        <div class="case-study-meta-item">
                            <span>Client</span>
                            <strong>WIS Technosavvy Pvt Ltd</strong>
                        </div>
                        <div class="case-study-meta-item">
                            <span>Industry</span>
                            <strong>HR Tech</strong>
                        </div>
                        <div class="case-study-meta-item">
                            <span>Built By</span>
                            <strong>Keshav Ites</strong>
                        </div>
                        <div class="case-study-meta-item">
                            <span>Status</span>
                            <strong><span class="case-study-wip-dot"></span>In Progress</strong>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="https://hrmwts.wtsindia.co.in/" target="_blank" rel="noopener noreferrer"
                            class="btn btn-primary py-3 px-4">
                            <i class="fa fa-external-link-alt me-2"></i>Visit Live Portal
                        </a>
                        <a href="/contact" class="btn btn-outline-light py-3 px-4">
                            <i class="fa fa-comments me-2"></i>Get an HRMS Like This
                        </a>
                        <a href="/contact?interest=wis-hrms" class="btn case-study-buy-btn py-3 px-4">
                            <i class="fa fa-bag-shopping me-2"></i>Buy This Solution
                        </a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="browser-mockup">
                        <div class="browser-mockup-bar">
                            <span></span><span></span><span></span>
                            <div class="browser-mockup-url">hrmwts.wtsindia.co.in</div>
                        </div>
                        <img src="{{ assetImage('portfolio/wis-hrms-login.jpg') }}"
                            alt="WIS HRMS role-based login screen">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Study 2 Intro End -->

    <!-- Case Study 2 Marquee Start -->
    <div class="container-fluid py-4 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="marquee-strip">
                <div class="marquee-track">
                    <span>Role-Based Admin Access</span>
                    <span>Employee Management</span>
                    <span>Team Management</span>
                    <span>Attendance Tracking</span>
                    <span>HR Project Tracking</span>
                    <span>Manager Directory</span>
                    <span>Attendance Analytics</span>
                    <span>Mobile App &middot; Coming Soon</span>
                    <span>Laravel Powered</span>
                    <span>Role-Based Admin Access</span>
                    <span>Employee Management</span>
                    <span>Team Management</span>
                    <span>Attendance Tracking</span>
                    <span>HR Project Tracking</span>
                    <span>Manager Directory</span>
                    <span>Attendance Analytics</span>
                    <span>Mobile App &middot; Coming Soon</span>
                    <span>Laravel Powered</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Study 2 Marquee End -->

    <!-- Case Study 2 Overview + Requirements Start -->
    <div class="container-fluid py-5 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="case-study-panel">
                        <h4 class="mb-3"><i class="fa fa-info-circle text-primary me-2"></i>What This Project Is</h4>
                        <p>
                            WIS Technosavvy Pvt Ltd needed an internal HRMS to manage administrators, HR staff, and
                            managers from one portal &mdash; instead of tracking people, attendance, and HR projects
                            across spreadsheets.
                        </p>
                        <p class="mb-0">
                            Keshav Ites is building the complete system: a secure role-based admin portal (Admin, HR,
                            Manager, Salary Process) is already live, while the employee/manager-facing web
                            dashboard and a companion mobile app are in active development.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="case-study-panel">
                        <h4 class="mb-3"><i class="fa fa-clipboard-list text-primary me-2"></i>Client Requirements
                        </h4>
                        <ul class="feature-list-dark">
                            <li>Role-based logins for Admin, HR, and Managers</li>
                            <li>A manager directory with add / edit / delete access control</li>
                            <li>Employee and team management with performance tracking</li>
                            <li>Attendance tracking with daily, weekly, and trend analytics</li>
                            <li>HR project tracking for onboarding, reviews, and training</li>
                            <li>A salary process module built into the same portal</li>
                            <li>A dedicated mobile app for on-the-go access (in progress)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Study 2 Overview + Requirements End -->

    <!-- Case Study 2 Screenshots Start -->
    <div class="container-fluid py-5 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Live &amp; In-Progress Preview</h5>
                <h1 class="mb-0 text-white">A Look Inside WIS HRMS</h1>
                <p class="mt-3" style="color:#a9c3de;">Screenshots from the live admin portal and the web dashboard
                    currently under development.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="browser-mockup">
                        <div class="browser-mockup-bar">
                            <span></span><span></span><span></span>
                            <div class="browser-mockup-url">hrmwts.wtsindia.co.in</div>
                        </div>
                        <img src="{{ assetImage('portfolio/wis-hrms-login.jpg') }}"
                            alt="WIS HRMS role-based login screen for Admin, HR and Manager">
                        <div class="browser-mockup-caption">
                            <strong>Login Portal</strong>
                            <span>Secure, role-based login screen for Admin, HR, and Manager users.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="browser-mockup">
                        <div class="browser-mockup-bar">
                            <span></span><span></span><span></span>
                            <div class="browser-mockup-url">hrmwts.wtsindia.co.in/admin/managers</div>
                        </div>
                        <img src="{{ assetImage('portfolio/wis-hrms-admin-managers.jpg') }}"
                            alt="WIS HRMS admin manager directory panel">
                        <div class="browser-mockup-caption">
                            <strong>Admin &mdash; Manager Directory</strong>
                            <span>Add, edit, and manage manager accounts and access from one place.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="browser-mockup">
                        <div class="browser-mockup-bar">
                            <span></span><span></span><span></span>
                            <div class="browser-mockup-url">hrmwts.wtsindia.co.in/teams</div>
                        </div>
                        <img src="{{ assetImage('portfolio/wis-hrms-team-management.jpg') }}"
                            alt="WIS HRMS team management dashboard">
                        <div class="browser-mockup-caption">
                            <strong>Team Management</strong>
                            <span>Organize company teams and track leads, members, and performance.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="browser-mockup">
                        <div class="browser-mockup-bar">
                            <span></span><span></span><span></span>
                            <div class="browser-mockup-url">hrmwts.wtsindia.co.in/projects</div>
                        </div>
                        <img src="{{ assetImage('portfolio/wis-hrms-projects.jpg') }}"
                            alt="WIS HRMS HR projects tracking dashboard">
                        <div class="browser-mockup-caption">
                            <strong>HR Projects</strong>
                            <span>Track onboarding, performance reviews, and training with live progress bars.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="browser-mockup">
                        <div class="browser-mockup-bar">
                            <span></span><span></span><span></span>
                            <div class="browser-mockup-url">hrmwts.wtsindia.co.in/attendance</div>
                        </div>
                        <img src="{{ assetImage('portfolio/wis-hrms-attendance-overview.jpg') }}"
                            alt="WIS HRMS attendance tracking overview with clock in and clock out">
                        <div class="browser-mockup-caption">
                            <strong>Attendance Tracking</strong>
                            <span>Quick clock in/out, daily overview, and weekly performance summary.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="browser-mockup">
                        <div class="browser-mockup-bar">
                            <span></span><span></span><span></span>
                            <div class="browser-mockup-url">hrmwts.wtsindia.co.in/attendance/trend</div>
                        </div>
                        <img src="{{ assetImage('portfolio/wis-hrms-attendance-trend.jpg') }}"
                            alt="WIS HRMS weekly attendance trend analytics chart">
                        <div class="browser-mockup-caption">
                            <strong>Attendance Analytics</strong>
                            <span>Weekly present / absent / late trends visualized for quick insights.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Study 2 Screenshots End -->

    <!-- Case Study 2 Capabilities Start -->
    <div class="container-fluid py-5 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Capabilities</h5>
                <h1 class="mb-0 text-white">What WIS HRMS Can Do</h1>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-user-shield text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Role-Based Access</h4>
                        <p class="mb-0">Separate secure logins for Admin, HR, and Manager roles.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-users text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Employee &amp; Team Management</h4>
                        <p class="mb-0">Organize employees into teams with leads, members, and performance scores.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-chart-line text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Attendance &amp; Analytics</h4>
                        <p class="mb-0">Clock in/out, daily summaries, and weekly attendance trend charts.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-project-diagram text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>HR Project Tracking</h4>
                        <p class="mb-0">Track onboarding, reviews, and training initiatives with progress bars.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-address-book text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Manager Directory</h4>
                        <p class="mb-0">Central directory to add, edit, and manage manager access.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-mobile-alt text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Mobile App <span class="case-study-wip-banner" style="font-size:0.65rem; padding:4px 10px; margin-left:6px;">Coming Soon</span>
                        </h4>
                        <p class="mb-0">A companion mobile app for on-the-go HR access is in development.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Study 2 Capabilities End -->

    <!-- Case Study 3 Divider Start -->
    <div class="container-fluid pt-5 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="case-study-divider">
                <div class="case-study-divider-num">03</div>
                <div>
                    <h2 class="mb-0">MedleyX &mdash; Online Pharmacy &amp; Healthcare Platform</h2>
                    <p>Case study &middot; Web development &amp; admin dashboard</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Study 3 Divider End -->

    <!-- Case Study 3 Intro Start -->
    <div class="container-fluid pb-5 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7">
                    <span class="case-study-wip-banner mb-3"><i class="fa fa-tools me-1"></i> Actively in
                        Development &middot; Domain Coming Soon</span>
                    <p class="lead mb-4 mt-3">
                        An online pharmacy and healthcare platform built by
                        <strong class="text-white">Keshav Ites</strong> for <strong class="text-white">Shivratri
                            Medical Store (MedleyX)</strong>, Mirzapur, UP &mdash; letting customers order medicines
                        and Ayurveda products, consult doctors, upload prescriptions, and get instant AI chat
                        support, backed by a full admin dashboard for inventory and orders.
                    </p>

                    <div class="case-study-status-row mb-4">
                        <div class="case-study-status-pill is-wip">
                            <span class="case-study-wip-dot"></span>Website <strong>Work in Progress</strong>
                        </div>
                        <div class="case-study-status-pill is-wip">
                            <span class="case-study-wip-dot"></span>Admin Dashboard <strong>Work in Progress</strong>
                        </div>
                        <div class="case-study-status-pill is-wip">
                            <span class="case-study-wip-dot"></span>Live Domain <strong>Coming Soon</strong>
                        </div>
                    </div>

                    <div class="case-study-meta mb-4">
                        <div class="case-study-meta-item">
                            <span>Client</span>
                            <strong>Shivratri Medical Store</strong>
                        </div>
                        <div class="case-study-meta-item">
                            <span>Industry</span>
                            <strong>Pharmacy &amp; Healthcare</strong>
                        </div>
                        <div class="case-study-meta-item">
                            <span>Built By</span>
                            <strong>Keshav Ites</strong>
                        </div>
                        <div class="case-study-meta-item">
                            <span>Status</span>
                            <strong><span class="case-study-wip-dot"></span>In Progress</strong>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="/contact" class="btn btn-outline-light py-3 px-4">
                            <i class="fa fa-comments me-2"></i>Get a Website Like This
                        </a>
                        <a href="/contact?interest=medleyx" class="btn case-study-buy-btn py-3 px-4">
                            <i class="fa fa-bag-shopping me-2"></i>Buy This Solution
                        </a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="browser-mockup">
                        <div class="browser-mockup-bar">
                            <span></span><span></span><span></span>
                            <div class="browser-mockup-url">localhost:8000 &middot; staging</div>
                        </div>
                        <img src="{{ assetImage('portfolio/medleyx-home.jpg') }}"
                            alt="MedleyX homepage - order medicines and upload prescription">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Study 3 Intro End -->

    <!-- Case Study 3 Marquee Start -->
    <div class="container-fluid py-4 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="marquee-strip">
                <div class="marquee-track">
                    <span>Order Medicines &amp; Ayurveda</span>
                    <span>Doctor Consultations</span>
                    <span>Prescription Upload</span>
                    <span>Smart Medicine Search</span>
                    <span>AI Support Chat</span>
                    <span>OTP-Based Secure Login</span>
                    <span>Admin Inventory Dashboard</span>
                    <span>Trusted Brand Partners</span>
                    <span>Laravel Powered</span>
                    <span>Order Medicines &amp; Ayurveda</span>
                    <span>Doctor Consultations</span>
                    <span>Prescription Upload</span>
                    <span>Smart Medicine Search</span>
                    <span>AI Support Chat</span>
                    <span>OTP-Based Secure Login</span>
                    <span>Admin Inventory Dashboard</span>
                    <span>Trusted Brand Partners</span>
                    <span>Laravel Powered</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Study 3 Marquee End -->

    <!-- Case Study 3 Overview + Requirements Start -->
    <div class="container-fluid py-5 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="case-study-panel">
                        <h4 class="mb-3"><i class="fa fa-info-circle text-primary me-2"></i>What This Project Is</h4>
                        <p>
                            Shivratri Medical Store, Mirzapur wanted to take their pharmacy online as
                            <strong class="text-white">MedleyX</strong> &mdash; a complete healthcare companion
                            where customers can order medicines and Ayurveda products, book doctor consultations,
                            and get support instantly instead of visiting the store in person.
                        </p>
                        <p class="mb-0">
                            Keshav Ites is building the full platform end-to-end, including the customer-facing
                            website and an admin dashboard for inventory and order management. The project is
                            currently in a staging environment while a live domain is being finalized.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="case-study-panel">
                        <h4 class="mb-3"><i class="fa fa-clipboard-list text-primary me-2"></i>Client Requirements
                        </h4>
                        <ul class="feature-list-dark">
                            <li>Online ordering for medicines and Ayurveda products</li>
                            <li>Prescription upload with pharmacist follow-up</li>
                            <li>Doctor consultation booking for chronic &amp; cancer care plans</li>
                            <li>Fast, instant medicine search with live pricing</li>
                            <li>Secure OTP-based signup and login</li>
                            <li>AI-powered chat support for order and medicine queries</li>
                            <li>An admin dashboard to track inventory, stock, and orders</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Study 3 Overview + Requirements End -->

    <!-- Case Study 3 Screenshots Start -->
    <div class="container-fluid py-5 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Work in Progress Preview</h5>
                <h1 class="mb-0 text-white">A Look Inside MedleyX</h1>
                <p class="mt-3" style="color:#a9c3de;">Screenshots from the staging build, currently running ahead
                    of the live domain launch.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="browser-mockup">
                        <div class="browser-mockup-bar">
                            <span></span><span></span><span></span>
                            <div class="browser-mockup-url">localhost:8000</div>
                        </div>
                        <img src="{{ assetImage('portfolio/medleyx-home.jpg') }}"
                            alt="MedleyX homepage with medicine search and upload prescription">
                        <div class="browser-mockup-caption">
                            <strong>Homepage</strong>
                            <span>Search medicines, upload a prescription, or order via call in one screen.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="browser-mockup">
                        <div class="browser-mockup-bar">
                            <span></span><span></span><span></span>
                            <div class="browser-mockup-url">localhost:8000/signup</div>
                        </div>
                        <img src="{{ assetImage('portfolio/medleyx-signup.jpg') }}"
                            alt="MedleyX secure OTP based signup screen">
                        <div class="browser-mockup-caption">
                            <strong>Create Account</strong>
                            <span>Secure, OTP-based signup to keep every customer account verified.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="browser-mockup">
                        <div class="browser-mockup-bar">
                            <span></span><span></span><span></span>
                            <div class="browser-mockup-url">localhost:8000/medicines?q=do</div>
                        </div>
                        <img src="{{ assetImage('portfolio/medleyx-search.jpg') }}"
                            alt="MedleyX smart medicine search with instant suggestions">
                        <div class="browser-mockup-caption">
                            <strong>Smart Medicine Search</strong>
                            <span>Instant autosuggest with live pricing as customers type.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="browser-mockup">
                        <div class="browser-mockup-bar">
                            <span></span><span></span><span></span>
                            <div class="browser-mockup-url">localhost:8000</div>
                        </div>
                        <img src="{{ assetImage('portfolio/medleyx-partners-chat.jpg') }}"
                            alt="MedleyX trusted brand partners and AI support chat widget">
                        <div class="browser-mockup-caption">
                            <strong>Brand Partners &amp; AI Support</strong>
                            <span>Trusted partner brands plus an AI chat assistant for instant order help.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="browser-mockup">
                        <div class="browser-mockup-bar">
                            <span></span><span></span><span></span>
                            <div class="browser-mockup-url">localhost:8000/dashboard</div>
                        </div>
                        <img src="{{ assetImage('portfolio/medleyx-admin-dashboard.jpg') }}"
                            alt="MedleyX admin dashboard with medicine inventory stats">
                        <div class="browser-mockup-caption">
                            <strong>Admin Dashboard</strong>
                            <span>Live inventory value, stock levels, and order tracking at a glance.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="browser-mockup">
                        <div class="browser-mockup-bar">
                            <span></span><span></span><span></span>
                            <div class="browser-mockup-url">localhost:8000</div>
                        </div>
                        <img src="{{ assetImage('portfolio/medleyx-footer.jpg') }}"
                            alt="MedleyX footer with contact details and payment partners">
                        <div class="browser-mockup-caption">
                            <strong>Footer &amp; Trust Signals</strong>
                            <span>Store contact details, quick links, and supported payment partners.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Study 3 Screenshots End -->

    <!-- Case Study 3 Capabilities Start -->
    <div class="container-fluid py-5 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Capabilities</h5>
                <h1 class="mb-0 text-white">What MedleyX Can Do</h1>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-pills text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Medicine &amp; Ayurveda Ordering</h4>
                        <p class="mb-0">Search, compare, and order medicines and Ayurveda products in a few taps.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-user-md text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Doctor Consultations</h4>
                        <p class="mb-0">Book consultations, including cancer and chronic care plans.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-file-prescription text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Prescription Upload</h4>
                        <p class="mb-0">Upload a prescription and let the pharmacy team handle the rest.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-robot text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>AI Chat Support</h4>
                        <p class="mb-0">Instant answers on order status, delivery time, and medicine alternatives.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-lock text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Secure OTP Login</h4>
                        <p class="mb-0">OTP-based sign in keeps every customer account safe and verified.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-boxes-stacked text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Admin Inventory Dashboard</h4>
                        <p class="mb-0">Track stock, catalogue size, and inventory value from one dashboard.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Study 3 Capabilities End -->

    <!-- Final CTA Start -->
    <div class="container-fluid py-5 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="case-study-cta">
                <h2 class="mb-3">Want a Website, HR System, or App Like These for Your Business?</h2>
                <p class="mb-4">Keshav Ites builds fast, professional, and conversion-ready websites and business
                    systems &mdash; from healthcare platforms to internal HR portals and online pharmacies.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="/contact" class="btn btn-light py-2 px-5">Get a Free Consultation</a>
                    <a href="https://pulsemultispeciality.in/" target="_blank" rel="noopener noreferrer"
                        class="btn btn-outline-light py-2 px-5">Pulse Clinic</a>
                    <a href="https://hrmwts.wtsindia.co.in/" target="_blank" rel="noopener noreferrer"
                        class="btn btn-outline-light py-2 px-5">WIS HRMS</a>
                    <span class="btn btn-outline-light py-2 px-5 disabled" style="opacity:0.7; cursor:default;">
                        MedleyX &middot; Coming Soon</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Final CTA End -->
@endsection
