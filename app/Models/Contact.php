<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;

    public $guarded = [];

    public function sendNotificationEmail()
    {
        Mail::to(config('mail.notification_recipient-mail'))
            ->queue(new ContactMail($this));
    }
}
