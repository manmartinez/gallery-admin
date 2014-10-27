@section('javascripts')
    <script>
        var categories = {{ $categories->toJson() }};
    </script>
    <script src="{{ asset('javascripts/dashboard/photos/form.js') }}"></script>
@stop

<div class="form-group">
    <label>Foto</label>
    {{ Form::file('photo', array('class' => 'form-control')) }}
</div>

<div class="form-group">
    <label>Categoría</label>
    {{ Form::select('category_id', CategoriesHelper::selectOptions($categories), null, array('class' => 'form-control', 'id' => 'category_id') )}}
</div>

<div class="form-group">
    <label>Subcategoría</label>
    {{ Form::select('subcategory_id', array(), null, array('class' => 'form-control', 'id' => 'subcategory_id')) }}    
</div>

<div class="form-group">
    <label>Descripción</label>
    {{ Form::textarea('caption', null,array('class' => 'form-control', 'rows' => 5)) }}
</div>

<div class="form-actions text-right">    
    {{ Form::submit('Continuar', array('class' => 'btn btn-primary')) }}
</div>

