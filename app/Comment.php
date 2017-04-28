<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
protected $fillable =['time','text'];
protected $table = 'comments';
public $timestamps = false;
}

?>