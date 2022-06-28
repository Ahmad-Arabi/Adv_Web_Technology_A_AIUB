<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailHelperClass extends Mailable
{
    use Queueable, SerializesModels;
    public $subject;
    public $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject,$body)
    {
        $this->subject=$subject;
        $this->body=$body;
        //subject &
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emailview')->with('body',$this->body)->subject($this->subject);
    }
}
