<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 27-Apr-17
 * Time: 22:24
 */

namespace App\Http\Controllers;


class Dossiers
{
    var $dossiers;

    function __construct($data)
    {
        $this->dossiers = $data;
    }
}