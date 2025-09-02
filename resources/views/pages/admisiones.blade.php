@extends('layouts.app')

@section('title','Admisiones')

@section('content')
<div class="container py-5">
    <h1>Proceso de Admisión</h1>
    <form class="row g-3 mt-3">
        <div class="col-md-6">
            <label class="form-label">Nombre del acudiente</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Correo</label>
            <input type="email" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Nombre del aspirante</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Grado de interés</label>
            <select class="form-select">
                <option>Preescolar</option>
                <option>Primaria</option>
                <option>Bachillerato</option>
            </select>
        </div>
        <div class="col-12">
            <label class="form-label">Mensaje</label>
            <textarea class="form-control" rows="4"></textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-primary">Enviar solicitud</button>
        </div>
    </form>
</div>
@endsection
