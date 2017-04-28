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
use App\Http\Controllers\RadenContent;
use App\Http\Controllers\RadenController;
use App\Http\Controllers\Raden;
use App\Http\Controllers\DateController;
use App\Http\Controllers\Year;
use App\Http\Controllers\Years;
use Illuminate\Support\Facades\Input;

class RadenPage extends Controller
{
    public function getContent()
    {
        $startdate = null;
        if (date('m') < 9) {
            $startdate = date('y') - 1. . date('y');
        } else
            $startdate = date('y') . date('y') + 1;

        $leden = RadenController::getByYear($startdate);

        $uab = [];
        $stuvo = [];
        $stuvo2 = [];
        $bast = [];
        $rvt = [];
        $vvs = [];

        foreach ($leden as $lid) {
            if ($lid->VVS == true)
                array_push($vvs, new RaadLid($lid));
            if ($lid->UAB == true)
                array_push($uab, new RaadLid($lid));
            if ($lid->STUVO == true)
                if (count($stuvo) != 3)
                    array_push($stuvo, new RaadLid($lid));
                else
                    array_push($stuvo2, new RaadLid($lid));
            if ($lid->RvT == true)
                array_push($rvt, new RaadLid($lid));
            if ($lid->BAST == true)
                array_push($bast, new RaadLid($lid));
        }

        $leden = new Raden($uab, $vvs, $stuvo, $stuvo2, $bast, $rvt);

        $now = DateController::getYearById($startdate);
        $years = DateController::getYear();
        $datas = [];
        foreach ($years as $year) {
            $data = new Years($year);
            array_push($datas, $data);
        }

        $time = new Year($now, $datas);
        $raden = new RadenContent($leden, $time);

        return view('raden/content')->with('leden', $raden);
    }

    public function getRaden()
    {
        $year = Input::get('jaar');
        $leden = RadenController::getByYear($year);

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

        $now = DateController::getYearById($year);
        $years = DateController::getYear();
        $datas = [];
        foreach($years as $year)
        {
            $data = new Years($year);
            array_push($datas, $data);
        }

        $time = new Year($now, $datas);
        $raden = new RadenContent($leden, $time);

        return view('raden/content')->with('leden',$raden);
    }
}