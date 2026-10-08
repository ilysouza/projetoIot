<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    @livewireStyles
</head>

<body>

    @if(!request()->routeIs('login'))

    <aside class="d-flex flex-column p-3 text-white bg-dark border-end position-fixed top-0 start-0 vh-100" style="width: 250px;">
        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <i class="bi bi-rocket-takeoff-fill text-white me-2 fs-4"></i>
            <span class="fs-4">Projeto IOT</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item row d-flex justify-content-center" style="width: 95%;">
                <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active rounded-end-5' : 'nav-link text-white' }}">
                    <i class="bi bi-house me-1"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item row d-flex justify-content-center" style="width: 95%;">
                <a href="{{ route('ambiente.index')}}" class="nav-link {{ request()->routeIs('ambiente.index') ? 'active rounded-end-5' : 'nav-link text-white' }}">
                    <i class="bi bi-geo-alt me-1"></i>
                    Ambiente
                </a>
            </li>
            <li class="nav-item row d-flex justify-content-center" style="width: 95%;">
                <a href="{{ route('sensor.index')}}" class="nav-link {{ request()->routeIs('sensor.index') ? 'active rounded-end-5' : 'nav-link text-white' }}">
                    <i class="bi bi-pin-map me-1"></i>
                    Sensor
                </a>
            </li>
            <li class="nav-item row d-flex justify-content-center" style="width: 95%;">
                <a href="{{ route('registro.index')}}" class="nav-link {{ request()->routeIs('registro.index') ? 'active rounded-end-5' : 'nav-link text-white' }}">
                    <i class="bi bi-folder2-open me-1"></i>
                    Registro
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle me-2 fs-4"></i>
                <strong>Perfil</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">Desconectar</a></li>
            </ul>
        </div>
    </aside>

    <main class="p-4" style="margin-left: 250px; min-width: 0; overflow-x: hidden;">
    {{ $slot }}
    </main>

    @else
    {{ $slot }}
    @endif

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>