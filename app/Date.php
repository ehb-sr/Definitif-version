<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-Apr-17
 * Time: 14:25
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $fillable =['id','type', 'time','title', 'undertitle'];
    protected $table = 'date';
    public $timestamps = false;
}