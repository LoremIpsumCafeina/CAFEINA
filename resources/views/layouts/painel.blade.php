<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield('title', 'ArrayEnterprise')
    </title>
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/app.css')}}"/>
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.css')}}">

    <script src="{{url('js/jquery-3.2.1.js')}}"></script>
    <script src="{{url('js/jquery-3.2.1.min.js')}}"></script>
    <style>
        .logoCentral {
            font-size: 400%;

        }
    </style>

</head>
<body id="comentar">

    @yield('navbarLogado')
    @yield('editarCadastro')   
    @yield('editarComentario')
        

</div>
<div>
    
<script src="{{url('js/app.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/modernizr-2.7.1.js')}}"></script>
</body>
</html>