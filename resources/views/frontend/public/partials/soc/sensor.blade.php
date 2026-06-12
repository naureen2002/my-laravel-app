{{-- SOC › New System Sensor — continuous telemetry (ref: outthink.io) --}}
@php
    $sensors = [
        ['fa-network-wired', 'Network Sensor', 'Deep packet inspection and east-west traffic analysis to surface lateral movement early.'],
        ['fa-laptop-code', 'Endpoint Sensor', 'Lightweight agents stream endpoint telemetry for rapid detection and response.'],
        ['fa-cloud', 'Cloud Sensor', 'Native cloud integrations monitor identities, workloads, and misconfigurations in real time.'],
    ];
@endphp

<section class="page-section" id="sensor">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>New System Sensor</p>
        <h2 class="page-section-heading text-center text-secondary mb-2" data-reveal>Continuous Telemetry, Everywhere</h2>
        <p class="text-center text-muted lead-narrow mb-5" data-reveal>
            Cyberlog deploys sensors across your environment so nothing happens off-camera — feeding one correlated view of risk.
        </p>
        <div class="row g-4">
            @foreach ($sensors as $s)
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
