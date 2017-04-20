<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-Apr-17
 * Time: 17:19
 */

namespace App\Http\Controllers;


class CitaatContent
{
    var $voornaam;
    var $familienaam;
    var $statuut;
    var $text;

    function __construct($data)
    {
        $this->voornaam = $data->voornaam;
        $this->familienaam = $data->familienaam;
        $this->statuut = $data->statuut;
        $this->text = $data->text;
    }

}