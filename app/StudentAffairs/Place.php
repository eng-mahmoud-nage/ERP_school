<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class Place extends Model 
{

    protected $table = 'places';
    public $timestamps = true;
    protected $fillable = array('name_ar', 'name_en');

    public function students()
    {
        return $this->hasMany('App\StudentAffairs\Student');
    }

    public function bus_regions()
    {
        return $this->hasMany('App\StudentAffairs\Region');
    }

}