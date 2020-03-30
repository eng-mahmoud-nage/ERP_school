<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class CheckOut extends Model 
{

    protected $table = 'check_out';
    public $timestamps = true;
    protected $fillable = array('student_id', 'student_code', 'academic_year_id', 'date', 'note_ar', 'note_en', 'return_amount');

    public function student()
    {
        return $this->belongsTo('App\StudentAffairs\Student', 'student_id');
    }

    public function academicyear()
    {
        return $this->belongsTo('App\StudentAffairs\AcademicYear', 'academic_year_id');
    }

}