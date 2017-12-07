@extends('layouts.main')

@section('content')
    <br>
<div class="row">
    <div class="small-6 small-centered columns">
        <h3>Información de despacho</h3>

        {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

        <div class="form-group">
            {{ Form::label('addressline', 'Dirección') }}
            {{ Form::text('addressline', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('city', 'Ciudad') }}
            {{ Form::text('city', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('state', 'Región') }}
            {{ Form::text('state', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('zip', 'Código postal') }}
            {{ Form::text('zip', null, array('class' => 'form-control')) }}
        </div>
        <!--
        <div class="form-group">
            {{ Form::label('country', 'País') }}
            {{ Form::text('country', null, array('class' => 'form-control')) }}
        </div>
        -->
        <div class="form-group">
            {{ Form::label('phone', 'Teléfono') }}
            {{ Form::text('phone', null, array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Pagar', array('class' => 'button success')) }}
        {!! Form::close() !!}
    </div>


</div>


@endsection