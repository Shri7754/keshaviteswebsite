@extends('layouts.app')

@section('title', 'Request a Quote | Keshav ITES - Free Professional Quote')

@section('content')
    <style>
        /* Quote Page Styles */
        .quote-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0 60px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .quote-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
            opacity: 0.1;
        }

        .quote-hero-content {
            position: relative;
            z-index: 1;
        }

        .quote-hero h1 {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 15px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .quote-hero p {
            font-size: 18px;
            margin-bottom: 0;
            opacity: 0.95;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .quote-highlights {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-top: 40px;
            flex-wrap: wrap;
        }

        .highlight-item {
            text-align: center;
        }

        .highlight-icon {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .highlight-text {
            font-size: 14px;
            opacity: 0.9;
        }

        .quote-form-wrapper {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 80px 0;
            position: relative;
        }

        .quote-form-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .form-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
            padding: 60px;
            transition: all 0.3s ease;
        }

        .form-card:hover {
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.15);
            transform: translateY(-5px);
        }

        .form-section-title {
            font-size: 20px;
            font-weight: 700;
            color: #667eea;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            padding-bottom: 15px;
            border-bottom: 3px solid #667eea;
        }

        .form-section-title::before {
            content: '';
            display: inline-block;
            width: 5px;
            height: 28px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 3px;
            margin-right: 12px;
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
            padding: 14px 16px;
            font-size: 15px;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
            font-family: inherit;
        }

        .form-control:focus {
            background-color: white;
            border-color: #667eea;
            box-shadow: 0 0 0 0.3rem rgba(102, 126, 234, 0.15);
            color: #333;
            outline: none;
        }

        .form-control::placeholder {
            color: #999;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
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
            content: '✕ ';
            margin-right: 5px;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .form-row.full {
            grid-template-columns: 1fr;
        }

        .success-alert {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            border: 2px solid #28a745;
            color: #155724;
            border-radius: 12px;
            padding: 20px 25px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            animation: slideDown 0.5s ease;
        }

        .success-alert::before {
            content: '✓';
            font-size: 28px;
            font-weight: bold;
            margin-right: 15px;
            color: #28a745;
        }

        .error-alert {
            background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
            border: 2px solid #dc3545;
            color: #721c24;
            border-radius: 12px;
            padding: 20px 25px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            animation: slideDown 0.5s ease;
        }

        .error-alert::before {
            content: '✕';
            font-size: 28px;
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            padding: 16px 50px;
            font-size: 16px;
            font-weight: 700;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.3);
            width: 100%;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            position: relative;
            overflow: hidden;
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .submit-btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(102, 126, 234, 0.4);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .submit-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        .submit-btn.loading {
            position: relative;
            color: transparent;
        }

        .submit-btn.loading::after {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            top: 50%;
            left: 50%;
            margin-left: -8px;
            margin-top: -8px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-top-color: white;
            border-radius: 50%;
            animation: spin 0.6s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .form-help-text {
            color: #666;
            font-size: 13px;
            margin-top: 6px;
            display: block;
        }

        /* Services Dropdown Styles */
        .services-dropdown-wrapper {
            position: relative;
            margin-bottom: 25px;
        }

        .services-dropdown-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            font-size: 15px;
        }

        .services-dropdown {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            font-size: 15px;
            background-color: #f8f9fa;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: inherit;
        }

        .services-dropdown:focus {
            background-color: white;
            border-color: #667eea;
            box-shadow: 0 0 0 0.3rem rgba(102, 126, 234, 0.15);
            outline: none;
        }

        .services-dropdown option {
            padding: 10px;
        }

        /* Zigzag Button in Footer */
        .zigzag-cta-wrapper {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 50px 0;
            position: relative;
            overflow: hidden;
            margin-top: 80px;
        }

        .zigzag-cta-wrapper::before,
        .zigzag-cta-wrapper::after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            background-image: 
                linear-gradient(135deg, transparent 25%, #fff 25%, #fff 50%, transparent 50%, transparent 75%, #fff 75%, #fff),
                linear-gradient(45deg, transparent 25%, #fff 25%, #fff 50%, transparent 50%, transparent 75%, #fff 75%, #fff);
            background-size: 30px 30px;
            background-position: 0 0, 0 15px;
            background-repeat: repeat-x;
            height: 20px;
            opacity: 0.3;
        }

        .zigzag-cta-wrapper::before {
            top: -10px;
        }

        .zigzag-cta-wrapper::after {
            bottom: -10px;
        }

        .zigzag-cta-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
        }

        .zigzag-cta-content h3 {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 15px;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 1;
                transform: scale(1);
            }
            50% {
                opacity: 0.9;
                transform: scale(1.02);
            }
        }

        .zigzag-cta-content p {
            font-size: 16px;
            opacity: 0.95;
            margin-bottom: 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .zigzag-highlight-box {
            background: rgba(255, 255, 255, 0.15);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 15px;
            padding: 25px;
            display: inline-block;
            backdrop-filter: blur(10px);
            margin-top: 20px;
        }

        .zigzag-highlight-box h4 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #fff;
        }

        .zigzag-highlight-box p {
            font-size: 15px;
            margin: 0;
        }

        .zigzag-cta-btn {
            background: white;
            color: #667eea;
            border: none;
            padding: 16px 50px;
            font-size: 16px;
            font-weight: 700;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-top: 25px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            display: inline-block;
        }

        .zigzag-cta-btn:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.3);
        }

        /* Benefits Section */
        .benefits-section {
            background: white;
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 36px;
            font-weight: 800;
            color: #333;
            margin-bottom: 15px;
        }

        .section-title p {
            font-size: 18px;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .benefit-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 15px;
            padding: 35px;
            text-align: center;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .benefit-card:hover {
            border-color: #667eea;
            background: linear-gradient(135deg, #f0f4ff 0%, #e9ecef 100%);
            transform: translateY(-8px);
            box-shadow: 0 10px 40px rgba(102, 126, 234, 0.1);
        }

        .benefit-icon {
            font-size: 48px;
            margin-bottom: 20px;
            display: block;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .benefit-card h5 {
            font-size: 18px;
            font-weight: 700;
            color: #333;
            margin-bottom: 12px;
        }

        .benefit-card p {
            color: #666;
            font-size: 14px;
            margin: 0;
            line-height: 1.6;
        }

        .cta-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 60px 0;
            text-align: center;
            border-radius: 20px;
            margin-top: 80px;
            box-shadow: 0 15px 50px rgba(102, 126, 234, 0.2);
        }

        .cta-section h3 {
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .cta-section p {
            font-size: 16px;
            opacity: 0.95;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-button {
            background: white;
            color: #667eea;
            border: none;
            padding: 14px 40px;
            font-size: 16px;
            font-weight: 700;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .cta-button:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .contact-info-banner {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 40px 0;
            margin-top: 60px;
            border-radius: 15px;
        }

        .contact-info-item {
            text-align: center;
            padding: 20px;
        }

        .contact-info-icon {
            font-size: 32px;
            color: #667eea;
            margin-bottom: 12px;
            display: block;
        }

        .contact-info-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 6px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .contact-info-value {
            color: #667eea;
            font-weight: 700;
            font-size: 16px;
        }

        @media (max-width: 768px) {
            .quote-hero {
                padding: 60px 0 40px 0;
            }

            .quote-hero h1 {
                font-size: 32px;
            }

            .quote-hero p {
                font-size: 16px;
            }

            .quote-highlights {
                gap: 20px;
            }

            .form-card {
                padding: 40px 25px;
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .benefits-grid {
                grid-template-columns: 1fr;
            }

            .section-title h2 {
                font-size: 28px;
            }

            .cta-section {
                padding: 40px 25px;
            }

            .cta-section h3 {
                font-size: 22px;
            }
        }
    </style>

    <!-- Hero Section -->
    <div class="quote-hero">
        <div class="quote-hero-content">
            <h1>📋 Request A Quote</h1>
            <p>Need A Free Quote? Please Feel Free to Contact Us</p>
            <div class="quote-highlights">
                <div class="highlight-item">
                    <div class="highlight-icon">⏱️</div>
                    <div class="highlight-text">Reply within 24 hours</div>
                </div>
                <div class="highlight-item">
                    <div class="highlight-icon">☎️</div>
                    <div class="highlight-text">24 hrs telephone support</div>
                </div>
                <div class="highlight-item">
                    <div class="highlight-icon">👥</div>
                    <div class="highlight-text">Expert Team</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quote Form Section -->
    <div class="quote-form-wrapper">
        <div class="container quote-form-container">
            <div class="form-card">
                <!-- Success Message -->
                @if ($errors->any() && !$errors->has('contact'))
                    <!-- errors shown below -->
                @endif

                @if (session('contact_success'))
                    <div class="success-alert">
                        <strong>{{ session('contact_success') }}</strong>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="error-alert">
                        <strong>Please correct the errors below and try again.</strong>
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" id="quoteForm">
                    @csrf

                    <!-- Personal Information Section -->
                    <div class="form-section-title">👤 Your Information</div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">
                                Full Name
                                <span class="required-star">*</span>
                            </label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @endError"
                                placeholder="John Doe" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                Company Name <span style="color: #999; font-size: 13px;">(Optional)</span>
                            </label>
                            <input type="text" name="subject" class="form-control @error('subject') is-invalid @endError"
                                placeholder="Your Company" value="{{ old('subject') }}">
                            @error('subject')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">
                                Email Address
                                <span class="required-star">*</span>
                            </label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @endError"
                                placeholder="you@company.com" value="{{ old('email') }}" required>
                            <small class="form-help-text">📧 We'll reply to this email within 24 hours</small>
                            @error('email')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                Mobile Number
                                <span class="required-star">*</span>
                            </label>
                            <input type="tel" name="mobile" class="form-control @error('mobile') is-invalid @endError"
                                placeholder="9876543210" value="{{ old('mobile') }}" pattern="[0-9]{10}"
                                maxlength="10" inputmode="numeric" required>
                            <small class="form-help-text">☎️ 10-digit mobile number</small>
                            @error('mobile')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Project Details Section -->
                    <div class="form-section-title" style="margin-top: 40px;">💼 Project Details</div>

                    <div class="form-group">
                        <label class="form-label">
                            Select IT Service <span style="color: #999; font-size: 13px;">(Optional)</span>
                        </label>
                        <select id="serviceDropdown" class="form-control services-dropdown">
                            <option value="">-- Select a service (or skip and describe below) --</option>
                            <option value="website_design">🌐 Website Design & Development</option>
                            <option value="seo_marketing">📊 SEO & Digital Marketing</option>
                            <option value="software_dev">💻 Software Development</option>
                            <option value="mobile_app">📱 Mobile Application Development</option>
                            <option value="ai_chatbot">🤖 AI Chatbot & Automation</option>
                            <option value="crm_erp">⚙️ CRM & ERP Development</option>
                            <option value="ecommerce">🛍️ E-commerce Development</option>
                            <option value="api_integration">🔌 API Integration</option>
                            <option value="custom_solutions">💡 Custom IT Solutions</option>
                            <option value="other_services">✨ Other IT Services</option>
                        </select>
                        <small class="form-help-text">💡 Choose from our services or describe your needs below</small>
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            Tell us about your project
                            <span class="required-star">*</span>
                        </label>
                        <textarea name="message" class="form-control @error('message') is-invalid @endError"
                            placeholder="Share your project requirements, goals, timeline, budget range, and any specific features or functionalities you need..."
                            required>{{ old('message') }}</textarea>
                        <small class="form-help-text">📝 The more details you provide, the better quote we can give you</small>
                        @error('message')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <button type="submit" class="submit-btn" id="submitBtn">
                            🚀 Get Your Free Quote Now
                        </button>
                        <p style="text-align: center; color: #999; font-size: 13px; margin-top: 15px;">
                            ✓ We respect your privacy and will never share your information.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Benefits Section -->
    <div class="benefits-section">
        <div class="container">
            <div class="section-title">
                <h2>Why Request A Quote From Us?</h2>
                <p>Share your project requirements with us and receive a personalized quote from our team of experienced
                    professionals.</p>
            </div>

            <div class="benefits-grid">
                <div class="benefit-card">
                    <span class="benefit-icon">⚡</span>
                    <h5>24-Hour Response</h5>
                    <p>Get a personalized quote within 24 hours from our expert team. We're committed to quick turnarounds
                        on all inquiries.</p>
                </div>

                <div class="benefit-card">
                    <span class="benefit-icon">🎯</span>
                    <h5>Personalized Solutions</h5>
                    <p>Our experts analyze your needs and suggest optimal solutions tailored to your specific business
                        requirements and budget.</p>
                </div>

                <div class="benefit-card">
                    <span class="benefit-icon">💰</span>
                    <h5>Transparent Pricing</h5>
                    <p>No hidden charges. We provide detailed, transparent proposals with clear breakdown of all costs and
                        deliverables.</p>
                </div>

                <div class="benefit-card">
                    <span class="benefit-icon">👨‍💼</span>
                    <h5>Expert Consultation</h5>
                    <p>Connect with experienced professionals who understand your industry. Get free expert advice without
                        any commitment.</p>
                </div>

                <div class="benefit-card">
                    <span class="benefit-icon">📅</span>
                    <h5>Custom Timeline</h5>
                    <p>We discuss your timeline and deadlines, ensuring that our proposal matches your project schedule and
                        milestones.</p>
                </div>

                <div class="benefit-card">
                    <span class="benefit-icon">🔒</span>
                    <h5>Confidential & Secure</h5>
                    <p>Your project details are completely confidential. We sign NDAs and maintain strict data security
                        protocols.</p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="container">
            <div class="cta-section">
                <h3>🎁 Don't Wait! Get Your Free Quote Today</h3>
                <p>Whether you need web development, mobile applications, custom software, digital marketing, or any IT
                    solution, our team is ready to help. Submit the form above and let's discuss your vision!</p>
                <a href="#quoteForm" style="text-decoration: none;">
                    <button class="cta-button">Start Your Quote</button>
                </a>
            </div>
        </div>
    </div>

    <!-- Zigzag CTA Section - Project Demo Booking -->
    <div class="zigzag-cta-wrapper">
        <div class="zigzag-cta-content">
            <h3>🎯 Book Your Project Demo Now</h3>
            <p>Take the next step and schedule an interactive demo with our expert team. Let us showcase how we can transform your business with our cutting-edge IT solutions.</p>
            
            <div class="zigzag-highlight-box">
                <h4>💡 Ready to See It in Action?</h4>
                <p>Click below to book a personalized demo call with our specialists. No commitment required!</p>
            </div>

            <button class="zigzag-cta-btn" onclick="document.getElementById('chatbotToggle')?.click()">
                ✨ Book Your Demo Now
            </button>
        </div>
    </div>

    <!-- Contact Info Banner -->
    <div class="container contact-info-banner">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="contact-info-item">
                    <span class="contact-info-icon">📧</span>
                    <div class="contact-info-label">Email Us</div>
                    <div class="contact-info-value">shrimishra2021@gmail.com</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="contact-info-item">
                    <span class="contact-info-icon">☎️</span>
                    <div class="contact-info-label">Call Us</div>
                    <div class="contact-info-value">+91 7754908252</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="contact-info-item">
                    <span class="contact-info-icon">⏱️</span>
                    <div class="contact-info-label">Response Time</div>
                    <div class="contact-info-value">24 Hours</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="contact-info-item">
                    <span class="contact-info-icon">💼</span>
                    <div class="contact-info-label">Support</div>
                    <div class="contact-info-value">24/7 Available</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('quoteForm').addEventListener('submit', function() {
            const submitBtn = document.getElementById('submitBtn');
            submitBtn.disabled = true;
            submitBtn.classList.add('loading');
        });

        // Real-time validation feedback
        const inputs = document.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.value.trim() !== '') {
                    this.classList.add('is-valid');
                    this.classList.remove('is-invalid');
                }
            });

            input.addEventListener('focus', function() {
                if (this.classList.contains('is-invalid')) {
                    this.classList.remove('is-invalid');
                }
            });
        });
    </script>
@endsection
