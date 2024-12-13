@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                {{ __('Estás loggeado!') }}

                <a href="{{ route('cvs.index') }}" class="btn btn-primary mt-3">Ver Mis CVs</a>
            </div>
        </div>
    </div>
</div>
@endsection