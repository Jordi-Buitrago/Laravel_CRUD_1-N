@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Create a Modelc</h1>  
        <div>
            <a style="margin: 19px;" href="{{ route('modelcs.index')}}" class="btn btn-primary">Back</a>
        </div>  
    </div>
    <div class="col-sm-12">
        <form method="post" action="{{ route('modelcs.store') }}">
            @csrf
            <div class="form-group">    
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" name="nom"/>
            </div>
            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" name="marca"/>
            </div>
            <div class="form-group">
                <label for="places">Places:</label>
                <input type="text" class="form-control" name="places"/>
            </div>
            <div class="form-group">
                <label for="potencia">Potencia:</label>
                <input type="text" class="form-control" name="potencia"/>
            </div>
            <div class="form-group">
                <label for="consum">Consum:</label>
                <input type="text" class="form-control" name="consum"/>
            </div>
            <div class="form-group">
                <label for="cotxe_id">Cotxe_id:</label>
                <input type="text" class="form-control" name="cotxe_id"/>
            </div>
            <button type="submit" class="btn btn-primary-outline">Add Modelc</button>
        </form>
    </div>



@endsection