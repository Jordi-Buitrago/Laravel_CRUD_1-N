@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Cotxes</h1>    
            <div>
                <a style="margin: 19px;" href="{{ route('cotxes.create')}}" class="btn btn-primary">New Cotxe</a>
            </div>  
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Marca</td>
                        <td>Model</td>
                        <td>Any</td>
                        <td>Preu</td>
                        <td colspan = 2>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dades as $cotxe)
                    <tr>
                        <td>{{$cotxe->id}}</td>
                        <td>{{$cotxe->marca}}</td>
                        <td>{{$cotxe->model}}</td>
                        <td>{{$cotxe->any}}</td>
                        <td>{{$cotxe->preu}}</td>

                        <td>
                            <a href="{{ route('cotxes.show',$cotxe)}}" class="btn btn-primary">Show</a>
                        </td>

                        <td>
                            <a href="{{ route('cotxes.edit',$cotxe->id)}}" class="btn btn-success">Edit</a>
                        </td>

                        <td>
                            <form action="{{ route('cotxes.destroy', $cotxe->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <div>
    </div>
@endsection