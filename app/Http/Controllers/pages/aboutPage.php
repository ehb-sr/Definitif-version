<?php
use App\Http\Controllers\AboutController;

use App\Http\Controllers\Controller;

class AboutPage extends Controller
{
    public function getContent()
    {
        $citaten = AboutController::getAll();
        return view('about')->with("citaten", $citaten);

    }
}