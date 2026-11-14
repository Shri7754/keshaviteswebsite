@extends('layouts.app')

@section('title', 'Contact Us | Keshav Ites - Get in Touch')

@section('content')
    <style>
        .contact-form-wrapper {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 60px 0;
        }

        .form-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            padding: 50px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .form-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            font-size: 15px;
        }

        .required-star {
            color: #dc3545;
            margin-left: 5px;
            font-weight: bold;
        }

        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 12px 16px;
            font-size: 15px;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
        }

        .form-control:focus {
            background-color: white;
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
            color: #333;
        }

        .form-control::placeholder {
            color: #999;
            font-style: italic;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 150px;
        }

        .form-control.is-invalid {
            border-color: #dc3545;
            background-color: #fff5f5;
        }

        .form-control.is-valid {
            border-color: #28a745;
            background-color: #f0fdf4;
        }

        .error-message {
            color: #dc3545;
            font-size: 13px;
            margin-top: 8px;
            display: flex;
            align-items: center;
            font-weight: 500;
        }

        .error-message::before {
            content: "✕ ";
            margin-right: 5px;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .success-alert {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            border: 2px solid #28a745;
            color: #155724;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            animation: slideDown 0.5s ease;
        }

        .success-alert::before {
            content: "✓ ";
            font-size: 24px;
            font-weight: bold;
            margin-right: 15px;
            color: #28a745;
        }

        .success-alert strong {
            color: #155724;
        }

        .error-alert {
            background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
            border: 2px solid #dc3545;
            color: #721c24;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            animation: slideDown 0.5s ease;
        }

        .error-alert::before {
            content: "✕ ";
            font-size: 24px;
            font-weight: bold;
            margin-right: 15px;
            color: #dc3545;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .submit-btn {
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            border: none;
            padding: 15px 50px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(13, 110, 253, 0.3);
            width: 100%;
        }

        .submit-btn:hover {
            background: linear-gradient(135deg, #0a58ca 0%, #084298 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(13, 110, 253, 0.4);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .submit-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        .info-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .info-card:hover {
            background: linear-gradient(135deg, #e9ecef 0%, #dee2e6 100%);
            transform: translateX(5px);
        }

        .info-card .icon-box {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .info-card .icon-box i {
            color: white;
            font-size: 24px;
        }

        .info-card-content h5 {
            color: #333;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .info-card-content p {
            color: #666;
            margin: 0;
            font-size: 15px;
        }

        .section-divider {
            height: 3px;
            background: linear-gradient(90deg, #0d6efd, transparent);
            border-radius: 2px;
            margin: 30px 0;
        }

        .form-row-title {
            font-size: 18px;
            font-weight: 700;
            color: #0d6efd;
            margin-top: 30px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .form-row-title::before {
            content: "";
            display: inline-block;
            width: 4px;
            height: 24px;
            background: #0d6efd;
            border-radius: 2px;
            margin-right: 10px;
        }

        .why-choose-section {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 60px 0;
            margin-top: 60px;
        }

        .feature-box {
            background: white;
            padding: 35px;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 28px;
            color: white;
        }

        .loading-spinner {
            display: none;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top: 3px solid white;
            animation: spin 1s linear infinite;
            margin-right: 10px;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        .submit-btn.loading {
            pointer-events: none;
            opacity: 0.8;
        }

        .submit-btn.loading .loading-spinner {
            display: inline-block;
        }
    </style>

    <div class="contact-form-wrapper">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">✨ Get In Touch</h5>
                <h1 class="mb-0">We'd Love to Hear From You</h1>
                <p class="mt-4 text-muted">Have questions about our services? Need a custom solution? Reach out to our team — we're here to help.</p>
            </div>

            <div class="row g-5">
                <!-- Contact Information -->
                <div class="col-lg-4">
                    <div class="info-card">
                        <div class="d-flex align-items-start">
                            <div class="icon-box">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="info-card-content">
                                <h5>Our Office</h5>
                                <p>Andheri, Mumbai, Maharashtra</p>
                            </div>
                        </div>
                    </div>

                    <div class="info-card">
                        <div class="d-flex align-items-start">
                            <div class="icon-box">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="info-card-content">
                                <h5>Phone Number</h5>
                                <p>+91 7754908252</p>
                            </div>
                        </div>
                    </div>

                    <div class="info-card">
                        <div class="d-flex align-items-start">
                            <div class="icon-box">
                                <i class="fa fa-envelope-open"></i>
                            </div>
                            <div class="info-card-content">
                                <h5>Email Address</h5>
                                <p>info@keshavites.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="form-card">
                        @if ($errors->any())
                            <div class="error-alert">
                                <div>
                                    <strong>Please fix the following errors:</strong>
                                    <ul style="margin-top: 10px; margin-bottom: 0; padding-left: 20px;">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="success-alert">
                                <div>
                                    <strong>{{ session('success') }}</strong>
                                    <p style="margin-top: 8px; margin-bottom: 0; font-size: 14px;">We'll get back to you within 24 hours.</p>
                                </div>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('contact.store') }}" id="contactForm" novalidate>
                            @csrf

                            <!-- Personal Information Section -->
                            <div class="form-row-title">Personal Information</div>

                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">
                                            Full Name
                                            <span class="required-star">*</span>
                                        </label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @endError @if(!$errors->has('name') && old('name')) is-valid @endif"
                                            placeholder="Enter your full name"
                                            value="{{ old('name') }}"
                                            required>
                                        @error('name')
                                            <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">
                                            Email Address
                                            <span class="required-star">*</span>
                                        </label>
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @endError @if(!$errors->has('email') && old('email')) is-valid @endif"
                                            placeholder="Enter your email address"
                                            value="{{ old('email') }}"
                                            required>
                                        @error('email')
                                            <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">
                                            Mobile Number
                                            <span class="required-star">*</span>
                                        </label>
                                        <input type="tel" name="mobile"
                                            class="form-control @error('mobile') is-invalid @endError @if(!$errors->has('mobile') && old('mobile')) is-valid @endif"
                                            placeholder="10 digit mobile number"
                                            value="{{ old('mobile') }}"
                                            pattern="[0-9]{10}"
                                            maxlength="10"
                                            inputmode="numeric"
                                            required>
                                        @error('mobile')
                                            <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">
                                            Subject
                                            <span style="color: #999; font-size: 13px; margin-left: 5px;">(Optional)</span>
                                        </label>
                                        <input type="text" name="subject"
                                            class="form-control @error('subject') is-invalid @endError @if(!$errors->has('subject') && old('subject')) is-valid @endif"
                                            placeholder="What is this about?"
                                            value="{{ old('subject') }}">
                                        @error('subject')
                                            <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Message Section -->
                            <div class="form-row-title">Project Details</div>

                            <div class="form-group">
                                <label class="form-label">
                                    Message
                                    <span class="required-star">*</span>
                                </label>
                                <textarea name="message"
                                    class="form-control @error('message') is-invalid @endError @if(!$errors->has('message') && old('message')) is-valid @endif"
                                    placeholder="Please describe your project requirements, questions, or any specific needs..."
                                    required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group">
                                <button class="submit-btn" type="submit" id="submitBtn">
                                    <span class="loading-spinner"></span>
                                    Send Message Now
                                </button>
                                <p style="text-align: center; color: #999; font-size: 13px; margin-top: 15px;">
                                    We respect your privacy and will never share your information.
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto">
                <h5 class="fw-bold text-primary text-uppercase">✨ Why Choose Keshav Ites?</h5>
                <h2 class="mb-0">Why Contact Us?</h2>
            </div>
            <div class="row g-4 mt-3">
                <div class="col-lg-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <h5 class="mb-3">Quick Response Time</h5>
                        <p class="text-muted">We respond to inquiries within 24 hours with detailed information about your project.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <h5 class="mb-3">Expert Team</h5>
                        <p class="text-muted">Connect with experienced professionals who understand your business needs.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fa fa-handshake"></i>
                        </div>
                        <h5 class="mb-3">No-Obligation Consultation</h5>
                        <p class="text-muted">Get free expert advice on your project without any commitment or hidden costs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function() {
            const submitBtn = document.getElementById('submitBtn');
            submitBtn.disabled = true;
            submitBtn.classList.add('loading');
        });

        // Add real-time validation visual feedback
        const inputs = document.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.value.trim() !== '') {
                    this.classList.add('is-valid');
                    this.classList.remove('is-invalid');
                }
            });

            input.addEventListener('focus', function() {
                this.classList.remove('is-valid');
            });
        });
    </script>
@endsection
