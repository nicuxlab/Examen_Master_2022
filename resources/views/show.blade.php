@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
                <h1>{{ $agent->nom }} {{ $agent->prenom }}</h1>
                <p>Matricule: {{ $agent->matricule }}</p>
                <p>Trimestre: {{ $agent->trimestre }}</p>
                <p>Note Total: {{ $agent->note_total }} / 20</p>
            </div>
        </div>

    </div>
@endsection