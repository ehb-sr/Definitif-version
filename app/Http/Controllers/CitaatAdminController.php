<?php
/**
 * Created by PhpStorm.
 * User: sophie
 * Date: 19.04.17
 * Time: 22:20
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Citaat;
use Illuminate\Support\Facades\Input;

class CitaatAdminController extends Controller
{
    public static function getAll(){
        $citaten = Citaat::paginate(5);
        return view('Admin/citaatOverzicht')->with('citaten', $citaten);
    }

    public function create()
    {
        $citaat = new Citaat();
        $citaat->Voornaam = Input::get('Voornaam');
        $citaat->Familienaam = Input::get('Familienaam');
        $citaat->Statuut = Input::get('Statuut');
        $citaat->Text = Input::get('Text');
        $citaat->save();

        return view('Admin/citaatAanmaken')->with('message', 'citaat goed aangemaakt');

    }

    public function delete($ID){
        Citaat::find($ID)->delete();

    }
}
