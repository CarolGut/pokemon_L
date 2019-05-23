@extends('layouts.app')

@section('title', 'Trainer create')

@section('content')

    <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">Avatar</label>
            <input type="file" name="avatar" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary float-right">Guardar</button>
    </form>
@endsection

