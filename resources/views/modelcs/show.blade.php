@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Mostrar Model</h1>
            <div>
                <a style="margin: 19px;" href="{{ route('modelcs.index')}}" class="btn btn-primary">Tornar</a>
            </div>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Nom</td>
                        <td>{{$dada->nom}}</td>
                    </tr>
                    <tr>
                        <td>Places</td>
                        <td>{{$dada->places}}</td>
                    </tr>
                    <tr>
                        <td>Potencia</td>
                        <td>{{$dada->potencia}}</td>
                    </tr>
                    <tr>
                        <td>Consum</td>
                        <td>{{$dada->consum}}</td>
                    </tr>
                    <tr>
                        <td>Cotxe</td>
                        <td>{{$dada->cotxe_id}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
@endsection
