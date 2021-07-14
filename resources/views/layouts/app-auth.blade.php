<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{config('app.name','Hayok Medicare')}}</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    {{-- <link rel="icon" href="{{ asset('public/img/kwasu.png') }}" type="image/png" /> --}}
    <link rel="stylesheet" href="css/vendor.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="gray-bg" style="background-image: url(img/leave.jpg); background-size: cover;" data-ng-app="flicksApps" data-ng-controller="flicksAuthController">
    
    <div class="loginColumns animated fadeInDown">
        @yield('content')
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright {{ config('app.name') }}
            </div>
            <div class="col-md-6 text-right">
                <small>&copy; 2017-{{ date('Y') }}</small>
            </div>
        </div>
    </div>
   

    <!-- Scripts -->
    <script src="js/app.js"></script>
    <script src="js/angularjs/angular.min.js"></script>
    <script src="js/angularjs/app.js"></script>
    <script src="js/plugins/oclazyload/dist/ocLazyLoad.min.js"></script>
    <script src="js/ui-router/angular-ui-router.min.js"></script>
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="js/app/flicksauth.js"></script>
</body>
</html>
