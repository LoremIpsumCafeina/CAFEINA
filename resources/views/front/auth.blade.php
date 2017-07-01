@extends('layouts.principalAuth')

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
      <li><a href="#" id="mostrarModal" class="mostrarModal">LOGOUT</a></li>
    </ul>
  </div><!--/.navbar-collapse -->
</div>
</div>
@endsection
