<?php
/**
 * Created by PhpStorm.
 * User: sophie
 * Date: 18.04.17
 * Time: 20:12
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Citaat;

class CitaatController extends Controller
{
    public static function getAll(){
    $citaten = Citaat::all();

        return view('about/content')->with('citaten', $citaten);
}

    public function destroy($ID){
        $citaat = Citaat::find($ID);
        $citaat->delete();
        return Redirect::back()->with('success', 'Your news post has been deleted.');;
    }
}