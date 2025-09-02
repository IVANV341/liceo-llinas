@extends('layouts.app')
@section('title','Galería de actividades')

@section('content')
<div class="container py-5">
  <h1 class="section-title mb-4">Galería</h1>
  <p class="text-secondary mb-4">Imágenes de nuestras actividades académicas, culturales y deportivas.</p>

  @php
    // Demo: agrupa por actividad si quieres anclar con IDs
    $fotos = [
      ['actividad' => 'Feria de la Ciencia', 'src' => 'https://images.unsplash.com/photo-1581092918231-7c54aef091d7?q=80&w=1600&auto=format&fit=crop'],
      ['actividad' => 'Feria de la Ciencia', 'src' => 'https://images.unsplash.com/photo-1517976487492-576ea6b2936b?q=80&w=1600&auto=format&fit=crop'],
      ['actividad' => 'Jornada Deportiva',   'src' => 'https://images.unsplash.com/photo-1517649763962-0c623066013b?q=80&w=1600&auto=format&fit=crop'],
      ['actividad' => 'Jornada Deportiva',   'src' => 'https://images.unsplash.com/photo-1461896836934-ffe607ba8211?q=80&w=1600&auto=format&fit=crop'],
      ['actividad' => 'Día de la Lectura',   'src' => 'https://images.unsplash.com/photo-1513475382585-d06e58bcb0ea?q=80&w=1600&auto=format&fit=crop'],
      ['actividad' => 'Día de la Lectura',   'src' => 'https://images.unsplash.com/photo-1457694587812-e8bf29a43845?q=80&w=1600&auto=format&fit=crop'],
    ];
  @endphp

  <div class="row g-3">
    @foreach($fotos as $idx => $f)
      <div class="col-6 col-md-4 col-lg-3">
        <a href="#" class="d-block" data-bs-toggle="modal" data-bs-target="#fotoModal"
           data-src="{{ $f['src'] }}" data-actividad="{{ $f['actividad'] }}">
          <img src="{{ $f['src'] }}" alt="{{ $f['actividad'] }}" class="img-fluid rounded-3 shadow-sm"
               style="object-fit:cover; aspect-ratio: 1/1;">
        </a>
      </div>
    @endforeach
  </div>
</div>

{{-- Modal para ampliar foto --}}
<div class="modal fade" id="fotoModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Vista previa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body text-center">
        <img id="fotoAmplia" src="" alt="" class="img-fluid rounded-3">
        <div class="small text-secondary mt-2" id="fotoActividad"></div>
      </div>
    </div>
  </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
  const fotoModal = document.getElementById('fotoModal');
  fotoModal.addEventListener('show.bs.modal', event => {
    const link = event.relatedTarget;
    const src = link.getAttribute('data-src');
    const actividad = link.getAttribute('data-actividad');
    document.getElementById('fotoAmplia').src = src;
    document.getElementById('fotoActividad').textContent = actividad;
  });
});
</script>
@endpush
@endsection
