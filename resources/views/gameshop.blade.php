@extends('plantilla')

@section('form')
<a href="{{ route('login') }}" class="btn btn-secondary w-10 mr-1">Iniciar Sección</a>
@endsection
@section('section')
<div class="jumbotron jumbotron-fluid mx-auto rounded jc  mt-4">
    <div class="container ">
        <div class="float-left w-50 text-white m">
            <h1 class="display-4 text-center">GAME SHOP</h1>
            <p class="lead text-center mt-0">GameShop Es una Plataforma donde podrás conseguir
                Juegos para Tu consola al mejor precio del mercado. ¿Quieres saber los
                precios y el catálogo de juegos? Registrate y disfruta. </p>
        </div>


        <h1 class="re text-white">Registro</h1>
        <div class="card w mt-4">


            <div class="card-body">
                <form method="POST" action="{{ route('regis.guar') }}" >
                @csrf
                    <div class="col-sm-12 my-1">
                        <label for="user">User</label>
                        <input type="text" name="nombre" class="form-control" id="user">
                    </div>
                    <div class="col-sm-12 my-1">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="col-sm-12 my-1">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="contraseña" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="text-center ">
                        <button type="submit" class="btn btn-primary w-75 mt-3 ">Registrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>



</div>



<!--
@for($i = 0; $i < 10; $i++)
<div class="card bg-light mb-3 float-left mt-5 ml-5 mr-2 center " style="max-width: 18rem;">
  <div class="card card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Light card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
 
@endfor
-->
@endsection
