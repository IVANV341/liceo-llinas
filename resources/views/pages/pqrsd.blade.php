@extends('layouts.app')

@section('title','PQRSD')

@section('content')
<div class="container py-5">
    <h1>Peticiones, Quejas, Reclamos, Sugerencias y Denuncias</h1>
    <form class="row g-3 mt-3">
        <div class="col-md-6">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Correo</label>
            <input type="email" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Tipo</label>
            <select class="form-select">
                <option>Petición</option>
                <option>Queja</option>
                <option>Reclamo</option>
                <option>Sugerencia</option>
                <option>Denuncia</option>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Asunto</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-12">
            <label class="form-label">Descripción</label>
            <textarea class="form-control" rows="5" required></textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-dark">Enviar</button>
        </div>
    </form>
</div>
@endsection
