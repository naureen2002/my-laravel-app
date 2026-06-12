{{-- SOC › Comparison — which SOC model delivers real value (ref: underdefense.com) --}}
@php
    $rows = [
        ['model' => 'In-House SOC',            'cost' => '$750,000', 'setup' => '6 months', 'mttr' => '4.0', 'stopped' => '70%', 'sla' => '70%',   'hl' => false],
        ['model' => 'Hybrid SOC (Co-Managed)', 'cost' => '$400,000', 'setup' => '1 month',  'mttr' => '2.5', 'stopped' => '90%', 'sla' => '90%',   'hl' => false],
        ['model' => 'Fully Outsourced SOC',    'cost' => '$280,000', 'setup' => '2 weeks',  'mttr' => '1.5', 'stopped' => '92%', 'sla' => '92%',   'hl' => false],
        ['model' => 'Cyberlog SOCaaS',         'cost' => '$192,000', 'setup' => '1 week',   'mttr' => '0.5', 'stopped' => '96%', 'sla' => '99.9%', 'hl' => true],
    ];
@endphp

<section class="page-section" id="comparison">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>Comparison</p>
        <h2 class="page-section-heading text-center text-secondary mb-2" data-reveal>Which SOC Model Delivers Real Value?</h2>
        <p class="text-center text-muted lead-narrow mb-5" data-reveal>
            Modelled on a typical mid-sized business — 500 employees, hybrid environment, 200 devices.
            Here's how the options stack up on cost, speed, and outcomes.
        </p>

        <div class="cl-cmp-wrap" data-reveal>
            <div class="table-responsive">
                <table class="table align-middle cl-compare cl-cmp mb-0">
                    <thead>
                        <tr>
                            <th>SOC Model</th>
                            <th>Yearly Cost</th>
                            <th>Setup Time</th>
                            <th>MTTR (hrs)</th>
                            <th>Threats Stopped</th>
                            <th>SLA / KPI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $r)
                            <tr class="{{ $r['hl'] ? 'cl-row-highlight' : '' }}">
                                <td class="fw-semibold">
                                    @if ($r['hl'])<i class="fas fa-shield-halved text-primary me-1"></i>@endif{{ $r['model'] }}
                                </td>
                                <td>{{ $r['cost'] }}</td>
                                <td>{{ $r['setup'] }}</td>
                                <td>{{ $r['mttr'] }}</td>
                                <td>{{ $r['stopped'] }}</td>
                                <td>{{ $r['sla'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-cmp-wrap {
        border-radius: 16px; overflow: hidden;
        background: linear-gradient(160deg, #0b1430, #0a1126) padding-box,
                    linear-gradient(120deg, var(--blue), #6f5bff) border-box;
        border: 1.5px solid transparent;
        box-shadow: 0 30px 80px rgba(5, 20, 60, 0.5);
    }
    .cl-cmp { --bs-table-bg: transparent; }
    .cl-cmp thead th { font-family: 'IBM Plex Mono', monospace; font-size: .72rem; letter-spacing: .06em; text-transform: uppercase; }
    .cl-cmp td, .cl-cmp th { padding: 1rem 1.25rem; white-space: nowrap; }
</style>
@endpush
