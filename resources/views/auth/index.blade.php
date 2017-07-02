@extends('layouts.principalAuth')
 
 
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

@section('inserirComentario')
<div class="comment row adicionarComentario">
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
    <br>
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



