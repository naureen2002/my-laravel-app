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

<section class="page-section" id="all-services">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Security Solutions</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Explore Our <span class="cl-title-accent">Security Solutions</span></h2>
        <div class="row g-4">
            @foreach ([
                ['url' => route('soc'), 'icon' => 'fa-desktop', 'title' => 'Managed Security Services', 'desc' => 'Outsourced cybersecurity operations for continuous monitoring, detection, and protection.'],
                ['url' => route('vapt'), 'icon' => 'fa-bug', 'title' => 'VAPT / Pen Testing', 'desc' => 'Vulnerability assessment and penetration testing across applications, networks, APIs, and cloud.'],
                ['url' => route('it-audit'), 'icon' => 'fa-clipboard-check', 'title' => 'Security Audits &amp; ISO 27001', 'desc' => 'Information security audits, ISO 27001 readiness, control review, and remediation planning.'],
                ['url' => route('capacity-building'), 'icon' => 'fa-graduation-cap', 'title' => 'Security Awareness Training', 'desc' => 'Practical programs that build cyber-savvy teams and strengthen daily security behavior.'],
                ['url' => route('defense-services'), 'icon' => 'fa-tower-broadcast', 'title' => 'Defense Services', 'desc' => 'Threat intelligence, incident response, firewall management, backup, and recovery support.'],
                ['url' => route('vciso'), 'icon' => 'fa-user-shield', 'title' => 'vCISO', 'desc' => 'On-demand executive security leadership, governance, and cyber resilience strategy.'],
                ['url' => route('public.malware-analysis'), 'icon' => 'fa-microscope', 'title' => 'Malware Analysis', 'desc' => 'In-depth malware investigation to understand behavior, indicators, impact, and countermeasures.'],
                ['url' => route('public.next-gen-firewall'), 'icon' => 'fa-shield-virus', 'title' => 'Next-Gen Firewall Protection', 'desc' => 'Modern firewall guidance and protection against evolving network and application-layer threats.'],
                ['url' => route('public.backup-recovery'), 'icon' => 'fa-database', 'title' => 'Backup and Recovery', 'desc' => 'Resilience planning to secure data and restore critical systems after cyber incidents or loss.'],
                ['url' => route('public.digital-forensics'), 'icon' => 'fa-fingerprint', 'title' => 'Digital Forensics', 'desc' => 'Expert evidence analysis to uncover activity, support investigations, and reduce future risk.'],
            ] as $sol)
                <div class="col-md-6 col-lg-4">
                    <a class="cl-solution-card" href="{{ $sol['url'] }}">
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

{{-- Our Security Engagement Process (shared with the home page) --}}
@include('frontend.public.partials.home.tech-diagram')

@include('partials.talk-to-expert')

@endsection
