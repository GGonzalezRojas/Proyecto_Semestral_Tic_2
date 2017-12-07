<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield('title','Bienvenido a Ventas C&C')
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


</head>
<body>
<div class="top-bar">
    <div style="color:white" class="top-bar-left">
        <h4 class="brand-title">
            <a href="{{route('home')}}">
                <i class="fa fa-home fa-lg" aria-hidden="true">
                </i>
                TIENDA BISUTERÍA C&C
            </a>
        </h4>
    </div>
    <div class="top-bar-right">
        <ol class="menu">
            <li>
                <a href="{{route('shirts')}}">
                    <i class="fa fa-shopping-bag fa-2x" aria-hidden="true">   
                    </i>
                    Catálogo
                </a>
            </li>
            <li>
               @if (Auth::check())
                @if (Auth::user()->admin != 1)
                    <li>
                        <a href="{{route('cart.index')}}">
                            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                            </i>
                            Carro
                            <span class="alert badge">
                                       {{Cart::count()}}
                                    </span>
                        </a>
                    </li>
                @endif
            @endif
            </li>
            <li>
                @if (Auth::check())
                    @if (Auth::user()->admin == 1)
                        <a href="/admin">
                        <i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>
                            {{Auth::user()->name}}
                        </a>
                    @else
                         <a href="/logout">
                         <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                            Cerrar Sessión
                        </a>
                    @endif
                @else
                    <a href="/login">
                    <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                        Iniciar Sessión
                    </a>
                @endif
            </li>
        </ol>
    </div>
</div>

@yield('content')
<footer class="footer">
    <div class="row full-width">
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-laptop"></i>
            <p>Producido y desarrollado para la asignatura de TIC 2 <br/>
                    Gustavo González <br/>
                    Juan Hahn <br/>
                    Javiera Hernández <br/>
                    Jose Silva    
            </p>
        </div>
        <br/>
        <div class="small-12 medium-10 large-4 columns">
            <br/>
            
            <i class="fa fa-bug fa-3x" aria-hidden="true"></i>
            <p>La aplicación se encuentra actualmente en desarrollo, esta es una vista preliminar del software y no representa el producto final.<br/>
               Producto desarrollado en Laravel 5.5 

            </p>
        </div>

        <div class="small-6 medium-4 large-4 columns">
            <h4>Siguenos</h4>
            <ul class="footer-links">
                <li><a href="https://github.com/GGonzalezRojas/Proyecto_Semestral_Tic_2">GitHub</a></li>
                <li><a href="https://www.facebook.com/gustavostinson">Facebook</a></li>
                <li><a href="https://twitter.com/TavoGonzalezR">Twitter</a></li>
            </ul>
        </div>
    </div>
</footer>

<script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    Stripe.setPublishableKey('pk_test_GryUHqXe48kgNc75J2BovmeN');
</script>
<script src="{{asset('dist/js/app.js')}}"></script>
</body>
</html>
