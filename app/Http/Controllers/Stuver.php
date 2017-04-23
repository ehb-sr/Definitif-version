<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-Apr-17
 * Time: 18:53
 */

namespace App\Http\Controllers;


class Stuver
{
    var $name;
    var $text;
    var $statuut;
    var $img;
    var $email;

    function __construct($data)
    {
        $this->name = $data->Voornaam . ' ' . $data->Familienaam;
        $this->text = $data->Quote;
        $this->statuut = $data->Statuut;
        $this->img = $data->Foto;
        $this->mail = $data->Email;
    }
}