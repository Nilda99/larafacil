@extends('layouts.app')
{{--{{$usuarios}}--}}
@section('content')
   <div class="container">
    <div class="card">
        <div class="card-header">

            <h4 class="card-title float-left">Lista de Usuarios </h4>
            <a href="#" class="btn btn-sm btn-success float-right"><i class="fa fa-plus-circle"></i> Nuevo Usuario</a>

        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                </tr>
                </thead>
                <tbody>
                @foreach($usuarios as $usuario)
                <tr class="table-primary">
                    <th scope="row">1</th>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->email}}</td>
                </tr>
                @endforeach
{{--                <tr>--}}
{{--                    <th scope="row">2</th>--}}
{{--                    <td>Jacob</td>--}}
{{--                    <td>Thornton</td>--}}
{{--                </tr>--}}
                </tbody>
            </table>

        </div>
    </div>
   </div>
@endsection