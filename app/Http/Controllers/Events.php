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
    var $day;
    var $month;
    var $year;
    var $title;
    var $undertitle;

    function __construct($data)
    {
        $this->date = new DateTime($data->day.'-'.$data->month.'-'.$data->year);
        $this->dayOfWeek = date_format($this->date, 'l');
        $this->day = $data->day;
        $this->month = date_format($this->date, 'M');
        $this->year = $data->year;
        $this->title = $data->title;
        $this->undertitle = $data->undertitle;
    }
}