<?php

namespace App\Wellness;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wn_patient_histories';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'living_place', 
        'living_with', 
        'meet_with', 
        'patient_id', 
        'note',
        'symptom_id',
    ];

     /**
     * Get the advisor of this patient.
     */
    public function patient()
    {
        return $this->belongsTo('App\Wellness\Patient','patient_id');
    }

     /**
     * Get the advisor of this patient.
     */
    public function advisor()
    {
        return $this->belongsTo('App\Wellness\Advisor','meet_with');
    }

    /**
     * Get the advisor of this patient.
     */
    public function symptom()
    {
        return $this->belongsTo('App\Wellness\Symptom','symptom_id');
    }

    


}
