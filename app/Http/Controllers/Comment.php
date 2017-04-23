<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 23-Apr-17
 * Time: 19:36
 */

namespace App\Http\Controllers;


class Comment
{
    var $time;
    var $message;

    function __construct($time, $comment)
    {
        $this->time = $time;
        $this->message = $comment;
    }
}