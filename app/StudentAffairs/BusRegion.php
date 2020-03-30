<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class BusRegion extends Model 
{

    protected $table = 'bus_regions';
    public $timestamps = true;
    protected $fillable = array('bus_id', 'region_id');

}