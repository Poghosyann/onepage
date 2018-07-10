<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use App\Page;
use App\Service;
use App\Portfolio;
use App\People;

use DB;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $email = env('ADMIN_EMAIL');
        Mail::to($email)->send(new DemoMail($request));
        return redirect()->back();
    }
}