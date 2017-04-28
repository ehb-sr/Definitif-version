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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class DossierAdminController extends Controller
{
    public static function getAll(){
        $dossiers = Dossier::paginate(10);
        return view('Admin/dossierOverzicht')->with('dossiers', $dossiers);
    }

    public function create(Request $request) {
        Dossier::insertGetId(
            [
                'jaar' => $request->jaar,
                'titel' => $request->titel,
                'topic' => $request->topic,
                'pdf' => $request->file('pdf')->store('pdf'),
                'einde' => $request->einde
            ]);
        return view('Admin/dossierAanmaken')->with('message', 'dossier goed aangemaakt');
    }

    public function edit(Request $request) {
        $dossier = Dossier::find($request->ID);
        return view('Admin/dossiersEdit')->with('dossier', $dossier);
    }

    public function update(Request $request) {
        Dossier::where('id', $request->input("id"))->update(array(
            'jaar' => $request->jaar,
            'titel' => $request->titel,
            'topic' => $request->topic,
            'pdf' => $request->file('pdf')->store('pdf'),
            'einde' => $request->einde,
        ));
        return redirect('adminOverzichtDossier');
    }

}