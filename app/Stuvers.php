<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-Apr-17
 * Time: 18:38
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Stuvers extends Model
{
    protected $fillable = ['Foto','Voornaam','Familienaam','Jaar','Campus','Statuut','Quote','Email'];
    protected $table = 'ledenSR';
    public $timestamps = false;
}