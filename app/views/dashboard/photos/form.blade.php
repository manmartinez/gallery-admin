<div class="form-group">
    <label>Foto</label>
    {{ Form::file('photo', array('class' => 'form-control')) }}
</div>

<div class="form-group">
    <label>Descripción</label>
    {{ Form::textarea('caption', null,array('class' => 'form-control', 'rows' => 5)) }}
</div>

<div class="form-actions text-right">    
    {{ Form::submit('Continuar', array('class' => 'btn btn-primary')) }}
</div>