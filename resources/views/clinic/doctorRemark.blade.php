@extends ('layouts.app-auth')
@section('content')

<div class="wrapper wrapper-content">
    <div class="col-sm-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title" style="text-align:center;">PATIENT ENCOUNTER PAGE</h3>
            </div>
            <div class="panel-body">
                {{ Form::open(array('Action' => 'DoctorController@edit', 'method' => 'POST'))}}
                    <div class="form-group row">
                        {{ Form::label('patientsId', 'Card Number :',['class' => 'col-sm-3 col-form-label']) }}   
                        <div class="col-sm-8">
                            {{ Form::text('patientsId', '', ['class' => 'form-control','placeholder' => $treatments->patients_id,'readonly']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        {{ Form::label('Drugs', 'Physique :',['class' => 'col-sm-3 col-form-label']) }}  
                        <div class="col-sm-4">
                            {{ Form::text('weight', '', ['class' => 'form-control','placeholder' =>'Weight','required' => 'required']) }}
                        </div>
                        <div class="col-sm-4">
                            {{ Form::text('height', '', ['class' => 'form-control','placeholder' =>'Height','required' => 'required']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        {{ Form::label('Drugs', 'Diagnosis :',['class' => 'col-sm-3 col-form-label']) }}  
                        <div class="col-sm-4">
                            {{ Form::text('respiratoryRate', '', ['class' => 'form-control','placeholder' =>'Respiratory Rate','required' => 'required']) }}
                        </div>
                        <div class="col-sm-2">
                            {{ Form::text('temperature', '', ['class' => 'form-control','placeholder' =>'Temp','required' => 'required']) }}
                        </div>
                        <div class="col-sm-2">
                            {{ Form::select('ward', array('ward1' => 'Ward 1', 'ward2' => 'ward 2', 'ward3' => 'Ward 3', 'ward4' => 'Ward 4', 'ward5' => 'Ward 5'), '', ['class' => 'form-control m-b']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        {{ Form::label('Drugs', 'Diagnosis :',['class' => 'col-sm-3 col-form-label']) }}  
                        <div class="col-sm-4">
                            {{ Form::select('visit', array('first time' => 'First Visit', 'repeat visit' => 'Repeat Visit'), '', ['class' => 'form-control m-b','required' => 'required']) }}
                        </div>
                        <div class="col-sm-4">
                            {{ Form::select('treatmentType', array('hypertension' => 'Hypertension', 'malaria' => 'Malaria', 'typhoid' => 'Typhoid', 'pneumonia' => 'Pneumonia', 'diabetes' => 'Diabetes'), '', ['class' => 'form-control m-b','required' => 'required']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        {{ Form::label('patientComplain', 'Patient Complain :',['class' => 'col-sm-3 col-form-label']) }}   
                        <div class="col-sm-8">
                            {{ Form::textarea('patientComplain', '', ['class' => 'form-control','placeholder' =>'Patient Complain', 'row' => '4', 'cols' => '30', 'required' => 'required',]) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        {{ Form::label('Drugs', 'Drugs :',['class' => 'col-sm-3 col-form-label']) }}   
                        <div class="col-sm-3">
                            <input type="checkBox" name="drugs" value="buy"> Paracetamol </br>
                            <input type="checkBox" name="result" value="sell"> Paracetamol </br>
                            <input type="checkBox" name="result" value="buy"> Paracetamol </br>
                            <input type="checkBox" name="result" value="buy"> Paracetamol </br>
                            <input type="checkBox" name="result" value="sell"> Paracetamol </br>
                        </div>
                        <div class="col-sm-3">
                            <input type="checkBox" name="result" value="buy"> Paracetamol </br>
                            <input type="checkBox" name="result" value="sell"> Paracetamol </br>
                            <input type="checkBox" name="result" value="buy"> Paracetamol </br>
                            <input type="checkBox" name="result" value="buy"> Paracetamol </br>
                            <input type="checkBox" name="result" value="sell"> Paracetamol </br>
                        </div>
                        <div class="col-sm-3">
                            <input type="checkBox" name="result" value="buy"> Paracetamol </br>
                            <input type="checkBox" name="result" value="sell"> Paracetamol </br>
                            <input type="checkBox" name="result" value="buy"> Paracetamol </br>
                            <input type="checkBox" name="result" value="buy"> Paracetamol </br>
                            <input type="checkBox" name="result" value="sell"> Paracetamol </br>
                        </div>
                    </div>
                    <div class="form-group row">
                        {{ Form::label('doctorRemark', 'Treatment Plan :',['class' => 'col-sm-3 col-form-label']) }}   
                        <div class="col-sm-8">
                            {{ Form::textarea('doctorRemark', '', ['class' => 'form-control','placeholder' =>'Doctors Remark', 'row' => '4', 'cols' => '30', 'required' => 'required',]) }}
                        </div>
                    </div>
                    <div style="text-align:center;">
                        {{ Form::submit('MAKE REMARK', ['class'=>'btn btn-sm btn-primary m-t-n-xs','required' => 'required']) }}
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="js/plugins/dataTables/datatables.min.js"></script>
<script src="js/plugins/footable/footable.all.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

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