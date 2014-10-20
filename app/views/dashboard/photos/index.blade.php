@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Fotos</h1>
        </div>
        @if($photos->isEmpty())
            <p class="well text-center">
                No hay fotos :(
            </p>
        @else
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <!-- <th>Categoría</th>
                            <th>Subcategoría</th>
                            <th>Tamaño</th> -->
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($photos as $photo) 
                            <tr>
                                <td>{{ $photo->photo_file_name }}</td>
                                <td>{{ $photo->caption }}</td>
                                <td>
                                    <a href="{{ route('dashboard.photos.edit', array('id' => $photo->id)) }}">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </a>
                                    <a href="{{ route('dashboard.photos.destroy', array('id' => $photo->id)) }}">
                                        <i class="glyphicon glyphicon-remove"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
        <div class="text-right">
            <a href="{{ route('dashboard.photos.create') }}", class="btn btn-primary">
                <i class="glyphicon glyphicon-plus"></i> Agregar foto
            </a>    
        </div>
        
    </div>
@stop