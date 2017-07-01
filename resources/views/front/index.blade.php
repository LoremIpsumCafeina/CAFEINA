@extends('layouts.principal')

@section('navbar')
<!-- Barra de navegação que aparece quando da scroll down -->
<div id="navbar" class="navbar navbar-inverse navbar-fixed-top">
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
      <li><a href="comments" class="scroll">COMENTÁRIOS</a></li>
      <li><a href="#" class="mostrarModal2">LOGAR</a></li>
      <li><a href="#" id="mostrarModal" class="mostrarModal">CADASTRAR</a></li>
    </ul>
  </div><!--/.navbar-collapse -->
</div>
</div>
    
    
<header>
    <!-- Barra de Navegação do header -->
    <div class="container" >
        <div class="row" >
        <div class="col-xs-6">
          <a class="logo" href="index.html">{{$msg or ''}}</a>
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
                                    <a href="#" class="btn btn-lg mostrarModal2">
                                    Entrar
                                    </a>
                                </li>
                                <li class="col-xs-6 text-right wow fadeInUp" data-wow-delay="1s">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                    <a href="#" class="btn btn-lg mostrarModal">
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
@endsection

<!-- UsuáriosLogados -->
@section('navbarLogado')

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
      <li><a href="comments" class="scroll">COMENTÁRIOS</a></li>
      
      <li><a href="{{ route('logout') }}" onclick="
      event.preventDefault();
      document.getElementById('logout-form').submit();" 
      >LOGOUT</a></li>
      
      <form id="logout-form" action="/logout" method="post">
        {!! csrf_field() !!}
      </form>

    </ul>
  </div><!--/.navbar-collapse -->
</div>
</div>
@endsection




@section('comment')
	@for ($i = 0; $i < 10; $i++)
	<div class="comment row">
            <div class="photoComment col-lg-1">
               <img width="60px" height="60px" src="http://www.tc.columbia.edu/arts-and-humanities/arts-administration/alumni/alumni-profiles/alumni-profiles/profilePicture.jpg" alt="profile photo"> 
            </div>
            <div class="commentText col-lg-11">
            <span style="color: #22f; font-weight: bold;">Nome do individuo:</span> 

            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, cumque sit distinctio nobis optio recusandae tempora corporis voluptas autem porro, reiciendis odit impedit veritatis ipsam! Perferendis doloremque id, quasi voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque quod repellendus amet aperiam beatae. Impedit, amet praesentium accusantium reprehenderit velit excepturi commodi enim atque labore ipsam aliquid, sit rem ducimus?

            
            <span>Postado em: 29/06/2017</span>
            </div>
        </div>
        <br>
    @endfor 
@endsection



