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
                <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
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