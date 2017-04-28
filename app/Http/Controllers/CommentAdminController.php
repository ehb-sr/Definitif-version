<?php
/**
 * Created by PhpStorm.
 * User: sophie
 * Date: 19.04.17
 * Time: 22:20
 */
namespace App\Http\Controllers;
use App\Comment;
use App\Dossier;
use App\Http\Controllers\Controller;

use App\Citaat;
use App\Raden;
use App\Stuvers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class CommentAdminController extends Controller
{
    public static function getAll(){
        $comments = Comment::paginate(5);
        return view('Admin/commentOverzicht')->with('comments', $comments);
    }

    public function create()
    {
        $comment = new Comment();
        $comment->Voornaam = Input::get('Voornaam');
        $comment->Familienaam = Input::get('Familienaam');
        $comment->Statuut = Input::get('Statuut');
        $comment->Text = Input::get('Text');
        $comment->save();

        return view('Admin/citaatAanmaken')->with('message', 'citaat goed aangemaakt');

    }

    public function deleteComment($id) {
        $comment = Comment::where('ID',$id);
        $comment->delete();
        return redirect('adminOverzichtComment');
    }

}
