@extends('proyecto')


@section('seccion')


@if(!empty($in))

@switch($in)

@case($in=='iniciar')
<div class="boxs ">
    <div class="ch">
        <h1>Iniciar Sección</h1>
        <form>
            <label for="usu">Usuario</label>
            <input type="text" name="" id="usu" placeholder="Usuario" required>


            <label for="pass">Contraseña</label>
            <input type="password" name="" id="pass" placeholder="Contraseña" required>

            <a href="{{ route('formu','recuperar') }}">¿Olvidaste tu Contraseña? </a>

            <input type="submit" value="Iniciar">
        </form>
    </div>
    <a href="{{ route('formu','crear')}}">Crear Cuenta</a>
</div>
@break

@case($in=='crear')
<div class="boxs b1">
    <div class="ch">
        <form>
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
            <input type="email" name="" id="ema" placeholder="Correo Electronico" required>

            <label for="day">Fecha de Nacimiento</label>
            <input type="date" name="" id="day" required>


            <input type="submit" value="Crear Cuenta">

            <a href="{{ route('formu','iniciar') }}" id="sg"> ¿Tienes una cuenta? Accede a tu cuenta</a>
        </form>
    </div>
</div>
@break

@case($in='recuperar')
<div class="boxs b2">
    <div class="ch">
        <h2>Recuperar contraseña</h2>
        <form>
            <label for="ema">Ingresar Correo de tu cuenta</label>
            <input type="email" name="" id="ema" placeholder="Correo Electronico" required>
            <input type="submit" name="veri" id=""" value=" Enviar solicitud">
            
        </form>
    </div>
</div>
@break

@endswitch
@endif
@endsection
