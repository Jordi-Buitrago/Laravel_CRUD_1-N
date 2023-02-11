@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Modelc</h1>
        <div>
            <a style="margin: 19px;" href="{{ route('modelcs.index')}}" class="btn btn-primary">Back</a>
        </div>
        <form method="post" action="{{ route('modelcs.update', $dada->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" name="nom" value={{ $dada->nom }} />
            </div>
            <div class="form-group">
                <label for="places">Places:</label>
                <input type="text" class="form-control" name="places" value={{ $dada->places }} />
            </div>
            <div class="form-group">
                <label for="potencia">Potencia:</label>
                <input type="text" class="form-control" name="potencia" value={{ $dada->potencia }} />
            </div>
            <div class="form-group">
                <label for="consum">Consum:</label>
                <input type="text" class="form-control" name="consum" value={{ $dada->consum }} />
            </div>
            <div class="form-group">
                <label for="cotxe_id">Cotxe_id:</label>
                <input type="text" class="form-control" name="cotxe_id" value={{ $dada->cotxe_id }} />
            </div>
            <button type="submit" class="btn btn-primary">Update Modelc</button>
        </form>
    </div>
@endsection