@extends('layouts.portfolio')

@section('title', 'SOC as a Service — Cyberlog')

@section('content')

{{-- Section 1 — Hero --}}
@include('partials.page-hero', [
    'eyebrow' => 'Security Operations Center',
    'heading' => '24/7 <span class="text-teal">SOC-as-a-Service</span>',
    'subheading' => 'Cyberlog provides fully or co-managed SOC services that detect threats in real time, cut alert noise, and stop attacks before they cause damage — all while integrating seamlessly with your existing tools.',
    'badges' => ['Threat Detection', 'Incident Response', 'SIEM/SOAR', '24/7 Monitoring'],
    'primaryCta' => ['label' => 'Talk to an Expert', 'url' => route('contact')],
    'secondaryCta' => ['label' => 'SOC Calculator', 'url' => '#calculator'],
    'heroIcon' => 'fas fa-desktop',
    'heroCaption' => '24/7 Security Operations Center',
])

{{-- Section 2 — Client --}}
@include('partials.clients')

{{-- Section 3 — Comparison / which SOC model delivers real value (ref: underdefense.com) --}}
<section class="page-section" id="comparison">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Comparison</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-2">Which SOC Model Delivers Real Value?</h2>
        <p class="text-center text-muted lead-narrow mb-5">
            We compared four SOC models for a typical mid-sized business (500 employees, hybrid
            environment, 200 devices). Here's how they stack up on cost, speed, and security outcomes.
        </p>

        <div class="table-responsive">
            <table class="table table-bordered align-middle cl-compare">
                <thead>
                    <tr>
                        <th>SOC Model</th>
                        <th>Estimated Yearly Cost (USD)</th>
                        <th>Setup Time</th>
                        <th>MTTR (hours)</th>
                        <th>% Threats Stopped Before Damage</th>
                        <th>SLA / KPI Score</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>In-House SOC</td><td>$750,000</td><td>6 months</td><td>4.0</td><td>70%</td><td>70%</td>
                    </tr>
                    <tr>
                        <td>Hybrid SOC (Co-Managed)</td><td>$400,000</td><td>1 month</td><td>2.5</td><td>90%</td><td>90%</td>
                    </tr>
                    <tr>
                        <td>Fully Outsourced SOC</td><td>$280,000</td><td>2 weeks</td><td>1.5</td><td>92%</td><td>92%</td>
                    </tr>
                    <tr class="cl-row-highlight">
                        <td>Cyberlog SOCaaS</td><td>$192,000</td><td>1 week</td><td>0.5</td><td>96%</td><td>99.9%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

{{-- Section 4 — Service Calculator (ref: underdefense.com) --}}
<section class="page-section bg-light" id="calculator">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <p class="section-eyebrow mb-2">SOC as a Service</p>
                <h2 class="fw-bold text-secondary mb-3">Calculate Your SOC Cost</h2>
                <p class="text-muted">
                    The average managed SOC service ranges from $10 to $20 per asset per month,
                    depending on the number of endpoints, log volume, coverage level, and response
                    needs. Use our SOC calculator to get a personalized estimate, or explore plans
                    that fit your environment and compliance needs.
                </p>
            </div>
            <div class="col-lg-7">
                <div class="cl-calc">
                    <h5 class="fw-bold mb-3">Calculate your SOC cost</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">Number of employees</label>
                            <select class="form-select"><option>1 - 100</option><option>100 - 500</option><option>500 - 1000</option><option>1000+</option></select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">Assets to protect</label>
                            <select class="form-select"><option>50 - 200</option><option>200 - 500</option><option>500 - 1000</option><option>1000+</option></select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">Security tools in use</label>
                            <input class="form-control" type="text" placeholder="e.g. CrowdStrike, Microsoft Defender">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">Business email</label>
                            <input class="form-control" type="email" placeholder="you@company.com">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary text-white fw-bold w-100" type="button">Get a Custom Quote</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 5 — Matrix (ref: underdefense.com) --}}
