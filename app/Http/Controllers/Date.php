<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-Apr-17
 * Time: 15:03
 */

namespace App\Http\Controllers;


class Date
{
    var $event;
    var $agenda;

    function __construct($event, $agenda)
    {
        $this->agenda = $agenda;
        $this->event = $event;
    }
}