@extends('layouts.app')
@section('title', 'Show Event')

@section('content')
    <img style="height:250px; width:250px; background-color: #EFEFEF; margin: 20px;"class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$event->Image}}" alt="Card image cap">
    <div class="text-center">

        <h5 class="card-title">{{$event->Name}}</h5>

    </div>
@endsection
