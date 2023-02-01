<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Signup extends Mailable
{
    use Queueable, SerializesModels;
    public $nom;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom)
    {
        $this->nom=$nom;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('kolibalobeguilawogui@gmail.com')->markdown('sendMail');
    }
}
