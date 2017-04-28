<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 28-Apr-17
 * Time: 14:01
 */

namespace App\Http\Controllers;


class RadenContent
{
    var $raden;
    var $year;

    function __construct($raden, $years)
    {
        $this->raden = $raden;
        $this->year = $years;
    }
}