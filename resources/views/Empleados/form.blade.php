

<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="Nombre" id="Nombre" value="{{ isset($empleado->Nombre)?empleado->Nombre:'' }}">
<br/>

<label for="Apellido">{{'Apellido'}}</label>
<input type="text" name="Apellido" id="Apellido" value="{{ isset($empleado->Apellido)?empleado->Apellido:'' }}">
<br/>

<label for="Correo">{{'Correo'}}</label>
<input type="email" name="Correo" id="Correo" value="{{ isset($empleado->Correo)?empleado->Correo:'' }}">
<br/>

<label for="Foto">{{'Foto'}}</label>
@if(isset($empleado->Foto))
<br/>
<img src="{{ asset('storage').'/'. $empleado->Foto }}" alt="" with="200">
<br/>
@endif
<input type="file" name="Foto" id="Foto" value="">
<br/>

<input type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">
<a href="{{ url('empleados.index') }}">Regresar al Inicio</a>