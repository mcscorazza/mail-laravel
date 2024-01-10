<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function mail() {
        $htmlContent = '<!doctype html><html lang="pt-BR"><body style="padding:0;margin:0;width:100%;min-height:100vh;background:#f6f6f6;"><div style="width:50%;min-height:100vh;background:red;color:#ffffff;">TESTE</div></body></html>';

        Mail::send([], [], function ($message) use ($htmlContent){
            $message->to('marcos.corazza@gbmx.com.br');
            $message->subject('GB Digital Report');
            $message->html($htmlContent);
        });
        return "Email enviado com sucesso!";
    }
}
