<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 23-Apr-17
 * Time: 13:11
 */

namespace App\Http\Controllers;

use DateTime;

class Events
{
    var $date;
    var $dayOfWeek;
    var $time;
    var $title;
    var $undertitle;

    function __construct($data)
    {
        $this->date = substr($data->date, 0, 10);
        $this->dayOfWeek = date("l",strtotime($data->date));;
        $this->day = substr($data->date, 8, 2);
        $this->month = date("M",strtotime($data->date));
        $this->title = $data->title;
        $this->undertitle = $data->undertitle;
    }
}