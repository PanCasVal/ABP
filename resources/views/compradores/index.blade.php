@extends('abp.menu')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Compradores</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{url('compradores/create')}}" title="Create a empleado"> <i class="fas fa-plus-circle"></i>
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
            <th>ap_p</th>
            <th>ap_m</th>
            <th>correo</th>
            <th>Acciones</th>
        </tr>
        @foreach ($compradores as $comprador)
            <tr>
                <td>{{$comprador->id}}</td>
                <td>{{$comprador->nombre}}</td>
                <td>{{$comprador->ap_p}}</td>
                <td>{{$comprador->ap_m}}</td>
                <td>{{$comprador->correo}}</td>
                <td>
                    <form action="{{url('compradores', $comprador->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger"><i class="fas fa-trash fa-lg"></i></button>
                    </form>
                     <a class="btn btn-warning" href="{{url('compradores', $comprador->id).'/edit'}}">
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

