
@isset($tipo)
    <div class="alert alert-{{$tipo}}" role="alert">
    {{$mensaje}}
    </div>
@endisset


<!-- Aqui va el listado -->
<table class="table table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>description</th>
            <th>precio</th>
            <th>iva</th>
            <th>descuento</th>
            <th colspan="3">acciones</th>
        </tr>
    </thead>
    
    <thead>
        <tfoot>
            <th>id</th>
            <th>nombre</th>
            <th>description</th>
            <th>precio</th>
            <th>iva</th>
            <th>descuento</th>
            <th colspan="3">acciones</th>
        </tr>
    </tfoot>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->apellidos}}</td>
            <td>{{$cliente->correo}}</td>
            <td>{{$cliente->tlf}}</td>
            <td>{{$cliente->clave}}</td>
            <td>{{$cliente->dirrecion}}</td>
            <td>{{$cliente->ip}}</td>
            <td>{{$cliente->estado}}</td>
            <td>{{$cliente->nacimiento}}</td>
            <td>{{$cliente->sueldo_anual}}</td>

            <td><a href="{{  url('cliente/'.$cliente->id) }}" class="btn btn-info">Ver</a></td>
            <td><a href="{{ url('cliente/'.$cliente->id.'/edit') }}" class="btn btn-success">Editar</a></td>
            <td>
                <form action="{{ url('cliente/'.$cliente->id) }}" method="post" class="destroy">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar" class="btn btn-danger "/>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>













<div class="row">

<a href="{{ url('cliente/create') }}" class="btn btn-info">agregar producto</a>




</div>
<hr>

