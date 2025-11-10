<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Exception;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Send email to the address configured in .env, or default to info@aloflux.com
            $recipientEmail = env('MAIL_TO_ADDRESS', 'admin@aloflux.com');
            
            Mail::to($recipientEmail)
                ->send(new ContactFormMail($request->all()));

            // Log successful email send for debugging
            Log::info('Contact form email sent successfully', [
                'to' => $recipientEmail,
                'from' => $request->email,
                'name' => $request->name,
            ]);

            return back()->with('success', 'Thank you for your message! We will get back to you soon.');
        } catch (Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage(), [
                'exception' => $e,
                'trace' => $e->getTraceAsString(),
            ]);
            
            return back()
                ->with('error', 'Sorry, there was an error sending your message. Please try again later.')
                ->withInput();
        }
    }
}

