<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request) {
            $contenuMail = [
                'name' => $request -> name,
                'email' => $request -> email,
                'subject' => $request -> subject,
                'message' =>  $request -> message
            ];

            Mail::to("chris.degroef@gmail.com")->send(new Email($contenuMail));

            return redirect() -> back() -> with('message', 'mail envoyé !');
    }
}
