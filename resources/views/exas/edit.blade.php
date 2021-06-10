@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modificar Empleado </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{url('exas')}}" title="Regresar"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{url('exas',$exa->id)}}" method="POST" >
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Codigo:</strong>
                    <input type="text" name="codigo" class="form-control" placeholder="codigo" value="{{$exa->codigo}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="nombre" value="{{$exa->nombre}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Apellido Paterno:</strong>
                    <input type="text" name="ap_p" class="form-control" placeholder="Apellido Paterno" value="{{$exa->ap_p}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Apellido Materno:</strong>:</strong>
                    <input type="text" name="ap_m" class="form-control" placeholder="Apellido Materno" value="{{$exa->ap_m}}">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Area:</strong>:</strong>
                    <input type="text" name="area" class="form-control" placeholder="Area" value="{{$exa->area}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sueldo:</strong>:</strong>
                    <input type="text" name="sueldo" class="form-control" placeholder="Sueldo" value="{{$exa->sueldo}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Numero de Dias:</strong>:</strong>
                    <input type="text" name="dias" class="form-control" placeholder="Numeros de Dias" value="{{$exa->dias}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

    </form>

@endsection