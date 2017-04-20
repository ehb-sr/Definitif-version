<?php
/**
 * Created by PhpStorm.
 * User: sophie
 * Date: 18.04.17
 * Time: 20:12
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Citaat;

class CitaatController extends Controller
{
    public static function getAll(){

        $citaten = Citaat::all();

        $arr = [];
        $links = null;
        $rechts = null;

        foreach($citaten as $citaat)
        {
            if($links == null)
            {
                $links = $citaat;
            } else {
                if($rechts == null)
                {
                    $rechts = $citaat;
                } else {
                    $obj = new CitaatController($links, $rechts);
                    if($arr == null)
                    {
                        $arr[0] = $obj;
                    } else {
                        array_push($arr, $obj);
                        $links = null;
                        $rechts = null;
                    }
                }
            }
        }

        return $citaten;
    }
}