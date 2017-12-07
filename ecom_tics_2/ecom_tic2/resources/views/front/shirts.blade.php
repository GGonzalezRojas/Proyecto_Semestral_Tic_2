@extends('layouts.main')

@section('title','Catálogo')
@section('content')
    <!-- products listing -->
    <!-- Latest SHirts -->
    <div class="row">
        @foreach($shirts as $shirt)
            <div class="small-3 medium-3 large-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">

                    @if (Auth::check())    
                            @if (Auth::user()->admin != 1)
                                <a href="{{url('/cart/add-item/'.$shirt->id)}}" class="button expanded add-to-cart">
                                    Agregar al Carro
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
                        Precio: ${{$shirt->price}}

                    </h5>

                    <h5>
                        Disponibles: {{$shirt->cantidad}}

                    </h5>
                    <p>
                        {{$shirt->description}}
                    </p>
                </div>
            </div>
       @endforeach
    </div>
@endsection