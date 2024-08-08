<style>
  .form-control {
    font-size: 12px;
    text-align: center; /* Ajusta el tamaño del texto según tus preferencias */
}

/* También puedes aplicar estilos específicos a los placeholders si es necesario */
.form-control::placeholder {
    font-size: 12px;
    text-align: center; /* Ajusta el tamaño del placeholder */
}
.btn {
    font-size: 11px; /* Ajusta el tamaño del texto del botón según tus preferencias */
    padding: 5px 10px; /* Ajusta el relleno (padding) del botón según tus preferencias */
}


</style>
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $equipo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoria_id') }}
            {{ Form::text('categoria_id', $equipo->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $equipo->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('REGISTRAR') }}</button>
    </div>
</div>