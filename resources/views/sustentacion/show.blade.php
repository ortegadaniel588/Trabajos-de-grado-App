@extends('layouts.app')

@section('template_title')
    {{ $sustentacion->name ?? 'Show Sustentacion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Sustentacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sustentacions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Trabajodegrado Id:</strong>
                            {{ $sustentacion->trabajodegrado_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $sustentacion->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $sustentacion->hora }}
                        </div>
                        <div class="form-group">
                            <strong>Lugar:</strong>
                            {{ $sustentacion->lugar }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $sustentacion->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
