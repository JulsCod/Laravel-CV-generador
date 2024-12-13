@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear CV</h1>

    <form action="{{ route('cvs.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="educacion">Educación</label>
            <textarea name="educacion" id="educacion" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="experiencia">Experiencia</label>
            <textarea name="experiencia" id="experiencia" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="habilidades">Habilidades</label>
            <textarea name="habilidades" id="habilidades" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="idiomas">Idiomas</label>
            <textarea name="idiomas" id="idiomas" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success mt-3">Guardar</button>
    </form>
</div>
@endsection
