<?php
namespace App;


use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    protected $fillable =['id','jaar','titel','topic', 'pdf','einde'];
    protected $table = 'dossiers';
    public $timestamps = false;
}