<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model 
{

    protected $table = 'banks';
    public $timestamps = true;
    protected $fillable = array('bank_name');

    public function financials()
    {
        return $this->hasMany('App\StudentAffairs\Financial');
    }

}