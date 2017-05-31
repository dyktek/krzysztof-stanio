<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CourseRegistration extends Mailable
{
    use Queueable, SerializesModels;

    protected $who;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($who)
    {
        $this->who = $who;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'Zgłoszenie na szkolenie';

        return $this->view('emails.registration')
            ->subject($subject);
    }
}

