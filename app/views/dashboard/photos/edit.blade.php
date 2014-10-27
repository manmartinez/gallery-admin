@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Agregar Foto</h1>
        </div>
        {{ Form::model($photo, array('route' => array('dashboard.photos.update', $photo->id), 'files' => true, 'role' => 'form', 'method' => 'patch')) }}
            @include('dashboard.photos.form',compact('categories'))
        {{ Form::close() }}
    </div>
@stop