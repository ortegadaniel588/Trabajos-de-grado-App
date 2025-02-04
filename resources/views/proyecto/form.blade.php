<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre del trabajo de grado') }}
            {{ Form::text('titulo', $proyecto->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Dijita el Título']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $proyecto->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estudiante') }}
            {{ Form::text('estudiante', $proyecto->estudiante, ['class' => 'form-control' . ($errors->has('estudiante') ? ' is-invalid' : ''), 'placeholder' => 'Estudiante']) }}
            {!! $errors->first('estudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('director') }}
            {{ Form::text('director', $proyecto->director, ['class' => 'form-control' . ($errors->has('director') ? ' is-invalid' : ''), 'placeholder' => 'Director']) }}
            {!! $errors->first('director', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('evaluador 1') }}
            {{ Form::text('evaluador1', $proyecto->evaluador1, ['class' => 'form-control' . ($errors->has('evaluador1') ? ' is-invalid' : ''), 'placeholder' => 'Evaluador 1']) }}
            {!! $errors->first('evaluador1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('evaluador 2') }}
            {{ Form::text('evaluador2', $proyecto->evaluador2, ['class' => 'form-control' . ($errors->has('evaluador2') ? ' is-invalid' : ''), 'placeholder' => 'Evaluador 2']) }}
            {!! $errors->first('evaluador2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha de inicio') }}
            {{ Form::text('fechainicio', $proyecto->fechainicio, ['class' => 'form-control' . ($errors->has('fechainicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de inicio']) }}
            {!! $errors->first('fechainicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha fin') }}
            {{ Form::text('fechafin', $proyecto->fechafin, ['class' => 'form-control' . ($errors->has('fechafin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha fin']) }}
            {!! $errors->first('fechafin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $proyecto->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $proyecto->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" id="btncrear" class="btn btn-primary">Guardar</button>
    </div>
</div>