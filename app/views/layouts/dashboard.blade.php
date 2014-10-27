<!DOCTYPE html>
<html>
    <head>
        <title>Gallery Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>    
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src="{{ asset('javascripts/vendor/laravel-ujs.js') }}"></script>
        @yield('javascripts')
    </head>
    <body>
        <nav class="navbar navbar-static-top navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>    
                    </button>   
                    {{ link_to_route('dashboard.photos.index', 'Admin', null, array('class' => 'navbar-brand')) }}
                </div>   
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            {{ link_to_route('dashboard.photos.index', 'Fotos') }}
                        </li>
                        <li>
                            {{ link_to_route('dashboard.categories.index','Categorías') }}
                        </li>
                        <li>
                            {{ link_to_route('dashboard.subcategories.index','Subcategorías') }}
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{ Auth::user()->fullName() }} <span class="caret"></span>
                            </a> 
                            <ul class="dropdown-menu">
                                <li>
                                    {{ link_to_route('logout', 'Salir') }}
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            
        </nav>
        @yield('content')
    </body>
</html>
