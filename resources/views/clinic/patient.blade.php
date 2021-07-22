@extends ('layouts.app-auth')
@section('content')

<div class="wrapper wrapper-content">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title" style="text-align: center">NEW PATIENT</h3>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        {{ Form::open(array('Action' => 'PatientController@edit', 'method' => 'POST', 'class' => 'form-horizontal')) }}
                            <div class="form-group">
                                <div class="col-lg-2">
                                    <div class="profile-image">
                                        <img src="img/a4.jpg" class="img-circle circle-border m-b-md" alt="profile">
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="form-group">
                                        <div class="col-lg-4">
                                            {{ Form::label('lname', 'Sur-Name:', ['class' => 'col-sm-4 control-label']) }}
                                            <div class="col-sm-8">
                                                {{ Form::text('lname', '', ['class' => 'form-control','id' => 'inputEmail3','placeholder' =>$patient->lname,'required' => 'required']) }}
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            {{ Form::label('fname', 'First-Name:', ['class' => 'col-sm-4 control-label']) }}
                                            <div class="col-sm-8">
                                                {{ Form::text('fname', '', ['class' => 'form-control','id' => 'inputEmail3','placeholder' =>$patient->fname,'required' => 'required']) }}
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            {{ Form::label('oname', 'Other-Name:', ['class' => 'col-sm-4 control-label']) }}
                                            <div class="col-sm-8">
                                                {{ Form::text('oname', '', ['class' => 'form-control','id' => 'inputEmail3','placeholder' =>$patient->oname]) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-4">
                                            {{ Form::label('cardNumber', 'Card Number:', ['class' => 'col-sm-4 control-label']) }}
                                            <div class="col-sm-8">
                                                {{ Form::text('cardNumber', $patient->patient_id, ['class' => 'form-control','id' => 'inputEmail3', 'readonly']) }}
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            {{ Form::label('patient_department', 'Patient Department:', ['class' => 'col-sm-4 control-label']) }}
                                            <div class="col-sm-8">
                                                {{ Form::text('patient_department', '', ['class' => 'form-control','id' => 'inputEmail3','placeholder' =>$patient->Patient_department]) }}
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            {{ Form::label('password', 'Password:', ['class' => 'col-sm-4 control-label']) }}
                                            <div class="col-sm-8">
                                                {{ Form::text('password', '', ['class' => 'form-control','id' => 'inputEmail3','placeholder' =>'PASSWORD']) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="hr-line-dashed"></div>

                            <p><span style="color: green;">MEDICAL PROFILE</span> <span style="color: red">Kindly use this form below to supply valid informations about yourself</span></p>
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {{ Form::label('country', 'COUNTRY:',['class' => 'col-sm-4 control-label']) }}   
                                    <div class="col-sm-8">
                                        {{ Form::select('country', array('' => $patient->country),'', ['id' => 'country','class' => 'form-control m-b','required' => 'required']) }}
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    {{ Form::label('state', 'STATE OF ORIGIN:',['class' => 'col-sm-4 control-label']) }}   
                                    <div class="col-sm-8">
                                        {{ Form::select('state', array('' => $patient->state, 'ibeju-lekki' => 'Ibeju-Lekki', 'married' => 'Married', 'divorced' => 'Divorced'),'', ['id' => 'state','class' => 'form-control m-b','required' => 'required']) }}
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    {{ Form::label('lga', 'L.G.A: ', ['class' => 'col-sm-4 control-label']) }}
                                    <div class="col-sm-8">
                                        {{ Form::select('lga', array('' => $patient->LGA, 'ibeju-lekki' => 'Ibeju-Lekki', 'married' => 'Married', 'divorced' => 'Divorced'),'', ['id' => 'state','class' => 'form-control m-b','required' => 'required']) }}
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    {{ Form::label('gender', 'GENDER:',['class' => 'col-sm-4 control-label']) }}   
                                    <div class="col-sm-8">
                                        {{ Form::select('gender', array('' => $patient->gender, 'male' => 'Male', 'female' => 'Female'), '', ['class' => 'form-control m-b','required' => 'required']) }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {{ Form::label('dateOfBirth', 'DATE OF BIRTH:', ['class' => 'col-sm-4 control-label']) }}
                                    <div class="col-sm-8">
                                        {{ Form::date('dateOfBirth', '', ['class' => 'form-control','placeholder' =>$patient->date_of_birth, 'required' => 'required']) }}
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    {{ Form::label('email', 'EMAIL:', ['class' => 'col-sm-4 control-label']) }}
                                    <div class="col-sm-8">
                                        {{ Form::text('email', '', ['class' => 'form-control','id' => 'inputEmail3','placeholder' =>$patient->email,'required' => 'required']) }}
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    {{ Form::label('phoneNumber', 'PHONE NUMBER:', ['class' => 'col-sm-4 control-label']) }}
                                    <div class="col-sm-8">
                                        {{ Form::text('phoneNumber', '', ['class' => 'form-control','id' => 'inputEmail3','placeholder' =>$patient->phone_number,'required' => 'required']) }}
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    {{ Form::label('height', 'HEIGHT:', ['class' => 'col-sm-4 control-label']) }}
                                    <div class="col-sm-8">
                                        {{ Form::text('height', '', ['class' => 'form-control','id' => 'inputEmail3','placeholder' =>$patient->height,'required' => 'required']) }}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-3">
                                    {{ Form::label('weight', 'WEIGHT:', ['class' => 'col-sm-4 control-label']) }}
                                    <div class="col-sm-8">
                                        {{ Form::text('weight', '', ['class' => 'form-control','id' => 'inputEmail3','placeholder' =>$patient->weight,'required' => 'required']) }}
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    {{ Form::label('bloodGroup', 'BLOOD GROUP:',['class' => 'col-sm-4 control-label']) }}   
                                    <div class="col-sm-8">
                                        {{ Form::select('bloodGroup', array('' => $patient->bloodgroup, 'O+' => 'O+', 'O-' => 'O-', 'A+' => 'A+', 'A-' => 'A-', 'AB' => 'AB'), '', ['class' => 'form-control m-b','required' => 'required']) }}
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    {{ Form::label('maritalStatus', 'MARITAL STATUS:',['class' => 'col-sm-4 control-label']) }}   
                                    <div class="col-sm-8">
                                        {{ Form::select('maritalStatus', array('' => $patient->marital_status, 'single' => 'Single', 'married' => 'Married', 'divorced' => 'Divorced'), '', ['class' => 'form-control m-b','required' => 'required']) }}
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    {{ Form::label('disability', 'DISABILITY:',['class' => 'col-sm-4 control-label']) }}   
                                    <div class="col-sm-8">
                                        {{ Form::select('disability', array('' => $patient->disability, 'yes' => 'YES', 'no' => 'NO'), '', ['class' => 'form-control m-b','required' => 'required']) }}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-6">
                                    {{ Form::label('underlineIllness', 'Underline Illness:', ['class' => 'col-sm-2 control-label']) }}
                                    <div class="col-sm-10">
                                        {{ Form::text('underlineIllness', '', ['class' => 'form-control','id' => 'inputEmail3','placeholder' =>$patient->Patient_underline_illness]) }}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    {{ Form::label('extraCuricularActivities', 'Extra Curicular Activities:', ['class' => 'col-sm-2 control-label']) }}
                                    <div class="col-sm-10">
                                        {{ Form::text('extraCuricularActivities', '', ['class' => 'form-control','id' => 'inputEmail3','placeholder' =>$patient->extra_curicular_activities,'required' => 'required']) }}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    {{ Form::label('permanentAddress', 'Permanent Address:', ['class' => 'col-sm-1 control-label']) }}
                                    <div class="col-sm-11">
                                        {{ Form::text('permanentAddress', '', ['class' => 'form-control','id' => 'inputEmail3','placeholder' =>$patient->address,'required' => 'required']) }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="hr-line-dashed"></div>

                            <p><span style="color: green;">Next Of KIN Details</span> <span style="color: red">Kindly use this form below to supply valid informations about your Next of KIN</span></p>
                            <div class="form-group">
                                <div class="col-lg-4">
                                    {{ Form::label('surname', 'SUR-NAME:', ['class' => 'col-sm-4 control-label']) }}
                                    <div class="col-sm-8">
                                        {{ Form::text('surname', '', ['class' => 'form-control','id' => 'inputEmail3','placeholder' =>'SURNAME','required' => 'required']) }}
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    {{ Form::label('firstname', 'First-NAME:', ['class' => 'col-sm-4 control-label']) }}
                                    <div class="col-sm-8">
                                        {{ Form::text('firstname', '', ['class' => 'form-control','id' => 'inputEmail3','placeholder' =>'First NAME','required' => 'required']) }}
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    {{ Form::label('othername', 'OTHER-NAME:', ['class' => 'col-sm-4 control-label']) }}
                                    <div class="col-sm-8">
                                        {{ Form::text('othername', '', ['class' => 'form-control','id' => 'inputEmail3','placeholder' =>'OTHER NAME','required' => 'required']) }}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-6">
                                    {{ Form::label('Nrelationship', 'RELATIONSHIP :',['class' => 'col-sm-4 control-label']) }}   
                                    <div class="col-sm-8">
                                        {{ Form::select('Nrelationship', array('' => 'Select', 'father' => 'Father', 'mother' => 'Mother'), '', ['class' => 'form-control m-b','required' => 'required']) }}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    {{ Form::label('NphoneNumber', 'PHONE NUMBER :', ['class' => 'col-sm-4 control-label']) }}
                                    <div class="col-sm-8">
                                        {{ Form::text('NphoneNumber', '', ['class' => 'form-control','id' => 'inputEmail3','placeholder' =>'Phone Number ','required' => 'required']) }}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    {{ Form::label('Naddress', 'Contact Address :', ['class' => 'col-sm-1 control-label']) }}
                                    <div class="col-sm-11">
                                        {{ Form::text('Naddress', '', ['class' => 'form-control','id' => 'inputEmail3','placeholder' =>'Contact Address','required' => 'required']) }}
                                    </div>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div style="text-align:center;">
                                {{ Form::submit('SUBMIT', ['class'=>'btn btn-sm btn-primary m-t-n-xs','required' => 'required']) }}
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mainly scripts -->
<script src="public/js/jquery-2.1.1.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="public/js/plugins/dataTables/datatables.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="public/js/inspinia.js"></script>
<script src="public/js/plugins/pace/pace.min.js"></script>

<script language="javascript">
	populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
	populateCountries("country2");
	populateCountries("country2");
</script>

<script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>
@endsection
