
@extends('layouts.app')
@section('title', 'Create Event')

@section('content')

    <form class="from-group" action="/events" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="Name" class="form-control">
        <label for="">Tipo de Evento</label>
        <input type="text" name="TypeEvent" class="form-control">
        <label for="">Artista</label>
        <input type="text" name="Artist" class="form-control">
        <label for="">Fecha</label>
        <input type="text" name="Date" class="form-control">
        <label for="">Estado</label>
        <input type="text" name="State" class="form-control">
        <label for="">Municipio</label>
        <input type="text" name="Municipality" class="form-control">
        <label for="">Direccion</label>
        <input type="text" name="Address" class="form-control">
        <label for="">Descripcion</label>
        <input type="text" name="Descripcion" class="form-control">
        <label for="">Imagen</label>
        <input type="file" name="Image">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
