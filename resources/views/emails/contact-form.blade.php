<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Enquiry - Keshav ITES</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f5f5f5;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        /* Header Section */
        .email-header {
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }

        .email-header h1 {
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .email-header p {
            font-size: 14px;
            opacity: 0.95;
        }

        /* Main Content */
        .email-content {
            padding: 40px 30px;
        }

        .greeting {
            font-size: 16px;
            color: #333;
            margin-bottom: 30px;
            line-height: 1.8;
        }

        /* Info Cards */
        .info-card {
            background: #f8f9fa;
            border-left: 4px solid #0d6efd;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .info-card-title {
            font-size: 12px;
            text-transform: uppercase;
            color: #0d6efd;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .info-card-content {
            font-size: 15px;
            color: #333;
            word-break: break-all;
        }

        .info-card-content a {
            color: #0d6efd;
            text-decoration: none;
        }

        .info-card-content a:hover {
            text-decoration: underline;
        }

        /* Contact Details Grid */
        .contact-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        .detail-item {
            background: white;
            border: 1px solid #e9ecef;
            padding: 18px;
            border-radius: 8px;
            text-align: center;
        }

        .detail-label {
            font-size: 12px;
            text-transform: uppercase;
            color: #666;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }

        .detail-value {
            font-size: 15px;
            color: #333;
            font-weight: 600;
            word-break: break-all;
        }

        /* Message Section */
        .message-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 25px;
            border-radius: 8px;
            margin-bottom: 30px;
            border: 1px solid #dee2e6;
        }

        .message-title {
            font-size: 14px;
            text-transform: uppercase;
            color: #0d6efd;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .message-title::before {
            content: "💬";
            margin-right: 8px;
        }

        .message-content {
            background: white;
            padding: 20px;
            border-radius: 6px;
            font-size: 14px;
            line-height: 1.8;
            color: #333;
            white-space: pre-wrap;
            word-wrap: break-word;
            border-left: 3px solid #28a745;
        }

        /* CTA Button */
        .cta-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            color: white;
            padding: 14px 40px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            font-size: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 15px rgba(13, 110, 253, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(13, 110, 253, 0.4);
        }

        /* Action Items */
        .action-items {
            background: #f0fdf4;
            border: 1px solid #86efac;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .action-items-title {
            font-size: 14px;
            font-weight: 700;
            color: #22c55e;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
        }

        .action-items-title::before {
            content: "✓";
            margin-right: 8px;
            font-weight: bold;
        }

        .action-items-list {
            font-size: 14px;
            color: #15803d;
            line-height: 1.8;
        }

        .action-items-list li {
            margin-bottom: 8px;
            margin-left: 20px;
        }

        /* Footer */
        .email-footer {
            background: #f8f9fa;
            padding: 30px;
            text-align: center;
            border-top: 1px solid #e9ecef;
        }

        .footer-content {
            font-size: 13px;
            color: #666;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        .footer-logo {
            font-size: 16px;
            font-weight: 700;
            color: #0d6efd;
            margin-bottom: 10px;
        }

        .footer-links {
            font-size: 12px;
            margin-top: 15px;
        }

        .footer-links a {
            color: #0d6efd;
            text-decoration: none;
            margin: 0 10px;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        /* Divider */
        .divider {
            height: 1px;
            background: #e9ecef;
            margin: 20px 0;
        }

        /* Badge */
        .badge {
            display: inline-block;
            background: #0d6efd;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-right: 8px;
        }

        /* Status */
        .status-badge {
            display: inline-block;
            background: #28a745;
            color: white;
            padding: 6px 15px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
        }

        /* Responsive */
        @media only screen and (max-width: 600px) {
            .email-container {
                border-radius: 0;
            }

            .email-header {
                padding: 30px 20px;
            }

            .email-header h1 {
                font-size: 24px;
            }

            .email-content {
                padding: 25px 20px;
            }

            .contact-details {
                grid-template-columns: 1fr;
            }

            .detail-item {
                padding: 15px;
            }

            .message-section {
                padding: 20px;
            }

            .message-content {
                padding: 15px;
                font-size: 13px;
            }

            .cta-button {
                padding: 12px 30px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>📬 New Contact Enquiry</h1>
            <p>You have received a new message from your website</p>
        </div>

        <!-- Content -->
        <div class="email-content">
            <!-- Greeting -->
            <p class="greeting">
                Hello! 👋<br>
                A visitor has submitted a contact form on your Keshav ITES website. Here are the details:
            </p>

            <!-- Contact Details -->
            <div class="contact-details">
                <div class="detail-item">
                    <div class="detail-label">👤 Full Name</div>
                    <div class="detail-value">{{ $contact->name }}</div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">📧 Email Address</div>
                    <div class="detail-value">
                        <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">📱 Mobile Number</div>
                    <div class="detail-value">
                        <a href="tel:{{ $contact->mobile }}">{{ $contact->mobile }}</a>
                    </div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">📌 Subject</div>
                    <div class="detail-value">
                        {{ $contact->subject ?? 'Not Specified' }}
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <!-- Message Section -->
            <div class="message-section">
                <div class="message-title">Message Details</div>
                <div class="message-content">{{ $contact->message }}</div>
            </div>

            <!-- Action Items -->
            <div class="action-items">
                <div class="action-items-title">What to do next?</div>
                <ul class="action-items-list">
                    <li><strong>Review</strong> the contact details and message above</li>
                    <li><strong>Reply</strong> to {{ $contact->email }} as soon as possible</li>
                    <li><strong>Save</strong> their contact information for future reference</li>
                    <li><strong>Follow up</strong> within 24 hours for best results</li>
                </ul>
            </div>

            <!-- CTA Button -->
            <div class="cta-section">
                <a href="mailto:{{ $contact->email }}" class="cta-button">💬 Reply to {{ $contact->name }}</a>
            </div>

            <!-- Quick Info Card -->
            <div class="info-card">
                <div class="info-card-title">⏱️ Submission Time</div>
                <div class="info-card-content">
                    {{ $contact->created_at->format('l, F d, Y at h:i A') }}
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <div class="footer-logo">🚀 Keshav ITES</div>
            <div class="footer-content">
                Thank you for using Keshav ITES website contact system.<br>
                This is an automated email notification. Please do not reply to this email.
            </div>
            <div class="divider"></div>
            <div class="footer-content">
                <strong>Website:</strong> https://keshavites.com<br>
                <strong>Email:</strong> info@keshavites.com<br>
                <strong>Phone:</strong> +91 7754908252
            </div>
            <div class="footer-links">
                <a href="https://keshavites.com">Website</a>
                <a href="https://keshavites.com/contact">Contact</a>
                <a href="https://keshavites.com/services">Services</a>
            </div>
            <div style="font-size: 11px; color: #999; margin-top: 20px;">
                © {{ date('Y') }} Keshav ITES. All rights reserved.
            </div>
        </div>
    </div>
</body>
</html>
