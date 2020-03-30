<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class Region extends Model 
{

    protected $table = 'Regions';
    public $timestamps = true;
    protected $fillable = array('name_ar', 'name_en', 'cost');

    public function academicyear()
    {
        return $this->belongsTo('App\StudentAffairs\AcademicYear', 'academic_year_id');
    }

    public function financial()
    {
        return $this->morphMany('App\StudentAffairs\Financial', 'financialable');
    }

    public function discount()
    {
        return $this->morphMany('App\StudentAffairs\Discount', 'discountable');
    }

    public function student()
    {
        return $this->hasOne('App\StudentAffairs\Student');
    }

    public function buses()
    {
        return $this->belongsToMany('App\StudentAffairs\Bus', 'bus_id');
    }

    public function debts()
    {
        return $this->morphMany('App\StudentAffairs\Debt', 'debtable');
    }

}