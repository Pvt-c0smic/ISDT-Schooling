<?php

namespace App\Http\Controllers;

use App\Jobs\MailSenderJob;
use App\Mail\NewsletterMail;
use Illuminate\Http\Request;
USE Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('form');
    }

    public function process()
    {
        dispatch(new MailSenderJob(
            $this->request->all()
        ))->onQueue('emails');

        return back();
    }
}
