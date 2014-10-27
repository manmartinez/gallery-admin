@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Subcategorías</h1>
        </div>
        @if($subcategories->isEmpty())
            <p class="well text-center">
                No hay subcategorías :(
            </p>
        @else
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Categoría</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subcategories as $subcategory) 
                            <tr>
                                <td>{{ $subcategory->name }}</td>
                                <td>{{ $subcategory->category->name }}</td>
                                <td>
                                    <a href="{{ route('dashboard.subcategories.edit', array('id' => $subcategory->id)) }}">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </a>
                                    <a href="{{ route('dashboard.subcategories.destroy', array('id' => $subcategory->id)) }}" data-confirm="¿Estás seguro?" data-method="delete">
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
            <a href="{{ route('dashboard.subcategories.create') }}", class="btn btn-primary">
                <i class="glyphicon glyphicon-plus"></i> Agregar subcategoría
            </a>    
        </div>
        
    </div>
@stop