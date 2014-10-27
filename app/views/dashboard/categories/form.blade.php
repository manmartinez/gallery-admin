<div class="form-group">
    <label>Nombre</label>
    {{ Form::text('name', null, array('class' => 'form-control')) }}
</div>

<div class="form-actions text-right">    
    {{ Form::submit('Continuar', array('class' => 'btn btn-primary')) }}
</div>