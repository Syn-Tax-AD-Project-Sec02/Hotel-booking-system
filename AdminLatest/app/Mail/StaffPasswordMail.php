<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class StaffPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($staff, $password)
    {
        $this->staff = $staff;
        $this->password = $password;
    }

    // Build the message
    public function build()
    {
        return $this->subject('Your Staff Account Details')
                    ->view('emails-staffPassword') // Create the view file for the email
                    ->with([
                        'staffName' => $this->staff->name,
                        'staffPosition' => $this->staff->position,
                        'password' => $this->password,
                    ]);
    }
}
