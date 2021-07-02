@extends('abp.menu')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modificar  </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{url('productos')}}" title="Regresar"> <i class="fas fa-backward "></i> </a>
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
    <form action="{{url('productos',$producto->id)}}" method="POST" >
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="nombre" value="{{$producto->nombre}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cantidad:</strong>
                    <input type="text" name="cantidad" class="form-control" placeholder="cantidad" value="{{$producto->cantidad}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Material:</strong>
                    <input type="text" name="material" class="form-control" placeholder="material" value="{{$producto->material}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mediadas:</strong>:</strong>
                    <input type="text" name="medidas" class="form-control" placeholder="medidas" value="{{$producto->medidas}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

    </form>

@endsection