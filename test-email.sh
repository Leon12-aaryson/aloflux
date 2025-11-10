#!/bin/bash

echo "📧 Email Configuration Test"
echo "=========================="
echo ""

# Check if .env exists
if [ ! -f .env ]; then
    echo "❌ .env file not found!"
    exit 1
fi

echo "Current Mail Configuration:"
echo "---------------------------"

# Extract mail config from .env (if exists)
if grep -q "MAIL_MAILER" .env; then
    echo "MAIL_MAILER: $(grep '^MAIL_MAILER=' .env | cut -d '=' -f2)"
else
    echo "MAIL_MAILER: Not set (using default: log)"
fi

if grep -q "MAIL_TO_ADDRESS" .env; then
    echo "MAIL_TO_ADDRESS: $(grep '^MAIL_TO_ADDRESS=' .env | cut -d '=' -f2)"
else
    echo "MAIL_TO_ADDRESS: Not set (using default: info@aloflux.com)"
fi

if grep -q "MAIL_FROM_ADDRESS" .env; then
    echo "MAIL_FROM_ADDRESS: $(grep '^MAIL_FROM_ADDRESS=' .env | cut -d '=' -f2)"
else
    echo "MAIL_FROM_ADDRESS: Not set"
fi

echo ""
echo "📋 How to Test:"
echo "1. Submit the contact form on your website"
echo "2. Check logs: tail -f storage/logs/laravel.log"
echo "3. Look for: 'Contact form email sent successfully'"
echo ""
echo "💡 Tip: Set MAIL_MAILER=log in .env to see emails in logs"
