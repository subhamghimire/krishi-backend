<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Krishi</title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7362fdfc7d.js" crossorigin="anonymous"></script>
    <style>
        #toast-container {
            margin-top: 10px !important;
        }

        .table-responsive{
            display: inline-table;
        }

        @media only screen and (max-width: 600px)
        {
            .table-responsive{
                display: block;
            }
        }

    </style>
    @yield("css")
</head>

<body>
<div id="wrapper">
        @include('layouts.sidebar')
    <div id="page-wrapper" class="gray-bg dashboard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header" style="width: 100%">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>
            @yield('content')
        </div>
    </div>
</div>

    <script src="{{ mix('/js/app.js') }}"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {

            $(".select2").select2();

            toastr.options = {
                "positionClass" : "toast-top-center",
                "closeButton" : true,
                "debug" : false,
                "newestOnTop" : true,
                "progressBar" : true,
                "preventDuplicates" : false,
                "onclick" : null,
                "showDuration" : "300",
                "hideDuration" : "1000",
                "timeOut" : "5000",
                "extendedTimeOut" : "1000",
                "showEasing" : "swing",
                "hideEasing" : "linear",
                "showMethod" : "fadeIn",
                "hideMethod" : "fadeOut"
            }

            @if(Session::has('success'))
                toastr['success']("{{ Session::get('success') }}")
            @endif
                @if(Session::has('warning'))
                toastr['warning']("{{ Session::get('warning') }}")
            @endif
                @if(Session::has('error'))
                toastr['error']("{{ Session::get('error') }}")
            @endif
        });
    </script>

{{--    <script type="text/javascript" src="https://unpkg.com/nepali-date-picker@2.0.0/dist/jquery.nepaliDatePicker.min.js" integrity="sha384-bBN6UZ/L0DswJczUYcUXb9lwIfAnJSGWjU3S0W5+IlyrjK0geKO+7chJ7RlOtrrF" crossorigin="anonymous"></script>--}}
{{--    <link rel="stylesheet" href="https://unpkg.com/nepali-date-picker@2.0.0/dist/nepaliDatePicker.min.css" integrity="sha384-Fligaq3qH5qXDi+gnnhQctSqfMKJvH4U8DTA+XGemB/vv9AUHCwmlVR/B3Z4nE+q" crossorigin="anonymous">--}}

{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>--}}
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>--}}

{{--    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>--}}
@yield('scripts')

</body>
</html>
