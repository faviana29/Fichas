@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Formulario de Ingreso - Ficha Médica</h2>

    @if(session('message'))
        <div class="alert alert-warning">{{ session('message') }}</div>
    @endif

    <form action="{{ route('ficha_medica.store') }}" method="POST">
        @csrf

        <label for="rut">RUT:</label>
        <input type="text" name="rut" value="{{ old('rut') }}" required>
        @error('rut')<span>{{ $message }}</span>@enderror<br><br>

        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres" value="{{ old('nombres') }}" required>
        @error('nombres')<span>{{ $message }}</span>@enderror<br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" value="{{ old('apellidos') }}" required>
        @error('apellidos')<span>{{ $message }}</span>@enderror<br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" value="{{ old('direccion') }}" required>
        @error('direccion')<span>{{ $message }}</span>@enderror<br><br>

        <label for="ciudad">Ciudad:</label>
        <input type="text" name="ciudad" value="{{ old('ciudad') }}" required>
        @error('ciudad')<span>{{ $message }}</span>@enderror<br><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" value="{{ old('telefono') }}" required>
        @error('telefono')<span>{{ $message }}</span>@enderror<br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        @error('email')<span>{{ $message }}</span>@enderror<br><br>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required>
        @error('fecha_nacimiento')<span>{{ $message }}</span>@enderror<br><br>

        <label for="estado_civil">Estado Civil:</label>
        <select name="estado_civil" required>
            <option value="soltero">Soltero</option>
            <option value="casado">Casado</option>
            <option value="viudo">Viudo</option>
            <option value="divorciado">Divorciado</option>
        </select>
        @error('estado_civil')<span>{{ $message }}</span>@enderror<br><br>

        <label for="comentarios">Comentarios:</label>
        <textarea name="comentarios">{{ old('comentarios') }}</textarea><br><br>

        <button type="submit">Guardar</button>
        <button type="reset">Limpiar</button>
        <button type="button" onclick="window.close()">Cerrar</button>
    </form>
</div>
@endsection
