<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LoggedIn extends Mailable
{
    use Queueable, SerializesModels;
    
    public $password = '';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(String $password)
    {
        //
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject("Ada yang login ni")
            ->html("password : ".$this->password);
    }
}
