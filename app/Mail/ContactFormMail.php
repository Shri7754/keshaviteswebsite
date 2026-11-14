<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public Contact $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'New Contact Enquiry - ' . $this->contact->name,
            from: new Address(
                config('mail.from.address'),
                config('mail.from.name')
            ),
            to: [
                new Address(
                    config('mail.from.address'),
                    config('mail.from.name')
                )
            ],
            replyTo: [
                new Address(
                    $this->contact->email,
                    $this->contact->name
                )
            ],
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.contact-form',
            with: [
                'contact' => $this->contact,
            ],
        );
    }

    public function attachments()
    {
        return [];
    }
}
