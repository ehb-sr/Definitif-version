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

class DossierController extends Controller
{
    public static function getDossiers() {
        $dossiers = Dossier::where('jaar', 1617)->get();

        return $dossiers;
    }

    public static function getComments($id) {
        $comments = Comment::where('idDossier', $id)->get();

        return $comments;
    }
}