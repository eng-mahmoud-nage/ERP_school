<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model 
{

    protected $table = 'academicYears';
    public $timestamps = true;
    protected $fillable = array('year', 'active', 'order');

    public function regions()
    {
        return $this->hasMany('App\StudentAffairs\Region');
    }

    public function courseStudents()
    {
        return $this->hasMany('App\StudentAffairs\CourseStudent');
    }

    public function revenueitems()
    {
        return $this->hasMany('App\StudentAffairs\RevenueItem');
    }

    public function absents()
    {
        return $this->hasMany('App\StudentAffairs\Absent');
    }

    public function examAbsents()
    {
        return $this->hasMany('App\StudentAffairs\ExamAbsent');
    }

    public function committees()
    {
        return $this->hasMany('App\StudentAffairs\Committee');
    }

    public function discounts()
    {
        return $this->hasMany('App\StudentAffairs\Discount');
    }

    public function financials()
    {
        return $this->hasMany('App\StudentAffairs\Financial');
    }

    public function controls()
    {
        return $this->hasMany('App\StudentAffairs\Control');
    }

    public function check_outs()
    {
        return $this->hasMany('App\StudentAffairs\CheckOut');
    }

    public function debts()
    {
        return $this->hasMany('App\StudentAffairs\Debt');
    }

    public function approval_degrees()
    {
        return $this->hasMany('App\StudentAffairs\ApprovalDegree');
    }

}