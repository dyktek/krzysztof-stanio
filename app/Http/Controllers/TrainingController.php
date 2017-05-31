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

        Mail::to($email)
            ->send(new CourseRegistration($who))
            ->send(new TraineeshipContactForm($request));


        return redirect('/kursy-programowania/#zgloszenie')->with('message', 'Dziękujemy. Na Twój adres e-mail została wysłana informacja dot. dalszych kroków.');

    }

}

