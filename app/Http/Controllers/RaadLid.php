<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 23-Apr-17
 * Time: 17:34
 */

namespace App\Http\Controllers;


class RaadLid
{
    var $name;
    var $statuut;
    var $mail;

    function __construct($data)
    {
        $this->name = $data->Voornaam.' '.$data->Familienaam;
        $this->statuut = $data->Statuut;
        $this->mail = $data->Email;
    }
}