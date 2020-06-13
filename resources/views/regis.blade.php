@extends('proyecto')



@section('div')
<div class="boxs b1">
@endsection


@section('inc')
<h1>Registro</h1>
<label for="nom">Nombre</label>
<input type="text" name="" id="nom" placeholder="Nombre" required>

<label for="ap">Apellido</label>
<input type="text" name="" id="ap" placeholder="Apellido" required>


<label for="usuR">Nombre de Usuario</label>
<input type="text" name="" id="usuR" placeholder="Usuario" required>

<label for="passR">Contraseña</label>
<input type="password" name="" id="passR" placeholder="Contraseña" required>



<label for="ema">Correo</label>
<input type="email" name="" id="ema" placeholder="Correo Electronico" required >

<label for="day">Fecha de Nacimiento</label>
<input type="date" name="" id="day" required>


<input type="submit" value="Crear Cuenta">

<a href="{{ route('inic') }}"> ¿Tienes una cuenta? Accede a tu cuenta</a>
@endsection