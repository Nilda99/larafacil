@extends('layouts.app')
{{--{{$usuarios}}--}}
@section('content')
    <div class="card">
        <div class="container">
            <div class="card-header">
                <h4 class="card-title">editar <br>{{$usuario->name}}</h4>
            </div>
            <div class="card-body">
{{--                <form action="" method="post">--}}
                <form action="{{route('usuarios.update',$usuario->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="name" value="{{$usuario->name}}" placeholder="name">
                        </div>
                    </div>

{{--                    <form action="" method="post">--}}
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" name="email" value="{{$usuario->email}}" placeholder="email">
                            </div>
                        </div>
                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection