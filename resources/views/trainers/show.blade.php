@extends('layouts.app')

@section('title', 'Trainer')

@section('content')

    <img class="card-img-top rounded-circle mx-auto d-block w-25 h-0 m-3" src="/images/{{$trainer->avatar}}" alt="avatar">
        <div class="text-center">
            <h5 class="card-title">{{$trainer->name}}</h5>
            <p class="card-text">Fugiat commodo magna magna voluptate deserunt. Eu adipisicing occaecat adipisicing est cillum excepteur nulla sint ut duis amet pariatur. Non excepteur voluptate Lorem cillum nisi reprehenderit irure non ex culpa dolore aliqua eu excepteur. Ipsum sunt et do in irure proident occaecat amet. Elit quis ullamco non tempor est laborum deserunt minim consequat. Eiusmod eiusmod magna et sint nisi. Ea minim voluptate Lorem velit nisi anim cillum eiusmod magna veniam incididunt sint excepteur.</p>
        </div>

@endsection

