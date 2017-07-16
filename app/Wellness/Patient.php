<?php

namespace App\Wellness;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wn_patients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'personal_id', 
        'cn', 
        'type', 
        'name', 
        'email',
        'gender',
        'birthdate',
        'address', 
        'mobile', 
        'doctor_name' ,
        'doctor_phone' ,
        'doctor_hospital',
        'allergic', 
        'advisor_id',
        'emergency_1_name',
        'emergency_1_raletionship',
        'emergency_1_phone',
        'emergency_2_name',
        'emergency_2_raletionship',
        'emergency_2_phone',
    ];

    /**
     * Get the advisor of this patient.
     */
    public function advisor()
    {
        return $this->belongsTo('App\Wellness\Advisor','advisor_id');
    }

    /**
     * Get all histories of the patient.
     */
    public function histories()
    {
        return $this->hasMany('App\Wellness\History','patient_id','id');
    }
}
