<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 28-Apr-17
 * Time: 11:59
 */

namespace App\Http\Controllers;


class StuversContent
{
    var $departementen;
    var $year;

    function __construct($departementen, $years)
    {
        $this->departementen = $departementen;
        $this->year = $years;
    }
}