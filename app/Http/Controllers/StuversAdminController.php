<?php
/**
 * Created by PhpStorm.
 * User: sophie
 * Date: 20.04.17
 * Time: 19:46
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


use App\Stuvers;
use Illuminate\Support\Facades\Input;

class StuversAdminController extends Controller
{
    public static function getAll(){
        $stuvers = Stuvers::paginate(10);
        return view('Admin/stuversOverzicht')->with('stuvers', $stuvers);
    }

    public function create()
    {
        $stuvers = new Stuvers();
        $stuvers->Voornaam = Input::get('Voornaam');
        $stuvers->Familienaam = Input::get('Familienaam');
        $stuvers->Jaar = Input::get('Jaar');
        $stuvers->Campus = Input::get('Campus');
        $stuvers->Statuut = Input::get('Statuut');
        $stuvers->Quote = Input::get('Quote');
        $stuvers->Email = Input::get('Email');
        $stuvers->save();

        return view('Admin/stuversAanmaken');

    }
}