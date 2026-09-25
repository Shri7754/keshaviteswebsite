@extends('layouts.app')

@section('title', 'Mobile App Development Case Studies | Pulse Clinic & WIS HRMS Apps - Keshav Ites')

@section('description', 'See how Keshav Ites designs and builds mobile apps - the Pulse Clinic app for booking appointments and video consultations, and the WIS HRMS app for attendance, leave, and team management.')

@section('content')
    <!-- Case Study Hero Start -->
    <div class="container-fluid py-5 case-study-hero wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7">
                    <span class="case-study-badge">Case Study 01 &middot; Mobile Application</span>
                    <h1 class="mb-3">Pulse Clinic App &mdash; Healthcare Companion Mobile App</h1>
                    <p class="lead mb-4">
                        A dedicated mobile app for Pulse Clinic patients, being designed and built by
                        <strong class="text-white">Keshav Ites</strong> &mdash; book appointments, chat or
                        video-call doctors, manage prescriptions, and keep every medical record in one place.
                    </p>

                    <div class="case-study-preview-banner mb-4">
                        <i class="fa fa-pen-ruler"></i>
                        These screens are the UI/UX design preview guiding development. The final app will carry
                        full Pulse Clinic branding, INR pricing, and the clinic's real doctors.
                    </div>

                    <div class="case-study-status-row mb-4">
                        <div class="case-study-status-pill is-live">
                            <span class="case-study-live-dot"></span>UI/UX Design <strong>Complete</strong>
                        </div>
                        <div class="case-study-status-pill is-wip">
                            <span class="case-study-wip-dot"></span>App Development <strong>Work in Progress</strong>
                        </div>
                        <div class="case-study-status-pill is-wip">
                            <span class="case-study-wip-dot"></span>Android APK <strong>Launching Soon</strong>
                        </div>
                    </div>

                    <div class="case-study-meta mb-4">
                        <div class="case-study-meta-item">
                            <span>Client</span>
                            <strong>Pulse Clinic, New Delhi</strong>
                        </div>
                        <div class="case-study-meta-item">
                            <span>Platform</span>
                            <strong>Android (APK)</strong>
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
                            <i class="fa fa-comments me-2"></i>Get an App Like This
                        </a>
                        <a href="/contact?interest=pulse-clinic-app" class="btn case-study-buy-btn py-3 px-4">
                            <i class="fa fa-bag-shopping me-2"></i>Buy This Solution
                        </a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="phone-mockup-wrap">
                        <div class="phone-mockup">
                            <img src="{{ assetImage('portfolio/pulse-app-home.jpg') }}"
                                alt="Pulse Clinic app home dashboard">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Study Hero End -->

    <!-- Marquee Start -->
    <div class="container-fluid py-4 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="marquee-strip">
                <div class="marquee-track">
                    <span>Doctor Search &amp; Booking</span>
                    <span>Video Consultations</span>
                    <span>Voice Consultations</span>
                    <span>In-App Chat with Doctors</span>
                    <span>Digital Prescriptions</span>
                    <span>Medical Records</span>
                    <span>Secure Login</span>
                    <span>Order &amp; Appointment Tracking</span>
                    <span>Android APK &middot; Launching Soon</span>
                    <span>Doctor Search &amp; Booking</span>
                    <span>Video Consultations</span>
                    <span>Voice Consultations</span>
                    <span>In-App Chat with Doctors</span>
                    <span>Digital Prescriptions</span>
                    <span>Medical Records</span>
                    <span>Secure Login</span>
                    <span>Order &amp; Appointment Tracking</span>
                    <span>Android APK &middot; Launching Soon</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Marquee End -->

    <!-- Overview + Requirements Start -->
    <div class="container-fluid py-5 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="case-study-panel">
                        <h4 class="mb-3"><i class="fa fa-info-circle text-primary me-2"></i>What This Project Is</h4>
                        <p>
                            Pulse Clinic wanted a dedicated mobile app so patients could book appointments, talk to
                            doctors, and manage prescriptions without opening the website every time &mdash;
                            especially useful for follow-ups and quick consultations.
                        </p>
                        <p class="mb-0">
                            Keshav Ites designed the complete UI/UX for the app and is now building it out.
                            Development is in progress and the Android APK will be released for download soon.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="case-study-panel">
                        <h4 class="mb-3"><i class="fa fa-clipboard-list text-primary me-2"></i>Client Requirements
                        </h4>
                        <ul class="feature-list-dark">
                            <li>Simple doctor search and appointment booking</li>
                            <li>In-app chat, voice, and video consultations</li>
                            <li>Digital prescriptions and medical record history</li>
                            <li>Secure sign-in with password recovery</li>
                            <li>A guided onboarding flow for first-time patients</li>
                            <li>Order and appointment tracking in one place</li>
                            <li>A clean, trustworthy design for a healthcare brand</li>
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
                <h5 class="fw-bold text-primary text-uppercase">Design Preview</h5>
                <h1 class="mb-0 text-white">A Look Inside the Pulse Clinic App</h1>
                <p class="mt-3" style="color:#a9c3de;">UI/UX design screens guiding the app currently in
                    development.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="phone-mockup-wrap">
                        <div class="phone-mockup">
                            <img src="{{ assetImage('portfolio/pulse-app-onboard-1.jpg') }}"
                                alt="Pulse Clinic app onboarding - find specialists">
                        </div>
                        <div class="phone-mockup-caption">
                            <strong>Find Specialists</strong>
                            <span>Search verified doctors across every specialty.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="phone-mockup-wrap">
                        <div class="phone-mockup">
                            <img src="{{ assetImage('portfolio/pulse-app-onboard-2.jpg') }}"
                                alt="Pulse Clinic app onboarding - book appointments">
                        </div>
                        <div class="phone-mockup-caption">
                            <strong>Book in a Few Taps</strong>
                            <span>Pick a time and get instant confirmation.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="phone-mockup-wrap">
                        <div class="phone-mockup">
                            <img src="{{ assetImage('portfolio/pulse-app-onboard-4.jpg') }}"
                                alt="Pulse Clinic app onboarding - medical records">
                        </div>
                        <div class="phone-mockup-caption">
                            <strong>Medical Records</strong>
                            <span>Prescriptions, lab results, and visit history in one place.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="phone-mockup-wrap">
                        <div class="phone-mockup">
                            <img src="{{ assetImage('portfolio/pulse-app-signin.jpg') }}"
                                alt="Pulse Clinic app sign in screen">
                        </div>
                        <div class="phone-mockup-caption">
                            <strong>Sign In</strong>
                            <span>Secure login to manage your health on the go.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="phone-mockup-wrap">
                        <div class="phone-mockup">
                            <img src="{{ assetImage('portfolio/pulse-app-forgot-password.jpg') }}"
                                alt="Pulse Clinic app forgot password screen">
                        </div>
                        <div class="phone-mockup-caption">
                            <strong>Forgot Password</strong>
                            <span>A simple, guided password reset flow.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="phone-mockup-wrap">
                        <div class="phone-mockup">
                            <img src="{{ assetImage('portfolio/pulse-app-home.jpg') }}"
                                alt="Pulse Clinic app home dashboard">
                        </div>
                        <div class="phone-mockup-caption">
                            <strong>Home Dashboard</strong>
                            <span>Find doctors and track appointments from one screen.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="phone-mockup-wrap">
                        <div class="phone-mockup">
                            <img src="{{ assetImage('portfolio/pulse-app-doctor-profile.jpg') }}"
                                alt="Pulse Clinic app doctor profile screen">
                        </div>
                        <div class="phone-mockup-caption">
                            <strong>Doctor Profile</strong>
                            <span>Ratings, experience, and one-tap chat, call, or video.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="phone-mockup-wrap">
                        <div class="phone-mockup">
                            <img src="{{ assetImage('portfolio/pulse-app-chat.jpg') }}"
                                alt="Pulse Clinic app in-app chat with doctor">
                        </div>
                        <div class="phone-mockup-caption">
                            <strong>In-App Chat</strong>
                            <span>Message your doctor and get real-time replies.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="phone-mockup-wrap">
                        <div class="phone-mockup">
                            <img src="{{ assetImage('portfolio/pulse-app-voice-call.jpg') }}"
                                alt="Pulse Clinic app voice consultation screen">
                        </div>
                        <div class="phone-mockup-caption">
                            <strong>Voice Consultation</strong>
                            <span>Audio call straight from the app.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="phone-mockup-wrap">
                        <div class="phone-mockup">
                            <img src="{{ assetImage('portfolio/pulse-app-video-call.jpg') }}"
                                alt="Pulse Clinic app video consultation screen">
                        </div>
                        <div class="phone-mockup-caption">
                            <strong>Video Consultation</strong>
                            <span>Face-to-face consultations from anywhere.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="phone-mockup-wrap">
                        <div class="phone-mockup">
                            <img src="{{ assetImage('portfolio/pulse-app-orders.jpg') }}"
                                alt="Pulse Clinic app orders and appointments list">
                        </div>
                        <div class="phone-mockup-caption">
                            <strong>My Orders</strong>
                            <span>Appointments, prescriptions, and lab tests in one list.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Screenshots End -->

    <!-- Capabilities Start -->
    <div class="container-fluid py-5 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Capabilities</h5>
                <h1 class="mb-0 text-white">What the Pulse Clinic App Can Do</h1>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-magnifying-glass text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Doctor Search &amp; Booking</h4>
                        <p class="mb-0">Find verified specialists and book an appointment in a few taps.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-video text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Video &amp; Voice Consultations</h4>
                        <p class="mb-0">Talk to a doctor face-to-face or by voice, right from the app.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-comment-medical text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>In-App Chat</h4>
                        <p class="mb-0">Message doctors directly and keep every conversation in one thread.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-file-prescription text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Digital Prescriptions &amp; Records</h4>
                        <p class="mb-0">Prescriptions, lab results, and visit history always available.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-lock text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Secure Login</h4>
                        <p class="mb-0">Protected sign-in with a simple password recovery flow.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-list-check text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Order &amp; Appointment Tracking</h4>
                        <p class="mb-0">Appointments, prescriptions, and lab tests tracked in one list.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Capabilities End -->

    <!-- Case Study 2 Divider Start -->
    <div class="container-fluid pt-5 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="case-study-divider">
                <div class="case-study-divider-num">02</div>
                <div>
                    <h2 class="mb-0">WIS HRMS &mdash; Mobile Application</h2>
                    <p>Case study &middot; Mobile application</p>
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
                    <span class="case-study-preview-banner mb-3">
                        <i class="fa fa-pen-ruler"></i>
                        <span>UI/UX design preview for the WIS HRMS companion app &mdash; the same system behind
                            the <a href="{{ route('pulse-clinic.project') }}"
                                class="text-white text-decoration-underline">live web admin portal</a>.</span>
                    </span>
                    <p class="lead mb-4 mt-3">
                        A companion mobile app for <strong class="text-white">WIS Technosavvy Pvt Ltd</strong>,
                        built by <strong class="text-white">Keshav Ites</strong> &mdash; so managers and employees
                        can check attendance, approve leave requests, and track projects and teams from their
                        phone, without opening the web portal.
                    </p>

                    <div class="case-study-status-row mb-4">
                        <div class="case-study-status-pill is-live">
                            <span class="case-study-live-dot"></span>UI/UX Design <strong>Complete</strong>
                        </div>
                        <div class="case-study-status-pill is-wip">
                            <span class="case-study-wip-dot"></span>App Development <strong>Work in Progress</strong>
                        </div>
                        <div class="case-study-status-pill is-wip">
                            <span class="case-study-wip-dot"></span>APK <strong>Launching Soon</strong>
                        </div>
                    </div>

                    <div class="case-study-meta mb-4">
                        <div class="case-study-meta-item">
                            <span>Client</span>
                            <strong>WIS Technosavvy Pvt Ltd</strong>
                        </div>
                        <div class="case-study-meta-item">
                            <span>Platform</span>
                            <strong>Android (APK)</strong>
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
                            <i class="fa fa-comments me-2"></i>Get an App Like This
                        </a>
                        <a href="/contact?interest=wis-hrms-app" class="btn case-study-buy-btn py-3 px-4">
                            <i class="fa fa-bag-shopping me-2"></i>Buy This Solution
                        </a>
                    </div>
                </div>

                <div class="col-lg-5 d-flex justify-content-center">
                    <div class="phone-mockup-flat">
                        <img src="{{ assetImage('portfolio/wis-hrms-app-home.jpg') }}"
                            alt="WIS HRMS mobile app home dashboard with attendance overview">
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
                    <span>Attendance Overview</span>
                    <span>Leave Requests</span>
                    <span>Team Management</span>
                    <span>Project Tracking</span>
                    <span>Secure Login</span>
                    <span>Recent Activity Feed</span>
                    <span>Google &amp; Microsoft Sign-In</span>
                    <span>Android APK &middot; Launching Soon</span>
                    <span>Attendance Overview</span>
                    <span>Leave Requests</span>
                    <span>Team Management</span>
                    <span>Project Tracking</span>
                    <span>Secure Login</span>
                    <span>Recent Activity Feed</span>
                    <span>Google &amp; Microsoft Sign-In</span>
                    <span>Android APK &middot; Launching Soon</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Study 2 Marquee End -->

    <!-- Case Study 2 Screenshots Start -->
    <div class="container-fluid py-5 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Design Preview</h5>
                <h1 class="mb-0 text-white">A Look Inside the WIS HRMS App</h1>
                <p class="mt-3" style="color:#a9c3de;">UI/UX design screens guiding the companion app currently in
                    development.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="phone-mockup-wrap">
                        <div class="phone-mockup-flat">
                            <img src="{{ assetImage('portfolio/wis-hrms-app-login.jpg') }}"
                                alt="WIS HRMS mobile app login screen">
                        </div>
                        <div class="phone-mockup-caption">
                            <strong>Login</strong>
                            <span>Secure sign-in with email, password, or Google / Apple / Microsoft.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="phone-mockup-wrap">
                        <div class="phone-mockup-flat">
                            <img src="{{ assetImage('portfolio/wis-hrms-app-home.jpg') }}"
                                alt="WIS HRMS mobile app home dashboard with attendance overview">
                        </div>
                        <div class="phone-mockup-caption">
                            <strong>Home Dashboard</strong>
                            <span>Attendance overview, quick actions, and recent activity at a glance.</span>
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
                <h1 class="mb-0 text-white">What the WIS HRMS App Can Do</h1>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-chart-pie text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Attendance Overview</h4>
                        <p class="mb-0">Present, absent, and late counts with a live attendance percentage.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-calendar-check text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Leave Requests</h4>
                        <p class="mb-0">Submit and track leave requests without leaving the app.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-users text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Team &amp; Project Tracking</h4>
                        <p class="mb-0">Keep tabs on teams and active projects from the home screen.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-bell text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Recent Activity Feed</h4>
                        <p class="mb-0">Check-ins, approvals, and project updates in one running feed.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-lock text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Secure Sign-In</h4>
                        <p class="mb-0">Email/password login plus Google, Apple, and Microsoft sign-in.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="case-study-panel text-center h-100">
                        <i class="fa fa-mobile-screen-button text-primary mb-3" style="font-size: 2rem;"></i>
                        <h4>Android APK <span class="case-study-wip-banner" style="font-size:0.65rem; padding:4px 10px; margin-left:6px;">Launching Soon</span>
                        </h4>
                        <p class="mb-0">A downloadable Android build is being finalized for release.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case Study 2 Capabilities End -->

    <!-- Final CTA Start -->
    <div class="container-fluid py-5 case-study-dark-section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="case-study-cta">
                <h2 class="mb-3">Want a Mobile App Like These for Your Business?</h2>
                <p class="mb-4">Keshav Ites designs and builds Android &amp; cross-platform apps &mdash; from
                    healthcare companions to internal HR tools.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="/contact" class="btn btn-light py-2 px-5">Get a Free Consultation</a>
                    <a href="{{ route('pulse-clinic.project') }}" class="btn btn-outline-light py-2 px-5">View Web
                        Development Case Studies</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Final CTA End -->
@endsection
