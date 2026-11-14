<!-- Keshav ITES - IT Project Booking Chatbot Component -->
<style>
    /* ==================== CHATBOT STYLES ==================== */
    
    .chatbot-wrapper {
        position: fixed;
        bottom: 20px;
        right: 20px;
        font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        z-index: 9999;
    }

    /* Floating Chat Icon Button */
    .chatbot-toggle {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        color: white;
        font-size: 24px;
        cursor: pointer;
        box-shadow: 0 4px 20px rgba(102, 126, 234, 0.4);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .chatbot-toggle:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 28px rgba(102, 126, 234, 0.6);
    }

    .chatbot-toggle:active {
        transform: scale(0.95);
    }

    .chatbot-toggle i {
        position: absolute;
        transition: all 0.3s ease;
    }

    .chatbot-toggle i.icon-chat {
        opacity: 1;
        transform: scale(1);
    }

    .chatbot-toggle i.icon-close {
        opacity: 0;
        transform: scale(0);
    }

    .chatbot-toggle.active i.icon-chat {
        opacity: 0;
        transform: scale(0);
    }

    .chatbot-toggle.active i.icon-close {
        opacity: 1;
        transform: scale(1);
    }

    /* Floating Hint Badge */
    .chatbot-hint {
        position: absolute;
        bottom: 75px;
        right: 0;
        background: white;
        border-radius: 20px;
        padding: 8px 16px;
        font-size: 13px;
        color: #333;
        font-weight: 600;
        white-space: nowrap;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
        animation: slideIn 0.4s ease forwards;
        pointer-events: none;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Chat Container */
    .chatbot-container {
        position: absolute;
        bottom: 90px;
        right: 0;
        width: 420px;
        max-height: 600px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 40px rgba(0, 0, 0, 0.16);
        overflow: hidden;
        transform: scale(0.95);
        opacity: 0;
        transition: all 0.3s ease;
        pointer-events: none;
        display: flex;
        flex-direction: column;
    }

    .chatbot-container.active {
        transform: scale(1);
        opacity: 1;
        pointer-events: auto;
    }

    /* Chat Header */
    .chatbot-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 20px;
        text-align: center;
        position: relative;
    }

    .chatbot-header h3 {
        margin: 0;
        font-size: 18px;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .chatbot-header .status {
        display: inline-flex;
        align-items: center;
        font-size: 12px;
        margin-top: 8px;
        font-weight: 500;
        opacity: 0.9;
    }

    .chatbot-header .status::before {
        content: '';
        width: 8px;
        height: 8px;
        background: #4ade80;
        border-radius: 50%;
        display: inline-block;
        margin-right: 6px;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.5;
        }
    }

    /* Chat Body/Content Area */
    .chatbot-body {
        flex: 1;
        overflow-y: auto;
        padding: 20px;
        background: #f8f9fa;
    }

    .chatbot-body::-webkit-scrollbar {
        width: 6px;
    }

    .chatbot-body::-webkit-scrollbar-track {
        background: transparent;
    }

    .chatbot-body::-webkit-scrollbar-thumb {
        background: #ddd;
        border-radius: 3px;
    }

    .chatbot-body::-webkit-scrollbar-thumb:hover {
        background: #ccc;
    }

    /* Services Grid */
    .services-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
    }

    .service-card {
        padding: 15px;
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        text-align: center;
        font-size: 13px;
        font-weight: 600;
        color: white;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    }

    .service-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .service-card:active {
        transform: translateY(-1px);
    }

    .service-card i {
        display: block;
        font-size: 24px;
        margin-bottom: 8px;
    }

    /* Zigzag positioning for cards */
    .service-card:nth-child(1) {
        background: linear-gradient(135deg, #FF6B6B 0%, #FF5252 100%);
    }

    .service-card:nth-child(2) {
        background: linear-gradient(135deg, #4ECDC4 0%, #44A08D 100%);
        margin-top: 8px;
    }

    .service-card:nth-child(3) {
        background: linear-gradient(135deg, #45B7D1 0%, #2E9CDB 100%);
    }

    .service-card:nth-child(4) {
        background: linear-gradient(135deg, #FFA07A 0%, #FF7043 100%);
        margin-top: 8px;
    }

    .service-card:nth-child(5) {
        background: linear-gradient(135deg, #98D8C8 0%, #6DD5B7 100%);
    }

    .service-card:nth-child(6) {
        background: linear-gradient(135deg, #F7DC6F 0%, #F4D03F 100%);
        margin-top: 8px;
    }

    .service-card:nth-child(7) {
        background: linear-gradient(135deg, #BB8FCE 0%, #A569BD 100%);
    }

    .service-card:nth-child(8) {
        background: linear-gradient(135deg, #85C1E2 0%, #5DADE2 100%);
        margin-top: 8px;
    }

    .service-card:nth-child(9) {
        background: linear-gradient(135deg, #F8B6D8 0%, #F48FB1 100%);
    }

    .service-card:nth-child(10) {
        background: linear-gradient(135deg, #B4A7D6 0%, #9B88BB 100%);
        margin-top: 8px;
    }

    /* Welcome Message */
    .welcome-message {
        text-align: center;
        margin-bottom: 20px;
        color: #555;
    }

    .welcome-message h4 {
        margin: 0 0 8px 0;
        color: #333;
        font-size: 15px;
        font-weight: 700;
    }

    .welcome-message p {
        margin: 0;
        font-size: 13px;
        color: #666;
    }

    /* Booking Form Styles */
    .booking-form {
        display: none;
    }

    .booking-form.active {
        display: block;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-label {
        display: block;
        font-size: 12px;
        font-weight: 700;
        color: #333;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 6px;
    }

    .form-input,
    .form-textarea,
    .form-select {
        width: 100%;
        padding: 10px 12px;
        border: 2px solid #e9ecef;
        border-radius: 8px;
        font-size: 14px;
        font-family: inherit;
        transition: all 0.3s ease;
        background: white;
        color: #333;
    }

    .form-input:focus,
    .form-textarea:focus,
    .form-select:focus {
        border-color: #667eea;
        background: white;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        outline: none;
    }

    .form-input.error,
    .form-textarea.error,
    .form-select.error {
        border-color: #dc3545;
        background: #fff5f5;
    }

    .form-textarea {
        resize: vertical;
        min-height: 80px;
        font-size: 13px;
    }

    .error-text {
        color: #dc3545;
        font-size: 11px;
        margin-top: 4px;
        display: none;
        font-weight: 600;
    }

    .error-text.show {
        display: block;
    }

    .error-text::before {
        content: '✕ ';
        font-weight: bold;
        margin-right: 3px;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
    }

    .form-group-back {
        text-align: center;
        margin-bottom: 15px;
    }

    .btn-back {
        background: none;
        border: none;
        color: #667eea;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        text-decoration: underline;
        padding: 0;
        transition: color 0.2s ease;
    }

    .btn-back:hover {
        color: #764ba2;
    }

    /* Chat Footer / Buttons */
    .chatbot-footer {
        padding: 15px;
        background: white;
        border-top: 1px solid #e9ecef;
        display: flex;
        gap: 10px;
    }

    .btn-primary,
    .btn-secondary {
        flex: 1;
        padding: 12px;
        border: none;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
    }

    .btn-primary:disabled {
        opacity: 0.5;
        cursor: not-allowed;
        transform: none;
    }

    .btn-primary.loading {
        position: relative;
        color: transparent;
    }

    .btn-primary.loading::after {
        content: '';
        position: absolute;
        width: 14px;
        height: 14px;
        top: 50%;
        left: 50%;
        margin-left: -7px;
        margin-top: -7px;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-top-color: white;
        border-radius: 50%;
        animation: spin 0.6s linear infinite;
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }

    .btn-secondary {
        background: #f0f0f0;
        color: #333;
    }

    .btn-secondary:hover {
        background: #e0e0e0;
    }

    /* Success Message */
    .success-message {
        display: none;
        text-align: center;
        padding: 20px;
        color: #155724;
    }

    .success-message.show {
        display: block;
    }

    .success-message .icon {
        font-size: 48px;
        margin-bottom: 12px;
        animation: scaleIn 0.5s ease;
    }

    @keyframes scaleIn {
        from {
            transform: scale(0);
        }
        to {
            transform: scale(1);
        }
    }

    .success-message h4 {
        margin: 0 0 8px 0;
        color: #155724;
        font-size: 16px;
        font-weight: 700;
    }

    .success-message p {
        margin: 0;
        font-size: 13px;
        color: #155724;
    }

    /* Responsive Design */
    @media (max-width: 480px) {
        .chatbot-container {
            width: calc(100vw - 20px);
            max-height: 80vh;
            bottom: 90px;
            right: 10px;
        }

        .services-grid {
            grid-template-columns: 1fr;
        }

        .service-card:nth-child(even) {
            margin-top: 0 !important;
        }

        .form-row {
            grid-template-columns: 1fr;
        }

        .chatbot-wrapper {
            bottom: 10px;
            right: 10px;
        }

        .chatbot-toggle {
            width: 50px;
            height: 50px;
            font-size: 20px;
        }
    }
</style>

<!-- Chatbot HTML Structure -->
<div class="chatbot-wrapper">
    <!-- Floating Chat Icon Button -->
    <button class="chatbot-toggle" id="chatbotToggle" title="Chat with us">
        <i class="fas fa-comments icon-chat"></i>
        <i class="fas fa-times icon-close"></i>
    </button>

    <!-- Floating Hint -->
    <div class="chatbot-hint" id="chatbotHint">💬 How can I help you?</div>

    <!-- Chat Container -->
    <div class="chatbot-container" id="chatbotContainer">
        <!-- Header -->
        <div class="chatbot-header">
            <h3>✨ Keshav ITES Assistant</h3>
            <div class="status">Online - Ready to help</div>
        </div>

        <!-- Body -->
        <div class="chatbot-body" id="chatbotBody">
            <!-- Welcome Message -->
            <div class="welcome-message" id="welcomeMessage">
                <h4>🎯 Select a Service</h4>
                <p>Choose the IT service you're interested in</p>
            </div>

            <!-- Services Grid -->
            <div class="services-grid" id="servicesGrid">
                <!-- Services will be populated by JavaScript -->
            </div>

            <!-- Booking Form -->
            <form class="booking-form" id="bookingForm" method="POST" action="{{ route('booking.store') }}">
                @csrf

                <div class="form-group-back">
                    <button type="button" class="btn-back" onclick="chatbot.goBack()">← Back to Services</button>
                </div>

                <div class="form-group">
                    <label class="form-label">📋 Full Name <span style="color: #dc3545;">*</span></label>
                    <input type="text" class="form-input" name="name" placeholder="John Doe" required>
                    <div class="error-text" data-field="name"></div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">📱 Mobile <span style="color: #dc3545;">*</span></label>
                        <input type="tel" class="form-input" name="mobile" placeholder="9876543210" required>
                        <div class="error-text" data-field="mobile"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">📧 Email <span style="color: #dc3545;">*</span></label>
                        <input type="email" class="form-input" name="email" placeholder="you@example.com" required>
                        <div class="error-text" data-field="email"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">💼 Selected Service <span style="color: #dc3545;">*</span></label>
                    <div style="background: white; border: 2px solid #e9ecef; border-radius: 8px; padding: 10px 12px; font-size: 14px; color: #333; font-weight: 600;">
                        <span id="selectedServiceDisplay">-</span>
                    </div>
                    <input type="hidden" name="service" id="selectedService" required>
                    <div class="error-text" data-field="service"></div>
                </div>

                <div class="form-group">
                    <label class="form-label">📝 Project Description <span style="color: #dc3545;">*</span></label>
                    <textarea class="form-textarea" name="description" placeholder="Tell us about your project (min 10 characters)"
                        required></textarea>
                    <div class="error-text" data-field="description"></div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">📅 Preferred Date <span style="color: #dc3545;">*</span></label>
                        <input type="date" class="form-input" name="demo_date" required>
                        <div class="error-text" data-field="demo_date"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">🕐 Preferred Time <span style="color: #dc3545;">*</span></label>
                        <input type="time" class="form-input" name="demo_time" required>
                        <div class="error-text" data-field="demo_time"></div>
                    </div>
                </div>

                <input type="hidden" name="selected_service_key" id="selectedServiceKey">
            </form>

            <!-- Success Message -->
            <div class="success-message" id="successMessage">
                <div class="icon">✅</div>
                <h4>Booking Confirmed!</h4>
                <p>Your project demo request has been received. Our team will contact you shortly at the provided
                    mobile number.</p>
            </div>
        </div>

        <!-- Footer -->
        <div class="chatbot-footer" id="chatbotFooter">
            <button type="button" class="btn-secondary" id="closeBtn" onclick="chatbot.close()">Close</button>
            <button type="submit" class="btn-primary" id="submitBtn" form="bookingForm">Book Demo</button>
        </div>
    </div>
</div>

<!-- Chatbot JavaScript -->
<script>
    // Chatbot Configuration & Logic
    const chatbot = {
        state: 'services', // services, booking, success
        services: {},
        selectedService: null,
        hintHideTimeout: null,

        // Initialize chatbot
        init() {
            this.attachEventListeners();
            this.loadServices();
            this.setMinDate();
            this.hideHint();
        },

        // Attach event listeners
        attachEventListeners() {
            const toggle = document.getElementById('chatbotToggle');
            toggle.addEventListener('click', () => this.toggle());

            const form = document.getElementById('bookingForm');
            form.addEventListener('submit', (e) => this.submitForm(e));

            // Clear error on input
            form.querySelectorAll('.form-input, .form-textarea, .form-select').forEach(field => {
                field.addEventListener('input', () => {
                    this.clearError(field.name);
                });
            });
        },

        // Load services from backend
        loadServices() {
            fetch('{{ route("booking.services") }}')
                .then(response => response.json())
                .then(data => {
                    this.services = data.services;
                    this.renderServices();
                })
                .catch(error => {
                    console.error('Error loading services:', error);
                });
        },

        // Render service cards
        renderServices() {
            const grid = document.getElementById('servicesGrid');
            grid.innerHTML = '';

            Object.entries(this.services).forEach(([key, name]) => {
                const card = document.createElement('button');
                card.type = 'button';
                card.className = 'service-card';
                card.innerHTML = `
                    <i class="fas fa-${this.getServiceIcon(key)}"></i>
                    <div>${name}</div>
                `;
                card.onclick = () => this.selectService(key, name);
                grid.appendChild(card);
            });
        },

        // Get icon for service
        getServiceIcon(service) {
            const icons = {
                'website_design': 'globe',
                'seo_marketing': 'chart-line',
                'software_dev': 'code',
                'mobile_app': 'mobile-alt',
                'ai_chatbot': 'robot',
                'crm_erp': 'cogs',
                'ecommerce': 'shopping-cart',
                'api_integration': 'plug',
                'custom_solutions': 'lightbulb',
                'other_services': 'ellipsis-h',
            };
            return icons[service] || 'star';
        },

        // Select a service and show booking form
        selectService(serviceKey, serviceName) {
            this.selectedService = serviceKey;
            document.getElementById('selectedServiceDisplay').textContent = serviceName;
            document.getElementById('selectedService').value = serviceKey;
            document.getElementById('selectedServiceKey').value = serviceKey;
            this.showBookingForm();
        },

        // Show booking form
        showBookingForm() {
            document.getElementById('welcomeMessage').style.display = 'none';
            document.getElementById('servicesGrid').style.display = 'none';
            document.getElementById('bookingForm').classList.add('active');
            document.getElementById('submitBtn').textContent = 'Book Demo';
            this.state = 'booking';
        },

        // Go back to services
        goBack() {
            document.getElementById('bookingForm').classList.remove('active');
            document.getElementById('bookingForm').reset();
            document.getElementById('selectedServiceDisplay').textContent = '-';
            document.getElementById('selectedService').value = '';
            document.getElementById('selectedServiceKey').value = '';
            document.getElementById('welcomeMessage').style.display = 'block';
            document.getElementById('servicesGrid').style.display = 'grid';
            this.clearAllErrors();
            this.selectedService = null;
            this.state = 'services';
        },

        // Set minimum date to today + 1
        setMinDate() {
            const tomorrow = new Date();
            tomorrow.setDate(tomorrow.getDate() + 1);
            const minDate = tomorrow.toISOString().split('T')[0];
            document.querySelector('input[name="demo_date"]').setAttribute('min', minDate);
        },

        // Submit booking form
        async submitForm(e) {
            e.preventDefault();

            const form = document.getElementById('bookingForm');
            const submitBtn = document.getElementById('submitBtn');

            // Clear previous errors
            this.clearAllErrors();

            // Get form data
            const formData = new FormData(form);

            // Disable button and show loading
            submitBtn.disabled = true;
            submitBtn.classList.add('loading');

            try {
                const response = await fetch('{{ route("booking.store") }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                        'Accept': 'application/json',
                    },
                    body: formData,
                });

                const data = await response.json();

                if (response.ok && data.success) {
                    // Show success message
                    this.showSuccess();
                    form.reset();
                } else {
                    // Show validation errors
                    if (data.errors) {
                        Object.entries(data.errors).forEach(([field, messages]) => {
                            this.showError(field, messages[0]);
                        });
                    } else {
                        alert(data.message || 'An error occurred. Please try again.');
                    }
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            } finally {
                submitBtn.disabled = false;
                submitBtn.classList.remove('loading');
            }
        },

        // Show success message
        showSuccess() {
            document.getElementById('bookingForm').classList.remove('active');
            document.getElementById('successMessage').classList.add('show');
            this.state = 'success';

            // Auto close after 5 seconds
            setTimeout(() => {
                this.close();
            }, 5000);
        },

        // Show error for a field
        showError(field, message) {
            const input = document.querySelector(`input[name="${field}"], textarea[name="${field}"], select[name="${field}"]`);
            const errorElement = document.querySelector(`.error-text[data-field="${field}"]`);

            if (input) {
                input.classList.add('error');
            }
            if (errorElement) {
                errorElement.textContent = message;
                errorElement.classList.add('show');
            }
        },

        // Clear error for a field
        clearError(field) {
            const input = document.querySelector(`input[name="${field}"], textarea[name="${field}"], select[name="${field}"]`);
            const errorElement = document.querySelector(`.error-text[data-field="${field}"]`);

            if (input) {
                input.classList.remove('error');
            }
            if (errorElement) {
                errorElement.classList.remove('show');
            }
        },

        // Clear all errors
        clearAllErrors() {
            document.querySelectorAll('.form-input, .form-textarea, .form-select').forEach(field => {
                field.classList.remove('error');
            });
            document.querySelectorAll('.error-text').forEach(el => {
                el.classList.remove('show');
            });
        },

        // Toggle chat open/close
        toggle() {
            const container = document.getElementById('chatbotContainer');
            const toggle = document.getElementById('chatbotToggle');

            container.classList.toggle('active');
            toggle.classList.toggle('active');

            if (container.classList.contains('active')) {
                this.hideHint();
            }
        },

        // Open chat
        open() {
            document.getElementById('chatbotContainer').classList.add('active');
            document.getElementById('chatbotToggle').classList.add('active');
            this.hideHint();
        },

        // Close chat
        close() {
            document.getElementById('chatbotContainer').classList.remove('active');
            document.getElementById('chatbotToggle').classList.remove('active');
            this.goBack();
            document.getElementById('successMessage').classList.remove('show');
            this.state = 'services';
        },

        // Hide hint after 3 seconds
        hideHint() {
            clearTimeout(this.hintHideTimeout);
            this.hintHideTimeout = setTimeout(() => {
                const hint = document.getElementById('chatbotHint');
                if (hint) {
                    hint.style.opacity = '0';
                    hint.style.pointerEvents = 'none';
                }
            }, 3000);
        }
    };

    // Initialize chatbot when DOM is ready
    document.addEventListener('DOMContentLoaded', () => {
        chatbot.init();
    });
</script>
