<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 23-Apr-17
 * Time: 10:06
 */

namespace App\Http\Controllers;

use App\Comment;
use App\Dossier;
use App\Year;

class DossierController extends Controller
{
    public static function getDossiers($date) {
        $dossiers = Dossier::where('jaar', $date)->get();

        return $dossiers;
    }

    public static function getComments($id) {
        $comments = Comment::where('idDossier', $id)->get();

        return $comments;
    }

    public static function addComment($data)
    {
        Comment::insert([
            'idDossier' => $data->comment_id,
            'time' => date("Y-m-d"),
            'text' => $data->comment
        ]);
    }

    public static function getYearById($year)
    {
        $year = Year::where('year', $year)->get();
        return $year[0]->text;
    }
    public static function getYear()
    {
        $years = Year::all();

        return $years;
    }
}