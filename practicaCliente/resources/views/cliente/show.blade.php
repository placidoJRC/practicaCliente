


<table class="table table-striped table-hover">
    <tr>
        <td>id</td>
        <td>
            {{ $cliente->id }}
        </td>
    </tr>
    <tr>
        <td>nombre</td>
        <td>
            {{ $cliente->nombre }}
        </td>
    </tr>
    <tr>
        <td>apellidos</td>
        <td>
            {{ $cliente->apellidos }}
        </td>
    </tr>
    <tr>
        <td>correo</td>
        <td>
            {{ $cliente->correo }}
        </td>
    </tr>
    <tr>
        <td>tlf</td>
        <td>
            {{ $cliente->tlf }}
        </td>
    </tr>
    <tr>
        <td>clave</td>
        <td>
            {{ $cliente->clave }}
        </td>
    </tr>
    <tr>
        <td>dirrecion</td>
        <td>
            {{ $cliente->dirrecion }}
        </td>
    </tr>
        <tr>
        <td>ip</td>
        <td>
            {{ $cliente->ip }}
        </td>
    </tr>
        <tr>
        <td>estado</td>
        <td>
            {{ $cliente->estado }}
        </td>
    </tr>
        <tr>
        <td>nacimiento</td>
        <td>
            {{ $cliente->nacimiento }}
        </td>
    </tr>
        <tr>
        <td>sueldo_anual</td>
        <td>
            {{ $cliente->sueldo_anual }}
        </td>
    </tr>
    
</table>

<a href="{{ route('cliente.index') }}" class="btn btn-info">volver</a>

