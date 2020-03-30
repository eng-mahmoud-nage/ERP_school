<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class Control extends Model 
{

    protected $table = 'controls';
    public $timestamps = true;
    protected $fillable = array('name_ar', 'name_en', 'term', 'level_id', 'academic_year_id');

    public function level()
    {
        return $this->belongsTo('App\StudentAffairs\Level', 'level_id');
    }

    public function committees()
    {
        return $this->hasMany('App\StudentAffairs\Committee');
    }

    public function academicyear()
    {
        return $this->belongsTo('App\StudentAffairs\AcademicYear', 'academic_year_id');
    }

}