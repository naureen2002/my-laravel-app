<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Cyberlog — offensive security, managed SOC, compliance, threat intelligence and vCISO for enterprises, government, financial institutions and critical infrastructure.')">
    <title>@yield('title', 'Cyberlog — Cyber Defense')</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@500;600;700&family=IBM+Plex+Mono:wght@400;500;600&family=IBM+Plex+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Bootstrap (Freelancer base) + Cyberlog "Threat Console" design system --}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cyberlog.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body id="page-top">

    @include('frontend.public.partials.nav')

    <main>
        @yield('content')
    </main>

    @include('frontend.public.partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/cyberlog.js') }}"></script>

    @stack('scripts')
</body>
</html>
