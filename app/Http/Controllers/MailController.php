<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function mail() {
        $htmlContent = '<div style="display:flex;align-items:center;width:100%><div style="display:flex;align-items:center;width:60%;background:#123456"><h1>GB Digital Report</h1><h2 style="color:blue;font-weight:bolder;">Dados de monitoramento</h2></div></div>';

        Mail::send([], [], function ($message) use ($htmlContent){
            $message->to('marcos.corazza@gbmx.com.br');
            $message->subject('GB Digital Report');
            $message->html($htmlContent);
        });
        return "Email enviado com sucesso!";
    }
}
