@extends('abp.menu')
@section('content')
<html lang="en">
<body>
<main>
    <div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Administrador Menu
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
            <li>
                <a class="dropdown-item" type="button" href="{{url('exas')}}">Empleados</a>
            </li>
            <li>
                <a class="dropdown-item" type="button" href="{{url('productos')}}">Productos</a>
            </li>
            <li>
                <a class="dropdown-item" type="button" href="{{url('compradores')}}">Compradores</a>
            </li>
            <li>
                <a class="dropdown-item" type="button" href="{{url('tags')}}">Empresas</a>
            </li>
        </ul>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
@endsection
