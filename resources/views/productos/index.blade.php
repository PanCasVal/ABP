@extends('abp.menu')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Productos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{url('productos/create')}}" title="Crear ptoducto"> <i class="fas fa-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>nombre</th>
            <th>cantidad</th>
            <th>material</th>
            <th>medidas</th>
            <th>Acciones</th>
        </tr>
        @foreach ($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->cantidad}}</td>
                <td>{{$producto->material}}</td>
                <td>{{$producto->medidas}}</td>
                <td>
                    <form action="{{url('productos', $producto->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger"><i class="fas fa-trash fa-lg"></i></button>
                    </form>
                    <a class="btn btn-warning" href="{{url('productos', $producto->id).'/edit'}}">
                        <i class="fas fa-edit fa-lg"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    <div>
        <a class="btn btn-primary"  href="{{url('inicio')}}" title="Regresar"> <li lass="fas fa-backward "></li></a>
    </div>
@endsection
