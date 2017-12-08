@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="small-6 small-centered columns">
        <form action="{{route('front.home')}}">
            <span class="payment-errors"></span>
            <input type="submit" class="submit button success" value="Submit Payment">
        </form>
        </div>
    </div>
@endsection