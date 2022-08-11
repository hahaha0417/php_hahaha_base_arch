<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Http;


class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {



        // ---------------------------------------------------------------
        // 寄信測試
        // https://www.twilio.com/blog/send-emails-laravel-8-gmail-smtp-server
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];

        Mail::to('hahaha0417@hotmail.com')->send(new DemoMail($mailData));

        dd("Email is sent successfully.");
        // ---------------------------------------------------------------
    }
}
