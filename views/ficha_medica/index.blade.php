<div class="container mt-4">
    @if(session('message'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <h2 class="mb-4">Resultados de Búsqueda</h2>

    @if($fichas->isNotEmpty())
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>RUT</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Dirección</th>
                        <th>Ciudad</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Estado Civil</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fichas as $ficha)
                        <tr>
                            <td>{{ $ficha->rut }}</td>
                            <td>{{ $ficha->nombres }}</td>
                            <td>{{ $ficha->apellidos }}</td>
                            <td>{{ $ficha->direccion }}</td>
                            <td>{{ $ficha->ciudad }}</td>
                            <td>{{ $ficha->telefono }}</td>
                            <td>{{ $ficha->email }}</td>
                            <td>{{ $ficha->fecha_nacimiento }}</td>
                            <td>{{ $ficha->estado_civil }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-warning" role="alert">
            No hay resultados para mostrar.
        </div>
    @endif

    <a href="{{ route('home') }}" class="btn btn-primary mt-3">Regresar al Home</a>
</div>
