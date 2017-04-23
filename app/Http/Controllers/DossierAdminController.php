<?php
/**
 * Created by PhpStorm.
 * User: sophie
 * Date: 22.04.17
 * Time: 11:24
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Dossier;
use Illuminate\Support\Facades\Input;

class DossierAdminController extends Controller
{
    public static function getAll(){
        $dossiers = Dossier::paginate(10);
        return view('Admin/dossierOverzicht')->with('dossiers', $dossiers);
    }

    public function create()
    {
        $dossiers = new Dossier();
        $dossiers->titel = Input::get('titel');
        $dossiers->topic = Input::get('topic');
        $dossiers->pdf = Input::get('pdf');
        $dossiers->einde = Input::get('einde');
        $dossiers->save();

        return view('Admin/dossierAanmaken')->with('message', 'dossier goed aangemaakt');

    }
//
//    public function delete($ID){
//        Citaat::find($ID)->delete();
//
//    }
}