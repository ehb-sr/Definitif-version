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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RadenAdminController extends Controller
{
    public static function getAll(){
        $raden = Raden::paginate(10);
//
        return view('Admin/radenOverzicht')->with('raden', $raden);
    }

    public function create(Request $request)
    {
        Raden::insertGetId(
            [
                'Foto' => $request->file('Foto')->store('raden'),
                'Voornaam' => $request->Voornaam,
                'Familienaam' => $request->Familienaam,
                'Jaar' => $request->Jaar,
                'Statuut' => $request->Statuut,
                'VVS' => $request->VVS,
                'BAST' => $request->BAST,
                'UAB' => $request->UAB,
                'STUVO' => $request->STUVO,
                'RvT' => $request->RvT,
                'DR' => $request->DR,
                'RSchoolOfArts' => $request->RSchoolOfArts,



            ]);

        return view('Admin/radenAanmaken')->with('message', 'raad goed aangemaakt');




    }

    public function deleteRaden($id) {
        $raden  = Raden::where('ID',$id);
        $raden->delete();

        return redirect('adminOverzichtRaden');
    }

    public function edit(Request $request) {
        $raden = Raden::find($request->ID);
        return view('Admin/radenEdit')->with('raden', $raden);
    }

    public function update(Request $request) {
        Raden::where('id', $request->input("ID"))->update(array(
            'Foto' => $request->file('Foto')->store('raden'),
            'Voornaam'    =>  $request->input("Voornaam"),
            'Familienaam' =>  $request->input("Familienaam"),
            'Jaar' =>  $request->input("Jaar"),
            'Statuut'  => $request->input("Statuut"),
            'VVS' => $request->input("VVS"),
            'BAST' =>  $request->input("BAST"),
            'UAB' =>  $request->input("UAB"),
            'STUVO' =>  $request->input("STUVO"),
            'RvT' =>  $request->input("RvT"),
            'DR' =>  $request->input("DR"),
            'RSchoolOfArts' =>  $request->input("RSchoolOfArts"),
        ));
        return redirect('adminOverzichtRaden');
    }


}