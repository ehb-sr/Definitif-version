<?php
/**
 * Created by PhpStorm.
 * User: sophie
 * Date: 18.04.17
 * Time: 20:05
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Citaat extends Model
{
    protected $fillable =['Foto','Voornaam', 'Familienaam','Statuut', 'Text'];
    protected $table = 'citaten';
    public $timestamps = false;
}

?>