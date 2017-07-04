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
    @yield('navbar') 

<br>
<div class="container commentsDiv col-lg-8 col-lg-offset-2" id="comments" > 
   
    <h2 class="">Comentários do Produto</h2> <hr>
@yield('inserirComentario')
@yield('comment')
</div>
        

</div>
<div>
    
<!-- Cadastrar -->
<div class="modal" id="modal">
    <div>
        <p class="text-center">Cadastrar</p>
        <form action="{{url('/Registrar')}}" method="post" class="form" id="registrar">
            {!! csrf_field() !!}
            <input class="form-control" type="text" name="name" placeholder="Nome" value="{{old('name')}}" required><br>
            <input class="form-control" type="email" name="email" placeholder="Email" value="{{old('email')}}" required><br>
            <input class="form-control" type="password" name="password" placeholder="**********" required><br>
            
            <input class="form-control" type="password" name="password_confirmation" placeholder="**********" required><br>

            <input type="hidden" name="token" value="">
            <div id="msgCadastro" class=""></div>
            <input class="form-control" type="submit" name="registrar" value="Registrar">
        </form>
    </div>    
</div>
<!-- Logar -->
<div class="modal2" id="modal2">
    <div>
        <p class="text-center">Logar</p>
        <form action="{{url('/Logar')}}" method="post" class="form" id="logar">
            {!! csrf_field() !!}
            <input class="form-control" type="email" name="email" placeholder="Email" value="{{old('email')}}" required><br>
            <input class="form-control" type="password" name="password" placeholder="**********" required><br>  
            
            <input type="hidden" name="token" value="">
            <div id="msgLogin" class="navbar-inverse"></div>
            <input class="form-control" id="inputEntrar" name="logar" type="submit" value="Entrar">

        </form>
    </div>  
</div>


<div class="modal-background" id="modal-background"></div>
<div class="modal-background2" id="modal-background2"></div>
    


<script src="{{url('js/app.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/modernizr-2.7.1.js')}}"></script>
</body>
</html>