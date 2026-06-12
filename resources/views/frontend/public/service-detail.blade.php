@php
    $slug = request()->route('service');
    $items = [
        'malware-analysis' => [
            'title' => 'Malware Analysis',
            'eyebrow' => 'Threat Research',
            'icon' => 'fa-microscope',
            'summary' => 'Cyberlog analyzes suspicious files, malware behavior, indicators of compromise, and attacker tradecraft so your team can contain threats and harden defenses.',
            'points' => ['Static and dynamic malware analysis', 'Indicators of compromise and YARA-style detection guidance', 'Behavior summary for SOC, IR, and executive teams', 'Containment and prevention recommendations'],
        ],
        'next-gen-firewall' => [
            'title' => 'Next-Gen Firewall Protection',
            'eyebrow' => 'Network Defense',
            'icon' => 'fa-shield-virus',
            'summary' => 'Cyberlog helps design, tune, and review firewall controls that protect modern networks, cloud boundaries, and application traffic.',
            'points' => ['Firewall architecture and policy review', 'Segmentation and rule-base hardening', 'Threat prevention and IPS tuning', 'Ongoing configuration and risk review'],
        ],
        'backup-recovery' => [
            'title' => 'Backup and Recovery',
            'eyebrow' => 'Cyber Resilience',
            'icon' => 'fa-database',
            'summary' => 'Cyberlog builds practical backup and recovery readiness so critical systems can survive ransomware, accidental loss, or infrastructure failure.',
            'points' => ['Backup architecture assessment', 'Recovery point and recovery time planning', 'Ransomware-resilient backup controls', 'Restore testing and incident playbooks'],
        ],
        'digital-forensics' => [
            'title' => 'Digital Forensics',
            'eyebrow' => 'Incident Investigation',
            'icon' => 'fa-fingerprint',
            'summary' => 'Cyberlog investigates endpoints, servers, logs, and artifacts to reconstruct activity, preserve evidence, and identify root cause after suspicious events.',
            'points' => ['Endpoint and server artifact review', 'Timeline reconstruction and evidence handling', 'Log and account activity analysis', 'Root-cause and remediation reporting'],
        ],
    ];
    $service = $items[$slug] ?? $items['malware-analysis'];
@endphp

@extends('frontend.public.layouts.public')

@section('title', $service['title'] . ' - Cyberlog')
@section('meta_description', $service['summary'])

@section('content')

<header class="cl-hero cl-service-detail-hero" id="page-top">
    <canvas data-net class="cl-service-detail-net" aria-hidden="true"></canvas>
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <p class="section-eyebrow mb-3" data-reveal data-hero>{{ $service['eyebrow'] }}</p>
                <h1 class="cl-hero-heading mb-3" data-reveal data-hero>
                    {{ $service['title'] }}
                </h1>
                <p class="lead text-muted mb-4" data-reveal data-hero>{{ $service['summary'] }}</p>
                <a class="btn btn-alert btn-xl text-white fw-bold" href="{{ route('contact') }}" data-reveal data-hero>
                    Talk to an Expert
                </a>
            </div>
            <div class="col-lg-5" data-reveal data-hero>
                <div class="cl-service-detail-icon">
                    <i class="fas {{ $service['icon'] }}"></i>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="page-section cl-service-detail-section">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>What We Deliver</p>
        <h2 class="page-section-heading text-center text-secondary mb-5" data-reveal>Dedicated {{ $service['title'] }} Support</h2>
        <div class="row g-4">
            @foreach ($service['points'] as $point)
                <div class="col-md-6 col-lg-3">
                    <div class="cl-service-detail-card h-100" data-reveal>
                        <i class="fas fa-circle-check"></i>
                        <p>{{ $point }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('partials.talk-to-expert', [
    'title' => 'Need help with ' . $service['title'] . '?',
    'text' => 'Cyberlog can scope a practical plan for your environment and risk profile.'
])

@endsection

@push('styles')
<style>
    .cl-service-detail-hero {
        position: relative;
        overflow: hidden;
        padding-top: 8rem;
        padding-bottom: 5rem;
    }
    .cl-service-detail-net {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
    }
    .cl-service-detail-hero .container {
        position: relative;
        z-index: 2;
    }
    .cl-service-detail-icon {
        min-height: 330px;
        display: grid;
        place-items: center;
        border: 1px solid var(--line);
        border-radius: 8px;
        background:
            radial-gradient(circle at 50% 50%, rgba(255, 72, 101, .16), transparent 38%),
            linear-gradient(145deg, rgba(16, 31, 58, .86), rgba(7, 17, 31, .94));
        box-shadow: 0 28px 76px rgba(0, 0, 0, .42);
    }
    .cl-service-detail-icon i {
        color: var(--warm-soft);
        font-size: clamp(4rem, 9vw, 7rem);
        filter: drop-shadow(0 0 28px rgba(255, 138, 0, .28));
    }
    .cl-service-detail-section {
        background: linear-gradient(180deg, rgba(7, 17, 31, .96), rgba(5, 12, 23, .98));
    }
    .cl-service-detail-card {
        padding: 1.25rem;
        border: 1px solid var(--line);
        border-radius: 8px;
        background: rgba(16, 31, 58, .72);
    }
    .cl-service-detail-card i {
        color: var(--warm-soft);
        margin-bottom: .9rem;
        font-size: 1.25rem;
    }
    .cl-service-detail-card p {
        margin: 0;
        color: var(--muted);
        line-height: 1.55;
    }
</style>
@endpush
