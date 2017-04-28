<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 27-Apr-17
 * Time: 22:07
 */

namespace App\Http\Controllers;


class Years
{
    var $jaar;
    var $text;

    function __construct($data)
    {
        $this->jaar = $data->year;
        $this->text = $data->text;
    }
}