

@if(Session:has('Mensaje')){{
    Session:get('Mensaje')
}}
@endif

<a href="{{ url('empleados/create') }}">Agregar Empleado</a>

<table class="table table-light">

    <thead class="table table-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
            
            <img src="{{ asset('storage').'/'. $empleado->Foto}}" alt="" with="150">
                    
            </td>
            <td>{{ $empleado->Nombre}}</td>
            <td>{{ $empleado->Apellido}}</td>
            <td>{{ $empleado->Correo}}</td>
            <td>

            <a href="{{ url('/empleados/'.$empleado->id.'/edit') }}">
            Editar </a>
            | 
            <form action="post" action="{{ url('/empleados/'.$empleado->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Seguro desea borrar?');">Borrar</button>
            </form> 
            
            </td>
        </tr>
    @endforeach    
    </tbody>

</table>