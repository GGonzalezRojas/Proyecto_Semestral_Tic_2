@extends('admin.layout.admin')

@section('content')

    <h3>Productos</h3>

<ul class="container">
    @forelse($products as $product)
    <li class="row">


       <div class="col-md-8">
        <h4>Nombre de Producto: {{$product->name}}</h4>
        <h4>Categoria: {{count($product->category)?$product->category->name:"N/A"}}</h4>
        @foreach ($product->images as $image)
          
          <img src="{{$image->image_path}}" style="max-width: 200px">
  
        @endforeach
      <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary btn-sm ">Editar Producto</a>
      <br>

        <form action="{{route('product.destroy',$product->id)}}"  method="POST">
           {{csrf_field()}}
           {{method_field('DELETE')}}
           <input class="btn btn-sm btn-danger" type="submit" value="Eliminar">
         </form>

         <div class="col-md-4">
            
            <form action="/admin/product/image-upload/{{$product->id}}" method="POST" class="dropzone" id="my-awesome-dropzone-{{$product->id}}">
              {{csrf_field()}}

             </form>

        </div>

    </li>

        @empty

        <h3>No hay productos</h3>

    @endforelse
</ul>


@endsection