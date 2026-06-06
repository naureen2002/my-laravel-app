@extends('layouts.portfolio')

@section('title', 'Defense Services — Cyberlog')

@section('content')

{{-- Section 1 — Hero --}}
@include('partials.page-hero', [
    'eyebrow' => 'Defense Services',
    'heading' => 'Detect, Respond &amp; <span class="text-teal">Recover</span> — End to End',
    'subheading' => 'A complete defensive stack covering threat intelligence, incident response, firewall management, risk assessment, and backup — so you can stop, contain, and recover from attacks.',
    'badges' => ['Threat Intel', 'Incident Response', 'Firewall Mgmt', 'Risk Assessment', 'Backup'],
    'heroIcon' => 'fas fa-tower-broadcast',
    'heroCaption' => 'Managed cyber defense',
])

{{-- Section 2 — Threat Intelligence product layout (ref: buguard.io) --}}
<section class="page-section bg-navy-soft text-white" id="threat-intel">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <p class="section-eyebrow mb-2">Threat Intelligence</p>
                <h2 class="fw-bold mb-3">Get <span class="text-teal">Real-time</span> and Reliable Intelligence for Your Business</h2>
                <p class="text-white-50 mb-4">
                    Cyberlog's threat intelligence service empowers businesses to swiftly identify and
                    mitigate threats across their digital presence — regardless of their industry.
                    Strengthen your security posture with proactive intelligence.
                </p>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Credit Cards Monitoring</li>
                    <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Manual Malware Analysis Service</li>
                    <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Ransomware Gangs Feeds</li>
                </ul>
                <div class="d-flex gap-3 mt-4">
                    <a class="btn btn-primary text-white fw-bold" href="{{ route('contact') }}">Book a Demo</a>
                    <a class="btn btn-outline-light" href="#capabilities">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cl-step text-center py-5">
                    <i class="fas fa-satellite-dish text-teal" style="font-size:5rem;"></i>
                    <p class="mt-3 mb-0 text-white-50">Real-time threat feeds &amp; dark-web monitoring</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Capabilities — 5 defense services (ref: crowdstrike.com) --}}
<section class="page-section" id="capabilities">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">What We Defend</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Our Defense Services</h2>
        <div class="row g-4">
            @foreach ([
                ['fa-satellite-dish', 'Threat Intelligence', 'Real-time feeds, dark-web monitoring, and malware analysis to anticipate attacks.'],
                ['fa-hand-fist', 'Incident Response', 'Respond, rebuild, restore, and uncover compromise — fast, with a clear playbook.'],
                ['fa-fire', 'Firewall Management', 'Design, deploy, and continuously tune perimeter and internal firewall policies.'],
                ['fa-triangle-exclamation', 'Risk Assessment', 'Identify, quantify, and prioritize risk across your people, process, and technology.'],
                ['fa-database', 'Backup &amp; Recovery', 'Resilient, tested backups and recovery plans to survive ransomware and outages.'],
            ] as $cap)
                <div class="col-md-6 col-lg-4">
                    <div class="cl-solution-card h-100">
                        <div class="cl-solution-icon"><i class="fas {{ $cap[0] }}"></i></div>
                        <h5 class="fw-bold">{!! $cap[1] !!}</h5>
                        <p class="text-muted mb-0">{{ $cap[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Consulting / platform services strip (ref: crowdstrike.com) --}}
<section class="page-section bg-light" id="consulting">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="cl-benefit h-100">
                    <i class="fas fa-people-group mb-3" style="font-size:2rem;"></i>
                    <h4 class="fw-bold">Consulting Services</h4>
                    <ul class="list-unstyled mt-3 mb-0">
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Strategic advisory services</li>
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Cloud and identity services</li>
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Red team services</li>
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Environment hardening</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cl-benefit h-100">
                    <i class="fas fa-layer-group mb-3" style="font-size:2rem;"></i>
                    <h4 class="fw-bold">Platform Services</h4>
                    <ul class="list-unstyled mt-3 mb-0">
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Accelerate time to ROI</li>
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Configure and fully operationalize the platform</li>
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Level up your security skills</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.talk-to-expert', ['title' => 'Under attack or want to be ready?', 'text' => 'Our defense team is on standby 24/7.'])

@endsection
