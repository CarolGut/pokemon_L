@extends('layouts.app')

@section('title', 'Trainers')

@section('content')

<div class="row">
    @foreach ($trainers as $trainer)
        <div class="col-sm">
            <div class="card text-center mt-5" style="width: 18rem;">
                <img class="card-img-top rounded-circle mx-auto d-block w-50 h-50 m-3" src="images/{{$trainer->avatar}}" alt="avatar">
                    <div class="card-body">
                        <h5 class="card-title">{{$trainer->name}}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/trainers/{{$trainer->id}} " class="btn btn-primary">Ver más...</a>
                    </div>
            </div>
        </div>
    @endforeach
</div>
@endsection

