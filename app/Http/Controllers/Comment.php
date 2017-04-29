<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 23-Apr-17
 * Time: 19:36
 */

namespace App\Http\Controllers;


use Faker\Provider\DateTime;

class Comment
{
    var $time;
    var $message;

    function __construct($time, $comment)
    {
        $date=substr($time, 0, 10);
        $this->time = $date;
        $this->message = $comment;
    }
}