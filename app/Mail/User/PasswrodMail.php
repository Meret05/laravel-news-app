<?php

namespace App\Mail\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PasswrodMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;


    public $password;

    public function __construct($password)
    {
        //
        $this->password = $password;
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Passwrod Mail',
        );
    }


    public function content(): Content
    {
        return new Content(
            markdown: 'mail.user.password',
        );
    }


    public function attachments(): array
    {
        return [];
    }
}
