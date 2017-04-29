<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Raden extends Model
{
    protected $fillable = ['Foto','Voornaam','Familienaam','Statuut','Jaar','VVS','BAST','UAB','STUVO','RvT','DR','RSchoolOfArts'];
    public $timestamps = false;
    protected $table = 'Raden';
}