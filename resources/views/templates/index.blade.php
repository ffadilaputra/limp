<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Limpp</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}";>
        <link rel="stylesheet" href="{{ URL::asset('lib/font-awesome/css/font-awesome.min.css') }}";>
        <link rel="stylesheet" href="{{ URL::asset('lib/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('lib/bootstrap-datatables/css/dataTables.bootstrap.min.css') }}">
    </head>
    <body>
       @include('templates.header')

        @yield('content')

        @include('templates.footer')

        <script src="{{ URL::asset('lib/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ URL::asset('lib/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ URL::asset('lib/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('lib/bootstrap-datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('lib/bootstrap-datatables/js/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('lib/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#tg').datepicker({
                format:"yyyy/m/dd",
                todayHighlight:true,
                clearBtn:true 
            });
            $('#main').DataTable();
            $(".push_menu").click(function(){
            $(".wrapper").toggleClass("active");
            });
        });
        $(document).on('change','.fk_category',function(){
            var tipe = $('.fk_category option:selected').attr('tipe');
            $('.tipe').val(tipe);
        })
        </script>
    </body>
</html>