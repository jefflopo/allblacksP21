<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>All Blacks P21 Sistemas - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{URL::to('dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/dataTables.bootstrap4.min.css')}}">
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
    <script type="text/javascript" src="{{URL::to('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('js/dataTables.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('js/dataTables.bootstrap4.min.js')}}"></script>
    <script>
            $(document).ready(function() {
                $('#tableIndex').DataTable({
                    "columnDefs": [
                        {
                            "render": function ( data, type, row ) {
                                return data +' ('+ row[3]+')';
                            },
                            "targets": 0
                        },
                        { "visible": false,  "targets": [ 3 ] }
                    ]
                });
            } );
    </script>
</body>
</html>