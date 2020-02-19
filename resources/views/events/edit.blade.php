@extends('layouts.app')
@section('title', 'Edit Event')

@section('content')

    <form class="from-group" action="/events/{{$event->slug}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="Name" value="{{$event->Name}}"class="form-control">
        <label for="">Tipo de Evento</label>
        <input type="text" name="TypeEvent" value="{{$event->Type_event}} "class="form-control">
        <label for="">Artista</label>
        <input type="text" name="Artist" value="{{$event->Artist}}"class="form-control">
        <label for="">Fecha</label>
        <input type="text" name="Date" value="{{$event->Date}}"class="form-control">
        <label for="">Estado</label>
        <input type="text" name="State" value="{{$event->State}}"class="form-control">
        <label for="">Municipio</label>
        <input type="text" name="Municipality" value="{{$event->Municipality }}"class="form-control">
        <label for="">Direccion</label>
        <input type="text" name="Address" value="{{$event->Address}}"class="form-control">
        <label for="">Descripcion</label>
        <input type="text" name="Descripcion" value="{{$event->Descripcion}}"class="form-control">
        <label for="">Imagen</label>
        <input type="file" name="Image"value="{{$event->Image}}">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
