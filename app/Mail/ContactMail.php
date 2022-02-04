<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Hi ' .$this->data->name.' Thanks for sending us your message')
            ->from('hey@techara.co.ke', 'Techara Hub')
            ->to($this->data->email, $this->data->name)
            ->view('mail.contact-mail')
            ->with('data', $this->data);
    }
}
