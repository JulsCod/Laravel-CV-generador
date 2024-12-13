@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar CV</h1>
    <form action="{{ route('cvs.update', $cv->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $cv->nombre }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $cv->email }}" required>
        </div>

        <div class="form-group">
            <label for="educacion">Educación:</label>
            <textarea name="educacion" id="educacion" class="form-control" rows="3" required>{{ $cv->educacion }}</textarea>
        </div>

        <div class="form-group">
            <label for="experiencia">Experiencia:</label>
            <textarea name="experiencia" id="experiencia" class="form-control" rows="3" required>{{ $cv->experiencia }}</textarea>
        </div>

        <div class="form-group">
            <label for="habilidades">Habilidades:</label>
            <textarea name="habilidades" id="habilidades" class="form-control" rows="3" required>{{ $cv->habilidades }}</textarea>
        </div>

        <div class="form-group">
            <label for="idiomas">Idiomas:</label>
            <textarea name="idiomas" id="idiomas" class="form-control" rows="3" required>{{ $cv->idiomas }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('cvs.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
