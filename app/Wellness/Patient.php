<?php

namespace App\Wellness;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    /**
    * Get all histories of the patient.
    */
    public function faculty_name()
    {
        return $this->belongto('App\Wellness\History','patient_id','id');
    }

    /**
    * Return 
    */
    public function symtomp_graph_data() {

        $symptoms = DB::table('wn_patient_histories')
                ->join('wn_symptom','symptom_id','=','wn_symptom.id')
                ->select('wn_symptom.name', DB::raw('count(*) as total'))
                ->where('wn_patient_histories.patient_id','=',$this->id)
                ->groupBy('symptom_id')
                ->get();

        return $symptoms;

    }

    public function faculty() {
        
        $patient_faculty = DB::table('wn_patients')
                            ->join('faculties', 'wn_patients.faculty_id', '=', 'faculties.id')
                            ->select('faculties.name')
                            ->where('wn_patients.id', '=', $this->id)
                            ->get();

        return $patient_faculty[0]->name;
    }
}
