<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-Apr-17
 * Time: 19:04
 */

namespace App\Http\Controllers;


use App\Stuvers;
use Illuminate\Routing\Controller;

class StuverController extends Controller
{
    public static function getStuvers() {

        $stuvers = Stuvers::where('Jaar', 1617)->get();

        return $stuvers;
    }
}