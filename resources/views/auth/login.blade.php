@extends('layouts.app')

@section('content')

<!--Estilos de login personalisasdos-->
<style type="text/css">
    #boxlogin {
        padding: 1.50rem;
        padding-top: 5%;
        padding-bottom: 5%;
        box-shadow: 5px 7px 5px 0.2px grey;
        border-radius: 8px;
        background-color: white;
    }

    #txtpassword:hover {
        box-shadow: 0px 0px 10px 0 rgba(72, 110, 181, 0.3);
    }

    #email:hover {
        box-shadow: 0 0px 10px 0 rgba(72, 110, 181, 0.3);
    }

    #ingresar {
        background-color: #005790;
        border: none;
    }

    #ingresar:hover {
        animation: 10s;
        border: none;
        box-shadow: 0 0px 10px 0 rgba(72, 110, 181, 0.3);
    }
</style>

<script type="text/javascript">
    function mostrarPassword() {
        var cambio = document.getElementById("txtpassword");
        if (cambio.type == "password") {
            cambio.type = "text";
            $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        } else {
            cambio.type = "password";
            $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    }

    $(document).ready(function () {
        //CheckBox mostrar contraseña
        $('#ShowPassword').click(function () {
            $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
        });
    });
</script>

<!--Login de laravel-->
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->

<!--Login personalisado-->
<div class="Container" style="margin-top: 4.5%;">
    <div class="container-fluid">
        <div class="row p-2">
            <div class="col-sm-4"></div>
            <div id="boxlogin" class="col-sm-4" style="padding-bottom: 2.5%;">
                <h3 style="text-align: center;">Inicio de sesión</h3>
                <!--Inicio de sesió-->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!--usuario-->
                    <label for="user">{{ __('Usuario') }}</label>
                    <div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" required="true" value="{{ old('email') }}" required autocomplete="email"
                            autofocus placeholder="Ingrese su correo" style="margin-bottom: 20px;">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!--contraseña-->
                    <label for="txtpassword">{{ __('Contraseña') }}</label>
                    <div class="input-group" style="margin-bottom: 20px">


                        <input id="txtpassword" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" autofocus="false" placeholder="Ingrese su contarseña"
                            required="true" style="padding: 0x;">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <!--mostrar contraseña-->
                        <div class="input-group-append">
                            <button id="show_password" style="background-color: #005790; border: none;"
                                class="btn btn-primary" type="button" onclick="mostrarPassword()">
                                <span class="fa fa-eye-slash icon">
                                </span>
                            </button>
                        </div>
                    </div>
                    <button type="submit" name="btn_ingresar" id="ingresar"
                        class="btn btn-primary btn-block waves-effect waves-light">
                        {{ __('Ingresar') }}
                    </button>

                    <br>
                    <div class="Password" style="text-align: center;">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" style="color: #74788d!important" href="{{ route('password.request') }}">
                            <i class="fas fa-unlock-alt fa-xs"></i>{{ __(' ¿Olvidaste la contraseña?') }}
                        </a>
                        @endif
                    </div>

                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="text-align: center; color: #495057; margin-top: 10px;">
            
                © Fundación Universitaria de Popayán
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>
@endsection