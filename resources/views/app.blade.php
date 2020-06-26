<!doctype html>
<html>
<meta charset="UTF-8">
<meta name="google" content="notranslate">
<meta http-equiv="Content-Language" content="en">
<meta charset="utf-8">
@yield('page-refresh')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>IT Asset Management</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet"
          href="{{ asset('plugins/AdminLTE-2.4.5/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="{{ asset('plugins/AdminLTE-2.4.5/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('plugins/AdminLTE-2.4.5/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('plugins/AdminLTE-2.4.5/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('plugins/AdminLTE-2.4.5/dist/css/skins/_all-skins.min.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet"
          href="{{ asset('plugins/AdminLTE-2.4.5/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet"
          href="{{ asset('plugins/AdminLTE-2.4.5/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    {{-- Javascript --}}
    <!-- jQuery 3 -->
    <script src="{{ asset('plugins/AdminLTE-2.4.5/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/AdminLTE-2.4.5/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('plugins/AdminLTE-2.4.5/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/AdminLTE-2.4.5/bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/AdminLTE-2.4.5/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ asset('plugins/AdminLTE-2.4.5/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('plugins/AdminLTE-2.4.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset('plugins/AdminLTE-2.4.5/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('plugins/AdminLTE-2.4.5/bower_components/fastclick/lib/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('plugins/AdminLTE-2.4.5/dist/js/adminlte.min.js')}}"></script>
    <!-- VueJS-->
    <script src="{{ asset('plugins/vuejs/vuejs2.5.2.js') }}"></script>
    <!-- inputmask -->
    <script src="{{ asset('plugins/inputmask/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/inputmask/inputmask/inputmask.regex.extensions.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('plugins/AdminLTE-2.4.5/bower_components/select2/dist/js/select2.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('plugins/AdminLTE-2.4.5/bower_components/select2/dist/css/select2.css') }}">
    <!-- Selectize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>
    <!-- Autocomplete -->
    <script src="{{ asset('plugins/autocomplete.min.js') }}"></script>
    <!-- Data Tables-->
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/plug-ins/1.10.16/sorting/ip-address.js"></script>
    <link rel="stylesheet" href="{{  asset('css/itam.css') }}">
</head>

<body class="hold-transition skin-green sidebar-mini">
@yield('content')
@yield('js-code')
</body>
</html>