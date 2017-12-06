@extends('layouts.main')

@section('content')
    <div class="row">
        <h4></h4>
        <h3>Carro</h3>

        @if (Cart::total() != '0' )
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cartItems as $cartItem)
                    
                        <tr>
                            <td>{{$cartItem->name}}</td>
                            <td>$ {{number_format($cartItem->price,0,',','.')}}</td>
                            <td>{{$cartItem->description}}</td>
                            <td width="50px">
                                {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                                <input name="qty" type="text" value="{{$cartItem->qty}}">


                            </td>

                            <td>
                                <input style="float: left"  type="submit" class="button success small" value="Actualizar">
                                {!! Form::close() !!}

                                <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                                   {{csrf_field()}}
                                   {{method_field('DELETE')}}
                                   <input class="button small alert" type="submit" value="Eliminar">
                                 </form>
                            </td>
                        </tr>
                @endforeach

                <tr>
                    <td></td>
                    <td>
                        Total: $ {{Cart::total()}}
                    </td>
                    <td>Objetos: {{Cart::count()}}

                    </td>
                    <td></td>
                    <td></td>

                </tr>
                </tbody>
            </table>
            <a href="{{route('checkout.shipping')}}" class="button">Checkout</a>
            <a href="/shirts" class="button">Catálogo</a>
        @else
            <h2>Revisa nuestro catálogo y rellena el carro!</h2>
            <a href="/shirts" class="button">Catálogo</a>
        @endif
    </div>
@endsection