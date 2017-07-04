@extends('layouts.painel')

@if(!(Auth::check()))
	
@else

<style>
	.editarCadastro{
		margin-top: 60px;
	}
	.hiddenInput{
		height: 0px;width: 0px; overflow:hidden;
	}
</style>

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
        <li><a href="{{url('/')}}">COMENTAR</a></li>
        <li><a href="{{url('/Usuario/Configuracoes')}}">CONFIGURAÇÕES</a></li>
        
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
  

@section('editarCadastro')
@if(isset($msg))
        <script>
          $(document).ready(function(){
            $('.modalMsg').fadeIn(750); 
            $('.modalMsg').fadeOut(2500);
          });

          
        </script>

        <div class="col-md-6 alert alert-success col-lg-offset-3 modalMsg">
          <p class="text-center">{{$msg}}</p>
        </div>
  @endif
<br><br>
<div class="container" >
	<div class="col-lg-12">
		<div class="col-lg-12">
			<h2>Configurações</h2>
			<p>Editar Configurações de conta</p>
		</div>
		<hr>
		<div id="profileImgChange" class="col-lg-12" >
			<ul style="list-style: none;">
				<li>
					<a id="uparFoto" href="#" onclick="desculpe()">
					
					<img src="{{asset('img/users_img/profile_picture.jpg')}}"/>
					<span style="color: white; font-family: sans-serif;">Alterar </span>
					</a>
				</li>
			</ul>		
		</div>
	
		<hr>
		<div class="col-lg-12 editarCadastro">
		<form action="{{url('Usuario/EditarCadastro')}}" method="post" class="form" id="editarCadastro">
            {!! csrf_field() !!}
            <div class="input-group editarNomeDiv">
              <input type="hidden" name="id" value="{{Auth::User()->id}}">
            	<input class="form-control" id="editarNome" type="text" name="name" placeholder="Nome" value="{{Auth::User()->name}}" aria-describedby="editarNomeBtn" required readonly>
				<span style="font-size: 20px;" class="btn input-group-addon glyphicon glyphicon-pencil" id="editarNomeBtn"></span>
            </div><br>
            <div class="input-group editarEmailDiv">
            	<input class="form-control" id="editarEmail" type="email" name="email" placeholder="Email" value="{{Auth::User()->email}}" required readonly>
            	<span style="font-size: 20px;" class="btn input-group-addon glyphicon glyphicon-pencil"></span>
            </div><br>
            <div onclick="desculpe()">
            <input class="form-control" type="password" name="current_password" placeholder="Senha atual" ><br>     
            <input class="form-control" type="password" name="password" placeholder="Confirme a senha" ><br>
            <input class="form-control" type="password" name="password_confirmation" placeholder="Nova Senha" ><br>
            </div>
			   	 
				    <input type="file" name="photo" id="upload" class="upload" style="display:none">

            <input type="hidden" name="token" value="">
  
            <input class="btn btn-success" type="submit" name="salvar" value="Salvar">
        </form>

		</div>
	</div>
</div>


@endsection
<br><br>
@section('editarComentario')
<div class="container">
	<div class="col-lg-12">
		<h2>Meus comentários</h2>
		<p>Editar meus comentários</p>
		<hr>

		@forelse($comentariosUser as $comm)
		<div class="comment row">
          	<div class="photoComment col-lg-1">
                 <img width="60px" height="60px" src="{{asset($comm['photo'])}}" alt="profile photo"> 
            </div>
            <div class="commentText col-lg-9">
              <span class="editarComentario" style="color: #22f; font-weight: bold;">{{$comm['name']}}:</span>
              <br><br>
              <form action="{{url('Usuario/editarComentario')}}" class="form" method="post" id="editarComentarioForm">
              {!! csrf_field() !!}
                <input type="text" class="form-control" name="comment" value="{{$comm['comment']}}">
                <input type="number" value="{{$comm['id']}}" name="id" hidden>
                <input type="submit" id="editarComentarioSubmit" hidden>
              </form>
              		<br><br>
                <span>Postado em: {{$comm['data']}}</span>
        	</div>
          <div class="col-lg-1">
  
            <button class="btn btn-success" onclick="document.getElementById('editarComentarioForm').submit();">
            <i class="fa fa-check fa-2x" aria-hidden="true"></i></button>
          </div>

          <div class="col-lg-1">
          <form action="{{url('/Usuario/ExcluirComentario')}}" method="post" >
          {!! csrf_field() !!}
          <input type="number" value="{{$comm['id']}}" name="id" hidden>
          <button class="btn btn-primary editarComentarioBtn" type="submit"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
          
          </form>
          </div>

    	</div>
      <hr>
		@empty

		<p class="text-center">Você não possui nenhum comentário.</p>

		@endforelse
	</div>
</div>
@endsection

@endif 

<script>
function desculpe(){
  alert('Desculpe o transtorno, essa funcionalidade ainda será implementada :)');
}
</script>