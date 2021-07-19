@extends ('layouts.app-auth')
@section('content')

<div class="wrapper wrapper-content">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td>Name: </td>
                <td><b>{{$patient->f_name}}</b></td>
                <td>come and be going</td>
                <td>come and be going</td>
            </tr>
            <tr>
                <td>Card Number: </td>
                <td><b>{{$patient->patient_id}}</b></td>
                <td>come and be going</td>
                <td>come and be going</td>
            </tr>
            {{-- {{ Form::open(array('action' => 'PatientController@show', 'method' => 'GET')) }} --}}
                <tr>
                    <td><b>{{$room1}} on queue for Room 1</b></td>
                    <td>{{ Form::submit('ROOM 1', array('name' => 'submitButton','class'=>'btn btn-sm btn-primary m-t-n-xs')) }}</td>
                    <td><b>{{$room2}} on queue for Room 2</b></td>
                    <td>{{ Form::submit('ROOM 2', array('name' => 'submitButton','class'=>'btn btn-sm btn-primary m-t-n-xs')) }}</td>
                </tr>
            {{-- {{ Form::close() }} --}}
        </tbody>
    </table>
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