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
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|regex:/^[0-9]{10}$/',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
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

