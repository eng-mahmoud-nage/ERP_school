<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class Level extends Model 
{

    protected $table = 'levels';
    public $timestamps = true;
    protected $fillable = array('name_ar', 'name_en', 'cost', 'stage_id', 'st_instalment', 'nd_instalment', 'rd_instalment', 'th_instalment', 'st_inst_date', 'nd_inst_date', 'rd_inst_date', 'th_inst_date');

    public function stage()
    {
        return $this->belongsTo('App\StudentAffairs\Stage', 'stage_id');
    }

    public function classes()
    {
        return $this->hasMany('App\StudentAffairs\Class');
    }

    public function courses()
    {
        return $this->hasMany('App\StudentAffairs\Course');
    }

    public function financial()
    {
        return $this->morphMany('App\StudentAffairs\Financial', 'financialable');
    }

    public function discount()
    {
        return $this->morphMany('App\StudentAffairs\Discount', 'discountable');
    }

    public function students()
    {
        return $this->belongsToMany('App\StudentAffairs\Student');
    }

    public function controls()
    {
        return $this->hasMany('App\StudentAffairs\Control');
    }

    public function debts()
    {
        return $this->morphMany('App\StudentAffairs\Debt', 'debtable');
    }

}