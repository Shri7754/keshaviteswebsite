<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

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

        // Send email notification
        \Illuminate\Support\Facades\Mail::html(
            '
            <h2>New Contact Enquiry - Keshav ITES</h2>
            <hr>
            <p><strong>Name:</strong> '.e($contact->name).'</p>
            <p><strong>Email:</strong> '.e($contact->email).'</p>
            <p><strong>Mobile:</strong> '.e($contact->mobile).'</p>
            <p><strong>Subject:</strong> '.e($contact->subject ?? 'N/A').'</p>
            <p><strong>Message:</strong></p>
            <p>'.nl2br(e($contact->message)).'</p>
            <hr>
            <p>Contact enquiry received from Keshav ITES website.</p>
            ',
            function ($mail) use ($contact) {
                $mail->to('shrimishra2021@gmail.com')
                     ->subject('New Contact Enquiry - '.$contact->name)
                     ->replyTo($contact->email, $contact->name);
            }
        );

        return back()->with('success', 'Thank you! Your message has been sent successfully.');

    } catch (\Throwable $e) {

        \Log::error('Contact Form Error: '.$e->getMessage());

        return back()->with('error', 'Something went wrong. Please try again.');
    }
}

}
