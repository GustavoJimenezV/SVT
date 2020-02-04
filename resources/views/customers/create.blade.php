
@extends('layouts.app')
@section('title', 'Create Client')

@section('content')

    <form class="from-group" action="/customers" method="post">
        @csrf
    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" name="name" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
