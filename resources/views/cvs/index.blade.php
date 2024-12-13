@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mis CVs</h1>
    <a href="{{ route('cvs.create') }}" class="btn btn-success mb-3">Crear CV</a>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Educación</th>
                <th>Experiencia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cvs as $cv)
                <tr>
                    <td>{{ $cv->nombre }}</td>
                    <td>{{ $cv->email }}</td>
                    <td>{{ $cv->educacion }}</td>
                    <td>{{ $cv->experiencia }}</td>
                    <td>
                        <a href="{{ route('cvs.edit', $cv) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('cvs.destroy', $cv) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No hay CVs registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
