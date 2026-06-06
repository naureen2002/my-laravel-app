@extends('layouts.portfolio')

@section('title', 'IT Audit & ISO 27001 — Cyberlog')

@section('content')

{{-- Section 1 — Hero --}}
@include('partials.page-hero', [
    'eyebrow' => 'GRC Solution',
    'heading' => 'ISO 27001 Implementation &amp; <span class="text-teal">Certification Solutions</span>',
    'subheading' => 'Confidently meet ISO 27001 standards and win customer trust. Cyberlog guides you end-to-end — from gap assessment to certification — and keeps you audit-ready.',
    'badges' => ['ISO 27001', 'Gap Assessment', 'Risk Treatment', 'Audit Readiness'],
    'secondaryCta' => ['label' => 'Custom Pricing', 'url' => '#pricing'],
    'heroIcon' => 'fas fa-clipboard-check',
    'heroCaption' => 'Compliance & certification',
])

{{-- Section 2 — Client --}}
@include('partials.clients')

{{-- Section 3 — ISO 27001 value props --}}
<section class="page-section" id="why-iso">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Why ISO 27001</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Confidently Meet ISO 27001 Standards</h2>
        <div class="row g-4">
            @foreach ([
                ['fa-shield-halved', 'Mitigate security risks', 'Establish a risk-based ISMS that systematically reduces information security risk across the organization.'],
                ['fa-handshake-angle', 'Enhance customer trust', 'Demonstrate a recognized, independently certified commitment to protecting customer data.'],
                ['fa-scale-balanced', 'Simplify legal &amp; regulatory compliance', 'Map controls to regulatory obligations and simplify audits across frameworks.'],
            ] as $v)
                <div class="col-md-4">
                    <div class="cl-benefit h-100 text-center">
                        <i class="fas {{ $v[0] }} mb-3" style="font-size:2rem;"></i>
                        <h5 class="fw-bold">{!! $v[1] !!}</h5>
                        <p class="text-muted small mb-0">{{ $v[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Section 4 — Journey / Certification Steps (GRC Solution) --}}
<section class="page-section bg-light" id="journey">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Our Approach</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">The Certification Journey</h2>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="cl-journey">
                    @foreach ([
                        ['Gap Assessment', 'We benchmark your current posture against ISO 27001 Annex A controls and identify gaps.'],
                        ['Scope &amp; ISMS Design', 'Define the ISMS scope, policies, and the Statement of Applicability.'],
                        ['Risk Assessment &amp; Treatment', 'Identify, evaluate, and treat information security risks with a documented plan.'],
                        ['Control Implementation', 'Roll out technical and organizational controls, with staff awareness training.'],
                        ['Internal Audit', 'Validate the ISMS with an internal audit and management review.'],
                        ['Certification Audit', 'Support you through Stage 1 &amp; Stage 2 external certification audits.'],
                        ['Continuous Improvement', 'Maintain certification with ongoing monitoring and surveillance-audit readiness.'],
                    ] as $step)
                        <div class="cl-journey-item">
                            <h5 class="fw-bold mb-1">{!! $step[0] !!}</h5>
                            <p class="text-muted mb-0">{!! $step[1] !!}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row g-4 text-center mt-4">
            <div class="col-md-6"><div class="cl-benefit"><div class="cl-stat-num">93</div><div class="cl-stat-label">ISO Controls Mapped (Adcomm Limited)</div></div></div>
            <div class="col-md-6"><div class="cl-benefit"><div class="cl-stat-num">200+</div><div class="cl-stat-label">Employees Trained</div></div></div>
        </div>
    </div>
</section>

{{-- Section 4b — Custom Pricing --}}
<section class="page-section" id="pricing">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Pricing</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Custom GRC Packages</h2>
        <div class="row g-4 justify-content-center">
            @foreach ([
                ['Readiness', 'Gap assessment and a clear roadmap to ISO 27001.', ['Gap assessment', 'Statement of Applicability', 'Remediation roadmap'], false],
                ['Implementation', 'Full ISMS build-out and certification support.', ['Everything in Readiness', 'Policy &amp; control implementation', 'Internal audit + certification support'], true],
                ['Managed GRC', 'Ongoing compliance management and audit readiness.', ['Everything in Implementation', 'Continuous monitoring', 'Surveillance-audit readiness'], false],
            ] as $plan)
                <div class="col-md-6 col-lg-4">
                    <div class="cl-price-card {{ $plan[3] ? 'featured' : '' }} h-100 d-flex flex-column">
                        @if ($plan[3])<span class="badge bg-primary mb-2">Most Popular</span>@endif
                        <h4 class="fw-bold">{{ $plan[0] }}</h4>
                        <p class="text-muted">{{ $plan[1] }}</p>
                        <div class="cl-stat-num mb-3">Custom</div>
                        <ul class="list-unstyled text-start mb-4">
                            @foreach ($plan[2] as $feat)
                                <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>{!! $feat !!}</li>
                            @endforeach
                        </ul>
                        <a class="btn {{ $plan[3] ? 'btn-primary text-white' : 'btn-outline-secondary' }} mt-auto fw-bold" href="{{ route('contact') }}">Get a Quote</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('partials.talk-to-expert', ['title' => 'Pursuing ISO 27001?', 'text' => "Let's map your fastest path to certification."])

@endsection
