<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-Apr-17
 * Time: 18:58
 */

namespace App\Http\Controllers;


class Departement
{
    var $departement;
    var $leftAbove;
    var $rightAbove;
    var $underLeft;
    var $underRight;

    function __construct($departement)
    {
        $this->departement = $departement;
        $this->leftAbove = new Stuver("");
        $this->rightAbove = new Stuver("");
        $this->underLeft = new Stuver("");
        $this->underRight = new Stuver("");
    }
}