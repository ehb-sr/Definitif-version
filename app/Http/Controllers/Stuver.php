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
    var $bool;
    var $name;
    var $text;
    var $statuut;
    var $img;
    var $email;

    function __construct($data)
    {
        if($data != "")
        {
            $this->bool = true;
            $this->name = $data->Voornaam . ' ' . $data->Familienaam;
            $this->text = $data->Quote;
            $this->statuut = $data->Statuut;
            $this->img = $data->Foto;
            $this->mail = $data->Email;
        } else {
            $this->bool = false;
            $this->name = '...';
            $this->text = '...';
            $this->statuut = '...';
            $this->img = null;
            $this->mail = null;
        }

    }
}