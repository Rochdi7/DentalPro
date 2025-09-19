<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     */
  public function build()
{
    return $this->subject('Nouveau message de contact - DentalPro')
                ->view('frontoffice.emails.contact') // adapte le chemin
                ->with('data', $this->data);
}

}
