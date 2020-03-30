<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class Category extends Model 
{

    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable = array('name_ar', 'name_en');

    public function revenue_items()
    {
        return $this->hasMany('App\StudentAffairs\RevenueItem');
    }

}