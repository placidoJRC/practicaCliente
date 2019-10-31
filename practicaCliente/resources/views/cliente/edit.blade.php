
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ url('cliente/'.$cliente->id) }}" method="post">
@csrf
@method('PUT') 

<input type="text" name="nombre" id="nombre" placeholder="nombre" required maxlength="50" value="{{ $cliente->nombre }}">
<input type="text" name="apellidos" id="apellidos" placeholder="apellidos" maxlength="255" value="{{ $cliente->apellidos }}">
<input type="email"  name="correo" id="correo" placeholder="correo" value="{{ $cliente->correo }}">
<input type="number"  name="tlf" id="tlf" placeholder="tlf" value="{{ $cliente->tlf }}">
<input type="text"  name="clave" id="clave" placeholder="clave" value="{{ $cliente->clave }}">
<input type="text" name="dirrecion" id="dirrecion" placeholder="dirrecion" maxlength="255" value="{{ $cliente->dirrecion }}">
<input type="number"  name="ip" id="ip" placeholder="ip" value="{{ $cliente->ip }}">
<input type="text"  name="estado" id="estado" placeholder="estado" value="{{ $cliente->estado }}">
<input type="date"  name="nacimiento" id="nacimiento" placeholder="nacimiento" value="{{ $cliente->nacimiento }}">
<input type="number"  name="sueldo_anual" id="sueldo_anual" placeholder="sueldo_anual" value="{{ $cliente->sueldo_anual }}">



<a href="{{ route('cliente.index') }}" class="btn btn-info">volver</a>
<input type="submit" class="btn btn-primary" value="agregar">
</form>
