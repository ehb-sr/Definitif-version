<?php
use App\Http\Controllers\AboutController;

/**
 * Created by PhpStorm.
 * User: sophie
 * Date: 25.02.17
 * Time: 15:06
 */

class WatPage extends Controller
{
    public function setPage()
    {
        $citaten = AboutController::getAll();
        return view('about')->with("citaten", $citaten);

    }
}