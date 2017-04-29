<?php
namespace App;


use Illuminate\Database\Eloquent\Model;

class Stuvers extends Model
{
    protected $fillable = ['Foto','Voornaam','Familienaam','Jaar','Campus','Statuut','Quote','Email'];
    protected $table = 'ledenSR';
    public $timestamps = false;
}