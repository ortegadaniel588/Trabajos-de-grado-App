@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="boxtable">
                <div class="card-header">{{ __('Bienvenido') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{URL::asset('imagenes/ok.gif')}}" style="height: 50px;">{{ __(' !Has iniciado sesión correctamente!') }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
