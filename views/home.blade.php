@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1 class="display-4 mt-5">Bienvenido al Sistema de Fichas Médicas</h1>
    <p class="lead">Gestión eficiente de registros médicos en un solo lugar.</p>
    
    <div class="mt-5">
        <a href="{{ route('ficha_medica.create') }}" class="btn btn-primary btn-lg">
            Crear Ficha Médica
        </a>
    </div>
</div>
@endsection
