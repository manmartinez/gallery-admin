@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Categorías</h1>
        </div>
        @if($categories->isEmpty())
            <p class="well text-center">
                No hay categorías :(
            </p>
        @else
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category) 
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{ route('dashboard.categories.edit', array('id' => $category->id)) }}">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </a>
                                    <a href="{{ route('dashboard.categories.destroy', array('id' => $category->id)) }}" data-confirm="¿Estás seguro?" data-method="delete">
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
            <a href="{{ route('dashboard.categories.create') }}", class="btn btn-primary">
                <i class="glyphicon glyphicon-plus"></i> Agregar categoría
            </a>    
        </div>
        
    </div>
@stop