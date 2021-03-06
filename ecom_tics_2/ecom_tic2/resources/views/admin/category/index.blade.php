@extends('admin.layout.admin')

@section('content')

    <div class="navbar">
        <a class="navbar-brand" href="#">Categories =></a>
        <ul class="nav navbar-nav">
            @if(!empty($categories))
            @forelse($categories as $category)
                <li class="active">
                    <a href="{{route('category.show',$category->id)}}">{{$category->name}}</a>
                            {{-- delete button --}}
                    <form action="{{route('category.destroy',$category->id)}}"  method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <input class="btn btn-sm btn-danger" type="submit" value="Eliminar">
                     </form>

                </li>
            @empty
                <li>No existen elementos</li>
            @endforelse
                @endif

        </ul>



    <a class="btn btn-primary pull-right navbar-right" data-toggle="modal" href="#category">Agregar categoría</a>
    <div class="modal fade" id="category">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Agregar nuevo</h4>
                </div>
                {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
                <div class="modal-body">
                    <div class="form-group">
                        {{ Form::label('name', 'Título') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </div>
                {!! Form::close() !!}
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    </div>

    {{--products--}}
    @if(isset($products))

    <h3>Productos</h3>

    <table class="table table-hover">
    	<thead>
    		<tr>
    			<th>Productos</th>
    		</tr>
    	</thead>
    	<tbody>
@forelse($products as $product)
    <tr><td>{{$product->name}}</td></tr>
    	@empty
        <tr><td>No existen elementos</td></tr>
        @endforelse

        </tbody>
    </table>
    @endif

@endsection
    
    
    