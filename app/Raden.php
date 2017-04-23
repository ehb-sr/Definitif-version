<?php
/**
 * Created by PhpStorm.
 * User: sophie
 * Date: 21.04.17
 * Time: 07:56
 */
namespace App;
use Illuminate\Database\Eloquent\Model;

class Raden extends Model
{
    protected $fillable =['Foto','Voornaam', 'Familienaam','Jaar','Statuut', 'VVS','BAST','UAB','STUVO','RvT','DR','RSchoolOfArts'];
    protected $table = 'Raden';
    public $timestamps = false;
}

?>