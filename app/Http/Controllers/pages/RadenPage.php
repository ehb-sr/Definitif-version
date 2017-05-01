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
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

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

        //return Redirect::to('raden')->header('Cache-Control', 'no-store, no-cache')->with('leden', $raden);
        $content = View::make('raden/content')->with('leden', $raden);
        $response = Response::make($content, 200);
        $response->header('Cache-Control', 'no-cache, must-revalidate, post-check=0, pre-check=0, max-age=5');
        return $response;
        //return response()
          //  ->view('raden/content', ['leden', $raden])
            //->header('Cache-Control', 'no-cache, must-revalidate');
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

        $content = View::make('raden/content')->with('leden', $raden);
        $response = Response::make($content, 200);
        $response->header('Cache-Control', 'no-cache, must-revalidate, post-check=0, pre-check=0, max-age=5');
        return $response;
        //return view('raden/other')->with('leden',$raden);

        //return redirect('raden/other')->with('leden', $raden)->header('Cache-Control', 'no-cache, must-revalidate, post-check=0, pre-check=0, max-age=5');
    }
}