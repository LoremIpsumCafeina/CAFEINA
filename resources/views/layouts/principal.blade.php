<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        Layout
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




<!-- Barra de navegação que aparece quando da scroll down -->
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="logo" href="index.html">ArrayEnterprise</a>
  </div>
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#comments" class="scroll">COMENTÁRIOS</a></li>
      <li><a href="">LOGAR</a></li>
      <li><a href="cadastroUsuario" class="scroll">CADASTRAR</a></li>
    </ul>
  </div><!--/.navbar-collapse -->
</div>
</div>
    
    
<header>
    <!-- Barra de Navegação do header -->
    <div class="container" >
        <div class="row" >
        <div class="col-xs-6">
          <a class="logo" href="index.html">ArrayEnterprise</a>
        </div>
        <div class="col-xs-6 text-right navbar-nav">
          <a href="#"><i class="fa fa-github-square fa-2x" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-facebook-square    fa-2x" aria-hidden="true"></i></a>
        </div>
        </div>
        <div class="row header-info">
                <h1 class="logoCentral">ARRAY ENTERPRISE</h1>
                <p class="lead wow fadeIn" data-wow-delay="0.5s">O que desejas fazer?</p>
                <div class="row" >
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="botoesHeader">
                            <!-- Botões header -->
                            <ul >
                                <li class="col-xs-6 text-right wow fadeInUp" data-wow-delay="1s">
                                    <i class="fa fa-id-card-o" aria-hidden="true"></i><br>
                                    <a href="#comments" class="btn btn-lg scroll">
                                    Comentários do produto 
                                    </a>
                                </li>
                                <li class="col-xs-6 text-right wow fadeInUp" data-wow-delay="1s">
                                    <i class="fa fa-sign-in" aria-hidden="true"></i><br>
                                    <a href="" class="btn btn-lg scroll">
                                    Entrar
                                    </a>
                                </li>
                                <li class="col-xs-6 text-right wow fadeInUp" data-wow-delay="1s">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                    <a href="" class="btn btn-lg scroll">
                                    Cadastrar
                                    </a>
                                </li>
                            </ul>      
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container commentsDiv col-lg-8 col-lg-offset-2" id="comments"> 
    <h2>Comentários do Produto</h2> <hr>
        
@yield('comment')
        

</div>
<div>
    
<!-- Cadastrar -->
<div class="lightBox1 col-lg-6" id="lightbox1">
    <p class="text-center">Cadastrar</p>
    <form action="/Registrar" method="post" class="form">
        
        <input class="form-control" type="text" name="name" placeholder="Nome" value="{{old('name')}}" required><br>
        <input class="form-control" type="email" name="email" placeholder="Email" value="{{old('email')}}" required><br>
        <input class="form-control" type="password" name="password" placeholder="**********" required><br>
        
        <input class="form-control" type="password" name="password_confirmation" placeholder="**********" required>   
    </form>
</div>

<div class="lightBox1 col-lg-6" id="lightbox1">
    <p class="text-center">Logar</p>
    <form action="/login" method="post" class="form">
        
        <input class="form-control" type="email" name="email" placeholder="Email" value="{{old('email')}}" required><br>
        <input class="form-control" type="password" name="password" placeholder="**********" required><br>
          
    </form>
</div>

</div>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/modernizr-2.7.1.js')}}"></script>
</body>
</html>