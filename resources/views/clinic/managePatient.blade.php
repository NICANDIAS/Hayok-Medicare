@extends ('layouts.app-auth')
@section('content')

<div class="wrapper wrapper-content">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div style="text-align:center;">
                    <h5 class="panel-title">ALL PATIENT</h5>
                </div>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Card Number</th>
                                <th>Blood Group</th>
                                <th>weight</th>
                                <th>height</th>
                                <th>Age</th>
                                <th>Date Created</th>
                                <th>Date Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $s = 1?>
                            @foreach($patient as $patient)
                            <tr>
                                <td>{{$s++}}</td>
                                <td>{{$patient->patient_id}}</td>
                                <td>{{$patient->bloodgroup}}</td>
                                <td>{{$patient->weight}}</td>
                                <td>{{$patient->height}}</td>
                                <td>{{$patient->age}}</td>
                                <td>{{$patient->created_at}}</td>
                                <td>{{$patient->updated_at}}</td>
                            <td><a class="btn btn-primary" href="#">Edit</a> | <a class="btn btn-danger" href="#">Delete</a></td>
                            </tr>
                            @endforeach
                            <tfoot>
                                <tr>
                                    <th>S/N</th>
                                    <th>Card Number</th>
                                    <th>Blood Group</th>
                                    <th>weight</th>
                                    <th>height</th>
                                    <th>Age</th>
                                    <th>Date Created</th>
                                    <th>Date Updated</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </tbody>
                    </table>
                </div>
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