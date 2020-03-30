<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class ExamAbsent extends Model 
{

    protected $table = 'examAbsents';
    public $timestamps = true;
    protected $fillable = array('student_id', 'student_code', 'course_id', 'academic_year_id', 'date', 'note_ar', 'note_en');

    public function student()
    {
        return $this->belongsTo('App\StudentAffairs\Student', 'student_id');
    }

    public function academicyear()
    {
        return $this->belongsTo('App\StudentAffairs\AcademicYear', 'academic_year_id');
    }

    public function course()
    {
        return $this->belongsTo('App\StudentAffairs\Course', 'course_id');
    }

}