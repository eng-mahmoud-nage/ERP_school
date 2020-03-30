<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class Image extends Model 
{

    protected $table = 'images';
    public $timestamps = true;
    protected $fillable = array('image', 'type', 'student_id', 'student_code', 'academic_year_id');

    public function student()
    {
        return $this->belongsTo('App\StudentAffairs\Student', 'student_id');
    }

}