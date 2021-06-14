@extends('abp.menu')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Registrar mueble</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{url('posts')}}" title="Regresar"> <i class="fas fa-backward "></i> </a>
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
    <form action="{{url('posts')}}" method="POST" >
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre_Mueble:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descripccion</strong>
                    <textarea class="form-control" style="height:50px" name="descripcion"
                              placeholder="descripcion"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Precio_COSTO:</strong>
                    <input type="text" name="precio" class="form-control" placeholder="precio">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong></strong>Precio_Venta:</strong>
                    <input type="text" name="venta" class="form-control" placeholder="Venta">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Usuario:</strong>
                    <select name="user_id" id="">
                        <option value="1">Adrian</option>
                        <option value="1">Juan Diego</option>
                        <option value="1">Luis Fernando</option>
                        <option value="1">Miguel</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

    </form>

@endsection
