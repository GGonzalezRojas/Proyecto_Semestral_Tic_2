@extends('layouts.main')

@section('content')
    <section class="hero text-center">
        <br/>
        <br/>
        <br/>
        <br/>
        <h2>
            <strong>
                Bienvenido a tiendas C&C
            </strong>
        </h2>
        <br>
        <a href="{{url('/shirts')}}">
            <button class="button large">Nuestros produtos</button>
        </a>
    </section>
    <br/>
    <div class="subheader text-center">
        <h2>
            NOVEDAD EN PRODUCTOS!
        </h2>
    </div>

    <!-- Latest SHirts -->
    <div class="row">
        @forelse($shirts->chunk(4) as $chunk)
            @foreach($chunk as $shirt)
            <div class="small-3 medium-3 large-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">

                    @if (Auth::check())    
                            @if (Auth::user()->admin != 1)
                                <a href="{{route('cart.addItem',$shirt->id)}}" class="button expanded add-to-cart">
                                    Agregar a carro
                                </a>
                             @endif
                     @endif   
                        <a href="#">
                            <img src="{{url('images',$shirt->image)}}"/>
                        </a>
                    </div>
                    <a href="{{url('shirt/'.$shirt->id)}}">
                        <h3>
                            {{$shirt->name}}
                        </h3>
                    </a>
                    <h5>
                        ${{$shirt->price}}

                    </h5>

                    <h5>
                        Cantidad disponible:{{$shirt->cantidad}}

                    </h5>
                    <p>
                        {{$shirt->description}}
                    </p>
                </div>
            </div>
            @endforeach
        @empty
            <h3>No existen productos en inventario</h3>
        @endforelse
    </div>

    <!-- Footer -->
    <br>
@endsection