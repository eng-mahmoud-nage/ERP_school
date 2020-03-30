<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class ApprovalDegree extends Model 
{

    protected $table = 'approval_degrees';
    public $timestamps = true;
    protected $fillable = array('student_id', 'student_code', 'academic_year_id', 'total_year_degree', 'student_total_degree', 'std_status');

    public function student()
    {
        return $this->belongsTo('App\StudentAffairs\Student', 'student_id');
    }

    public function academicyear()
    {
        return $this->belongsTo('App\StudentAffairs\AcademicYear', 'academic_year_id');
    }

}