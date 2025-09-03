<!doctype html>
<html lang="es" data-bs-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title','Colegio - Sitio Oficial')</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root{
      --brand-primary:#b91c1c;   /* rojo institucional */
      --brand-secondary:#ffffff; /* blanco */
      --brand-accent:#7f1d1d;    /* rojo oscuro */
      --text-dark:#111827;
    }

    /* TOPBAR */
    .topbar{ background:#0b3a5d00; } /* transparente por si quieres superponer; cámbialo si deseas color */
    .topbar .small{ font-size:.88rem; }
    .topbar a{ color:#fff; opacity:.9; }
    .topbar-wrap{
      background: var(--brand-primary);
      color:#fff;
    }

    /* LOGO/BANDING */
    .branding{
      background:#fff;
      border-bottom:1px solid #f1f1f1;
    }
    .branding img{ max-height:150px; }

    /* NAVBAR */
    .navbar{ background: var(--brand-primary); }
    .navbar .nav-link, .navbar-brand{ color:#fff !important; }
    .navbar .nav-link.active{
      font-weight:700; text-decoration:underline; text-underline-offset:6px; text-decoration-thickness:2px;
    }

    /* CAROUSEL (hero) */
    .hero-carousel .carousel-item img{
      height: 520px; width: 100%; object-fit: cover;
    }
    @media (max-width: 768px){
      .hero-carousel .carousel-item img{ height: 360px; }
    }

    /* Botones flotantes */
    .floating-btn{
      position: fixed; right: 18px; bottom: 20px; z-index:1040; display:flex; flex-direction:column; gap:.75rem;
    }
    .floating-btn a{
      border-radius:50px; padding:.6rem 1rem; font-weight:600; box-shadow:0 8px 24px rgba(0,0,0,.12);
    }
    .btn-admisiones{ background:var(--brand-primary); color:#fff; border:1px solid var(--brand-accent); }
    .btn-pqrsd{ background:#fff; color:var(--brand-primary); border:1px solid var(--brand-primary); }

    .section-title{ border-left:6px solid var(--brand-primary); padding-left:.75rem; font-weight:800; color:#7f1d1d; }
    footer{ background:#7f1d1d; color:#ffecec; }
  </style>

  @stack('head')
</head>
<body>

  {{-- TOPBAR: teléfono + direcciones a la izquierda / redes a la derecha --}}
  <div class="topbar-wrap py-1">
    <div class="container d-flex flex-wrap justify-content-between align-items-center small">
      <div class="d-flex align-items-center gap-3">
      </div>
      <div class="d-flex align-items-center gap-3">
      </div>
    </div>
  </div>

  {{-- BRANDING: logo centrado --}}
  <div class="branding py-3">
    <div class="container text-center">
      
      <a href="{{ url('/') }}" class="d-inline-block">
  <img src="{{ asset('img/actividades/logo/logo_colegio.jpg') }}" alt="Liceo Bilingüe Rodolfo R. Llinás">
      </a>

    </div>
  </div>

  {{-- NAVBAR --}}
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold d-lg-none" href="{{ route('home') }}">Liceo Bilingüe R. R. Llinás</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#mainNav" aria-controls="mainNav"
              aria-expanded="false" aria-label="Mostrar navegación">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a></li>

          {{-- El Colegio --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->routeIs('colegio*') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">El Colegio</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('colegio') }}">Reseña</a></li>
              <li><a class="dropdown-item" href="{{ route('colegio.mision') }}">Misión y Visión</a></li>
              <li><a class="dropdown-item" href="{{ route('colegio.politica_de_calidad') }}">Política de calidad</a></li>
            </ul>
          </li>

          {{-- Servicios --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->routeIs('servicios*') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">Servicios</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('servicios') }}">Todos los servicios</a></li>
              <li><a class="dropdown-item" href="{{ route('servicios.guarderia') }}">Guardería</a></li>
              <li><a class="dropdown-item" href="{{ route('servicios.preescolar') }}">Preescolar</a></li>
              <li><a class="dropdown-item" href="{{ route('servicios.basica_primaria') }}">Básica Primaria</a></li>
              <li><a class="dropdown-item" href="{{ route('servicios.basica_secundaria') }}">Básica Secundaria</a></li>
              <li><a class="dropdown-item" href="{{ route('servicios.educacion_media') }}">Educación media (10–11)</a></li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link {{ request()->routeIs('noticias*') ? 'active' : '' }}" href="{{ route('noticias') }}">Noticias</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('actividades') ? 'active' : '' }}" href="{{ route('actividades') }}">Actividades</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('galeria') ? 'active' : '' }}" href="{{ route('galeria') }}">Galería</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('publicaciones') ? 'active' : '' }}" href="{{ route('publicaciones') }}">Publicaciones</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}" href="{{ route('contacto') }}">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>

  {{-- CONTENIDO DE CADA PÁGINA --}}
  @yield('content')

  {{-- BOTONES FLOTANTES --}}
  <div class="floating-btn">
    <a class="btn btn-admisiones" href="{{ route('admisiones') }}"><i class="bi bi-pencil-square"></i> Admisiones</a>
    <a class="btn btn-pqrsd" href="{{ route('pqrsd') }}"><i class="bi bi-megaphone"></i> PQRSD</a>
  </div>

  <footer class="mt-5 py-4">
    <div class="container small">
      <div class="row g-3 align-items-center">
        <div class="col-md-8">
          <strong>Liceo Bilingüe Rodolfo R. Llinás</strong> · Calle 44 # 27-50 · Calle 44 # 27-28 · Barrio Recreo · PBX: (607) 589 2830
          <br>© {{ date('Y') }} · Formación con excelencia.
        </div>
        <div class="col-md-4 text-md-end">
          <a class="text-decoration-none me-3 text-light" href="#"><i class="bi bi-facebook"></i></a>
          <a class="text-decoration-none me-3 text-light" href="#"><i class="bi bi-instagram"></i></a>
          <a class="text-decoration-none text-light" href="#"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
</body>
</html>
