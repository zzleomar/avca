@extends('layouts.app')

@section('content')
<div class="container" id="container-sesion">
    <div class="col-md-4 col-md-offset-4" style="margin: auto;">
            <div class="card card-default py-3 center-block" style="margin: 0px;">
                <div class="card-heading d-flex justify-content-center " style="margin: auto;">
                    <img src="{{ asset('img/icon-user-default.png') }}" alt="Usuario" class="rounded-circle">
                </div>
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="control-label">Nombre de Usuario</label>

                            <div>
                                <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Contraseña</label>

                            <div>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> ¿Recuerdame?
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Entrar
                                </button>

                            </div>
                            <div class="col-12 text-center">                            
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Olvidó su contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    
$(document).ready(function(){
  var altura = $(document).height();
  altura=(altura/2)-300;
  altura=altura+"px";
  $("#container-sesion").css("margin-top",altura);

});

</script>
@endsection