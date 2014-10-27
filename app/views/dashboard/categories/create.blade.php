@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Agregar Categoría</h1>
        </div>
        {{ Form::model($category, array('route' => 'dashboard.categories.store', 'role' => 'form')) }}
            @include('dashboard.categories.form')
        {{ Form::close() }}
    </div>
@stop