<?php

namespace App\Http\Controllers\pages;


use App\Http\Controllers\AboutController;
use App\Http\Controllers\CitaatContent;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Citaat;

class AboutPage extends Controller
{
    public function getContent()
    {
        $citaten = AboutController::getAll();

        $arr = [];
        $links = null;
        $rechts = null;
        $i = 1;


        foreach($citaten as $citaat)
        {
            $i++;
            if($i % 2 == 0)
            {
                if($links != null)
                {
                    $cit = new Citaat($links, $rechts);
                    array_push($arr, $cit);
                    $links = null;
                }
                $links = new CitaatContent($citaat);
            } else {
                if($rechts != null)
                    $rechts = null;
                $rechts = new CitaatContent($citaat);
            }
        }

        return view('about/content')->with("citaten", $arr);

    }
}