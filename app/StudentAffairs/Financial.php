<?php

namespace App\StudentAffairs;

use Illuminate\Database\Eloquent\Model;

class Financial extends Model 
{

    protected $table = 'financials';
    public $timestamps = true;
    protected $fillable = array('amount_paid', 'paymrnt_method', 'student_id', 'student_code', 'academic_year_id', 'receipt_num', 'cheque_num', 'cheque_confirmed', 'cheque_bank_name', 'cheque_owner_name', 'cheque_exchange_date', 'payment_image', 'is_Deposit', 'is_recovery', 'type', 'financialable_id', 'financialable_type', 'bank_id', 'bank_Deposit_number', 'note_ar', 'note_en');

    public function revenue_items()
    {
        return $this->morphTo();
    }

    public function levels()
    {
        return $this->morphTo();
    }

    public function regions()
    {
        return $this->morphTo();
    }

    public function discounts()
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

    public function bank()
    {
        return $this->belongsTo('App\StudentAffairs\Bank', 'bank_id');
    }

}