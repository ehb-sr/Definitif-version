<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-Apr-17
 * Time: 20:54
 */

namespace App\Http\Controllers\pages;


use App\Http\Controllers\Controller;
use App\Http\Controllers\RaadLid;
use App\Http\Controllers\RadenController;
use App\Http\Controllers\Raden;

class RadenPage extends Controller
{
    public function getContent()
    {
        $leden = RadenController::getByYear(1617);

        $uab = [];
        $stuvo = [];
        $stuvo2 = [];
        $bast = [];
        $rvt = [];
        $vvs = [];

        foreach($leden as $lid)
        {
            if($lid->VVS == true)
                array_push($vvs, new RaadLid($lid));
            if($lid->UAB == true)
                array_push($uab, new RaadLid($lid));
            if($lid->STUVO == true)
                if(count($stuvo) != 3)
                 array_push($stuvo, new RaadLid($lid));
                else
                    array_push($stuvo2, new RaadLid($lid));
            if($lid->RvT == true)
                array_push($rvt, new RaadLid($lid));
            if($lid->BAST == true)
                array_push($bast, new RaadLid($lid));
        }

        $leden = new Raden($uab, $vvs, $stuvo, $stuvo2, $bast, $rvt);
        //dd($leden);
        return view('raden/content')->with('leden',$leden);
    }
}