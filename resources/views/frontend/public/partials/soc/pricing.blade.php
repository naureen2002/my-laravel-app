{{-- SOC › Custom pricing tiers --}}
@php
    $plans = [
        ['Essential', 'For growing teams getting started with managed detection.', ['24/7 monitoring &amp; triage', 'SIEM management', 'Monthly reporting'], false],
        ['Advanced', 'For organizations that need MDR and threat intelligence.', ['Everything in Essential', 'Managed Detection &amp; Response', 'Threat intelligence feeds'], true],
        ['Enterprise', 'For regulated, high-value environments needing full coverage.', ['Everything in Advanced', 'Proactive threat hunting', 'Dedicated SOC analyst &amp; IR retainer'], false],
    ];
    $contact = Route::has('public.contact') ? route('public.contact') : (Route::has('contact') ? route('contact') : '#');
@endphp

<section class="page-section" id="pricing">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>Pricing</p>
        <h2 class="page-section-heading text-center text-secondary mb-5" data-reveal>Custom SOC Plans</h2>
        <div class="row g-4 justify-content-center">
            @foreach ($plans as $plan)
                <div class="col-md-6 col-lg-4">
                    <div class="cl-price-card {{ $plan[3] ? 'featured' : '' }} h-100 d-flex flex-column">
                        @if ($plan[3])<span class="badge bg-primary mb-2 align-self-center">Most Popular</span>@endif
                        <h4 class="fw-bold">{{ $plan[0] }}</h4>
                        <p class="text-muted">{{ $plan[1] }}</p>
                        <div class="cl-stat-num mb-3">Custom</div>
                        <ul class="list-unstyled text-start mb-4">
                            @foreach ($plan[2] as $feat)
                                <li class="mb-2"><i class="fas fa-circle-check text-primary me-2"></i>{!! $feat !!}</li>
                            @endforeach
                        </ul>
                        <a class="btn {{ $plan[3] ? 'btn-primary text-white' : 'btn-outline-light' }} mt-auto fw-bold" href="{{ $contact }}">Get a Quote</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
