<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-Apr-17
 * Time: 20:52
 */

namespace App\Http\Controllers;

use App\Raden;

class RadenController extends Controller
{
    public static function getAll()
    {
        $leden = Raden::all();

        return $leden;
    }

    public static function getByYear($year)
    {
        $leden = Raden::where('Jaar', $year)->get();

        return $leden;
    }
}