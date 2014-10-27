@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Editar Categoría</h1>
        </div>
        {{ Form::model($category, array('route' => array('dashboard.categories.update', $category->id), 'files' => true, 'role' => 'form', 'method' => 'patch')) }}
            @include('dashboard.categories.form')
        {{ Form::close() }}
    </div>
@stop