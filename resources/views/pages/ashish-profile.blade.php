@extends('layouts.app')

@section('title', 'Ashish Chaturvedi | Marketing Manager - Keshav Ites')

@section('content')
    <div class="container-fluid py-5 founder-spotlight wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Marketing Manager Profile</h5>
                <h1 class="mb-0">Ashish Chaturvedi</h1>
            </div>

            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="founder-photo-card">
                        <img src="{{ assetImage('ashish.jpeg') }}" alt="Ashish Chaturvedi">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="founder-profile-card">
                        <span class="founder-role">Digital Marketing & Brand Growth</span>
                        <h2 class="mb-3">Ashish Chaturvedi</h2>

                        <div class="d-flex gap-2 mb-4" aria-label="Ashish social profiles">
                            <a class="btn btn-primary btn-lg-square rounded"
                                href="https://youtube.com/@gyanashish328?si=NOz4C4lToNkkQRNp" target="_blank"
                                rel="noopener noreferrer" aria-label="YouTube">
                                <i class="fab fa-youtube fw-normal"></i>
                            </a>
                            <a class="btn btn-primary btn-lg-square rounded" href="https://www.instagram.com"
                                target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                <i class="fab fa-instagram fw-normal"></i>
                            </a>
                            <a class="btn btn-primary btn-lg-square rounded" href="https://www.linkedin.com" target="_blank"
                                rel="noopener noreferrer" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in fw-normal"></i>
                            </a>
                        </div>

                        <p class="lead mb-4">
                            Dynamic marketing professional focused on digital growth, brand visibility, and lead generation.
                            With hands-on expertise in digital marketing, content strategy, social media management,
                            and online audience engagement, I help businesses build stronger digital presence and convert
                            attention into results.
                        </p>

                        <div class="founder-stats row g-3 mb-4">
                            <div class="col-md-3 col-6">
                                <div class="founder-stat">
                                    <span>Experience</span>
                                    <strong>3 Years</strong>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="founder-stat">
                                    <span>Education</span>
                                    <strong>BSC</strong>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="founder-stat">
                                    <span>School</span>
                                    <strong>High School</strong>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="founder-stat">
                                    <span>Focus</span>
                                    <strong>Digital Growth</strong>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <h4 class="profile-subtitle">Professional Experience</h4>
                                <ul class="feature-list">
                                    <li>3 years of experience in digital marketing and brand promotion</li>
                                    <li>Social media content strategy and campaign planning</li>
                                    <li>Lead generation through online marketing channels</li>
                                    <li>YouTube content creator and digital storytelling expert</li>
                                    <li>Brand awareness growth across digital platforms</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4 class="profile-subtitle">Education</h4>
                                <ul class="feature-list">
                                    <li>High School – ST Thomas School</li>
                                    <li>ICSE Board</li>
                                    <li>Intermediate – UP Board</li>
                                    <li>Graduation – BSC</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Digital Expertise</h5>
                <h1 class="mb-0">Marketing Skills & Creative Edge</h1>
            </div>

            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="project-portfolio-card h-100">
                        <div class="portfolio-icon">
                            <i class="fa fa-bullhorn"></i>
                        </div>
                        <h4 class="mb-1">Digital Marketing</h4>
                        <span class="portfolio-count">Online Growth & Audience Reach</span>
                        <ul class="feature-list mt-3">
                            <li>Social media marketing and campaign execution</li>
                            <li>Brand positioning and digital storytelling</li>
                            <li>Content planning for engagement and conversion</li>
                            <li>SEO-friendly content strategy</li>
                            <li>Performance tracking and optimization</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="project-portfolio-card h-100">
                        <div class="portfolio-icon">
                            <i class="fa fa-video"></i>
                        </div>
                        <h4 class="mb-1">Digital Creator</h4>
                        <span class="portfolio-count">YouTube & Content Creation</span>
                        <ul class="feature-list mt-3">
                            <li>YouTube channel: Gyan Ashish</li>
                            <li>Educational and informative content creation</li>
                            <li>Audience engagement through valuable video content</li>
                            <li>Creative brand storytelling and online presence</li>
                            <li>Content that builds trust, authority, and reach</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
