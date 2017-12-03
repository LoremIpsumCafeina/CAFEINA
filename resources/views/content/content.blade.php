@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="tabs">
              <ul>
                <li><a href="#tabs-3">Pessoas</a></li>
                <li><a href="#laboratorios">Laboratórios</a></li>
                <li><a href="#tabs-1">Projetos</a></li>
              </ul>
              <div id="tabs-1" style="display: inline-flex; width: 100%;">
              	<div class="section-card-projects">
				<div class="ui card project-cards">
				  <div class="content">
				    
				    <img class="ui avatar image" src="https://marketingdeconteudo.com/wp-content/uploads/2017/01/formatos-de-imagem-2.jpg"> Elliot
				    <div class="meta" style="margin-left: 35px; margin-top: -5px;">14h</div>
				  </div>
				  <div class="image">
				    <img src="https://marketingdeconteudo.com/wp-content/uploads/2017/01/formatos-de-imagem-2.jpg" style="height:200px;">
				  </div>
				  <div class="content">
				    <span class="right floated">
				      <i class="heart outline like icon"></i>
				      17 likes
				    </span>
				    <i class="comment icon"></i>
				    3 comments
				  </div>
				  <div class="extra content">
				    <div class="ui large transparent left icon input">
				      <i class="heart outline icon"></i>
				      <input type="text" placeholder="Add Comment...">
				    </div>
				  </div>
				</div>



				<div class="ui card project-cards">
				  <div class="content">
				    
				    <img class="ui avatar image" src="https://marketingdeconteudo.com/wp-content/uploads/2017/01/formatos-de-imagem-2.jpg"> Elliot
				    <div class="meta" style="margin-left: 35px; margin-top: -5px;">14h</div>
				  </div>
				  <div class="image">
				    <img src="https://marketingdeconteudo.com/wp-content/uploads/2017/01/formatos-de-imagem-2.jpg" style="height:200px;">
				  </div>
				  <div class="content">
				    <span class="right floated">
				      <i class="heart outline like icon"></i>
				      59 likes
				    </span>
				    <i class="comment icon"></i>
				    200 comments
				  </div>
				  <div class="extra content">
				    <div class="ui large transparent left icon input">
				      <i class="heart outline icon"></i>
				      <input type="text" placeholder="Add Comment...">
				    </div>
				  </div>
				</div>


				<div class="ui card project-cards">
				  <div class="content">
				    
				    <img class="ui avatar image" src="https://marketingdeconteudo.com/wp-content/uploads/2017/01/formatos-de-imagem-2.jpg"> Elliot
				    <div class="meta" style="margin-left: 35px; margin-top: -5px;">14h</div>
				  </div>
				  <div class="image">
				    <img src="https://marketingdeconteudo.com/wp-content/uploads/2017/01/formatos-de-imagem-2.jpg" style="height:200px;">
				  </div>
				  <div class="content">
				    <span class="right floated">
				      <i class="heart outline like icon"></i>
				      29 likes
				    </span>
				    <i class="comment icon"></i>
				    6 comments
				  </div>
				  <div class="extra content">
				    <div class="ui large transparent left icon input">
				      <i class="heart outline icon"></i>
				      <input type="text" placeholder="Add Comment...">
				    </div>
				  </div>
				</div>
			</div>

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
						<img src="https://marketingdeconteudo.com/wp-content/uploads/2017/01/formatos-de-imagem-2.jpg" class="icon-mail"/>
					</div>
				</div>
              </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-lab">
  <div class="lab-info">
    <b><p>Laboratório 101h</p></b>
    <p>
      Desenvolvimento e TI
    </p>
    <p>13:00 - 18:00 <span class="status">livre</span></p>
  </div>
  <br>
  
  <div class="lab-config">
    <p>Configuração do Laboratório:</p>
    <div class="carrousel-config">
      <div class="train">
        <img src="#"/>
        <img src="#"/>
        <img src="#"/>
        <img src="#"/>
        <img src="#"/>
        <img src="#"/>
        <img src="#"/>
        <img src="#"/>
        <img src="#"/>
        <img src="#"/>
        <img src="#"/>
      </div>
    </div>
  </div>
  <br>
  <div class="lab-locacao">
  <p>Locação do Laboratório:</p>
  <div class="micros">
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  </div>
  <div class="micros">
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  </div>
  <div class="micros">
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  </div>
  </div>
  
</div>
    </div>
  </div>
</div>


<div class="shadow">
	
</div>
<div class="modal-lab" style="display: none;">
  <div class="lab-info">
    <b><p>Laboratório 101h</p></b>
    <p>
      Desenvolvimento e TI
    </p>
    <p>13:00 - 18:00 <span class="status">livre</span></p>
  </div>
  <br>
  
  <div class="lab-config">
    <p>Configuração do Laboratório:</p>
    <div class="carrousel-config">
      <div class="train">
        <img src="#"/>
        <img src="#"/>
        <img src="#"/>
        <img src="#"/>
        <img src="#"/>
        <img src="#"/>
        <img src="#"/>
        <img src="#"/>
        <img src="#"/>
        <img src="#"/>
        <img src="#"/>
      </div>
    </div>
  </div>
  <br>
  <div class="lab-locacao">
  <p>Locação do Laboratório:</p>
  <div class="micros">
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  </div>
  <div class="micros">
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  </div>
  <div class="micros">
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  <img src="#" class="micro-img"/>
  </div>
  </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('body').css('background', '#fff');
		$('.card-list-view').click(function(){
			$('.modal-lab').css('display','block');
			$('.shadow').css('display','block');

		});
		$('.shadow').click(function(){
			$('.modal-lab').css('display','none');
			$('.shadow').css('display','none');
		});
	});
</script>
@endsection