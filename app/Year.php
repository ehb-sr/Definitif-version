<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 27-Apr-17
 * Time: 21:38
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $fillable = ['year','text'];
    public $timestamps = false;
    protected $table = 'jaar';
}