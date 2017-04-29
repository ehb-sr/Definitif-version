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
    var $left;
    var $right;

    function __construct($links, $rechts)
    {
        $this->left = $links;
        $this->right = $rechts;
    }
}