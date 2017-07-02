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
            <a class="logo" href="index.html">{{'ArrayEnterprise'}}</a>
          </div>
          <div class="validation">
            @if(isset($msgLogin))
            <a href="#janela1" rel="modal">Janela modal</a>
            <div class="window alert alert-danger" style="height: 110px;" id="janela1">
              <a href="#" class="fechar">X Fechar</a>
              <br>
              <ul>
                <li><strong>Usuário ou senha incorretos</strong></li>
              </ul>
            </div>
            <!-- mascara para cobrir o site -->  
            <div id="mascara"></div>
            @else
            <a href="#janela1" rel="modal">Janela modal</a>
            <div class="window success alert-success" style="height: 110px;" id="janela1">
              <a href="#" class="fechar">X Fechar</a>
              <br>
              <ul>
                <li><strong>Clique para logar!</strong></li>
              </ul>
            </div>
            <!-- mascara para cobrir o site -->  
            <div id="mascara"></div>
            @endif
            @if($errors->any())
            <a href="#janela1" rel="modal">Janela modal</a>
            <div class="window alert alert-danger" id="janela1">
              <a href="#" class="fechar">X Fechar</a>
              <br>
              <ul>
              @foreach($errors->all() as $error)
                <li><strong>{{$error}}</strong></li>
              @endforeach
              </ul>
            </div>
 
 
            <!-- mascara para cobrir o site -->  
            <div id="mascara"></div>
            @endif
          
          </div>
          <div class="col-xs-6 text-right navbar-nav">
            <a href="https://github.com/LucasGustavo088"><i class="fa fa-github-square fa-2x" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/in/lucas-gustavo-barbosa-a54916111/"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
            <a href="https://www.facebook.com/lucas.gustavo.5682"><i class="fa fa-facebook-square    fa-2x" aria-hidden="true"></i></a>
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


  @section('comment')
    
    @forelse($loadedComments as $comm)
    <div class="comment row">
          <div class="photoComment col-lg-1">
                 <img width="60px" height="60px" src="{{asset($comm['photo'])}}" alt="profile photo"> 
              </div>
              <div class="commentText col-lg-11">
              <span style="color: #22f; font-weight: bold;">{{$comm['name']}}:</span> 
              {{$comm['comment']}} <br>

              
              <span>Postado em: {{$comm['data']}}</span>
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
    
    @forelse($loadedComments as $comm)
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



