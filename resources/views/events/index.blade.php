@extends('layouts.app')
@section('title', 'Events')

@section('content')
    <div class="row">
    @foreach ($events as $event)
        <div class="col-sm">
            <div class="card text-center" style="width: 18rem; margin-top: 70px;">
            <img style="height:100px; width:100px; background-color: #EFEFEF; margin: 20px;"class="card-img-top rounded-circle mx-auto d-block" src="images/{{$event->Image}}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">{{$event->Name}}</h5>
            <p class="card-text">{{$event->Type_event}}</p>
            <p class="card-text">{{$event->Descripcion}}</p>
            <a href="/events/{{$event->slug}}" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
