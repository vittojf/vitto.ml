@extends('proyecto')

@section('seccion')
<h1>Registro</h1>
@endsection

@section('div')
<div class="boxs b1">
@endsection


@section('inc')
<label for="nom">Nombre</label>
<input type="text" name="" id="nom" placeholder="Nombre">

<label for="ap">Apellido</label>
<input type="text" name="" id="ap" placeholder="Apellido">


<label for="usuR">Nombre de Usuario</label>
<input type="text" name="" id="usuR" placeholder="Usuario">

<label for="passR">Contraseña</label>
<input type="password" name="" id="passR" placeholder="Contraseña">



<label for="ema">Correo</label>
<input type="email" name="" id="ema" placeholder="Correo Electronico" >

<label for="day">Fecha de Nacimiento</label>
<input type="date" name="" id="day">


<input type="submit" value="Crear Cuenta">

<a href="{{ route('inic') }}"> ¿Tienes una cuenta? Accede a tu cuenta</a>
@endsection