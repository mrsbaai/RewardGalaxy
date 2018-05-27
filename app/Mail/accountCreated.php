<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class accountCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $email;
    protected $password;

    public function __construct($data)
    {
        $this->name = $data['email'];
        $this->name = $data['password'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.accountCreated')
            ->subject("RewardGalaxy [Login Info]")
            ->with([
                'email' => $this->email,
                'password' => $this->password
            ]);

    }
}
