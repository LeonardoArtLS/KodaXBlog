<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnviaEmailController extends Controller
{
    public function index(){
        $result = Mail::to("leonardoarthu627@gmail.com")->send(new SendMail("mensagem de teste", "Leonardo"));

        return ($result) ? "E-mail enviado" : "Error";
    }
}
