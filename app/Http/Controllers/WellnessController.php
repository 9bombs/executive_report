<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Wellness\Patient;
use App\Wellness\History;
use App\Wellness\symptom;

class WellnessController extends Controller
{
    /**
     * Return JSON for จำนวนผู้เข้าใช้บริการหน่วยส่งเสริมสุขภาวะนิสิต จำแนกตามคณะและเพศแสดงผลใหม่
     *
     * @return void
     */
    public function graphSelect($selector)
    {
        if($selector == 1) {
            $this->patient_symptom (1, 2);
        }

    }

    public function patient_symptom ($month, $year, $semester) {

        $men_patients = DB::table('wn_patient_histories')
        ->join('wn_patients','wn_patient_histories.patient_id','=','wn_patients.id')
        ->select(DB::raw('count(*) as count'),DB::raw('YEAR(wn_patient_histories.created_at) as year'), DB::raw('MONTH(wn_patient_histories.created_at) as month'))
        ->where('wn_patients.gender','=','หญิง')
        ->groupBy(DB::raw("YEAR(wn_patient_histories.created_at), MONTH(wn_patient_histories.created_at)"))
        ->get();



    }
    

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $user = Auth::user();

        $labels = DB::table('faculties')->pluck('name');

        $datasets = "[
            { label: 'เพศชาย',backgroundColor: '#73e600', data: [49,49,32,30,29,25,23,20,16,13,10,7,5,3,0,0,0,0,0] }, 
            { label: 'เพศหญิง',backgroundColor: '#408000', data: [93,92,83,73,72,62,60,57,53,43,38,29,26,18,10,10,8,3,1] }
            ]";

        return view('wellness\home')
            ->with('user', $user)
            ->with('labels',$labels)
            ->with('datasets', $datasets); 
    }

    /**
     * get all patients 
     *
     * @return view with all data
     */
    public function patientList () {

         $user = Auth::user();

         $patients_all = Patient::all(); 

        return view('wellness\patientList')
        ->with('user', $user)
        ->with('patients' , $patients_all );
    }

    /**
     * get patient details and patient's histories
     *
     * @return view with all data
     */
    public function patientDetails($id) {

        $user = Auth::user();

        $patient = Patient::find($id);

        $histories = $patient->histories()->orderBy('created_at','desc')->get();

        return view('wellness\patientDetails')
        ->with('user', $user)
        ->with('patient', $patient)
        ->with('histories', $histories);

    }

    /**
     * return patient symptom chart data in JSON
     *
     * @return JSON
     */
    public function getPatientChart($id) {

        $user = Auth::user();

        $patient = Patient::find($id);

        $sym_count = $patient->symtomp_graph_data();

        return $sym_count;

    }
}
