@extends('layouts.app')

@section('title', 'Contact Us | Keshav Ites - Get in Touch')

@section('content')
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Get In Touch</h5>
                <h1 class="mb-0">We'd Love to Hear From You</h1>
                <p class="mt-4 text-muted">Have questions about our services? Need a custom solution? Reach out to our team —
                    we're here to help.</p>
            </div>

            <div class="row g-5">
                <!-- Contact Information -->
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.2s">
                    <div class="bg-light rounded p-5">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary d-flex align-items-center justify-content-center rounded me-3"
                                style="width: 50px; height: 50px;">
                                <i class="fa fa-map-marker-alt text-white"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Our Office</h5>
                                <p class="mb-0">Andheri, Mumbai, Maharashtra</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary d-flex align-items-center justify-content-center rounded me-3"
                                style="width: 50px; height: 50px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Phone Number</h5>
                                <p class="mb-0">+91 7754908252</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="bg-primary d-flex align-items-center justify-content-center rounded me-3"
                                style="width: 50px; height: 50px;">
                                <i class="fa fa-envelope-open text-white"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Email Address</h5>
                                <p class="mb-0">info@keshavites.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-8 wow slideInUp" data-wow-delay="0.4s">
                    <div class="bg-light rounded p-5">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf

                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Your Full Name" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Your Email Address" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <input type="text" name="subject"
                                        class="form-control @error('subject') is-invalid @enderror"
                                        placeholder="Subject (Optional)" value="{{ old('subject') }}">
                                    @error('subject')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="5"
                                        placeholder="Please describe your project requirements or questions...">{{ old('message') }}</textarea>
                                    @error('message')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit">Send Message Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Why Choose Us Section -->
            <div class="row mt-5 wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-12">
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto">
                        <h2 class="mb-0">Why Contact Keshav Ites?</h2>
                    </div>
                    <div class="row g-5 mt-3">
                        <div class="col-lg-4">
                            <div class="text-center">
                                <div class="bg-primary d-inline-flex align-items-center justify-content-center rounded mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-check text-white" style="font-size: 2rem;"></i>
                                </div>
                                <h5 class="mb-3">Quick Response Time</h5>
                                <p class="text-muted">We respond to inquiries within 24 hours with detailed information
                                    about your project.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="text-center">
                                <div class="bg-primary d-inline-flex align-items-center justify-content-center rounded mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-users text-white" style="font-size: 2rem;"></i>
                                </div>
                                <h5 class="mb-3">Expert Team</h5>
                                <p class="text-muted">Connect with experienced professionals who understand your business
                                    needs.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="text-center">
                                <div class="bg-primary d-inline-flex align-items-center justify-content-center rounded mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-handshake text-white" style="font-size: 2rem;"></i>
                                </div>
                                <h5 class="mb-3">No-Obligation Consultation</h5>
                                <p class="text-muted">Get free expert advice on your project without any commitment or
                                    hidden costs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
