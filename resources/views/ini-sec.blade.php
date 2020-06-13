
@extends('proyecto')

@section('seccion')
<h1>Iniciar Sección</h1>
@endsection

@section('div')
<div class="boxs ">
@endsection
@section('inc')

<label for="usu">Usuario</label>
<input type="text" name="" id="usu" placeholder="Usuario">


<label for="pass">Contraseña</label>
<input type="password" name="" id="pass" placeholder="Contraseña">

<a href="{{ route('regist') }}">¿Olvidaste tu Contraseña? -</a>

<input type="submit" value="Iniciar">
@endsection

@section('anc')

<a href="{{ route('regist') }}">Crear Cuenta</a>
@endsection