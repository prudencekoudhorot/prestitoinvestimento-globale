<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;


    public $contenu;
    public $subject;
    public $email;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contenu)
    {
        $this->contenu = $contenu;
        $this->subject = $contenu['subject'];
        $this->email = $contenu['email'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $date = date('d-m-Y');
        return $this->subject('contact@prestitoinvestimento-globale.org : '.$this->subject)->from('contact@prestitoinvestimento-globale.org', 'Hello prestitoinvestimento-globale')
        ->view('frontend_fr.email');
    }
}
