@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <div class="container">
        <h1>Treni: {{ count($trains) }}</h1>
        @foreach ($trains as $train)
            <div class="card">
                {{$train->company}}
            </div>
        @endforeach
    </div>
@endsection
