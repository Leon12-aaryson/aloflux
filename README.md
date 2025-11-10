# Aloflux

Technology solutions designed for African markets. Building the future of offline-first software.

## About

Aloflux is a technology company dedicated to creating innovative software solutions that address the unique challenges faced by businesses in African markets. We design, develop, and commercialize software with cleaner, offline-first architectures for African markets.

## Features

- **Modern Landing Page**: Responsive design with smooth scrolling navigation
- **Contact Form**: Fully functional contact form with email notifications
- **Email System**: Integrated email sending with Laravel Mail
- **Offline-First Architecture**: Built with offline-first principles in mind

## Tech Stack

- **Framework**: Laravel 12
- **PHP**: ^8.2
- **Frontend**: Tailwind CSS, Vite
- **Icons**: Boxicons
- **Email**: Laravel Mail (supports SMTP, Mailgun, SES, Postmark, etc.)

## Installation

### Prerequisites

- PHP ^8.2
- Composer
- Node.js and npm
- SQLite (or MySQL/PostgreSQL)

### Setup Steps

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd aloflux
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Environment Configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure your `.env` file**
   ```env
   APP_NAME="Aloflux"
   APP_URL=http://localhost:8000
   
   # Database (SQLite by default)
   DB_CONNECTION=sqlite
   DB_DATABASE=/absolute/path/to/database.sqlite
   
   # Mail Configuration
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.mailtrap.io
   MAIL_PORT=2525
   MAIL_USERNAME=your_username
   MAIL_PASSWORD=your_password
   MAIL_ENCRYPTION=tls
   MAIL_FROM_ADDRESS=info@aloflux.com
   MAIL_FROM_NAME="Aloflux"
   MAIL_TO_ADDRESS=admin@aloflux.com
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Build assets**
   ```bash
   npm run build
   ```

8. **Start the development server**
   ```bash
   php artisan serve
   ```

   Or use the dev script for full development environment:
   ```bash
   composer run dev
   ```

## Email Configuration

The application includes a fully functional contact form that sends emails. Configure your email settings in the `.env` file.

### For Development/Testing

**Option 1: Log Driver (Emails written to log file)**
```env
MAIL_MAILER=log
MAIL_FROM_ADDRESS=info@aloflux.com
MAIL_TO_ADDRESS=admin@aloflux.com
```

**Option 2: Mailtrap (Recommended for testing)**
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_ENCRYPTION=tls
```

### For Production

Configure your production email service (SMTP, Mailgun, AWS SES, SendGrid, etc.):

```env
MAIL_MAILER=smtp  # or mailgun, ses, postmark, etc.
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=info@aloflux.com
MAIL_FROM_NAME="Aloflux"
MAIL_TO_ADDRESS=admin@aloflux.com
```

After changing email configuration, clear the config cache:
```bash
php artisan config:clear
```

For detailed email testing instructions, see [TESTING_EMAILS.md](TESTING_EMAILS.md).

## Project Structure

```
aloflux/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── ContactController.php    # Handles contact form submissions
│   └── Mail/
│       └── ContactFormMail.php          # Email mailable class
├── resources/
│   ├── views/
│   │   ├── index.blade.php              # Main landing page
│   │   └── emails/
│   │       └── contact.blade.php        # Email template
│   ├── css/
│   │   └── app.css                      # Custom styles
│   └── js/
│       └── app.js                       # JavaScript
├── routes/
│   └── web.php                          # Application routes
└── config/
    └── mail.php                          # Mail configuration
```

## Features Overview

### Contact Form

- **Location**: `/` (scroll to contact section)
- **Validation**: Server-side validation for all fields
- **Email Notifications**: Sends formatted email to configured address
- **User Feedback**: Success/error messages with auto-scroll
- **Form Reset**: Automatically resets on successful submission

### Email System

- **Mailable Class**: `App\Mail\ContactFormMail`
- **Email Template**: `resources/views/emails/contact.blade.php`
- **Features**:
  - HTML email template with brand styling
  - Reply-to address set to sender's email
  - Formatted display of all contact form fields
  - Professional email design

## Development

### Available Commands

```bash
# Start development server with all tools
composer run dev

# Run tests
composer run test

# Clear configuration cache
php artisan config:clear

# View logs in real-time
php artisan pail
```

### Testing Email

You can test the email functionality using the provided script:
```bash
./test-email.sh
```

Or manually test via Tinker:
```bash
php artisan tinker
```

Then:
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

## Routes

- `GET /` - Landing page
- `POST /contact` - Contact form submission

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Support

For issues or questions, please contact:
- Email: info@aloflux.com
- Phone: +256 758 831249

---