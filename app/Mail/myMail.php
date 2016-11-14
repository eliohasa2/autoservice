<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class myMail extends Mailable
{
    use Queueable, SerializesModels;
     public $fname;
     public $fnumber;
     public $date;
     public $time;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fname)
    {
        $this->name=$fname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
   
    }
}
