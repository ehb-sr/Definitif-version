<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 23-Apr-17
 * Time: 09:59
 */

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Comment;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dossier;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\Dossiers;
use App\Http\Controllers\Year;
use App\Http\Controllers\Years;
use Symfony\Component\HttpFoundation\Request;

class DossierPage extends Controller
{
    function getContent()
    {
        $startdate = null;
        if(date('m') < 9)
        {
            $startdate = date('y')-1..date('y');
        }
        else
            $startdate =  date('y').date('y')+1;

        $dossiers = DossierController::getDossiers($startdate);
        $arr = [];

        foreach($dossiers as $dossier)
        {
            $id = $dossier->id;
            $object = new Dossier($dossier);
            $arrComments = [];
            $comments = DossierController::getComments($id);
            foreach($comments as $comment)
            {
                array_push($arrComments, new Comment($comment->time, $comment->text));
            }
            $object->comments = $arrComments;
            array_push($arr, $object);
        }

        $now = DossierController::getYearById($startdate);
        $years = DossierController::getYear();
        $datas = [];
        foreach($years as $year)
        {
            $data = new Years($year);
            array_push($datas, $data);
        }

        $time = new Year($now, $datas);
        $array = [];
        $dos = new Dossiers($arr);
        array_push($array, $dos, $time);
        //dd($array);

        return view('dossier/content')->with('dossiers', $array);
    }

    function addComment(Request $request)
    {
        DossierController::addComment($request);

        return redirect()->back();
    }

    public function getDownload($name)
    {
        return Response()->download(storage_path('app\public\\'.$name));
    }
}
