<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('bootstrap/css/fastbootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/select-input.css')}}">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <title>{{ config('app.name', 'EXAMEN_Master_2022 AL') }}</title>

</head>
<body>
   
   <div>
    <h1 class="text-center display-5 fst-italic">Examen national de <b>Master 2022 option: AL</b> </h1>

   </div>

    @yield('content')


    {{-- <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand text-center lead" href="#">Copyright @2024 par Nicaise AYIMANDE</a>
        </div>
    </nav> --}}

    <script src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/multi-select.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/fastbootstrap.min.js')}}"></script>

        
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        } );
    </script>
</body>

</html>