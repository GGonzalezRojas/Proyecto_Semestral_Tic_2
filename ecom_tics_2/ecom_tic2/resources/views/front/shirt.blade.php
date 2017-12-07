@extends('layouts.main')

@section('title','Producto')

@section('content')

    <!-- products listing -->
    <!-- Latest SHirts -->
    <div class="row">
        <div class="small-5 small-offset-1 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="#">
                        <img src="{{url('images',$shirt->image)}}"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="item-wrapper">
                <h3 class="subheader">
                    <span class="price-tag">${{$shirt->price}}</span> {{$shirt->name}}</span> </br>
                    Quedan {{$shirt->cantidad}}
                </h3>
                <div class="row">
                    <div class="large-12 columns">
                        <label>
                            Selecciona tamaño
                            <select>
                                <option value="small">
                                    Pequeña
                                </option>
                                <option value="medium">
                                    Mediana
                                </option>
                                <option value="large">
                                    Grande
                                </option>
                                <option value="large">
                                    Extra Grande
                                </option>

                            </select>
                        </label>
                        <a href="{{url('/cart/add-item/'.$shirt->id)}}" class="button  expanded">Agregar al Carro</a>
                    </div>
                </div>
                <!-- products listing -->
               <!-- <p class="text-left subheader">
                    <small>* Designed by <a href="https://www.youtube.com/webdevmatics">Webdevmatics</a></small>
                </p>
                -->
            </div>
        </div>
    </div>

@endsection