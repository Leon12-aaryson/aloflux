# Testing Email Functionality

## Quick Testing Guide

### Method 1: Use Log Driver (Easiest for Local Testing)

1. **Set in your `.env` file:**
   ```env
   MAIL_MAILER=log
   MAIL_FROM_ADDRESS=info@aloflux.com
   MAIL_FROM_NAME="Aloflux"
   MAIL_TO_ADDRESS=your-email@example.com
   ```

2. **Clear config cache:**
   ```bash
   php artisan config:clear
   ```

3. **Submit the contact form** on your website

4. **Check the log file:**
   ```bash
   tail -f storage/logs/laravel.log
   ```
   Or open `storage/logs/laravel.log` and look for:
   - "Contact form email sent successfully" (success message)
   - The full email content will be logged

### Method 2: Use Mailtrap (Recommended for Testing)

1. **Sign up for free at:** https://mailtrap.io

2. **Get your SMTP credentials** from Mailtrap inbox

3. **Set in your `.env` file:**
   ```env
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.mailtrap.io
   MAIL_PORT=2525
   MAIL_USERNAME=your_mailtrap_username
   MAIL_PASSWORD=your_mailtrap_password
   MAIL_ENCRYPTION=tls
   MAIL_FROM_ADDRESS=info@aloflux.com
   MAIL_FROM_NAME="Aloflux"
   MAIL_TO_ADDRESS=your-email@example.com
   ```

4. **Clear config cache:**
   ```bash
   php artisan config:clear
   ```

5. **Submit the contact form**

6. **Check your Mailtrap inbox** - you'll see the email there without sending real emails

### Method 3: Use Real SMTP (Production Testing)

1. **Configure your SMTP provider** (Gmail, SendGrid, Mailgun, etc.) in `.env`

2. **Set the receiving email:**
   ```env
   MAIL_TO_ADDRESS=your-actual-email@example.com
   ```

3. **Clear config cache:**
   ```bash
   php artisan config:clear
   ```

4. **Submit the contact form**

5. **Check your inbox** (and spam folder)

## How to Verify It's Working

### ✅ Success Indicators:

1. **On the website:**
   - You see a green success message: "Thank you for your message! We will get back to you soon."

2. **In Laravel logs** (`storage/logs/laravel.log`):
   ```
   [2024-XX-XX XX:XX:XX] local.INFO: Contact form email sent successfully {"to":"your-email@example.com","from":"test@example.com","name":"Test User"}
   ```

3. **In your email inbox** (if using real SMTP):
   - Subject: "New Contact Form Submission - Aloflux"
   - From: info@aloflux.com (or your MAIL_FROM_ADDRESS)
   - Reply-To: The email address from the form

### ❌ Error Indicators:

1. **On the website:**
   - Red error message: "Sorry, there was an error sending your message. Please try again later."

2. **In Laravel logs:**
   ```
   [2024-XX-XX XX:XX:XX] local.ERROR: Contact form error: [error message]
   ```

## Troubleshooting

### Check Configuration

Run this command to see your current mail configuration:
```bash
php artisan tinker
```
Then type:
```php
config('mail')
```

### Common Issues:

1. **"Connection timeout"**
   - Check your SMTP host and port
   - Verify firewall isn't blocking the connection

2. **"Authentication failed"**
   - Double-check MAIL_USERNAME and MAIL_PASSWORD
   - Some providers require app-specific passwords

3. **"Email not received"**
   - Check spam/junk folder
   - Verify MAIL_TO_ADDRESS is correct
   - Check if your email provider is blocking the sender

4. **"Config not updating"**
   - Run: `php artisan config:clear`
   - Restart your Laravel server

### View Logs in Real-Time

```bash
# Watch logs in real-time
tail -f storage/logs/laravel.log

# Or use Laravel Pail (if installed)
php artisan pail
```

### Test Email Configuration

You can test your email configuration directly:

```bash
php artisan tinker
```

Then run:
```php
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

Mail::to('test@example.com')->send(new ContactFormMail([
    'name' => 'Test User',
    'email' => 'test@example.com',
    'company' => 'Test Company',
    'message' => 'This is a test message'
]));
```

## Production Checklist

Before going live, ensure:

- [ ] MAIL_MAILER is set to a production service (smtp, mailgun, ses, etc.)
- [ ] MAIL_FROM_ADDRESS matches your domain
- [ ] MAIL_TO_ADDRESS is set to your actual support email
- [ ] SMTP credentials are correct and tested
- [ ] Email deliverability is tested
- [ ] SPF/DKIM records are configured for your domain (if using custom domain)

