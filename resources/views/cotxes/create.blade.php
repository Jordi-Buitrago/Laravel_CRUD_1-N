@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Add Car</h1>    
        <div>
            <a style="margin: 19px;" href="{{ route('cotxes.index')}}" class="btn btn-primary">Back</a>
        </div>  
        <form method="post" action="{{ route('cotxes.store') }}">
            @csrf
            
            <div class="form-group">    
                <label for="id">Id:</label>
                <input type="text" class="form-control" name="id"/>
            </div>
            <div class="form-group">    
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" name="marca"/>
            </div>
            <div class="form-group">    
                <label for="model">Model:</label>
                <input type="text" class="form-control" name="model"/>
            </div>
            <div class="form-group">    
                <label for="matricula">Matricula:</label>
                <input type="text" class="form-control" name="matricula"/>
            </div>
            <div class="form-group">    
                <label for="color">Color:</label>
                <input type="text" class="form-control" name="color"/>
            </div>
            <div class="form-group">    
                <label for="any">Any:</label>
                <input type="text" class="form-control" name="any"/>
            </div>
            <div class="form-group">    
                <label for="preu">Preu:</label>
                <input type="text" class="form-control" name="preu"/>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection