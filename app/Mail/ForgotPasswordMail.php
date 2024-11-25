<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Bus\Dispatchable;

class ForgotPasswordMail extends Mailable
{
    use Dispatchable,Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Password Reset Request'  // Set the email subject
        );
    }

    public function content()
    {
        return new Content(
            view: 'Email.forgotpassword', // Make sure this view exists and is properly designed.
            with: ['email' => $this->email]
        );
    }
}

    /**
     * Get

    /**
     * Get the message content definition.
     */


