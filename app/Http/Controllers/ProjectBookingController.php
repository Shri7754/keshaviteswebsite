<?php

namespace App\Http\Controllers;

use App\Models\ProjectBooking;
use App\Mail\ProjectBookingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProjectBookingController extends Controller
{
    /**
     * Get available IT services for the chatbot
     */
    public function getServices()
    {
        return response()->json([
            'success' => true,
            'services' => ProjectBooking::getAvailableServices(),
        ]);
    }

    /**
     * Store a new project booking
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|regex:/^[0-9]{10}$/',
            'email' => 'required|email:rfc|max:255',
            'service' => [
                'required',
                'string',
                function ($attribute, $value, $fail) {
                    $services = array_keys(ProjectBooking::getAvailableServices());
                    if (!in_array($value, $services)) {
                        $fail('The selected service is invalid.');
                    }
                },
            ],
            'description' => 'required|string|max:2000|min:10',
            'demo_date' => 'required|date|after:today',
            'demo_time' => 'required|date_format:H:i',
        ], [
            'name.required' => 'Please enter your full name.',
            'mobile.required' => 'Please enter your mobile number.',
            'mobile.regex' => 'Please enter exactly 10 digits for mobile number.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'service.required' => 'Please select an IT service.',
            'description.required' => 'Please describe your project.',
            'description.min' => 'Description must be at least 10 characters.',
            'description.max' => 'Description cannot exceed 2000 characters.',
            'demo_date.required' => 'Please select a demo date.',
            'demo_date.after' => 'Demo date must be in the future.',
            'demo_time.required' => 'Please select a demo time.',
            'demo_time.date_format' => 'Demo time format is invalid.',
        ]);

        try {
            // Save booking in database
            $booking = ProjectBooking::create($validated);

            // Send email notification to admin
            try {
                Mail::send(new ProjectBookingMail($booking));
            } catch (\Throwable $emailError) {
                // Log email error but don't lose the booking
                \Log::error('Project Booking Email Error: ' . $emailError->getMessage());
            }

            return response()->json([
                'success' => true,
                'message' => 'Your project demo booking has been received successfully! We will contact you shortly.',
                'booking_id' => $booking->id,
            ]);

        } catch (\Throwable $e) {
            \Log::error('Project Booking Error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while processing your booking. Please try again.',
            ], 500);
        }
    }
}
