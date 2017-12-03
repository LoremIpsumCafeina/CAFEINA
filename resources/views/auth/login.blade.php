@extends('layouts.app') @section('content')
<style>

</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-body">
            <div class="panel-heading"></div>
                <form class="form-horizontal" method="POST" action="/logar">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-md-7  col-md-offset-3">
                            <input id="email" type="text" class="form-control border-input input-color" name="numero_matricula" value="{{ old('email') }}" placeholder="Entre com sua matrícula"
                             required autofocus> @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-md-7  col-md-offset-3">
                            <input id="password" type="password" class="form-control border-input input-color" name="password" placeholder="Entre com sua senha"
                             required> @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                        </div>
                    </div>
                    @if (isset($retorno))
                    <div id="esconder_esta_div" class="col-md-6 col-md-offset-5">
                    {{$retorno}}
                    </div>
                    @endif
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-5">
                            <a class="btn btn-link" style="color: white" href="{{ route('password.request') }}">
                                    Esqueceu a sua senha?
                                </a>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-7 col-md-offset-3">
                            <button type="submit" class="btn btn-primary btn-full">
                                    Entrar
                                </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection