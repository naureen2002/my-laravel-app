@extends('layouts.portfolio')

@section('title', 'Cyberlog — Build Cyber Resilience Before Attackers Build Access')

@section('content')

{{-- ============ 1. HERO / LANDING — Threat Console (ref: riskledger.com) ============ --}}
<header class="cl-hero" id="page-top">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-7">
                <p class="cl-hero-eyebrow mb-3" data-reveal data-hero>
                    THREAT INTELLIGENCE · MANAGED SOC · OFFENSIVE SECURITY<span class="cl-cursor"></span>
                </p>

                <h1 class="cl-hero-heading mb-4" data-reveal data-hero>
                    Build Cyber <span class="accent">Resilience</span> Before Attackers Build Access
                </h1>

                <p class="lead text-muted lead-narrow ms-0 mb-4" data-reveal data-hero>
                    Cyberlog delivers offensive security, managed SOC, compliance, threat
                    intelligence, and innovative solutions for enterprises, government
                    organizations, financial institutions, and critical infrastructure.
                </p>

                <div class="d-flex flex-wrap gap-2 mb-4" data-reveal data-hero>
                    <span class="cl-tag"><i class="fas fa-bug"></i>Penetration Testing</span>
                    <span class="cl-tag"><i class="fas fa-desktop"></i>SOC</span>
                    <span class="cl-tag"><i class="fas fa-clipboard-check"></i>Security Audit &amp; Training</span>
                    <span class="cl-tag"><i class="fas fa-user-shield"></i>vCISO</span>
                </div>

                <div class="d-flex flex-wrap gap-3 mb-4" data-reveal data-hero>
                    <a class="btn btn-alert btn-xl" href="{{ route('contact') }}">Talk to an Expert</a>
                    <a class="btn btn-outline-light btn-xl" href="{{ route('services') }}">Explore Services <i class="fas fa-arrow-right ms-1"></i></a>
                </div>

                <p class="mono mb-0 text-muted" data-reveal data-hero>
                    Join our cyber defense eco-system with
                    <span class="cl-highlight">hundreds</span> of organizations
                </p>
            </div>

            <div class="col-lg-5" data-reveal data-hero>
                <div class="cl-console">
                    <div class="cl-console-bar">
                        <span class="cl-dot"></span> CYBERLOG // LIVE THREAT FEED
                    </div>

                    <div class="cl-radar">
                        <span class="cl-blip b1"></span>
                        <span class="cl-blip b2"></span>
                        <span class="cl-blip b3"></span>
                    </div>

                    <div class="cl-feed mono" id="cl-feed">
                        {{-- seeded so it renders without JS --}}
                        <div class="cl-feed-line"><span class="ts">00:00:01</span><span class="ok">[CLEAN]</span><span>endpoint scan · 1,204 assets</span></div>
                        <div class="cl-feed-line"><span class="ts">00:00:00</span><span class="crit">[BLOCKED]</span><span>brute-force attempt · 203.0.113.*</span></div>
                    </div>

                    <div class="cl-console-stats">
                        <div><div class="n" data-count="500" data-suffix="+">500+</div><div class="l">Users protected</div></div>
                        <div><div class="n" data-count="24" data-suffix="/7">24/7</div><div class="l">Monitoring</div></div>
                        <div><div class="n" data-count="99.9" data-suffix="%" data-decimals="1">99.9%</div><div class="l">Uptime SLA</div></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>

{{-- ============ 2. CLIENTS (ref: buguard.io) ============ --}}
@include('partials.clients')

