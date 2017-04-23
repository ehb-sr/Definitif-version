<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 23-Apr-17
 * Time: 09:44
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    protected $fillable =['titel','topic', 'pdf','einde'];
    protected $table = 'dossiers';
    public $timestamps = false;
}