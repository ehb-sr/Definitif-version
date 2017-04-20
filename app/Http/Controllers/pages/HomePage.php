<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-Apr-17
 * Time: 14:42
 */

namespace Http\Controllers\pages;


use App\Http\Controllers\Controller;
use App\Http\Controllers\Date;
use App\Http\Controllers\DateController;

class HomePage extends Controller
{
    function getContent()
    {
        $event = DateController::getDateEvent();
        $agenda = DateController::getAgendaEvent();

        $date = new Date($event, $agenda);

        return view('base')->with('dates', $date);
    }
}