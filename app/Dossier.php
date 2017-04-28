<?php
/**
 * Created by PhpStorm.
 * User: sophie
 * Date: 22.04.17
 * Time: 11:24
 */
namespace App;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    protected $fillable =['jaar','titel','topic','pdf','einde'];
    protected $table = 'dossiers';
    public $timestamps = false;
}

?>