<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class RevenueItem extends Model 
{

    protected $table = 'revenueItems';
    public $timestamps = true;
    protected $fillable = array('name_ar', 'name_en', 'category_id', 'cost', 'academic_year_id');

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

    public function categories()
    {
        return $this->belongsTo('App\StudentAffairs\Category', 'category_id');
    }

}