<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 24-Apr-17
 * Time: 23:23
 */

namespace App\Http\Controllers\pages;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class ContactPage extends Controller
{
    function sendForm(){


        $emailcontent = array (
            'subject' => Input::get('type'),
            'emailmessage' => Input::get('message'),
            'departement'=> Input::get('departement'),
            'replyto' => Input::get('email'),
            'voornaam' => Input::get('firstName'),
            'familienaam'=> Input::get('lastName')
        );

        Mail::send('email.contactEmail', $emailcontent, function($message) {
            $message->to('studentenraad@ehb.be', 'Studentenraad')
                ->subject('Web Message');
        });

        return view('contact/content');
    }
}