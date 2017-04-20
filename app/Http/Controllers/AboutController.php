<?php
/**
 * Created by PhpStorm.
 * User: sophie
 * Date: 22.02.17
 * Time: 17:09
 */

namespace App\Http\Controllers;


class AboutController extends Controller{


    public static function getAll(){
        $citaten = Citaat::all();
        return $citaten;
    }



} 