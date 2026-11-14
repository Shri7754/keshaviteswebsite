<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Demo Booking - Keshav ITES</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 40px 30px;
            color: white;
            text-align: center;
        }

        .email-header h1 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
            letter-spacing: 0.5px;
        }

        .email-header p {
            font-size: 14px;
            opacity: 0.95;
            margin-top: 10px;
        }

        .email-body {
            padding: 40px 30px;
        }

        .greeting {
            font-size: 16px;
            margin-bottom: 20px;
            color: #333;
        }

        .greeting strong {
            color: #667eea;
        }

        .section-title {
            font-size: 14px;
            font-weight: 700;
            color: #667eea;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 25px;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f0f0f0;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        .info-card {
            background: #f9fafb;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #667eea;
        }

        .info-card.secondary {
            border-left-color: #764ba2;
        }

        .info-label {
            font-size: 12px;
            color: #888;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .info-value {
            font-size: 15px;
            color: #333;
            font-weight: 500;
            word-break: break-word;
        }

        .info-value a {
            color: #667eea;
            text-decoration: none;
        }

        .info-value a:hover {
            text-decoration: underline;
        }

        .description-section {
            background: #f9fafb;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #764ba2;
            margin-bottom: 30px;
        }

        .description-label {
            font-size: 12px;
            color: #888;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .description-content {
            font-size: 14px;
            color: #555;
            line-height: 1.8;
            white-space: pre-wrap;
            word-wrap: break-word;
        }

        .action-box {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 25px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 30px;
        }

        .action-box p {
            font-size: 15px;
            margin-bottom: 15px;
            opacity: 0.95;
        }

        .action-button {
            display: inline-block;
            background: white;
            color: #667eea;
            padding: 12px 30px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .action-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .timeline {
            margin-bottom: 30px;
        }

        .timeline-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .timeline-icon {
            width: 40px;
            height: 40px;
            background: #667eea;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 15px;
            font-size: 18px;
        }

        .timeline-content {
            flex: 1;
        }

        .timeline-title {
            font-weight: 600;
            color: #333;
            margin-bottom: 3px;
        }

        .timeline-desc {
            font-size: 13px;
            color: #888;
        }

        .email-footer {
            background: #f8f9fa;
            padding: 25px 30px;
            text-align: center;
            border-top: 1px solid #e9ecef;
        }

        .footer-note {
            font-size: 12px;
            color: #888;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .footer-contact {
            font-size: 13px;
            color: #555;
            margin-bottom: 15px;
        }

        .footer-contact a {
            color: #667eea;
            text-decoration: none;
        }

        .footer-contact a:hover {
            text-decoration: underline;
        }

        .social-links {
            margin-top: 15px;
        }

        .social-links a {
            display: inline-block;
            width: 32px;
            height: 32px;
            background: #667eea;
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 32px;
            margin: 0 5px;
            text-decoration: none;
            font-size: 14px;
            transition: background 0.2s ease;
        }

        .social-links a:hover {
            background: #764ba2;
        }

        .copyright {
            font-size: 11px;
            color: #aaa;
            margin-top: 15px;
        }

        @media (max-width: 600px) {
            .email-container {
                border-radius: 0;
            }

            .email-body,
            .email-footer {
                padding: 20px;
            }

            .email-header {
                padding: 25px 20px;
            }

            .email-header h1 {
                font-size: 22px;
            }

            .info-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .action-box {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>📋 Project Demo Booking Confirmed</h1>
            <p>New booking received from your website chatbot</p>
        </div>

        <!-- Body -->
        <div class="email-body">
            <div class="greeting">
                Hello <strong>{{ $booking->name }}</strong>,
            </div>

            <p>Thank you for booking a project demo with Keshav ITES! We're excited to discuss how we can help bring
                your IT project to life.</p>

            <!-- Customer Details -->
            <div class="section-title">👤 Customer Information</div>
            <div class="info-grid">
                <div class="info-card">
                    <div class="info-label">📱 Mobile Number</div>
                    <div class="info-value">
                        <a href="tel:{{ $booking->mobile }}">{{ $booking->mobile }}</a>
                    </div>
                </div>
                <div class="info-card secondary">
                    <div class="info-label">📧 Email Address</div>
                    <div class="info-value">
                        <a href="mailto:{{ $booking->email }}">{{ $booking->email }}</a>
                    </div>
                </div>
            </div>

            <!-- Service Details -->
            <div class="section-title">💼 Service Details</div>
            <div class="info-grid">
                <div class="info-card">
                    <div class="info-label">🎯 Selected Service</div>
                    <div class="info-value">{{ $serviceName }}</div>
                </div>
                <div class="info-card secondary">
                    <div class="info-label">📅 Booking ID</div>
                    <div class="info-value">#{{ $booking->id }}</div>
                </div>
            </div>

            <!-- Demo Schedule -->
            <div class="section-title">🗓️ Demo Schedule</div>
            <div class="info-grid">
                <div class="info-card">
                    <div class="info-label">📆 Preferred Date</div>
                    <div class="info-value">{{ $booking->demo_date->format('d M, Y') }}</div>
                </div>
                <div class="info-card secondary">
                    <div class="info-label">🕐 Preferred Time</div>
                    <div class="info-value">{{ $booking->demo_time }}</div>
                </div>
            </div>

            <!-- Project Description -->
            <div class="section-title">📝 Project Description</div>
            <div class="description-section">
                <div class="description-content">{{ $booking->description }}</div>
            </div>

            <!-- Action Box -->
            <div class="action-box">
                <p>✨ Our team will review your booking and contact you shortly to confirm the demo time.</p>
                <a href="https://keshavites.com" class="action-button">View Our Portfolio</a>
            </div>

            <!-- Next Steps -->
            <div class="section-title">📌 What Happens Next</div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-icon">1</div>
                    <div class="timeline-content">
                        <div class="timeline-title">Review & Confirmation</div>
                        <div class="timeline-desc">We'll review your request and confirm the demo time via email.</div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon">2</div>
                    <div class="timeline-content">
                        <div class="timeline-title">Pre-Demo Consultation</div>
                        <div class="timeline-desc">Our experts will prepare a customized demo for your project needs.
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon">3</div>
                    <div class="timeline-content">
                        <div class="timeline-title">Live Demo Session</div>
                        <div class="timeline-desc">Join us for an interactive demonstration of our services and
                            capabilities.</div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon">4</div>
                    <div class="timeline-content">
                        <div class="timeline-title">Next Steps Discussion</div>
                        <div class="timeline-desc">We'll discuss how to proceed with your project and answer all your
                            questions.</div>
                    </div>
                </div>
            </div>

            <p style="color: #666; font-size: 14px;">If you have any questions before the demo, feel free to reply to
                this email and our team will be happy to help!</p>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <div class="footer-contact">
                <strong>Keshav ITES</strong><br>
                Professional Software Development & IT Solutions<br>
                📍 Andheri, Mumbai, Maharashtra<br>
                📞 <a href="tel:+917754908252">+91 7754908252</a> | 📧 <a
                    href="mailto:info@keshavites.com">info@keshavites.com</a>
            </div>

            <div class="social-links">
                <a href="https://www.facebook.com" title="Facebook">f</a>
                <a href="https://www.twitter.com" title="Twitter">𝕏</a>
                <a href="https://www.linkedin.com" title="LinkedIn">in</a>
                <a href="https://www.instagram.com" title="Instagram">📷</a>
                <a href="https://www.youtube.com" title="YouTube">▶</a>
            </div>

            <div class="footer-note">
                <strong>Privacy Notice:</strong> This email contains confidential information intended only for the
                recipient. If you're not the intended recipient, please delete this email and notify us immediately.
            </div>

            <div class="copyright">
                © {{ date('Y') }} Keshav ITES. All rights reserved. | <a href="https://keshavites.com"
                    style="color: #667eea;">Visit Our Website</a>
            </div>
        </div>
    </div>
</body>

</html>
