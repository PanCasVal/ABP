@extends('abp.menu')

@section('content')
<div></div>
  <div class="container" style="margin-top: 2em">
        <div class="row">
            <div class="col-sm">
               <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Puesto</th>
                      <th scope="col">Numero</th>
                    </tr>
                  </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Adrian</td>
                    <td>Vendedor</td>
                    <td>7353838</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                      <td>Luis</td>
                      <td>Vendedor</td>
                      <td>7352526</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <th>Diego</th>
                    <td>Vendedor</td>
                    <td>7483929</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-sm">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15071.222544612318!2d-100.13672755!3d19.203689799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1621369770881!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
        <!--form-- style="margin: 1em">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre de Producto</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Precio</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3">
                  </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Envio</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Estatal
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Nacional
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                      <label class="form-check-label" for="gridRadios3">
                        Internacional
                      </label>
                    </div>
                  </div>
                </fieldset>
                <div class="row mb-3">
                  <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Expres
                      </label>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Presupuesto</button>
              </form-->
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Crear Un Pedido </h2>
            </div>
            <!--div class="pull-right">
                <a class="btn btn-primary" href="{{url('tags')}}" title="Regresar"> <i class="fas fa-backward "></i> </a>
            </div-->
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
    <form action="{{url('tags')}}" method="POST" >
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Ejemplo: Jose">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Apellido paterno:</strong>
                    <input type="text" name="ap_p" class="form-control" placeholder="Ejemplo: Maria">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Apellido materno:</strong>
                    <input type="text" name="ap_m" class="form-control" placeholder="Ejemplo: Gonzales">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre del producto:</strong>
                    <input type="text" name="n_p" class="form-control" placeholder="Ejemplo: Mesa">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Zona:</strong>
                    <input type="text" name="zona" class="form-control" placeholder="Ejemplo: Sala">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Precio visto:</strong>
                    <input type="text" name="precio" class="form-control" placeholder="Ejemplo: 1000">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
@endsection
