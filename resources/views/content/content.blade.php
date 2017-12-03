@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="tabs">
              <ul>
                <li><a href="#tabs-3">Mensagens</a></li>
                <li><a href="#laboratorios">Laboratórios</a></li>
                <li><a href="#tabs-1">Projetos</a></li>
              </ul>
              <div id="tabs-1">
                <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
              </div>
              <div id="laboratorios">

              		<button class="button-lab color-purple">Ordenar por</button>
              		<button class="button-lab color-pink">Filtrar</button>
<!--
                @foreach ($laboratorios as $laboratorio)
                <div class="laboratorio col-md-12" id="laboratorio" >
                <div class="col-md-4">
                {{$laboratorio->nome_laboratorio}}
                </div>
                <div class="col-md-4">
                {{$laboratorio->sala}}
                </div>
                <div class="col-md-4">
                {{$laboratorio->unidade}}
                </div>
                </div>
                <br>
                @endforeach
            -->

	            <div class="card-list-view">
					  <h2>
					Laboratório 105H
					</h2>
					  <p>
					    Laboratório de Arquitetura
					    </p>
					    <p>
					    12:00 - 18:00 <span>disponível</span>
					    </p>
					</div>
              </div>
              <div id="tabs-3">
                <div class="card-list-view-users">
<div class="div-avatar-image">
<img class="avatar-image" src="https://marketingdeconteudo.com/wp-content/uploads/2017/01/formatos-de-imagem-2.jpg"/>
</div>
<div class="text-div">
  <span>
Nome do usuário
</span>
  <span>
    São Judas (Mooca)
    </span>
    <span>
    Arquitetura
    </span>
</div>
<div class="icon-mail-div">
<img src="#" class="icon-mail"/>
</div>
</div>

              </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('body').css('background', '#fff');
	});
</script>
@endsection