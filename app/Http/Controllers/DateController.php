<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-Apr-17
 * Time: 14:45
 */

namespace App\Http\Controllers;

use App\Date;
use App\Http\Controllers\Controller;

class DateController extends Controller
{
    public static function getDateEvent()
    {
        $events = Date::where([
            ['type', 1],
            ['date', '>=', date("Y-m-d h:i:sa")],
        ])->orderBy('date', 'asc')->get();

        return $events;
    }

    public static function getAgendaEvent()
    {
        $agendas = Date::where([
            ['type', 2],
            ['date', '>=', date("Y-m-d h:i:sa")],
        ])->orderBy('date', 'asc')->get();

        return $agendas;
    }
}