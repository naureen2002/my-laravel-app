@extends('layouts.portfolio')

@section('title', 'Services — Cyberlog')

@section('content')

@include('partials.page-hero', [
    'eyebrow' => 'Our Services',
    'heading' => 'Full-Spectrum <span class="text-teal">Cyber Defense</span>',
    'subheading' => 'From offensive testing to managed operations and compliance, Cyberlog delivers the services that protect enterprises, government, and critical infrastructure.',
    'heroIcon' => 'fas fa-shield-halved',
    'heroCaption' => 'One partner, full coverage',
])

@include('partials.clients')

<section class="page-section" id="all-services">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">What We Do</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Explore Our Security Solutions</h2>
        <div class="row g-4">
            @foreach ([
                ['route' => 'soc', 'icon' => 'fa-desktop', 'title' => 'SOC as a Service', 'desc' => '24/7 monitoring, threat detection, and incident response from a mature SOC.'],
                ['route' => 'vapt', 'icon' => 'fa-bug', 'title' => 'VAPT / Pen Testing', 'desc' => 'Black, grey, and white-box testing across apps, networks, and cloud.'],
                ['route' => 'it-audit', 'icon' => 'fa-clipboard-check', 'title' => 'IT Audit &amp; ISO 27001', 'desc' => 'GRC, security audit, and ISO 27001 implementation &amp; certification.'],
                ['route' => 'capacity-building', 'icon' => 'fa-graduation-cap', 'title' => 'Capacity Building', 'desc' => 'Security awareness training that turns staff into a human firewall.'],
                ['route' => 'defense-services', 'icon' => 'fa-tower-broadcast', 'title' => 'Defense Services', 'desc' => 'Threat intel, IR, firewall management, risk assessment, and backup.'],
                ['route' => 'vciso', 'icon' => 'fa-user-shield', 'title' => 'vCISO', 'desc' => 'On-demand executive security leadership, governance, and strategy.'],
            ] as $sol)
                <div class="col-md-6 col-lg-4">
                    <a class="cl-solution-card" href="{{ route($sol['route']) }}">
                        <div class="cl-solution-icon"><i class="fas {{ $sol['icon'] }}"></i></div>
                        <h4 class="h5">{!! $sol['title'] !!}</h4>
                        <p class="text-muted mb-3">{{ $sol['desc'] }}</p>
                        <span class="text-teal fw-semibold">Learn more <i class="fas fa-arrow-right ms-1"></i></span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('partials.talk-to-expert')

@endsection
