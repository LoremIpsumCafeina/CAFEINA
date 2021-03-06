@if(Auth::check())
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield('title', 'ArrayEnterprise')
    </title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">

    <script src="{{asset('js/jquery-3.2.1.js')}}"></script>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <style>
        .logoCentral {
            font-size: 400%;

        }
    </style>

</head>
<body>


@yield('navbarLogado')


<div class="container commentsDiv col-lg-8 col-lg-offset-2" id="comments"> 
    <h2>Comentários do Produto</h2> <hr>
@yield('inserirComentario')

    

@yield('comment')
</div>
        

</div>
<div>
    

<div class="modal-background" id="modal-background"></div>
<div class="modal-background2" id="modal-background2"></div>
    


<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/modernizr-2.7.1.js')}}"></script>
</body>
</html>
@endif