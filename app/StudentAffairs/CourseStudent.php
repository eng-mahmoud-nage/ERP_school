<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class CourseStudent extends Model 
{

    protected $table = 'courseStudents';
    public $timestamps = true;
    protected $fillable = array('student_id', 'course_id', 'student_code', 'academic_year_id', 'st_mid_term', 'nd_mid_term', 'st_term_grade', 'nd_term_grade', 'st_performance_grade', 'nd_performance_grade', 'st_total_grade', 'nd_total_grade', 'total_course_grade', 'low_course_grade', 'std_status', 'course_status');

    public function academicyear()
    {
        return $this->belongsTo('App\StudentAffairs\AcademicYear', 'academic_year_id');
    }

}