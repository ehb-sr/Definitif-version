<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-Apr-17
 * Time: 14:42
 */

namespace App\Http\Controllers\pages;


use App\Http\Controllers\Controller;
use App\Http\Controllers\Date;
use App\Http\Controllers\DateController;
use App\Http\Controllers\Events;
use DateTime;

class HomePage extends Controller
{
    function getContent()
    {
        $event = DateController::getDateEvent();
        $agenda = DateController::getAgendaEvent();

        $arr = [];

        foreach($event as $data)
        {
            $object = new Events($data);
            if($arr != null)
            {
                array_push($arr, $object);
            } else {
                $arr[0] = $object;
            }
        }

        $arr2 = [];
        foreach($agenda as $data)
        {
            $object = new Events($data);
            if($arr2 != null)
            {
                array_push($arr2, $object);
            } else {
                $arr2[0] = $object;
            }
        }

        $date = new Date($arr, $arr2);

        return view('base')->with('dates', $date);
    }
}