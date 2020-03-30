<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model 
{

    protected $table = 'buses';
    public $timestamps = true;
    protected $fillable = array('driver_name_ar', 'driver_name_en', 'driver_phone', 'driver_national_id', 'bus_num', 'traffic_ar', 'traffic_en');

    public function regions()
    {
        return $this->belongsToMany('App\StudentAffairs\Region', 'region_id');
    }

}