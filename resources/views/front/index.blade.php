@extends('layouts.principal')

@if(!(Auth::check()))
<!-- *********************** VISITANTES ***************************** -->
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
      <a class="logo" href="#">ArrayEnterprise</a>

    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="projetos" class="scroll">Projetos</a></li>
        <li><a href="#" class="mostrarModal2">LOGAR</a></li>
      </ul>
    </div><!--/.navbar-collapse -->
  </div>
  </div>
      
      
  <header>
      <!-- Configurações desta página CSS -->
      <style>
          .modalMsg1, .modalMsg2, .modalMsg3 {
                background: #444; 
                color: #ddd;
                z-index: 1;
                position: absolute;
                border: 1px solid #000;
                border-radius: 10px;
        }
      </style>
      <!-- Barra de Navegação do header -->
      <div class="container" >
          <div class="row" >
          <div class="col-xs-6">
            <a class="logo" href="index.html">{{'Connect'}}</a>
          </div>
          <div class="validation">
          </div>
          <div class="col-xs-6 text-right navbar-nav">
            <a href="https://github.com/LoremIpsumCafeina"><i class="fa fa-github-square fa-2x" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-facebook-square    fa-2x" aria-hidden="true"></i></a>
          </div>
          </div>
          <div class="row header-info">
                  <h1 class="logoCentral">CONNECT</h1>
                  <p class="lead wow fadeIn" data-wow-delay="0.5s">O que desejas fazer?</p>
                  <div class="row" >
                      <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                          <div class="botoesHeader">
                              <!-- Botões header -->
                              <ul >
                                  <li class="col-xs-6 text-right wow fadeInUp" data-wow-delay="1s">
                                      <i class="fa fa-id-card-o" aria-hidden="true"></i><br>
                                      <a href="#projetos" class="btn btn-lg scroll">
                                      PROJETOS 
                                      </a>
                                  </li>
                                  <li class="col-xs-6 text-right wow fadeInUp" data-wow-delay="1s">
                                      <i class="fa fa-sign-in" aria-hidden="true"></i><br>
                                      <a href="/login" class="btn btn-lg">
                                      Entrar
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



@else
<!-- *********************** USUARIOS LOGADOS ***************************** -->
  @section('navbarLogado')

      <!-- Barra de navegação que aparece quando da scroll down -->
  <div class="navbar-inverse navbar-fixed-top">
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
        <li><a href="{{route('index')}}" class="scroll">COMENTAR</a></li>
        
        <li><a href="#" onclick="
        event.preventDefault();
        document.getElementById('config-form').submit();" >CONFIGURAÇÕES</a></li>
        
        <li><a href="{{ route('logout') }}" onclick="
        event.preventDefault();
        document.getElementById('logout-form').submit();" 
        >LOGOUT</a></li>

        <form id="config-form" action="/Usuario/Configuracoes" method="post">
          {!! csrf_field() !!}
          <input type="hidden" name="userId" value="{{Auth::User()->id}}">
        </form>

        <form id="logout-form" action="/logout" method="post">
          {!! csrf_field() !!}
        </form>

      </ul>
    </div><!--/.navbar-collapse -->
  </div>
  </div>
  @endsection

  @section('inserirComentario')
  <div class="comment row adicionarComentario" >
          <textarea name="comment" placeholder="Comente aqui..." class="form-control" name="comment" form="inserirComentario" cols="10" rows="5"></textarea>
          <form class="form" action="InserirComentario" id="inserirComentario">
              <div>
                  <br>
                  {!! csrf_field() !!}
                  <!-- Dados Usuário -->
                  <input type="hidden" name="idUser" value="{{Auth::User()->id}}">
                  <button class="success btn btn-success" type="submit" id="btnInserirComentario"><span class="glyphicon glyphicon-plus"></span> Publicar</button>   
              </div>
          </form>
      </div>
      <hr>
      
  @endsection

  @section('comment')
    
    @forelse($loadedprojetos as $comm)
    <div class="comment row">
          <div class="photoComment col-lg-1">
                 <img width="60px" height="60px" src="{{asset($comm['photo'])}}" alt="profile photo"> 
              </div>
              <div class="commentText col-lg-11">
              <span style="color: #22f; font-weight: bold;">{{$comm['name']}}:</span> 
              {{$comm['comment']}} <br><br>
                <span >Postado em: {{$comm['data']}}</span>
              
        </div>
    </div>
    <hr> 
    @empty  
    <div class="comment row">
      <br><br>
      <p class="text-center" style="font-size: 25px">Nenhum comentário. Seja o primeiro a comentar!</p>
      
    </div>
    @endforelse

  @endsection

@endif



