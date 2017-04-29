<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 28-Apr-17
 * Time: 14:55
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\App;

class Languages extends Controller
{
    public function setLanguage($local)
    {
        session(['applocale' => $local]);
        App::setLocale($local);
        return redirect()->back();
    }
}