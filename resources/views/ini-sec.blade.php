
@extends('proyecto')


@section('div')
<div class="boxs ">
@endsection

@section('inc')
<h1>Iniciar Sección</h1>

<label for="usu">Usuario</label>
<input type="text" name="" id="usu" placeholder="Usuario" required>


<label for="pass">Contraseña</label>
<input type="password" name="" id="pass" placeholder="Contraseña" required> 

<a href="{{ route('recup') }}">¿Olvidaste tu Contraseña? </a>

<input type="submit" value="Iniciar">


@endsection

@section('crear')
<a href="{{ route('regist') }}"   >Crear Cuenta</a>
@endsection