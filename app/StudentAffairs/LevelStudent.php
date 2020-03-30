<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class LevelStudent extends Model 
{

    protected $table = 'level_student';
    public $timestamps = true;
    protected $fillable = array('student_id', 'student_code', 'academic_year_id', 'stage_id', 'level_id', 'class_id', 'bus_subscription', 'std_status');

    

}