@extends('plantilla')
@section('enlaces')
<li class="nav-item">
    <a class="nav-link" href="{{ route('usua') }}">Usuarios</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('administrador') }}">Agregar Juegos</a>
</li>
@endsection
@section('section')




<h1 class="display-4 text-light text-center mt-4" > Ingresar juegos</h1>
<div class="card w1 cw " >

    <div class="card-body">
    
        <form method="POST" action="{{ route('juegos.ingresar') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-sm-12 my-1">
                <label for="user"> Juego</label>
                <input type="text" name="nombre" class="form-control" id="user">
            </div>

            <div class="col-sm-12 my-1">
                <label for="exampleInputPassword1">Descripcion</label>
                <input type="textarea" name="descripcion" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="col-sm-12 my-1">
                <label for="exampleInputPassword1">precio</label>
                <input type="number" name="precio" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="col-sm-12 my-1">
                <label for="exampleInputPassword1">imagen</label>
                <input type="file" name="imagen" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="text-center ">
                <button type="submit" class="btn btn-primary w-75 mt-3 ">Login</button>
            </div>

        </form>
    </div>

</div>
</div>

</div>




@endsection
