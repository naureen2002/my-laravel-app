@php
    $benefits = [
        ['fa-user-secret', 'Real attacker mindset', 'Certified offensive security experts validate how an attacker could actually break in.'],
        ['fa-filter-circle-xmark', 'Less false-positive noise', 'Every critical finding is manually checked, prioritized, and tied to practical impact.'],
        ['fa-screwdriver-wrench', 'Developer-ready remediation', 'Clear technical guidance helps engineering teams fix issues faster and with less back-and-forth.'],
        ['fa-rotate', 'Retest after fixes', 'We verify remediation evidence so closed findings are truly closed, not just marked resolved.'],
        ['fa-scale-balanced', 'Compliance-ready reporting', 'Reports support ISO 27001, PCI DSS, customer assurance, and regulatory evidence needs.'],
        ['fa-chart-line', 'Measurable posture improvement', 'Track risk reduction across assessment cycles, business units, and critical systems.'],
    ];
@endphp

<section class="page-section cl-vapt-benefits" id="benefits">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>Why Cyberlog VAPT</p>
        <h2 class="page-section-heading text-center text-secondary mb-5" data-reveal>Benefits</h2>
        <div class="row g-4">
            @foreach ($benefits as $benefit)
                <div class="col-md-6 col-lg-4">
                    <div class="cl-benefit h-100" data-reveal>
                        <i class="fas {{ $benefit[0] }} mb-3"></i>
                        <h5 class="h6 fw-bold">{{ $benefit[1] }}</h5>
                        <p class="text-muted small mb-0">{{ $benefit[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-vapt-benefits {
        background:
            radial-gradient(780px 430px at 10% 10%, rgba(109, 156, 255, .08), transparent 62%),
            linear-gradient(180deg, rgba(7, 17, 31, .98), rgba(11, 24, 48, .92));
    }
</style>
@endpush
