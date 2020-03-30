<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model 
{

    protected $table = 'nationalities';
    public $timestamps = true;
    protected $fillable = array('name_ar', 'name_en');

    public function students()
    {
        return $this->hasMany('App\StudentAffairs\Student');
    }

}