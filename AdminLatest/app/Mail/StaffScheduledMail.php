<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Schedule;

class StaffScheduledMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(Schedule $schedule)
    {
        $this->schedule = $schedule;
    }

    // Build the message
    public function build()
    {
        return $this->subject('New Duty Scheduled')
                    ->view('emails-staffScheduled') // View to use for the email content
                    ->with([
                        'schedule' => $this->schedule, // Pass schedule data to the email view
                    ]);
    }
}
