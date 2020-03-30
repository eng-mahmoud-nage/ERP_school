<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class Absent extends Model 
{

    protected $table = 'absents';
    public $timestamps = true;
    protected $fillable = array('student_id', 'student_code', 'academic_year_id', 'date', 'note_ar', 'note_en');

    public function student()
    {
        return $this->belongsTo('App\StudentAffairs\Student', 'student_id');
    }

    public function academicyear()
    {
        return $this->belongsTo('App\StudentAffairs\AcademicYear', 'academic_year_id');
    }

}