@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Secciones</div>

                    <div class="panel-body">
                        
                        @if (session()->has('message'))
                                {{session('message')}}
                        @else
                        Bienvenido a Administración
                        @endif 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
