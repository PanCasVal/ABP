@extends('abp.menu')

@section('content')
    <script type="text/javascript">
        function comparar(){
            var form = document.inicioo;
            var user = form.usuario.value;
            var pass = form.password.value;
            if(user =='juan diego' && pass=='123456'){
                alert("DATOS CORRECTOS");
                form.submit();
            }else{
                if(user =='adrian' && pass=='123456'){
                    alert("DATOS CORRECTOS");
                    form.submit();
                }else{
                    if(user =='luis_fer' && pass=='123456'){
                        alert("DATOS CORRECTOS");
                        form.submit();
                    }else{
                        if(user =='miguel' && pass=='123456'){
                            alert("DATOS CORRECTOS");
                            form.submit();
                        }else{
                            alert("Usuario O Contraseña Incorrecto");
                        }
                    }
                }
            }
        }
    </script>

        <div class="container">
            <div class="row text-center login-page" style="padding: 18% 0 0;
                                                      margin: 0 auto 100px;
                                                      max-width: 360px;
                                                      position: relative;">
                <div class="col-md-12 login-form" style="box-shadow: 0 0 27px 0 rgba(84, 84, 84, 0.62)">
                    <form action="{{url("posts/create")}}" method="POST" name="inicioo">
                        <div class="row" style="padding-top: 16px; padding-bottom: 16px;">
                            <div class="col-md-12 login-form-header" style=" padding-top: 16px;">
                                <p class="login-form-font-header" style="font-size: 2em;">I<span style="color: #007C9B;">nicio</span><p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 login-from-row" style="padding-top: 16px; padding-bottom: 16px;">
                                <input name="usuario" type="text" placeholder="Usuario" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 login-from-row" style="padding-top: 16px; padding-bottom: 16px;">
                                <input name="password" type="password" placeholder="Contraseña" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 login-from-row" style="padding-top: 16px; padding-bottom: 16px;">
                                <input type="button" name="btn" onclick="comparar()" value="Entrar" style="border-radius:20px; background-color: #4aa0e6">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
