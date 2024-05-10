@extends('layouts.master')

@section('content')
<div class="container">

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-between mt-3 mb-4">
            <a class="btn btn-xs btn-info" href="{{ route('agents.index') }}">
            Ajouter un agent
            </a>
            <a class="btn btn-xs btn-secondary me-2" href="{{ route('agents.listing') }}">
                Liste des agents
            </a>
    </div>

    

    <table id="myTable" class="table table-striped table-bordered " style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Date</th>
                <th>Matricule</th>
                <th>Nom et prénom(s)</th>
                <th>Trimestre</th>
                <th>Note Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($agents as $agent)
            <tr>
                <td>{{ $agent->id }}</td>
                <td>{{ $agent->created_at->format('d-m-Y') }}</td>
                <td>{{ $agent->matricule }}</td>
                <td>{{ $agent->nom }} {{ $agent->prenom }}</td>
                <td>{{ $agent->trimestre }}</td>
                <td>{{ $agent->note_total }} / 20</td>
                <td>
                    <a class="btn btn-primary" href="{{route('agents.show', $agent)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a class="btn btn-secondary" href="{{route('agents.edit', $agent)}}"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 
</div>
{{-- {{ $agents->links() }}  --}}
@endsection