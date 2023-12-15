<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->email = $request;   
    }


    function comprobar_email($email) {
        return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? 1 : 0;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){   
        return $this->subject('AHOY!')
        ->from($this->email->email, $this->email->name)
        ->to('valerie.lara.dlf@gmail.com', $this->email->email )
        ->view('email.contactmail');
    }
}