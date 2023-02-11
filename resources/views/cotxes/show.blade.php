@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Mostrar Cotxe</h1>
            <div>
                <a style="margin: 19px;" href="{{ route('cotxes.index')}}" class="btn btn-primary">Tornar</a>
            </div>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>{{$dada->id}}</td>
                    </tr>
                    <tr>
                        <td>Marca</td>
                        <td>{{$dada->marca}}</td>
                    </tr>
                    <tr>
                        <td>Any</td>
                        <td>{{$dada->any}}</td>
                    </tr>
                    <tr>
                        <td>Preu</td>
                        <td>{{$dada->preu}} $</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endsection