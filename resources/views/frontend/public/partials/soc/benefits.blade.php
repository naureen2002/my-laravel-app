{{-- SOC › Benefits grid (ref: underdefense.com) --}}
@php
    $benefits = [
        ['fa-gauge-high', 'Faster than an in-house team', 'A live, battle-tested response engine that detects, contains, and remediates faster than building in-house.'],
        ['fa-chart-line', 'Measurable outcomes', 'Full visibility with detailed reporting and real, measurable outcomes for every incident.'],
        ['fa-volume-xmark', 'Alert-noise reduction', 'We tune your stack to cut false positives and alert fatigue so analysts focus on real threats.'],
        ['fa-crosshairs', 'Proactive threat hunting', 'We hunt for hidden threats across network, endpoints, and cloud — not just passive alerts.'],
        ['fa-bolt', 'Instant kickoff', 'Skip the hiring delays. Onboard in days with a mature, ready-to-run SOC capability.'],
        ['fa-robot', 'Human-led, AI-assisted', 'Expert analysts paired with AI-driven automation to reduce dwell time and response effort.'],
    ];
@endphp

<section class="page-section" id="benefits">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>Why Cyberlog SOC</p>
        <h2 class="page-section-heading text-center text-secondary mb-5" data-reveal>Benefits</h2>
        <div class="row g-4">
            @foreach ($benefits as $b)
                <div class="col-md-6 col-lg-4">
                    <div class="cl-benefit h-100">
                        <i class="fas {{ $b[0] }} mb-3"></i>
                        <h5 class="h6 fw-bold">{{ $b[1] }}</h5>
                        <p class="text-muted small mb-0">{{ $b[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
