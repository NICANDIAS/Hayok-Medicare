<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treatments;

class DoctorDecisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inComingPatients = Treatments::all()->where('consulting_room','=','Room 1');
        
        return view('clinic.doctorOffice', ['patient' => $inComingPatients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //Patient Encounter page
        if($request->isMethod('POST')){

            $treatment = Treatments::find($id);
            $treatment->weight = $request->input('weight');
            $treatment->height = $request->input('height');
            $treatment->BMI = $request->input('weight') / $request->input('height');;
            $treatment->respiratory_rate = $request->input('respiratoryRate');
            $treatment->temperature = $request->input('temperature');
            $treatment->ward = $request->input('ward');
            $treatment->visit = $request->input('visit');
            $treatment->treatment_type = $request->input('treatmentType');
            $treatment->consulting_status = 'Treated';
            $treatment->patient_complain = $request->input('patientComplain');
            $treatment->drugs_administered = $request->input('drugs');
            $treatment->doctor_remark = $request->input('doctorRemark');
            $treatment->save();

            return redirect('doctorOffice');
        }
        $treats = Treatments::find($id);

        return view('clinic.doctorRemark')->with('treatments',$treats);
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
}
