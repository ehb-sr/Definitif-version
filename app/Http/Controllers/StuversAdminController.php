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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class StuversAdminController extends Controller
{
    public static function getAll(){
        $stuvers = Stuvers::paginate(10);
        return view('Admin/stuversOverzicht')->with('stuvers', $stuvers);
    }

    public function create(Request $request)
    {
        if($request->file('Foto') != null)
        {
            Stuvers::insertGetId(
                [
                    'Foto' => $request->file('Foto')->store('stuvers'),
                    'Voornaam' => $request->Voornaam,
                    'Familienaam' => $request->Familienaam,
                    'Jaar' => $request->Jaar,
                    'Campus' => $request->Campus,
                    'Quote' => $request->Quote,
                    'Email' => $request->Email,
                ]);
        } else {
            Stuvers::insertGetId(
                [
                    'Foto' => null,
                    'Voornaam' => $request->Voornaam,
                    'Familienaam' => $request->Familienaam,
                    'Jaar' => $request->Jaar,
                    'Campus' => $request->Campus,
                    'Quote' => $request->Quote,
                    'Email' => $request->Email,
                ]);
        }



        return view('Admin/stuversAanmaken');

    }


    public function delete($id) {
        $stuvers = Stuvers::where('ID',$id);
        $stuvers->delete();
        return redirect('adminOverzichtStuver');
    }

    public function edit(Request $request) {
        $stuvers = Stuvers::find($request->ID);

     return view('Admin/stuversEdit')->with('stuvers', $stuvers);


    }

    public function update(Request $request) {

        if($request->file('Foto') != ""){
            Stuvers::where('id', $request->input("ID"))->update(array(
                'Foto' => $request->file('Foto')->store('stuvers'),
                'Voornaam'    =>  $request->input("Voornaam"),
                'Familienaam' =>  $request->input("Familienaam"),
                'Jaar' =>  $request->input("Jaar"),
                'Campus' =>  $request->input("Campus"),
                'Statuut'  => $request->input("Statuut"),
                'Quote' => $request->input("Quote"),
                'Email' =>  $request->input("Email"),
            ));
        } else {
            Stuvers::where('id', $request->input("ID"))->update(array(
                //'Foto' => $request->file('Foto')->store('stuvers'),
                'Voornaam'    =>  $request->input("Voornaam"),
                'Familienaam' =>  $request->input("Familienaam"),
                'Jaar' =>  $request->input("Jaar"),
                'Campus' =>  $request->input("Campus"),
                'Statuut'  => $request->input("Statuut"),
                'Quote' => $request->input("Quote"),
                'Email' =>  $request->input("Email"),
            ));
        }

        return redirect('adminOverzichtStuver');
    }



}