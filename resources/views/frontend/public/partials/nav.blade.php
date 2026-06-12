{{-- Public marketing nav — intruder.io style: minimal, sticky, glass-on-scroll, neon hover.
     Links prefer public.* routes, falling back to legacy names while the site is migrated. --}}
@php
    $u = fn ($pub, $legacy) => Route::has($pub) ? route($pub) : (Route::has($legacy) ? route($legacy) : '#');
    $is = fn (...$names) => request()->routeIs(...$names) ? 'active' : '';
    $serviceLinks = [
        ['label' => 'All Services', 'pub' => 'public.services', 'legacy' => 'services'],
        ['label' => 'Managed Security Services', 'pub' => 'public.soc', 'legacy' => 'soc'],
        ['label' => 'VAPT / Pen Testing', 'pub' => 'public.vapt', 'legacy' => 'vapt'],
        ['label' => 'Security Audits & ISO 27001', 'pub' => 'public.it-audit', 'legacy' => 'it-audit'],
        ['label' => 'Security Awareness Training', 'pub' => 'public.capacity-building', 'legacy' => 'capacity-building'],
        ['label' => 'Defense Services', 'pub' => 'public.defense-services', 'legacy' => 'defense-services'],
        ['label' => 'vCISO', 'pub' => 'public.vciso', 'legacy' => 'vciso'],
        ['label' => 'Malware Analysis', 'pub' => 'public.malware-analysis', 'legacy' => 'public.malware-analysis'],
        ['label' => 'Next-Gen Firewall Protection', 'pub' => 'public.next-gen-firewall', 'legacy' => 'public.next-gen-firewall'],
        ['label' => 'Backup and Recovery', 'pub' => 'public.backup-recovery', 'legacy' => 'public.backup-recovery'],
        ['label' => 'Digital Forensics', 'pub' => 'public.digital-forensics', 'legacy' => 'public.digital-forensics'],
    ];
    $serviceRouteNames = ['public.services', 'services', 'public.soc', 'soc', 'public.vapt', 'vapt', 'public.it-audit', 'it-audit', 'public.capacity-building', 'capacity-building', 'public.defense-services', 'defense-services', 'public.vciso', 'vciso', 'public.malware-analysis', 'public.next-gen-firewall', 'public.backup-recovery', 'public.digital-forensics'];
@endphp

<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ $u('public.home', 'home') }}">
            <i class="fas fa-shield-halved text-primary me-1"></i>Cyber<span class="text-primary">log</span>
        </a>

        <button class="navbar-toggler bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
            Menu <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded {{ $is('public.home', 'home') }}"
                       href="{{ $u('public.home', 'home') }}">Home</a>
                </li>

                <li class="nav-item dropdown mx-0 mx-lg-1">
                    <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded {{ $is(...$serviceRouteNames) }}"
                       href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        @foreach ($serviceLinks as $link)
                            @if ($loop->index === 1)
                                <li><hr class="dropdown-divider"></li>
                            @endif
                            <li>
                                <a class="dropdown-item" href="{{ $u($link['pub'], $link['legacy']) }}">
                                    {{ $link['label'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded {{ $is('public.clients', 'clients') }}"
                       href="{{ $u('public.clients', 'clients') }}">Clients</a>
                </li>

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded {{ $is('public.vciso', 'vciso') }}"
                       href="{{ $u('public.vciso', 'vciso') }}">vCISO</a>
                </li>

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded {{ $is('public.about', 'about') }}"
                       href="{{ $u('public.about', 'about') }}">About Us</a>
                </li>

                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    @if (request()->routeIs('public.vciso', 'vciso'))
                        {{-- TODO: /client/login lives in the vciso-service-integrator portal project; no route in this build --}}
                        <a class="btn cl-nav-cta" href="{{ Route::has('client.login') ? route('client.login') : url('/client/login') }}">
                            <i class="fas fa-lock me-1"></i>Client Login
                        </a>
                    @else
                        <a class="btn cl-nav-cta" href="{{ $u('public.contact', 'contact') }}">
                            Talk to an Expert
                        </a>
                    @endif
                </li>

            </ul>
        </div>
    </div>
</nav>
