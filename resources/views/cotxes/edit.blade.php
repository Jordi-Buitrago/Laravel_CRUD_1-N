@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Edit Car</h1>    
        <div>
            <a style="margin: 19px;" href="{{ route('cotxes.index')}}" class="btn btn-primary">Back</a>
        </div>  

        <form method="post" action="{{ route('cotxes.update', $dada->id) }}">
            @method('PUT') 
            @csrf
            <div class="form-group">    
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" name="marca" value={{ $dada->marca }} />
            </div>
            <div class="form-group">
                <label for="model">Model:</label>
                <input type="text" class="form-control" name="model" value={{ $dada->model }} />
            </div>
            <div class="form-group">
                <label for="matricula">Matricula:</label>
                <input type="text" class="form-control" name="matricula" value={{ $dada->matricula }} />
            </div>
            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" class="form-control" name="color" value={{ $dada->color }} />
            </div>
            <div class="form-group">
                <label for="any">Any:</label>
                <input type="text" class="form-control" name="any" value={{ $dada->any }} />
            </div>
            <div class="form-group">
                <label for="preu">Preu:</label>
                <input type="text" class="form-control" name="preu" value={{ $dada->preu }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    @endsection