<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{

    public function index()
    {
        $mailData = [
            'title' => 'Teszt levél',
            'body' => 'Szia, Zoli vagyok! Mi a helyzet?'
        ];
        Mail::to('cicamica420420@gmail.com')
            /* ->cc($moreUsers)
        ->bcc($evenMoreUsers) */
            ->send(new DemoMail($mailData));
        dd("Email küldése sikeres.");
    }
}
