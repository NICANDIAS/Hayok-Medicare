@extends ('layouts.app-auth')
@section('content')

<div class="wrapper wrapper-content">
    <table class="table table-bordered">
        <tbody>
            {{-- @foreach($leave_t as $leaveType) --}}
            <tr>
                <td>Name: </td>
                <td><b>Bello Abdulrasheed</b></td>
                <td>come and be going</td>
                <td>come and be going</td>
                <td>come and be going</td>
            </tr>
            <tr>
                <td>Card Number: </td>
                <td><b>00525</b></td>
                <td>come and be going</td>
                <td>come and be going</td>
                <td>come and be going</td>
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div style="text-align:center;">
                    <h5 class="panel-title">INCOMING PATIENTS</h5>
                </div>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Card Number</th>
                                <th>Patient Name</th>
                                <th>Consulting Date/Time</th>
                                <th>Doctors Remark</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($leave_t as $leaveType) --}}
                            <tr>
                                <td>1</td>
                                <td>00525</td>
                                <td>Bello Abdulrasheed</td>
                                <td>Nov-03-2021</td>
                                <td>I dont even know whats wrong with the patient, perhaps he has Corona Virus</td>
                            <td><a class="btn btn-primary" href="{{url('/doctorRemark')}}">Make Remark</a></td>
                            </tr>
                            {{-- @endforeach --}}
                            <tfoot>
                                <tr>
                                    <th>S/N</th>
                                    <th>Card Number</th>
                                    <th>Patient Name</th>
                                    <th>Consulting Date/Time</th>
                                    <th>Doctor's Remark</th>
                                    <th>ACTION</th>
                                </tr>
                            </tfoot>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <a class="btn btn-primary" onclick="return confirm('Are you sure you want to admit this patient?')" href={{url('/admittedPatient')}}>To be admitted </a>
        </div>
        <div class="col-lg-3">
            <a class="btn btn-primary" href={{url('/nurse')}}>To see the Nurse</a>    
        </div>
        <div class="col-lg-3">
            <a class="btn btn-primary" href={{url('/phamacy')}}>To the Phamacy</a>
        </div>
        <div class="col-lg-3">
            <a class="btn btn-primary" href={{url('/lab')}}>To the lab</a>
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