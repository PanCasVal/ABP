@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD LOOKUP</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{url('lookups/create')}}" title="Create a Lookup"> <i class="fas fa-plus-circle"></i>
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
            <th>name</th>
            <th>code</th>
            <th>type</th>
            <th>position</th>
            <th>Acciones</th>
        </tr>
        @foreach ($lookups as $lookup)
            <tr>
                <td>{{$lookup->id}}</td>
                <td>{{$lookup->name}}</td>
                <td>{{$lookup->code }}</td>
                <td>{{$lookup->type}}</td>
                <td>{{$lookup->position}}</td>
                <th>
                    <form action="{{url('lookups', $lookup->id)}}" method="POST">   
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger"><i class="fas fa-trash fa-lg"></i></button>
                    </form>
                     <a class="btn btn-warning" href="{{url('lookups',$lookup->id).'/edit'}}">
                        <i class="fas fa-edit fa-lg"></i>
                    </a>
                </th>
            </tr>
        @endforeach
    </table>

@endsection