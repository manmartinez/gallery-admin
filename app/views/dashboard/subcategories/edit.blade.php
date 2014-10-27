@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Editar Subcategoría</h1>
        </div>
        {{ Form::model($subcategory, array('route' => array('dashboard.subcategories.update', $subcategory->id), 'files' => true, 'role' => 'form', 'method' => 'patch')) }}
            @include('dashboard.subcategories.form', compact('categories'))
        {{ Form::close() }}
    </div>
@stop