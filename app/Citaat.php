<?php
/**
 * Created by PhpStorm.
 * User: sophie
 * Date: 25.02.17
 * Time: 15:09
 */

namespace App;


class Citaat extends Model
{
    protected $fillable =['Foto','Voornaam', 'Familienaam','Statuut', 'Text'];
    protected $table = 'citaten';
    public $timestamps = false;
}