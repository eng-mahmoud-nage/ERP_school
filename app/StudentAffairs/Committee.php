<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model 
{

    protected $table = 'committees';
    public $timestamps = true;
    protected $fillable = array('name_ar', 'name_en', 'locatiom', 'control_id');

    public function control()
    {
        return $this->belongsTo('App\StudentAffairs\Control', 'control_id');
    }

    public function student()
    {
        return $this->belongsToMany('App\StudentAffairs\Student', 'student_id');
    }

}