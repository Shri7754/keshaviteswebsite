# Contact Form - Updated Field Layout

## Visual Form Structure

```
╔══════════════════════════════════════════════════════════════╗
║                    GET IN TOUCH                              ║
║            We'd Love to Hear From You                         ║
╠══════════════════════════════════════════════════════════════╣
║                                                              ║
║  ┌──────────────────────┐  ┌──────────────────────┐          ║
║  │ Your Full Name *     │  │ Your Email Address * │          ║
║  └──────────────────────┘  └──────────────────────┘          ║
║                                                              ║
║  ┌──────────────────────┐  ┌──────────────────────┐          ║
║  │ Mobile (10 digits) * │  │ Subject (Optional)   │          ║
║  │ e.g., 9876543210     │  │ e.g., Website Dev    │          ║
║  └──────────────────────┘  └──────────────────────┘          ║
║                                                              ║
║  ┌────────────────────────────────────────────────┐          ║
║  │ Please describe your project requirements...   │          ║
║  │                                                │          ║
║  │  (5 rows textarea)                             │          ║
║  │                                                │          ║
║  └────────────────────────────────────────────────┘          ║
║                                                              ║
║           [ Send Message Now ]                               ║
║                                                              ║
╚══════════════════════════════════════════════════════════════╝
```

## Field Details

### 1. Name
- **Type**: Text Input
- **Validation**: Required, max 255 characters
- **Placeholder**: "Your Full Name"

### 2. Email Address
- **Type**: Email Input
- **Validation**: Required, valid email format
- **Placeholder**: "Your Email Address"

### 3. Mobile Number ⭐ NEW
- **Type**: Tel Input (HTML5)
- **Validation**: Required, exactly 10 digits
- **Pattern**: `[0-9]{10}`
- **Placeholder**: "Your Mobile Number (10 digits)"
- **Features**:
  - Client-side HTML5 validation
  - Server-side regex validation: `/^[0-9]{10}$/`
  - Max length of 10 characters enforced

### 4. Subject
- **Type**: Text Input
- **Validation**: Optional, max 255 characters
- **Placeholder**: "Subject (Optional)"

### 5. Message
- **Type**: Textarea
- **Validation**: Required, max 5000 characters
- **Placeholder**: "Please describe your project requirements or questions..."
- **Rows**: 5

## Email Notification Example

```
To: shrimishra2021@gmail.com
From: noreply@keshavites.com
Reply-To: [customer's email]
Subject: New Contact Enquiry - [Customer Name]

─────────────────────────────────────────
New Contact Enquiry - Keshav ITES
─────────────────────────────────────────

Name: John Doe
Email: john@example.com
Mobile: 9876543210 ⭐ NEW
Subject: Website Development Project
Message:
  I'm looking for a custom web application...

─────────────────────────────────────────
Contact enquiry received from Keshav ITES website.
```

## Validation Messages

| Field | Error Message |
|-------|---------------|
| Name | The name field is required. |
| Email | The email must be a valid email address. |
| Mobile | The mobile field must contain exactly 10 digits. |
| Subject | The subject may not be greater than 255 characters. |
| Message | The message field is required. |

## Form Behavior

✅ **Old Form Data Preservation**: Form values persist if there are validation errors (using `old()` helper)
✅ **Error Display**: Inline error messages shown under each field with Bootstrap styling
✅ **Success Message**: Success alert displayed after successful submission
✅ **Responsive Design**: Mobile-friendly layout with Bootstrap grid (col-sm-6)

## Database Schema

```sql
CREATE TABLE contacts (
    id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mobile VARCHAR(255) NULL,  -- ⭐ NEW
    subject VARCHAR(255) NULL, -- ⭐ UPDATED
    message LONGTEXT NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

## Testing Instructions

### Manual Testing via Browser
1. Navigate to: `http://localhost:8000/contact`
2. Fill in all fields:
   - Name: "Test User"
   - Email: "test@example.com"
   - Mobile: "9876543210"
   - Subject: "Test Message"
   - Message: "This is a test message"
3. Click "Send Message Now"
4. Verify success message appears

### View Sent Emails
- Open MailHog UI: `http://localhost:1025`
- Look for email from: `noreply@keshavites.com`
- Verify mobile number appears in email body

### Database Verification
```bash
php artisan tinker
>>> Contact::latest()->first();
```

Should display all fields including mobile and subject.
