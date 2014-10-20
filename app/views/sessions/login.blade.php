@extends('layouts.application')

@section('content')
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">Iniciar Sesión</h1>
                </div>
                <div class="panel-body">
                    {{ Form::open( array('route' => 'authenticate') ) }}
                        <fieldset>
                            <div class="form-group">
                                {{ Form::email('email', NULL, array(
                                                'class' => 'form-control',
                                                'placeholder' => 'Usuario',
                                                'autocapitalize' => 'off',
                                                'autocorrect' => 'off'
                                              ) ) }}
                            </div>
                            <div class="form-group">                  
                                {{ Form::password('password', array(
                                                  'class' => 'form-control',
                                                  'placeholder' => 'Password'
                                                ) ) }}
                            </div>
                            <div class="form-actions">
                                {{ Form::submit('Iniciar Sesi&oacute;n', array('class' => 'btn btn-primary btn-block')) }}
                            </div>
                        </fieldset>
                    {{ Form::close() }}
                </div>
            </div>
            @if(Session::has('alert_danger'))
                <div class="alert alert-danger">
                    {{ Session::get('alert_danger') }}
                </div>
            @endif
        </div>
    </div>
@stop