{{-- ============ 3. TECHNICAL DIAGRAM (ref: viserx.com) ============ --}}
<section class="page-section bg-navy-soft text-white" id="how-we-work">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">How we work</p>
        <h2 class="page-section-heading text-center text-uppercase text-white mb-2">Our Engagement Process</h2>
        <p class="text-center text-white-50 lead-narrow mb-5">
            A structured, repeatable methodology that takes you from risk discovery to continuous protection.
        </p>

        <div class="row g-4">
            @foreach ([
                ['no' => 'Step 01', 'icon' => 'fa-magnifying-glass-chart', 'title' => 'Understand Goals &amp; Requirements', 'desc' => 'We map your assets, risk appetite, and compliance drivers to define a clear security scope.'],
                ['no' => 'Step 02', 'icon' => 'fa-diagram-project', 'title' => 'Research &amp; Planning Strategy', 'desc' => 'Threat modelling and architecture review to design the right defensive strategy.'],
                ['no' => 'Step 03', 'icon' => 'fa-rocket', 'title' => 'Execution &amp; Implementation', 'desc' => 'Testing, deployment, and integration of controls across your environment.'],
                ['no' => 'Step 04', 'icon' => 'fa-gauge-high', 'title' => 'Monitoring &amp; Optimization', 'desc' => '24/7 SOC monitoring with continuous tuning and improvement.'],
                ['no' => 'Step 05', 'icon' => 'fa-shield-halved', 'title' => 'AI &amp; Automation', 'desc' => 'Automated detection and response to reduce dwell time and alert noise.'],
                ['no' => 'Step 06', 'icon' => 'fa-file-shield', 'title' => 'Reporting &amp; Support', 'desc' => 'Actionable reporting, remediation guidance, and ongoing advisory support.'],
            ] as $step)
                <div class="col-md-6 col-lg-4">
                    <div class="cl-step">
                        <div class="cl-step-no mb-2">{{ $step['no'] }}</div>
                        <i class="fas {{ $step['icon'] }} text-teal mb-2" style="font-size:1.6rem;"></i>
                        <h5>{!! $step['title'] !!}</h5>
                        <p class="mb-0 small">{{ $step['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============ 4. SECURITY SOLUTIONS (ref: buguard.io) ============ --}}
<section class="page-section" id="solutions">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">What we do</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Explore Our Security Solutions</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-shield-halved"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row g-4">
            @foreach ([
                ['route' => 'soc', 'icon' => 'fa-desktop', 'title' => 'SOC as a Service', 'desc' => '24/7 monitoring, threat detection, and incident response from a mature security operations center.'],
                ['route' => 'vapt', 'icon' => 'fa-bug', 'title' => 'VAPT / Pen Testing', 'desc' => 'Vulnerability assessment and black/grey/white-box penetration testing across your digital systems.'],
                ['route' => 'it-audit', 'icon' => 'fa-clipboard-check', 'title' => 'IT Audit &amp; ISO 27001', 'desc' => 'Security audit, GRC, compliance review, and ISO 27001 implementation &amp; certification readiness.'],
                ['route' => 'capacity-building', 'icon' => 'fa-graduation-cap', 'title' => 'Capacity Building', 'desc' => 'Cybersecurity awareness training to turn your people into your strongest human firewall.'],
                ['route' => 'defense-services', 'icon' => 'fa-tower-broadcast', 'title' => 'Defense Services', 'desc' => 'Threat intel, incident response, firewall management, risk assessment, and backup.'],
                ['route' => 'vciso', 'icon' => 'fa-user-shield', 'title' => 'vCISO', 'desc' => 'Virtual CISO support for governance, strategy, compliance, and long-term cyber resilience.'],
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

{{-- ============ 5. CLIENT SUCCESS STORIES ============ --}}
<section class="page-section bg-light" id="case-studies">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Proven impact</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Client Success Stories</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-chart-line"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row g-4">
            @foreach ([
                ['tag' => 'Capital Market', 'name' => 'Dhaka Stock Exchange', 'desc' => "Cyberlog delivered SOC support for Bangladesh's most critical capital market infrastructure and one of the country's highest-value financial technology environments.", 'stats' => [['24/7', 'SOC Monitoring'], ['99.99%', 'Uptime for Capital Market Cyber Defense']]],
                ['tag' => 'Financial Institute', 'name' => 'Bangladesh Finance', 'desc' => 'Cyberlog conducted VAPT for Bangladesh Finance to identify, validate, and prioritize exploitable security risks across its digital environment.', 'stats' => [['360°', 'Security Risk Review'], ['10+', 'High-Priority Risks Validated']]],
                ['tag' => 'Government Organization', 'name' => 'Bangladesh Investment Development Authority (BIDA)', 'desc' => 'Cyberlog conducted cybersecurity capacity building for the IT team and supported a cybersecurity assessment to improve technical readiness and institutional resilience.', 'stats' => [['250%+', "Increase in Employees' Cybersecurity Skills"], ['12', 'Security Areas Reviewed']]],
                ['tag' => 'Advertisement Industry', 'name' => 'Adcomm Limited', 'desc' => 'Cyberlog supported Adcomm Limited with ISO 27001 implementation and employee cybersecurity capacity building to strengthen compliance readiness and workforce security awareness.', 'stats' => [['93', 'ISO Controls Mapped'], ['200+', 'Employees Trained']]],
            ] as $case)
                <div class="col-lg-6">
                    <div class="cl-case-card">
                        <div class="cl-case-head">
                            <span class="badge bg-primary mb-2">{{ $case['tag'] }}</span>
                            <h4 class="mb-0">{{ $case['name'] }}</h4>
                        </div>
                        <div class="cl-case-body">
                            <p class="text-muted">{{ $case['desc'] }}</p>
                            <div class="row g-3 mt-1">
                                @foreach ($case['stats'] as $stat)
                                    <div class="col-6">
                                        <div class="cl-stat-num">{{ $stat[0] }}</div>
                                        <div class="cl-stat-label">{{ $stat[1] }}</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============ 6. OUR STORY (ref: underdefense.com/about-us) ============ --}}
<section class="page-section" id="about">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <p class="section-eyebrow mb-2">Our Story</p>
                <h2 class="fw-bold text-secondary mb-3">A decade of building cyber resilience</h2>
                <p class="text-muted">
                    Cyberlog helps organizations strengthen their cyber resilience through offensive
                    security, managed security operations, compliance readiness, and expert advisory
                    services. We work alongside enterprises, government bodies, and financial
                    institutions to defend what matters most.
                </p>
                <p class="text-muted mb-4">
                    From a focused security team to a full-spectrum cyber defense partner, our growth
                    has been driven by measurable outcomes and long-term client trust.
                </p>
                <a class="btn btn-outline-secondary btn-xl" href="{{ route('about') }}">Read Our Story</a>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    @foreach ([
                        ['500+', 'Users protected across managed services'],
                        ['14+', 'Enterprise &amp; government clients'],
                        ['24/7', 'Security operations coverage'],
                        ['93', 'ISO 27001 controls implemented'],
                    ] as $m)
                        <div class="col-6">
                            <div class="cl-benefit text-center">
                                <div class="cl-stat-num">{{ $m[0] }}</div>
                                <div class="cl-stat-label">{!! $m[1] !!}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============ 7. CTA ============ --}}
@include('partials.talk-to-expert', ['title' => 'Ready to build your cyber defense eco-system?', 'text' => 'Join hundreds of organizations that trust Cyberlog.'])

@endsection
