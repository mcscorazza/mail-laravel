<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function mail() {
        $htmlContent = '<!doctype html><html lang="pt-BR"><body style="display: flex;align-items: center;justify-content: center;width:100%;min-height:100vh;background: #cccccc;"><div style="display:flex;align-items:center;justify-content:center;width:80%;height:100%;background:#123456;">TESTE</div></body></html>';

        Mail::send([], [], function ($message) use ($htmlContent){
            $message->to('marcos.corazza@gbmx.com.br');
            $message->subject('GB Digital Report');
            $message->html($htmlContent);
        });
        return "Email enviado com sucesso!";
    }
}
