@extends('layouts.app')

@section('template_title')
    {{ $proyecto->name ?? 'Show Proyecto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Vista Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proyectos.index') }}"> Salir</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Título:</strong>
                            {{ $proyecto->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $proyecto->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Estudiante:</strong>
                            {{ $proyecto->estudiante }}
                        </div>
                        <div class="form-group">
                            <strong>Director:</strong>
                            {{ $proyecto->director }}
                        </div>
                        <div class="form-group">
                            <strong>Evaluador 1:</strong>
                            {{ $proyecto->evaluador1 }}
                        </div>
                        <div class="form-group">
                            <strong>Evaluador 2:</strong>
                            {{ $proyecto->evaluador2 }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de inicio:</strong>
                            {{ $proyecto->fechainicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha fin:</strong>
                            {{ $proyecto->fechafin }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $proyecto->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $proyecto->observaciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
