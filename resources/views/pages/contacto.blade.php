@extends('layouts.app')

@section('title','Contacto')

@section('content')
<div class="container py-5">
    <h1>Contacto</h1>
    <p class="mb-4">Si tienes dudas o necesitas información adicional, llena este formulario y nos pondremos en contacto contigo.</p>

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
            <label class="form-label">Teléfono</label>
            <input type="tel" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Asunto</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-12">
            <label class="form-label">Mensaje</label>
            <textarea class="form-control" rows="5" required></textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-success">Enviar</button>
        </div>
    </form>
</div>
@endsection
