@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Titulo</div>

                    <div class="panel-body">
                        @foreach($pro as $p)
                
                {{$p->name}}

                @endforeach
                 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
