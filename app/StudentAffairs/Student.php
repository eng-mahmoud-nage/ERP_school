<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class Student extends Model 
{

    protected $table = 'students';
    public $timestamps = true;
    protected $fillable = array('name_ar', 'name_en', 'password', 'student_code', 'dob','phone', 'image',
     'national_id', 'religion', 'gender', 'address_ar', 'address_en', 'second_lang', 'class_major',
      'nationality_id', 'place_id', 'region_id', 'parent_id', 'check_out', 'status');

    public function nationality()
    {
        return $this->belongsTo('App\StudentAffairs\Nationality', 'nationality_id');
    }

    public function place()
    {
        return $this->belongsTo('App\StudentAffairs\Place', 'place_id');
    }

    public function class()
    {
        return $this->belongsTo('App\StudentAffairs\Classs', 'class_id');
    }

    public function courses()
    {
        return $this->belongsToMany('App\StudentAffairs\Course', 'course_id')->withPivot('student_code');
    }

    public function absents()
    {
        return $this->hasMany('App\StudentAffairs\Absent')->withPivot('student_code');
    }

    public function examAbsents()
    {
        return $this->hasMany('App\StudentAffairs\ExamAbsent')->withPivot('student_code');
    }

    public function committees()
    {
        return $this->belongsToMany('App\StudentAffairs\Committee', 'committe_id')->withPivot('student_code');
    }

    public function levels()
    {
        return $this->belongsToMany('App\StudentAffairs\Level')->withPivot('student_code', 'stage_id', 'level_id', 'class_id');
    }

    public function region()
    {
        return $this->belongsTo('App\StudentAffairs\Region', 'region_id');
    }

    public function financials()
    {
        return $this->hasMany('App\StudentAffairs\Financial')->withPivot('student_code');
    }

    public function discounts()
    {
        return $this->hasMany('App\StudentAffairs\Discount')->withPivot('student_code');
    }

    public function check_outs()
    {
        return $this->hasMany('App\StudentAffairs\CheckOut')->withPivot('student_code');
    }

    public function debts()
    {
        return $this->hasMany('App\StudentAffairs\Debt')->withPivot('student_code');
    }

    public function approval_degrees()
    {
        return $this->hasMany('App\StudentAffairs\ApprovalDegree')->withPivot('student_code');
    }

    public function images()
    {
        return $this->hasMany('App\StudentAffairs\Image')->withPivot('student_code');
    }
    
    public function parent()
    {
        return $this->belongsTo('App\StudentAffairs\Parentt', 'parentt_id');
    }

}