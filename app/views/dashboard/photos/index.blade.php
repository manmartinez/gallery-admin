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
            <div class="row">
                @foreach($photos as $photo)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="photo text-center">
                            <img src="{{ $photo->photo->url() }}" alt="" class="img-responsive img-thumbnail">    
                            @if( !empty($photo->caption) )
                                <p class="text-left">{{ $photo->caption }}</p> 
                            @endif

                            <div>
                                <div class="pull-left">
                                    <span class="label label-info">{{ $photo->category->name }}</span>    
                                    @if($photo->subcategory)
                                        <span class="label label-info">{{ $photo->subcategory->name }}</span>    
                                    @endif 
                                </div>
                                <div class="pull-right">
                                    <a href="{{ route('dashboard.photos.edit', array('id' => $photo->id)) }}">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </a>
                                    <a href="{{ route('dashboard.photos.destroy', array('id' => $photo->id)) }}" data-confirm="¿Estás seguro?" data-method="delete">
                                        <i class="glyphicon glyphicon-remove"></i>
                                    </a>    
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        
                    </div>
                @endforeach
            </div>
        @endif
        <div class="text-right">
            <a href="{{ route('dashboard.photos.create') }}", class="btn btn-primary">
                <i class="glyphicon glyphicon-plus"></i> Agregar foto
            </a>    
        </div>
        
    </div>
@stop