<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Bus\Dispatchable;

class VerifyMail extends Mailable
{
    use Dispatchable, Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     */
    public function __construct($user)
    {
        $this->user = $user;  // User object passed to the constructor
    }

    /**
     * Get the message envelope definition.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Email Verification'  // Subject for the email
        );
    }

    /**
     * Get the message content definition.
     */
    public function content()
    {
        return new Content(
            view: 'Admin.Email.verifyMail',  // This should be the Blade view you create for the email
            with: ['user' => $this->user]  // Pass the user data to the email view
        );
    }
}
