<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class Classs extends Model
{

    protected $table = 'classes';
    public $timestamps = true;
    protected $fillable = array('name_ar', 'name_en', 'level_id', 'active');

    public function level()
    {
        return $this->belongsTo('App\StudentAffairs\Level', 'level_id');
    }

    public function students()
    {
        return $this->hasMany('App\StudentAffairs\Student');
    }

}