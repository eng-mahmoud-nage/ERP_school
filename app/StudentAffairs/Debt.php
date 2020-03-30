<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class Debt extends Model 
{

    protected $table = 'debts';
    public $timestamps = true;
    protected $fillable = array('student_id', 'student_code', 'academic_year_id', 'type', 'amount', 'paid', 'residual', 'debtable_id', 'debtable_type');

    public function student()
    {
        return $this->belongsTo('App\StudentAffairs\Student', 'student_id');
    }

    public function academicyear()
    {
        return $this->belongsTo('App\StudentAffairs\AcademicYear', 'academic_year_id');
    }

    public function levels()
    {
        return $this->morphTo();
    }

    public function regions()
    {
        return $this->morphTo();
    }

}