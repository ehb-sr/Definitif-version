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

class DossierPage extends Controller
{
    function getContent()
    {
        $dossiers = DossierController::getDossiers();
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

        return view('dossier/content')->with('dossiers', $arr);
    }
}