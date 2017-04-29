<?php
/**
 * Created by PhpStorm.
 * User: sophie
 * Date: 19.04.17
 * Time: 22:20
 */
namespace App\Http\Controllers;
use App\Comment;
use App\Dossier;
use App\Http\Controllers\Controller;

use App\Citaat;
use App\Raden;
use App\Stuvers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function delete($id) {
        $citaat = Citaat::where('ID',$id);
        $citaat->delete();
        return redirect('adminOverzichtCitaat');
    }

    public function count()
    {
        $citatencount = Citaat::all()->count();
        $stuverscount = Stuvers::all()->count();
        $radencount =  Raden::all()->count();
        $dossierscount =  Dossier::all()->count();
        $commentscount =  Comment::all()->count();
        return view('Admin/admin', [
            'citatencount' => $citatencount,
            'stuverscount' => $stuverscount,
            'radencount' => $radencount,
            'dossierscount' => $dossierscount,
            'commentscount' => $commentscount
            ]);
    }


    public function edit(Request $request) {
        //find customer
        $citaat = Citaat::find($request->ID);
        return view('Admin/citaatEdit')->with('citaat', $citaat);

    }

    public function update(Request $request) {
        Citaat::where('id', $request->input("ID"))->update(array(
                'Voornaam'    =>  $request->input("Voornaam"),
                'Familienaam' =>  $request->input("Familienaam"),
                'Statuut'  => $request->input("Statuut"),
                'Text' => $request->input("Text")
            ));
        return redirect('adminOverzichtCitaat');

    }
}
