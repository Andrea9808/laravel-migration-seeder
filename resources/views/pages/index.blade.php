@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <div class="container">
        <h1>Treni: {{ count($trains) }}</h1>
        @foreach ($trains as $train)
            <div class="card">
                <h6>Azienda: {{ $train->company }}</h6>
                <h6>Partenza: {{ $train->departure_station }}</h6>
                <h6>Arrivo: {{ $train->arrival_station }}</h6>
                <h6>Partenza: {{ $train->departure_time }}</h6>
                <h6>Arrivo: {{ $train->arrival_time }}</h6>
                <h6>Codice treno: {{ $train->train_code }}</h6>
                <h6>Numero carrozze: {{ $train->number_carriages }}</h6>
                <h6>In orario: {{ $train->on_time ? 'Sì' : 'No' }}</h6>
                <h6>Cancellato: {{ $train->cancelled ? 'Sì' : 'No' }}</h6>
            </div>
        @endforeach
    </div>
@endsection
