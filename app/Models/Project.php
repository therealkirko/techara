<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProjectMail;

class Project extends Model
{
    use HasFactory;

    public $guarded = [];

    public function sendNotificationEmail()
    {
        Mail::to(config('mail.notification_recipient-mail'))
            ->queue(new ProjectMail($this));
    }
}
