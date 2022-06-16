<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactMessageController extends Controller
{
    public function mailrequest(Request $request)
    {
        $this->validate($request,
        [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        Mail::send('emails.contact-message', [
            'msg' => $request->text
        ], function ($mail) use($request){
            $mail->from($request->email, $request->name);

            $mail->to('bufebaa@gmail.com')->subject('Contact message');
        });

        return redirect()->route('index')->with('flash_message', 'Дякуємо вам!!!');
    }
}
