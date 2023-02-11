@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Cotxes</h1>
            <a href="{{ route('cotxes.create') }}" class="btn btn-success">Create</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Marca</th>
                        <th>Model</th>
                        <th>Color</th>
                        <th>Any</th>
                        <th>Preu</th>
                        <th>Descripcio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dades as $dada)
                    <tr>
                        <td>{{ $dada->marca }}</td>
                        <td>{{ $dada->model }}</td>
                        <td>{{ $dada->color }}</td>
                        <td>{{ $dada->any }}</td>
                        <td>{{ $dada->preu }}</td>
                        <td>
                            <a href="{{ route('cotxes.show', $dada->id) }}" class="btn btn-primary">Show</a>
                            <a href="{{ route('cotxes.edit', $dada->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('cotxes.destroy', $dada->id) }}" method="POST" style="display: inline">
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