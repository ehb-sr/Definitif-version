<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 24-Apr-17
 * Time: 23:23
 */

namespace App\Http\Controllers\pages;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;

class ContactPage extends Controller
{
    function sendForm(Request $request){
        $rules = array(
            'voornaam' => 'required',
            'familienaam' => 'required',
            'email' => 'required|email',
            'departement' => 'required',
            'type' => 'required',
            'message' => 'required'
        );

        $data = \Illuminate\Support\Facades\Validator::make($request->all(), $rules);

        //dd($data);

        if($data->fails()) {
            // dd($data->fails());
            return Redirect::to('contact')->withErrors($data)->withInput();
        }

        $emailcontent = array (
            'subject' => $request->get('type'),
            'emailmessage' => $request->get('message'),
            'departement'=> $request->get('departement'),
            'replyto' => $request->get('email'),
            'voornaam' => $request->get('voornaam'),
            'familienaam'=> $request->get('familienaam')
        );
        //dd($emailcontent);

        Mail::send('email.emailgen', $emailcontent, function($message) {
            $message->to('studentenraad@ehb.be', 'Studentenraad')
                ->subject('Web Message');
        });

        return view('contact');
    }
}