<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('ficha_numero') }}
            {{ Form::text('ficha_numero', $ficha->ficha_numero, ['class' => 'form-control' . ($errors->has('ficha_numero') ? ' is-invalid' : ''), 'placeholder' => 'Ficha Numero']) }}
            {!! $errors->first('ficha_numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('duracion') }}
            {{ Form::text('duracion', $ficha->duracion, ['class' => 'form-control' . ($errors->has('duracion') ? ' is-invalid' : ''), 'placeholder' => 'Duracion']) }}
            {!! $errors->first('duracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modalidad') }}
            {{ Form::text('modalidad', $ficha->modalidad, ['class' => 'form-control' . ($errors->has('modalidad') ? ' is-invalid' : ''), 'placeholder' => 'Modalidad']) }}
            {!! $errors->first('modalidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio') }}
            {{ Form::text('fecha_inicio', $ficha->fecha_inicio, ['class' => 'form-control' . ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fin') }}
            {{ Form::text('fecha_fin', $ficha->fecha_fin, ['class' => 'form-control' . ($errors->has('fecha_fin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin']) }}
            {!! $errors->first('fecha_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::select('programa_id', $programasArray, $ficha->programa_id, ['class' => 'form-control' . ($errors->has('programa_id') ? ' is-invalid' : '')]) }}
        </div>
    </div>

</div>
<br>
<div class="box-footer mt20">
    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
</div>
</div>
