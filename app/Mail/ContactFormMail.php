<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
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
        return new \Illuminate\Mail\Mailables\Envelope(
            subject: 'New Contact Enquiry - ' . $this->contact->name,
            replyTo: [$this->contact->email => $this->contact->name],
        );
    }

    public function content()
    {
        return new \Illuminate\Mail\Mailables\Content(
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
