@extends('layouts.app')

@section('title', 'Services | Keshav Ites - Web & App Development')

@section('content')
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Comprehensive IT Services</h5>
                <h1 class="mb-0">Professional Software Solutions Tailored to Your Business Needs</h1>
                <p class="mt-4 text-muted">At Keshav Ites, we offer a complete range of software development and IT
                    services designed to accelerate your digital transformation journey.</p>
            </div>

            <div class="row g-5">
                <!-- Web Development Service -->
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.2s">
                    <div class="service-card bg-light rounded p-5 h-100">
                        <div class="service-icon mb-4">
                            <i class="fa fa-code text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h3 class="mb-3">Custom Web Development</h3>
                        <p class="mb-3">We develop robust, scalable, and secure web applications using modern frameworks
                            like Laravel, React, Vue.js, and Node.js. Our web solutions are optimized for performance, user
                            experience, and search engines.</p>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa fa-check text-primary me-2"></i>Full-stack web development</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Progressive Web Applications (PWA)</li>
                            <li><i class="fa fa-check text-primary me-2"></i>E-commerce platforms</li>
                            <li><i class="fa fa-check text-primary me-2"></i>API development and integration</li>
                        </ul>
                    </div>
                </div>

                <!-- Mobile App Development -->
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.4s">
                    <div class="service-card bg-light rounded p-5 h-100">
                        <div class="service-icon mb-4">
                            <i class="fab fa-android text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h3 class="mb-3">Mobile App Development</h3>
                        <p class="mb-3">Create powerful mobile applications for iOS and Android platforms. We specialize
                            in native and cross-platform development using Flutter, React Native, and Swift to deliver
                            high-performance apps.</p>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa fa-check text-primary me-2"></i>Native iOS and Android apps</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Cross-platform applications</li>
                            <li><i class="fa fa-check text-primary me-2"></i>App maintenance and support</li>
                            <li><i class="fa fa-check text-primary me-2"></i>App Store optimization</li>
                        </ul>
                    </div>
                </div>

                <!-- Enterprise Solutions -->
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <div class="service-card bg-light rounded p-5 h-100">
                        <div class="service-icon mb-4">
                            <i class="fa fa-building text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h3 class="mb-3">Enterprise Software Solutions</h3>
                        <p class="mb-3">Develop specialized enterprise applications including ERP systems, CRM solutions,
                            and business process automation tools. We deliver solutions that integrate seamlessly with your
                            existing infrastructure.</p>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa fa-check text-primary me-2"></i>ERP system development</li>
                            <li><i class="fa fa-check text-primary me-2"></i>CRM implementation</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Business automation</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Legacy system modernization</li>
                        </ul>
                    </div>
                </div>

                <!-- AI & Machine Learning -->
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.5s">
                    <div class="service-card bg-light rounded p-5 h-100">
                        <div class="service-icon mb-4">
                            <i class="fa fa-brain text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h3 class="mb-3">AI & Machine Learning Solutions</h3>
                        <p class="mb-3">Leverage artificial intelligence and machine learning to gain insights, automate
                            processes, and enhance decision-making. Our AI experts develop intelligent solutions for
                            predictive analytics and data processing.</p>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa fa-check text-primary me-2"></i>Machine learning models</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Predictive analytics</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Natural language processing</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Computer vision solutions</li>
                        </ul>
                    </div>
                </div>

                <!-- Cloud Solutions -->
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.4s">
                    <div class="service-card bg-light rounded p-5 h-100">
                        <div class="service-icon mb-4">
                            <i class="fa fa-cloud text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h3 class="mb-3">Cloud Solutions & DevOps</h3>
                        <p class="mb-3">Migrate to cloud infrastructure and implement DevOps practices for continuous
                            integration and deployment. We work with AWS, Azure, Google Cloud, and Kubernetes to deliver
                            scalable solutions.</p>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa fa-check text-primary me-2"></i>Cloud migration services</li>
                            <li><i class="fa fa-check text-primary me-2"></i>AWS and Azure expertise</li>
                            <li><i class="fa fa-check text-primary me-2"></i>CI/CD pipeline implementation</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Infrastructure automation</li>
                        </ul>
                    </div>
                </div>

                <!-- Cybersecurity -->
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <div class="service-card bg-light rounded p-5 h-100">
                        <div class="service-icon mb-4">
                            <i class="fa fa-shield-alt text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h3 class="mb-3">Cybersecurity & Data Protection</h3>
                        <p class="mb-3">Protect your business with comprehensive security solutions. We implement security
                            best practices, conduct vulnerability assessments, and ensure compliance with industry standards
                            and regulations.</p>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa fa-check text-primary me-2"></i>Security audits and assessments</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Data encryption and protection</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Compliance management</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Incident response planning</li>
                        </ul>
                    </div>
                </div>

                <!-- QA & Testing -->
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <div class="service-card bg-light rounded p-5 h-100">
                        <div class="service-icon mb-4">
                            <i class="fa fa-flask text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h3 class="mb-3">QA & Software Testing</h3>
                        <p class="mb-3">Ensure software quality with comprehensive testing strategies. We provide manual
                            testing, automated test scripts, performance testing, and security testing to deliver bug-free
                            applications.</p>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa fa-check text-primary me-2"></i>Functional testing</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Performance and load testing</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Automated test automation</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Security testing and penetration</li>
                        </ul>
                    </div>
                </div>

                <!-- Digital Transformation -->
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.5s">
                    <div class="service-card bg-light rounded p-5 h-100">
                        <div class="service-icon mb-4">
                            <i class="fa fa-exchange-alt text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h3 class="mb-3">Digital Transformation Consulting</h3>
                        <p class="mb-3">Navigate your digital transformation journey with expert guidance. We analyze
                            your business processes, identify opportunities for improvement, and develop strategic roadmaps
                            for technology adoption.</p>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa fa-check text-primary me-2"></i>Digital strategy consulting</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Process optimization</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Technology roadmapping</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Change management support</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="row mt-5 wow fadeInUp" data-wow-delay="0.7s">
                <div class="col-12">
                    <div class="bg-primary rounded p-5 text-center text-white">
                        <h2 class="mb-3">Ready to Transform Your Business?</h2>
                        <p class="mb-4">Let our expert team help you implement the right solutions for your business
                            goals. Get a free consultation today.</p>
                        <a href="/contact" class="btn btn-light py-2 px-5">Schedule Your Free Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
