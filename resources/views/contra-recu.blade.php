@extends('proyecto')

@section('div')
<div class="boxs widht-box">
@endsection

@section('inc')

<h1>Recuperar Contraseña</h1>

<label for="pass">Nueva contraseña</label>
<input type="password" name="" id="pass" placeholder="Contraseña" required> 

<label for="pass2" id="repc">Repite Contraseña</label>
<input type="password" name="" id="pass2" placeholder="Contraseña" required> 

<input type="submit" value="Modificar" id="mod">

@endsection