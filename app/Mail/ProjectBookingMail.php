<?php

namespace App\Mail;

use App\Models\ProjectBooking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class ProjectBookingMail extends Mailable
{
    use Queueable, SerializesModels;

    public ProjectBooking $booking;

    public function __construct(ProjectBooking $booking)
    {
        $this->booking = $booking;
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'New Project Demo Booking - ' . $this->booking->name,
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
                    $this->booking->email,
                    $this->booking->name
                )
            ],
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.project-booking',
            with: [
                'booking' => $this->booking,
                'serviceName' => ProjectBooking::getServiceDisplayName($this->booking->service),
            ],
        );
    }

    public function attachments()
    {
        return [];
    }
}
