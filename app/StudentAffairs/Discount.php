<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model 
{

    protected $table = 'discounts';
    public $timestamps = true;
    protected $fillable = array('type', 'discount', 'student_id', 'student_code', 'academic_year_id', 'date', 'note_ar', 'discountable_id', 'discountable_type', 'note_en');

    public function levels()
    {
        return $this->morphTo();
    }

    public function revenue_items()
    {
        return $this->morphTo();
    }

    public function regions()
    {
        return $this->morphTo();
    }

    public function academicyear()
    {
        return $this->belongsTo('App\StudentAffairs\AcademicYear', 'academic_year_id');
    }

    public function student()
    {
        return $this->belongsTo('App\StudentAffairs\Student', 'student_id');
    }

}