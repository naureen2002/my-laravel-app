@extends('layouts.portfolio')

@section('title', 'Career — Cyberlog')

@section('content')

@include('partials.page-hero', [
    'eyebrow' => 'Careers',
    'heading' => 'Build a Career in <span class="text-teal">Cyber Defense</span>',
    'subheading' => 'Join a team that defends the organizations that matter most. We are always looking for talented people who want to make a real impact in cybersecurity.',
    'primaryCta' => ['label' => 'View Open Roles', 'url' => '#openings'],
    'heroIcon' => 'fas fa-briefcase',
    'heroCaption' => 'Grow with us',
])

{{-- Why join us --}}
<section class="page-section" id="why-join">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Why Cyberlog</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Love From Here, Work That Matters</h2>
        <div class="row g-4">
            @foreach ([
                ['fa-graduation-cap', 'Continuous learning', 'Certifications, labs, and mentorship to keep your skills sharp.'],
                ['fa-people-group', 'Real impact', 'Defend national infrastructure, finance, and government organizations.'],
                ['fa-scale-balanced', 'Balance &amp; growth', 'A supportive culture with room to grow into leadership.'],
            ] as $w)
                <div class="col-md-4">
                    <div class="cl-benefit h-100 text-center">
                        <i class="fas {{ $w[0] }} mb-3" style="font-size:2rem;"></i>
                        <h5 class="fw-bold">{!! $w[1] !!}</h5>
                        <p class="text-muted small mb-0">{{ $w[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Open roles (ref: undp.org/bangladesh/careers) --}}
<section class="page-section bg-light" id="openings">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Open Roles</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Current Openings</h2>
        <div class="row g-3 justify-content-center">
            @foreach ([
                ['SOC Analyst (L1/L2)', 'Dhaka · Full-time', 'Security Operations'],
                ['Penetration Tester', 'Dhaka · Full-time', 'Offensive Security'],
                ['GRC / ISO 27001 Consultant', 'Dhaka · Full-time', 'Compliance'],
                ['Incident Response Engineer', 'Dhaka · Full-time', 'Defense Services'],
                ['Security Awareness Trainer', 'Dhaka · Contract', 'Capacity Building'],
            ] as $job)
                <div class="col-lg-9">
                    <div class="cl-client-card justify-content-between p-4">
                        <div>
                            <h5 class="fw-bold mb-1 text-secondary">{{ $job[0] }}</h5>
                            <span class="text-muted small me-3"><i class="fas fa-location-dot text-teal me-1"></i>{{ $job[1] }}</span>
                            <span class="badge bg-light text-secondary border">{{ $job[2] }}</span>
                        </div>
                        <a class="btn btn-primary text-white fw-bold" href="{{ route('contact') }}">Apply</a>
                    </div>
                </div>
            @endforeach
        </div>
        <p class="text-center text-muted mt-4 mb-0">
            Don't see a role that fits? <a class="text-teal fw-semibold" href="{{ route('contact') }}">Send us your CV</a>.
        </p>
    </div>
</section>

@endsection
