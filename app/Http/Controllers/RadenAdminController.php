<?php
/**
 * Created by PhpStorm.
 * User: sophie
 * Date: 21.04.17
 * Time: 07:56
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Raden;
use Illuminate\Support\Facades\Input;

class RadenAdminController extends Controller
{
    public static function getAll(){
        $raden = Raden::paginate(10);
//
        return view('Admin/radenOverzicht')->with('raden', $raden);
    }

    public function create()
    {
        $raden = new Raden();
        $raden->Voornaam = Input::get('Voornaam');
        $raden->Familienaam = Input::get('Familienaam');
        $raden->Statuut = Input::get('Statuut');
        $raden->Text = Input::get('Text');
        $raden->save();

        return view('Admin/radenAanmaken');

    }



    public function delete($ID){
        Citaat::find($ID)->delete();

    }
}