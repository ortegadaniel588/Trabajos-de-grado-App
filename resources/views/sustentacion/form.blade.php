<div class="box box-info padding-1">
    <div class="box-body">
        

        <!--aqui relacion proyectos con sustentacion-->
        <div class="form-group">
            {{ Form::label('Trabajo de grado') }}
            {{ Form::select('trabajodegrado_id', $proyectos, $sustentacion->trabajodegrado_id, ['class' => 'form-control' . ($errors->has('trabajodegrado_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona el trabajo de grado']) }}
            {!! $errors->first('trabajodegrado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $sustentacion->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora') }}
            {{ Form::text('hora', $sustentacion->hora, ['class' => 'form-control' . ($errors->has('hora') ? ' is-invalid' : ''), 'placeholder' => 'Hora']) }}
            {!! $errors->first('hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lugar') }}
            {{ Form::text('lugar', $sustentacion->lugar, ['class' => 'form-control' . ($errors->has('lugar') ? ' is-invalid' : ''), 'placeholder' => 'Lugar']) }}
            {!! $errors->first('lugar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $sustentacion->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" id="btncrear" class="btn btn-primary">Guardar</button>
    </div>
</div>