<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 23-Apr-17
 * Time: 09:59
 */

namespace App\Http\Controllers\pages;


use App\Http\Controllers\Controller;
use App\Http\Controllers\DossierController;

class DossierPage extends Controller
{
    function getPage()
    {
        $dossiers = DossierController::getDossiers();
        $arr = null;

        foreach($dossiers as $dossier)
        {
            dd($dossier);
        }
    }
}