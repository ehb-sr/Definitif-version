<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-Apr-17
 * Time: 22:06
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable =['id','jaar','time','text'];
    protected $table = 'comments';
    public $timestamps = false;
}