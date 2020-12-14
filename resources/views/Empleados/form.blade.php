
<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" class="form-control {{ $errors->has('Nombre')?'is-invalid':'' }}" name="Nombre" id="Nombre"
value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}">
{!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Apellido" class="control-label">{{'Apellido'}}</label>
<input type="text" class="form-control {{ $errors->has('Apellido')?'is-invalid':'' }}" name="Apellido" id="Apellido" 
value="{{ isset($empleado->Apellido)?$empleado->Apellido:old('Apellido') }}">
{!! $errors->first('Apellido','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Correo" class="control-label">{{'Correo'}}</label>
<input type="email" class="form-control {{ $errors->has('Correo')?'is-invalid':'' }}" name="Correo" id="Correo" 
value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}">
{!! $errors->first('Correo','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Foto" class="control-label">{{'Foto'}}</label>
@if(isset($empleado->Foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'. $empleado->Foto }}" alt="" with="200">
@endif
<input type="file" class="form-control {{ $errors->has('Foto')?'is-invalid':'' }}" name="Foto" id="Foto" value="">
</div>

<input type="submit" class="btn btn-success" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">
<a class="btn btn-primary" href="{{ url('empleados') }}">Regresar</a>