<section class="page-section" id="matrix">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Coverage Matrix</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">What's Included in Each Tier</h2>
        <div class="table-responsive">
            <table class="table table-bordered align-middle text-center cl-compare">
                <thead>
                    <tr><th class="text-start">Capability</th><th>Essential</th><th>Advanced</th><th>Enterprise</th></tr>
                </thead>
                <tbody>
                    @foreach ([
                        ['24/7 Monitoring &amp; Triage', true, true, true],
                        ['SIEM Management', true, true, true],
                        ['Threat Intelligence Feeds', false, true, true],
                        ['Managed Detection &amp; Response (MDR)', false, true, true],
                        ['Proactive Threat Hunting', false, false, true],
                        ['Incident Response Retainer', false, false, true],
                        ['Dedicated SOC Analyst', false, false, true],
                    ] as $row)
                        <tr>
                            <td class="text-start fw-semibold">{!! $row[0] !!}</td>
                            @for ($i = 1; $i <= 3; $i++)
                                <td>
                                    @if ($row[$i])
                                        <i class="fas fa-check text-teal"></i>
                                    @else
                                        <i class="fas fa-minus text-muted"></i>
                                    @endif
                                </td>
                            @endfor
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

{{-- Section 6 — Benefits (ref: underdefense.com) --}}
<section class="page-section bg-light" id="benefits">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Cyberlog SOC as a Service</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Benefits</h2>
        <div class="row g-4">
            @foreach ([
                ['fa-gauge-high', 'Faster than an in-house SOC team', 'Our SOC is a live, battle-tested response engine that detects, contains, and remediates faster.'],
                ['fa-chart-line', 'Operational clarity &amp; measurable outcomes', 'Get full visibility with detailed reporting and real measurable outcomes for every incident.'],
                ['fa-volume-off', 'Tool optimization &amp; alert noise reduction', 'We tune your stack to cut false positives and alert fatigue so analysts focus on real threats.'],
                ['fa-crosshairs', 'Proactive threat hunting, not just monitoring', 'We hunt for hidden threats across networks, endpoints, and the cloud — not just passive alerts.'],
                ['fa-bolt', 'Instant kickoff with a mature SOCaaS team', 'Skip the hiring delays. Onboard in days with a mature, ready-to-run SOC capability.'],
                ['fa-robot', 'Human-led security with smart tech', 'Our SOC pairs expert human analysts with AI-driven automation to reduce dwell time.'],
            ] as $b)
                <div class="col-md-6 col-lg-4">
                    <div class="cl-benefit">
                        <i class="fas {{ $b[0] }} mb-3"></i>
                        <h5 class="h6 fw-bold">{!! $b[1] !!}</h5>
                        <p class="text-muted small mb-0">{{ $b[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Section 7 — New System Sensor (ref: outthink.io) --}}
<section class="page-section" id="sensor">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">New System Sensor</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Continuous Telemetry, Everywhere</h2>
        <div class="row g-4">
            @foreach ([
                ['fa-network-wired', 'Network Sensor', 'Deep packet inspection and east-west traffic analysis to spot lateral movement early.'],
                ['fa-laptop-code', 'Endpoint Sensor', 'Lightweight agents stream endpoint telemetry for rapid detection and response.'],
                ['fa-cloud', 'Cloud Sensor', 'Native cloud integrations monitor identities, workloads, and misconfigurations.'],
            ] as $s)
                <div class="col-md-4">
                    <div class="cl-solution-card h-100">
                        <div class="cl-solution-icon"><i class="fas {{ $s[0] }}"></i></div>
                        <h5 class="fw-bold">{{ $s[1] }}</h5>
                        <p class="text-muted mb-0">{{ $s[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Section 8 — Talk to the Expert (ref: underdefense.com) --}}
@include('partials.talk-to-expert', ['title' => 'Still Evaluating SOC Options?', 'text' => "We'll walk you through the pros, cons, and pricing."])

{{-- Section 9 — Pricing (Custom) --}}
<section class="page-section bg-light" id="pricing">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Pricing</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Custom SOC Plans</h2>
        <div class="row g-4 justify-content-center">
            @foreach ([
                ['Essential', 'For growing teams getting started with managed detection.', ['24/7 monitoring &amp; triage', 'SIEM management', 'Monthly reporting'], false],
                ['Advanced', 'For organizations that need MDR and threat intelligence.', ['Everything in Essential', 'Managed Detection &amp; Response', 'Threat intelligence feeds'], true],
                ['Enterprise', 'For regulated, high-value environments needing full coverage.', ['Everything in Advanced', 'Proactive threat hunting', 'Dedicated SOC analyst &amp; IR retainer'], false],
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

{{-- Section 10 — Review (ref: underdefense.com) --}}
@include('partials.reviews')

@endsection
