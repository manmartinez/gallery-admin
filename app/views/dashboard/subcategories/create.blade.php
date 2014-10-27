@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Agregar Subcategoría</h1>
        </div>
        {{ Form::model($subcategory, array('route' => 'dashboard.subcategories.store', 'role' => 'form')) }}
            @include('dashboard.subcategories.form', compact('categories'))
        {{ Form::close() }}
    </div>
@stop