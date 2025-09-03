@extends('layouts.app')
@section('title','Inicio · Liceo Bilingüe Rodolfo R. Llinás')

@section('content')

{{-- ========== SLIDER / HERO ========== --}}
<section class="hero-carousel">
  @php
    $slides = [
      ['src' => 'img/actividades/carrusel/abuelitos.png',     'caption' => 'Bienvenidos al Liceo'],
      ['src' => 'img/actividades/carrusel/independencia.png', 'caption' => 'Excelencia académica'],
      ['src' => 'img/actividades/carrusel/mascotas.png',      'caption' => 'Formación integral'],
      ['src' => 'img/actividades/carrusel/princesa.jpg',      'caption' => 'Princesa'],
    ];
  @endphp

  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="8000" data-bs-pause="hover">
    <div class="carousel-indicators">
      @foreach($slides as $i => $slide)
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="{{ $i }}"
                class="{{ $i===0 ? 'active' : '' }}" aria-current="{{ $i===0 ? 'true' : 'false' }}"
                aria-label="Slide {{ $i+1 }}"></button>
      @endforeach
    </div>

    <div class="carousel-inner">
      @foreach($slides as $i => $slide)
        <div class="carousel-item {{ $i===0 ? 'active' : '' }}">
          <img src="{{ asset($slide['src']) }}" class="d-block w-100" alt="Slide {{ $i+1 }}">
          @if(!empty($slide['caption']))
            <div class="carousel-caption d-none d-md-block">
              <span class="badge bg-light text-dark fw-semibold px-3 py-2">{{ $slide['caption'] }}</span>
            </div>
          @endif
        </div>
      @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>
</section>

{{-- ========== CTA RÁPIDOS ========== --}}
<section class="py-4 bg-light">
  <div class="container">
    <div class="row g-3">
      <div class="col-md-4">
        <a href="{{ route('admisiones') }}" class="btn btn-admisiones w-100 btn-lg">📝 Admisiones</a>
      </div>
      <div class="col-md-4">
        <a href="{{ route('pqrsd') }}" class="btn btn-pqrsd w-100 btn-lg">📣 PQRSD</a>
      </div>
      <div class="col-md-4">
        <a href="{{ route('contacto') }}" class="btn btn-outline-dark w-100 btn-lg">📞 Contacto</a>
      </div>
    </div>
  </div>
</section>

{{-- ========== SERVICIOS ========== --}}
<section class="py-5">
  <div class="container">
    <h2 class="section-title mb-4">Nuestros servicios educativos</h2>
    <div class="row g-4">
      @php
        $servicios = [
          ['t'=>'Guardería','r'=>route('servicios.guarderia')],
          ['t'=>'Preescolar','r'=>route('servicios.preescolar')],
          ['t'=>'Básica Primaria','r'=>route('servicios.basica_primaria')],
          ['t'=>'Básica Secundaria','r'=>route('servicios.basica_secundaria')],
          ['t'=>'Educación Media (10–11)','r'=>route('servicios.educacion_media')],
        ];
      @endphp
      @foreach($servicios as $servicio)
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{ $servicio['t'] }}</h5>
            <p class="text-secondary">Programa orientado al desarrollo integral y el acompañamiento permanente.</p>
            <a href="{{ $servicio['r'] }}" class="mt-auto btn btn-outline-primary">Conocer más</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ========== ACTIVIDADES (foto + texto al lado) ========== --}}
<section class="py-5 bg-light">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="section-title m-0">Actividades realizadas</h2>
      <a href="{{ route('actividades') }}" class="btn btn-sm btn-outline-dark">Ver todas</a>
    </div>

    @php
      $actividades = [
        [
          'titulo' => 'Día de los Abuelitos Llinasianos',
          'fecha'  => '15/08/2025',
          'desc'   => 'Jornada de homenaje con actividades intergeneracionales y muestras artísticas.',
          'img'    => 'img/actividades/abuelitos.png',
        ],
        [
          'titulo' => 'Día de la Independencia',
          'fecha'  => '02/09/2025',
          'desc'   => 'Exposición de proyectos de investigación desde 6° a 11°.',
          'img'    => 'img/actividades/independencia.png',
        ],
      ];
    @endphp

    <div class="vstack gap-5">
      @foreach($actividades as $i => $actividad)
      <div class="row align-items-center g-4">
        <div class="col-md-6 {{ $loop->even ? 'order-md-2' : '' }}">
          <img src="{{ asset($actividad['img']) }}" alt="{{ $actividad['titulo'] }}"
               class="img-fluid rounded-4 shadow-sm w-100" style="object-fit:cover;height:340px;">
        </div>
        <div class="col-md-6">
          <span class="badge text-bg-danger">{{ $actividad['fecha'] }}</span>
          <h3 class="fw-bold mt-2">{{ $actividad['titulo'] }}</h3>
          <p class="text-secondary">{{ $actividad['desc'] }}</p>
          <a href="{{ route('galeria') }}" class="btn btn-outline-primary btn-sm">Ver fotos</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ========== NOTICIAS ========== --}}
<section class="py-5">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="section-title m-0">Noticias recientes</h2>
      <a href="{{ route('noticias') }}" class="btn btn-sm btn-outline-dark">Ver todas</a>
    </div>

    <div class="row g-4">
      @foreach([
        ['slug'=>'semana-lectura','title'=>'Semana de la Lectura 2025','img'=>'https://images.unsplash.com/photo-1519681393784-d120267933ba?q=80&w=1200'],
        ['slug'=>'jornada-deportiva','title'=>'Gran Jornada Deportiva','img'=>'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?q=80&w=1200'],
        ['slug'=>'premio-ciencia','title'=>'Premio de Ciencias a estudiantes','img'=>'https://images.unsplash.com/photo-1509223197845-458d87318791?q=80&w=1200'],
      ] as $noticia)
      <div class="col-md-4">
        <div class="card news-card h-100 shadow-sm">
          <img src="{{ $noticia['img'] }}" class="card-img-top" alt="{{ $noticia['title'] }}">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{ $noticia['title'] }}</h5>
            <p class="card-text text-secondary">Breve descripción de la actividad y su impacto.</p>
            <a href="{{ route('noticias.show',$noticia['slug']) }}" class="mt-auto btn btn-outline-primary">Leer más</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ========== CALENDARIO ========== --}}
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="section-title mb-4">Calendario académico</h2>
    <div class="row g-4">
      @foreach([
        ['fecha'=>'15 Sep','evento'=>'Entrega de boletines'],
        ['fecha'=>'25 Sep','evento'=>'Feria de la Ciencia'],
        ['fecha'=>'10 Oct','evento'=>'Olimpiadas Matemáticas'],
      ] as $evento)
      <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100">
          <div class="d-flex align-items-center gap-3">
            <div class="display-6 fw-bold" style="color:var(--brand-primary)">{{ $evento['fecha'] }}</div>
            <div>
              <div class="fw-bold">{{ $evento['evento'] }}</div>
              <div class="text-secondary small">8:00 a. m. · Auditorio Principal</div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
