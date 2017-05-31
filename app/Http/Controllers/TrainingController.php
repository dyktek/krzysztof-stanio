<?php

namespace App\Http\Controllers;

use App\Mail\CourseRegistration;
use App\Mail\TraineeshipContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;
use App\Page;


class TrainingController extends Controller
{

    public function regulamin()
    {
        $regulamin = Page::where('title', 'REGULAMIN')->orderBy('id', 'desc')->first();

        return view('regulamin',
            ['regulamin' => $regulamin]);
    }


    public function send(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nazwisko' => 'required|string',
            'telefon' => 'required|string',
            'e-mail' => 'required|email',
            'opis' => 'required',
//            'regulamin' => 'accepted',
        ]);
        if ($validator->fails()) {
            return redirect('/kursy-programowania/#zgloszenie')->withErrors($validator)->withInput();
        }

        $who = $request['nazwisko'];
        $email = $request['e-mail'];
        $subject = 'Zgłoszenie na szkolenie';

        Mail::send('emails.registration', ['who' => $who, 'email' => $email, 'subject' => $subject], function($m) use ($who, $email, $subject) {
                $m->to($email)
                $m->subject($subject);
            });

        $to2 = 'katarzynan@gmail.com';
        $subject2 = 'Nowy formularz zgłoszenia na szkolenie ze strony www.krzysztof-stanio.pl';
        $senderName = $request['nazwisko'];
        $senderMail = $request['e-mail'];
        $senderPhone = $request['telefon'];
        $senderMessage = $request['opis'];


        Mail::send('emails.newRegistration', [
            'subject' => $subject2,
            'to2' => $to2,
            'senderName' => $senderName,
            'senderMail' => $senderMail,
            'senderPhone' => $senderPhone,
            'senderMessage' => $senderMessage
        ],
            function($m) use ($subject2, $to2, $senderName, $senderMail, $senderPhone, $senderMessage) {
            $m->to($to2)
                $m->subject($subject2);
            });
        

        return redirect('/kursy-programowania/#zgloszenie')->with('message', 'Dziękujemy. Na Twój adres e-mail została wysłana informacja dot. dalszych kroków.');

    }
}

