<?php
use App\Http\Controllers\AboutController;

use App\Http\Controllers\Controller;

class AboutPage extends Controller
{
    public function setPage()
    {
        $citaten = AboutController::getAll();
        return view('about')->with("citaten", $citaten);

    }
}