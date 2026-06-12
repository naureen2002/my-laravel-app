@extends('layouts.portfolio')

@section('title', 'vCISO — Virtual CISO Services — Cyberlog')

@section('content')

{{-- Section 1 — Hero with diagram layout (ref: viserx.com) --}}
<header class="cl-hero text-white" id="page-top">
    <div class="container py-5">
        <div class="row align-items-center g-5 py-4">
            <div class="col-lg-6">
                <p class="section-eyebrow mb-3">Virtual CISO</p>
                <h1 class="cl-hero-heading mb-3">Executive Security Leadership, <span class="text-teal">On Demand</span></h1>
                <p class="lead text-white-50 mb-4">
                    Cyberlog's vCISO gives you board-level security strategy, governance, and
                    compliance leadership — without the cost of a full-time hire. We own your security
                    roadmap and drive long-term cyber resilience.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a class="btn btn-primary btn-xl text-white fw-bold" href="{{ route('contact') }}">Talk to a vCISO</a>
                    <a class="btn btn-outline-light btn-xl" href="#capabilities">See Capabilities</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cl-radial">
                    @foreach ([
                        ['fa-brain', 'Cyber Threat Intelligence'],
                        ['fa-bug', 'Penetration Testing'],
                        ['fa-shield-virus', 'Digital Risk Protection'],
                        ['fa-magnifying-glass', 'Vulnerability Intelligence'],
                    ] as $cap)
                        <div class="cl-capability"><i class="fas {{ $cap[0] }}"></i><span class="small">{{ $cap[1] }}</span></div>
                    @endforeach

                    <div class="cl-radial-hub">
                        <div class="d-inline-grid" style="place-items:center;width:96px;height:96px;border-radius:50%;background:var(--blue-dim);border:2px solid var(--blue-bright);">
                            <i class="fas fa-user-shield text-teal" style="font-size:2.4rem;"></i>
                        </div>
                        <div class="fw-bold mt-2">vCISO Core</div>
                    </div>

                    @foreach ([
                        ['fa-user-secret', 'Dark Web Monitoring'],
                        ['fa-diagram-project', 'Attack Surface Monitoring'],
                        ['fa-fingerprint', 'Cyber Criminal Profiling'],
                        ['fa-burst', 'Breach &amp; Attack Simulation'],
                    ] as $cap)
                        <div class="cl-capability"><i class="fas {{ $cap[0] }}"></i><span class="small">{!! $cap[1] !!}</span></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</header>

{{-- Section 2 — Client --}}
@include('partials.clients')

{{-- Capabilities / what a vCISO does --}}
<section class="page-section" id="capabilities">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">What Your vCISO Owns</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Governance, Strategy &amp; Resilience</h2>
        <div class="row g-4">
            @foreach ([
                ['fa-chess-king', 'Security Strategy &amp; Roadmap', 'A prioritized, board-ready security roadmap aligned to your business goals.'],
                ['fa-scale-balanced', 'Governance, Risk &amp; Compliance', 'Own GRC across ISO 27001, regulatory, and customer security requirements.'],
                ['fa-sitemap', 'Security Program Build-out', 'Stand up policies, controls, and an operating model that scales with you.'],
                ['fa-handshake', 'Board &amp; Stakeholder Reporting', 'Translate cyber risk into business language for executives and the board.'],
                ['fa-people-arrows', 'Vendor &amp; Third-Party Risk', 'Assess and manage supply-chain and third-party security risk.'],
                ['fa-bell', 'Incident Oversight', 'Lead incident readiness and act as the senior point of command during a crisis.'],
            ] as $c)
                <div class="col-md-6 col-lg-4">
                    <div class="cl-benefit h-100">
                        <i class="fas {{ $c[0] }} mb-3"></i>
                        <h5 class="h6 fw-bold">{!! $c[1] !!}</h5>
                        <p class="text-muted small mb-0">{{ $c[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('partials.talk-to-expert', ['title' => 'Need a CISO without the full-time cost?', 'text' => 'Get executive security leadership from day one.'])

@endsection
