<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function mail() {
        $htmlContent = view('emails.teste')->render();

        Mail::send([], [], function ($message) use ($htmlContent){
            $message->to('marcos.corazza@gbmx.com.br');
            $message->subject('GB Digital Report');
            $message->html($htmlContent);
        });
        return "Email enviado com sucesso!";
    }
}
