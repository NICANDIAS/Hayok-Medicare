<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use carbon\Carbon;
use App\Models\Patients;
use App\Models\Next_of_kin;
use App\Models\User;
use App\Models\Treatments;

use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cardNo = Patients::all()->count();
        $cardNo = $cardNo+1;

        if($request->isMethod('POST')){
            $patients = new Patients;
            $patients->lname = $request->input('lname');
            $patients->fname = $request->input('fname');
            $patients->oname = $request->input('oname');
            $patients->f_name = $request->input('lname').' '.$request->input('oname').' '.$request->input('fname');
            $patients->patient_id = 'HAYOK-MEDICARE/00'.$cardNo;
            $patients->Patient_department = $request->input('patient_department');

            $patients->country = $request->input('country');
            $patients->state = $request->input('state');
            $patients->LGA = $request->input('lga');
            $patients->gender = $request->input('gender');
            $patients->date_of_birth = $request->input('dateOfBirth');
            //$now = Carbon::now(date("Y-m-d H:i:s"));
            $patients->age = Carbon::parse($patients->date_of_birth)->age;
            $patients->email = $request->input('email');
            $patients->phone_number = $request->input('phoneNumber');
            $patients->height = $request->input('height');
            $patients->weight = $request->input('weight');
            $patients->BMI = $request->input('weight') / $request->input('height');;
            $patients->bloodgroup = $request->input('bloodGroup');
            $patients->marital_status = $request->input('maritalStatus');            
            $patients->disability = $request->input('disability');
            $patients->patient_underline_illness = $request->input('underlineIllness');
            $patients->extra_curicular_activities = $request->input('extraCuricularActivities');
            $patients->address = $request->input('permanentAddress');
            $patients->save();

            $next_of_kin = new Next_of_kin;
            $next_of_kin->patient_id = 'HAYOK-MEDICARE/00'.$cardNo;
            $next_of_kin->patient_next_of_kin = $request->input('surname').' '.$request->input('othername').' '.$request->input('firstname');
            $next_of_kin->patient_next_of_kin_relationship = $request->input('Nrelationship');
            $next_of_kin->patient_next_of_kin_phone = $request->input('NphoneNumber');
            $next_of_kin->patient_next_of_kin_address = $request->input('Naddress');
            $next_of_kin->save();

            $user = new User;
            $user->name = $request->input('lname').' '.$request->input('oname').' '.$request->input('fname');
            $user->email = $request->input('email');
            $user->gender = $request->input('gender');
            $user->cadre = 'Patient';
            $user->age = Carbon::parse($patients->date_of_birth)->age;
            $user->password = Hash::make($request->input('password'));
            $user->save();

            return redirect()->route('existingPatient');
        }

        return view('clinic.newPatient', ['cardNo' => $cardNo]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$allLeave = allLeave::find($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //view patient details 
        $patientSearch = $request->input('search');
        
        if($request->isMethod('POST')){
            if(patients::where('patient_id','=', $patientSearch)->exists()) {
                $patient = patients::all()->where('patient_id','=',$patientSearch)->first();
                $numberOnQueue1 = Treatments::all()->where('consulting_room','=','Consulting room 1')->count();
                $numberOnQueue2 = Treatments::all()->where('consulting_room','=','Consulting room 2')->count();
                return view('clinic.searchResult', ['patient' => $patient, 'room1' => $numberOnQueue1, 'room2' => $numberOnQueue2]);
            }else return redirect()->back();
        }

        if($request->isMethod('GET')){
            $patient = patients::all()->where('patient_id','=',$patientSearch)->pluck('patients_id');
            switch ($request->input('submitButton')){
                case 'ROOM 1':
                    //ROOM 1
                    $treatments = new Treatments;
                    $treatments->patients_id = $patient;
                    $treatments->patient_name = $patient;
                    $treatments->consulting_room = 'Consulting room 1';
                    $treatments->save();
                    return redirect('existingPatient');
                break;
                case 'ROOM 2':
                    //ROOM 2
                    $treatments = new Treatments;
                    $treatments->patients_id = $patientSearch;
                    $treatments->patient_name = $patientSearch;
                    $treatments->consulting_room = 'Consulting room 2';
                    $treatments->save();
                    return redirect('existingPatient');
                break;
            }
        }else return redirect('newPatient');

        return view ('clinic.existingPatient');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function managePatient()
    {
        return view('clinic.managePatient');
    }

    public function patientHistory()
    {
        return view('clinic.patientHistory');
    }
}
