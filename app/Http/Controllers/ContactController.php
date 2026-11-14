<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc|max:255',
            'mobile' => 'required|string|regex:/^[0-9]{10}$/',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
        ], [
            'name.required' => 'Please enter your full name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address (e.g., yourname@gmail.com).',
            'mobile.required' => 'Please enter your mobile number.',
            'mobile.regex' => 'Please enter exactly 10 digits for mobile number.',
            'message.required' => 'Please enter your message.',
            'message.max' => 'Your message cannot exceed 5000 characters.',
        ]);

        try {
            // Save contact in database
            $contact = Contact::create($validated);

            // Send beautiful email notification using Mailable
            Mail::send(new ContactFormMail($contact));

            return back()->with('success', 'Thank you! Your message has been sent successfully.');

        } catch (\Throwable $e) {

            \Log::error('Contact Form Error: ' . $e->getMessage());

            return back()->with('error', 'Something went wrong. Please try again.');
        }
    }
}


