<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class CommitteStudent extends Model 
{

    protected $table = 'committe_students';
    public $timestamps = true;
    protected $fillable = array('student_id', 'student_code', 'academic_year_id', 'committe_id', 'religion', 'setting_num');

    public function academicyear()
    {
        return $this->belongsTo('App\StudentAffairs\AcademicYear', 'academic_year_id');
    }

}