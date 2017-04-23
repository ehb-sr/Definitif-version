<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-Apr-17
 * Time: 20:54
 */

namespace App\Http\Controllers\pages;


use App\Http\Controllers\Controller;
use App\Http\Controllers\RadenController;

class RadenPage extends Controller
{
    public function getContent()
    {
        $leden = RadenController::getByYear(1617);

        return view('raden')->with('raden',$leden);
    }
}