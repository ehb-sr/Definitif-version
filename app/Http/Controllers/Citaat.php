<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-Apr-17
 * Time: 17:16
 */

namespace App\Http\Controllers;


class Citaat
{
    var $links;
    var $rechts;

    function __construct($links, $rechts)
    {
        $this->links = $links;
        $this->rechts = $rechts;
    }
}