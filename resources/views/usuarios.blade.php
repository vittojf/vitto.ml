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
<table class="table table-borderless table-dark">
    <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Usuario</th>
            <th scope="col">Correo</th>
            <th scope="col">Contraseña</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuario as $us )


        <tr>
            <th scope="row">{{ $us->id }}</th>
            <td>{{ $us->nombre }}</td>
            <td>{{ $us ->correo }}</td>
            <td>{{ $us ->contraseña }}</td>
        </tr>
        @endforeach()
    </tbody>
</table>

@endsection