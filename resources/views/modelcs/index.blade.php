@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Model de Cotxe</h1>
            <a href="{{ route('modelcs.create') }}" class="btn btn-success">Create</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Places</th>
                        <th>Potencia</th>
                        <th>Consum</th>
                        <th>ID Cotxe</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dades as $dada)
                    <tr>
                        <td>{{ $dada->nom }}</td>
                        <td>{{ $dada->places }}</td>
                        <td>{{ $dada->potencia }} CV</td>
                        <td>{{ $dada->consum }} l/100km</td>
                        <td>{{ $dada->cotxe_id }}</td>
                        <td>
                            <a href="{{ route('modelcs.show', $dada->id) }}" class="btn btn-primary">Show</a>
                            <a href="{{ route('modelcs.edit', $dada->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('modelcs.destroy', $dada->id) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection