<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class Parentt extends Model
{
    protected $table = 'parentts';
    public $timestamps = true;
    protected $fillable = array('parent_name_ar', 'parent_name_en', 'user_name', 'password', 'student_code', 'student_id', 'parent_phone', 'parent_status', 'kindship', 'parent_job', 'parent_email');

    public function students()
    {
        return $this->hasMany('App\StudentAffairs\Student');
    }
}
