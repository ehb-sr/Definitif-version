<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 27-Apr-17
 * Time: 21:42
 */

namespace App\Http\Controllers;


class Year
{
    var $today;
    var $others;

    function __construct($today, $list)
    {
        $this->today = $today;
        $this->others = $list;
    }
}