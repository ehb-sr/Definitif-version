<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 23-Apr-17
 * Time: 17:30
 */

namespace App\Http\Controllers;


class Raden
{
    var $uab;
    var $vvs;
    var $stuvo;
    var $stuvo2;
    var $bast;
    var $rvt;

    function __construct($uab, $vvs, $stuvo, $stuvo2, $bast, $rvt)
    {
        $this->uab = $uab;
        $this->vvs = $vvs;
        $this->stuvo = $stuvo;
        $this->stuvo2 = $stuvo2;
        $this->bast = $bast;
        $this->rvt = $rvt;
    }
}