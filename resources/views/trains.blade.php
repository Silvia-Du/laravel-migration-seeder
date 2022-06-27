@extends('layouts.main')

@section('content')


<div class="container d-flex flex-wrap flex-column text-center my-4">
    <h1 class="my-4">Trains</h1>
    <h2>Treni in ordine di orario di partenza</h2>
    <div class="row">
        @foreach ($trains as $train)

        <div class="train p-2 col-4">
            <div class="box p-3">

                <p class="train-code">Treno numero:{{ $train->train_code }}</p>
                <p>Partenza dalla stazione di:{{ $train->departure_station }}</p>
                <p>Arrivo stazione di:{{ $train->arrival_station }}</p>
                <p class="departure-time">Orario partenza: {{ $train->departure_time }}</p>
                <p>Orario di arrivo: {{ $train->arrival_time }}</p>
                <p>Carrozze: {{ $train->num_carriages }}</p>
                <p> {{ $train->in_time  === 1? 'Treno in orario': 'Treno in ritardo' }}</p>
                <p>{{ $train->deleted === 0? 'Treno regolare' : 'Treno cancellato' }}</p>
            </div>

        </div>
        @endforeach
    </div>

</div>

@endsection
