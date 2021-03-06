<!--header script-->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ config('app.name') }} - @yield('title') </title>

<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
<link href="css/plugins/footable/footable.core.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
<link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
<link href="css/overlay.css" rel="stylesheet">
<link href="css/app.css" rel="stylesheet">

<!-- Toastr style -->
<link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
        
<!-- Gritter -->
<link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="js/countries.js"></script>

@yield('extra_plugins_files')
