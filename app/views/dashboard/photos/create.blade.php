@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Agregar Foto</h1>
        </div>
        {{ Form::model($photo, array('route' => 'dashboard.photos.store', 'files' => true, 'role' => 'form')) }}
            @include('dashboard.photos.form')
        {{ Form::close() }}
    </div>
@stop