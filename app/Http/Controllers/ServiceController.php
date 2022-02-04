<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ProjectMail;
use App\Models\Project;
use Illuminate\Support\Facades\Mail;

class ServiceController extends Controller
{
    public function post(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'service' => 'required',
            'description' => 'required',
        ]);

        $project = Project::create($data);
        $project->sendNotificationEmail();

        return redirect()->back()->with('success', 'Your project has been received');
    }
}
