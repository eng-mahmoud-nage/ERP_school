<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class Course extends Model 
{

    protected $table = 'courses';
    public $timestamps = true;
    protected $fillable = array('name_ar', 'performance_grade', 'mid_term_grade', 'term_grade', 'total_course_grade', 'low_course_grade', 'control_authority', 'degree_factor', 'level_id', 'name_en');

    public function level()
    {
        return $this->belongsTo('App\StudentAffairs\Level', 'level_id');
    }

    public function students()
    {
        return $this->belongsToMany('App\StudentAffairs\Student', 'student_id')->withPivot('total_course_grade','low_course_grade');
    }

    public function examAbsents()
    {
        return $this->hasMany('App\StudentAffairs\ExamAbsent');
    }

}