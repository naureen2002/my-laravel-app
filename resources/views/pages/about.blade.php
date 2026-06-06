@extends('layouts.portfolio')

@section('title', 'About Us — Cyberlog')

@section('content')

@include('partials.page-hero', [
    'eyebrow' => 'About Us',
    'heading' => 'Defending What <span class="text-teal">Matters Most</span>',
    'subheading' => 'Cyberlog is a cyber defense partner for enterprises, government, and financial institutions — combining offensive security, managed operations, and compliance expertise.',
    'heroIcon' => 'fas fa-star',
    'heroCaption' => 'Our story',
])

{{-- Our Story --}}
<section class="page-section" id="story">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <p class="section-eyebrow mb-2">Our Story</p>
                <h2 class="fw-bold text-secondary mb-3">A decade of building cyber resilience</h2>
                <p class="text-muted">
                    Cyberlog helps organizations strengthen their cyber resilience through offensive
                    security, managed security operations, compliance readiness, and expert advisory
                    services. What started as a focused security team has grown into a full-spectrum
                    cyber defense partner trusted by leading organizations across Bangladesh.
                </p>
                <p class="text-muted mb-0">
                    Our growth has been driven by measurable outcomes and long-term client trust —
                    from securing the country's capital market infrastructure to building the
                    cybersecurity capacity of government institutions.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    @foreach ([
                        ['500+', 'Users protected'],
                        ['14+', 'Enterprise &amp; government clients'],
                        ['24/7', 'Security operations coverage'],
                        ['93', 'ISO 27001 controls implemented'],
                    ] as $m)
                        <div class="col-6"><div class="cl-benefit text-center"><div class="cl-stat-num">{{ $m[0] }}</div><div class="cl-stat-label">{!! $m[1] !!}</div></div></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Our Values (ref: buguard.io) --}}
<section class="page-section bg-navy-soft text-white" id="values">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Our Values</p>
        <h2 class="page-section-heading text-center text-uppercase text-white mb-4">What Drives Us</h2>
        <p class="text-center text-white-50 lead-narrow mb-5">
            Through effective testing and defensive strategies, we help organizations across Bangladesh
            stay one step ahead of evolving cyber threats.
        </p>
        <div class="row g-4">
            @foreach ([
                ['fa-hands-helping', 'Helpfulness', 'Support that is always there to help — a security partner you can rely on.'],
                ['fa-handshake-angle', 'Integrity', 'We conduct ourselves honestly, transparently, and ethically at all times.'],
                ['fa-lightbulb', 'Pragmatism', 'Practical, prioritized recommendations you can actually implement.'],
            ] as $v)
                <div class="col-md-4">
                    <div class="cl-step h-100 text-center">
                        <i class="fas {{ $v[0] }} text-teal mb-3" style="font-size:2rem;"></i>
                        <h4 class="fw-bold">{{ $v[1] }}</h4>
                        <p class="text-white-50 mb-0">{{ $v[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('partials.reviews')

@include('partials.talk-to-expert')

@endsection
