@extends('layouts.app')
@section('title','Actividades realizadas')

@section('content')
<div class="container py-5">
  <h1 class="section-title mb-4">Actividades realizadas</h1>
  <p class="text-secondary mb-4">Eventos, jornadas y proyectos destacados del LICEO BILINGÜE RODOLFO R LLINÀS.</p>

  @php
    // Demo: reemplaza por datos de BD luego
    $actividades = [
      [
        'titulo' => 'Día de los Abuelitos Llinasianos',
        'fecha'  => '15/08/2025',
        'desc'   => ' El pasado viernes celebramos con alegría nuestro “Día de los Abuelitos Llinasianos”, una jornada llena de cariño, 
                        gratitud y momentos especiales para honrar a quienes con su amor y sabiduría iluminan nuestras vidas. 👴🏼👵🏼.',
        'img'    => 'img/actividades/abuelitos.png',
      ],
      [
        'titulo' => 'Jornada de desparacitacion',
        'fecha'  => '02/09/2025',
        'desc'   => 'Ayer en nuestro liceo llevamos a cabo una jornada especial dedicada a nuestras mascotas, en la cual se realizó la desparasitación con el fin de cuidar su salud y bienestar. 
                    Fue un día pensado para promover la responsabilidad y el amor hacia los animales, 
                    recordando la importancia de protegerlos y brindarles los cuidados necesarios.🐶',
        'img'    => 'img/actividades/mascotas.png',
      ],
      [
        'titulo' => 'Día de la independiencia',
        'fecha'  => '22/09/2025',
        'desc'   => 'Ayer conmemoramos el Día de la Independencia de Colombia en nuestro liceo. 
                    Nuestros estudiantes realizaron hermosas presentaciones para rendir homenaje a la historia y cultura de nuestro país. 
                    Fue una celebración significativa y llena de patriotismo para toda la comunidad educativa.🇨🇴',
        'img'    => 'img/actividades/independiencia.png',
      ],
    ];
  @endphp

  <div class="vstack gap-5">
    @foreach($actividades as $i => $a)
      <div class="row align-items-center g-4">
        {{-- Alternar lado de la imagen en pantallas md+ --}}
        <div class="col-md-6 {{ $loop->even ? 'order-md-2' : '' }}">
          <img src="{{ $a['img'] }}" alt="{{ $a['titulo'] }}"
               class="img-fluid rounded-4 shadow-sm w-100" style="object-fit:cover; height: 340px;">
        </div>
        <div class="col-md-6">
          <span class="badge text-bg-warning text-dark rounded-pill mb-2">{{ $a['fecha'] }}</span>
          <h3 class="fw-bold">{{ $a['titulo'] }}</h3>
          <p class="text-secondary">{{ $a['desc'] }}</p>
          {{-- (Opcional) Botón para ver más fotos de esta actividad en la galería --}}
          <a href="{{ route('galeria') }}#{{ Str::slug($a['titulo']) }}" class="btn btn-outline-primary btn-sm">
            Ver galería
          </a>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
