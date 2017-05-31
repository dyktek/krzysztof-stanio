<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TraineeshipContactForm extends Mailable
{
    protected $message;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from = 'kontakt@krzysztof-stanio.pl';
        $to = 'katarzynan@gmail.com';
        $subject = 'Nowy formularz zgłoszenia na szkolenie ze strony www.krzysztof-stanio.pl';
        return $this->from($from)
            ->to($to)
            ->subject($subject)
            ->view('emails.newRegistration',[
                'senderMail' => $this->message->senderMail,
                'senderName' => $this->message->senderName,
                'senderPhone' => $this->message->senderPhone,
                'senderMessage' => $this->message->senderMessage
            ]);
    }
}
