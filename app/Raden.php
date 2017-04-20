<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-Apr-17
 * Time: 20:50
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Raden extends Model
{
    protected $fillable = ['Foto','Voornaam','Familienaam','Statuut','Jaar','VVS','BAST','UAB','STUVO','RvT','DR','RSchoolOfArts'];
    public $timestamps = false;
    protected $table = 'Raden';
}