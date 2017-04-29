<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 23-Apr-17
 * Time: 10:39
 */

namespace App\Http\Controllers;


class Dossier
{
    var $id;
    var $title;
    var $topic;
    var $endDate;
    var $pdf;
    var $comments;

    function __construct($data)
    {
        $this->id = $data->id;
        $this->title = $data->titel;
        $this->topic = $data->topic;
        $this->pdf = $data->pdf;
        $this->endDate = $data->einde;
    }
}