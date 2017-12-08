@extends('admin.layout.admin')
@section('content')
    <h3>Ordenes de compra</h3>
    <hr>

    <ul>
        @foreach($orders as $order)
            <li>
                <h4>Pedido a  {{$order->user->name}} <br> Precio total {{$order->total}}</h4>

                <form action="{{route('toggle.deliver',$order->id)}}" method="POST" class="pull-right" id="deliver-toggle">
                    {{csrf_field()}}
                    <label for="delivered">Delivered</label>
                    <input type="checkbox" value="1" name="Entregado"  {{$order->delivered==1?"checked":"" }}>
                    <input type="submit" value="Submit">
                </form>

                <div class="clearfix"></div>
                <hr>
                <h5>Elementos</h5>
                <table class="table table-bordered">
                    <tr>
                        <th>Nombre producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                    </tr>
                    @foreach($order->orderItems as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->pivot->qty}}</td>
                            <td>{{$item->pivot->total}}</td>
                        </tr>

                    @endforeach
                </table>
            </li>

        @endforeach

    </ul>
@endsection

