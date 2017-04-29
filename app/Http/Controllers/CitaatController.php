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


}