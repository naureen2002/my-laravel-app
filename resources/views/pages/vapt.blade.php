@extends('layouts.portfolio')

@section('title', 'VAPT & Penetration Testing — Cyberlog')

@section('content')

{{-- Section 1 — Hero --}}
@include('partials.page-hero', [
    'eyebrow' => 'Vulnerability Assessment & Penetration Testing',
    'heading' => 'Find &amp; Fix Risks <span class="text-teal">Before Attackers Do</span>',
    'subheading' => 'Cyberlog conducts VAPT to identify, validate, and prioritize exploitable security risks across your applications, networks, cloud, and infrastructure — with clear, actionable remediation.',
    'badges' => ['Black Box', 'Grey Box', 'White Box', 'Re-testing'],
    'secondaryCta' => ['label' => 'Get a Quote', 'url' => '#calculator'],
    'heroIcon' => 'fas fa-bug',
    'heroCaption' => 'Offensive security testing',
])

{{-- Section 2 — Client --}}
@include('partials.clients')

{{-- Section 3 — Security Posture Diagram --}}
<section class="page-section bg-navy-soft text-white" id="posture">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Methodology</p>
        <h2 class="page-section-heading text-center text-uppercase text-white mb-2">Our Security Posture Assessment</h2>
        <p class="text-center text-white-50 lead-narrow mb-5">
            A 360° review of your attack surface, mapped to industry standards (OWASP, PTES, NIST).
        </p>
        <div class="row g-4">
            @foreach ([
                ['fa-binoculars', 'Reconnaissance', 'Map the attack surface and gather intelligence on exposed assets.'],
                ['fa-radar', 'Scanning &amp; Enumeration', 'Identify open services, versions, and potential entry points.'],
                ['fa-bug', 'Exploitation', 'Safely validate which vulnerabilities are actually exploitable.'],
                ['fa-arrows-up-to-line', 'Privilege Escalation', 'Test lateral movement and depth of potential compromise.'],
                ['fa-file-shield', 'Reporting', 'Risk-rated findings with prioritized remediation guidance.'],
                ['fa-rotate', 'Re-testing', 'Verify that fixes hold and the risk is genuinely closed.'],
            ] as $p)
                <div class="col-md-6 col-lg-4">
                    <div class="cl-step">
                        <i class="fas {{ $p[0] }} text-teal mb-2" style="font-size:1.6rem;"></i>
                        <h5>{!! $p[1] !!}</h5>
                        <p class="mb-0 small">{{ $p[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Section 4 — Service Calculator --}}
<section class="page-section bg-light" id="calculator">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <p class="section-eyebrow mb-2">Pen Test Scoping</p>
                <h2 class="fw-bold text-secondary mb-3">Calculate Your VAPT Cost</h2>
                <p class="text-muted">
                    Pen test pricing depends on scope — number of applications, IPs, APIs, and the
                    depth of testing required. Tell us about your environment and we'll return a
                    tailored scope and quote.
                </p>
            </div>
            <div class="col-lg-7">
                <div class="cl-calc">
                    <h5 class="fw-bold mb-3">Scope your assessment</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">Test type</label>
                            <select class="form-select"><option>Web Application</option><option>Network / Infrastructure</option><option>Mobile App</option><option>API</option><option>Cloud</option></select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">Testing approach</label>
                            <select class="form-select"><option>Black Box</option><option>Grey Box</option><option>White Box</option></select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">Number of targets / assets</label>
                            <input class="form-control" type="number" placeholder="e.g. 5">
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

{{-- Section 5 — Matrix --}}
<section class="page-section" id="matrix">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Coverage Matrix</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">What Each Engagement Covers</h2>
        <div class="table-responsive">
            <table class="table table-bordered align-middle text-center cl-compare">
                <thead>
                    <tr><th class="text-start">Coverage</th><th>Standard</th><th>Advanced</th><th>Red Team</th></tr>
                </thead>
                <tbody>
                    @foreach ([
                        ['Automated Vulnerability Scanning', true, true, true],
                        ['Manual Exploitation', true, true, true],
                        ['Business Logic Testing', false, true, true],
                        ['Social Engineering / Phishing', false, false, true],
                        ['Lateral Movement Simulation', false, false, true],
                        ['Detailed Remediation Report', true, true, true],
                        ['Free Re-test', false, true, true],
                    ] as $row)
                        <tr>
                            <td class="text-start fw-semibold">{{ $row[0] }}</td>
                            @for ($i = 1; $i <= 3; $i++)
                                <td>@if ($row[$i])<i class="fas fa-check text-teal"></i>@else<i class="fas fa-minus text-muted"></i>@endif</td>
                            @endfor
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

{{-- Section 6 — Black / Grey / White Box (ref: underdefense.com) --}}
<section class="page-section bg-light" id="box-types">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Testing Approaches</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Black, Grey &amp; White Box</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="cl-box cl-box-black">
                    <div class="cl-box-cube"><i class="fas fa-cube"></i></div>
                    <h4 class="fw-bold">Black Box</h4>
                    <p class="small"><strong>Conditions:</strong> We try to penetrate the system and identify ways to harm your business, having minimum information about your company.</p>
                    <p class="small mb-0"><strong>Value:</strong> Simulates a real-world external attacker and identifies technical and human-related security issues.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cl-box cl-box-gray">
                    <div class="cl-box-cube"><i class="fas fa-cube"></i></div>
                    <h4 class="fw-bold">Grey Box</h4>
                    <p class="small"><strong>Conditions:</strong> We attack your business with general information about your infrastructure and system, including limited logins and access.</p>
                    <p class="small mb-0"><strong>Value:</strong> The golden mean between quality and price — cheaper and faster than a full black-box approach.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cl-box cl-box-white">
                    <div class="cl-box-cube"><i class="fas fa-cube"></i></div>
                    <h4 class="fw-bold">White Box</h4>
                    <p class="small"><strong>Conditions:</strong> We try to hack your organization with full knowledge of logins, passwords, application source, and architecture.</p>
                    <p class="small mb-0"><strong>Value:</strong> Uncovers hidden vulnerabilities that may go unnoticed in other types of pen tests.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 7 — Benefits --}}
<section class="page-section" id="benefits">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Why Cyberlog VAPT</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Benefits</h2>
        <div class="row g-4">
            @foreach ([
                ['fa-user-secret', 'Real attacker mindset', 'Certified offensive security experts who think and act like real adversaries.'],
                ['fa-list-check', 'Prioritized, validated findings', 'No noise — every reported risk is manually validated and risk-rated.'],
                ['fa-screwdriver-wrench', 'Actionable remediation', 'Clear, developer-friendly guidance to fix issues fast.'],
                ['fa-rotate', 'Free re-testing', 'We verify your fixes actually close the risk.'],
                ['fa-scale-balanced', 'Compliance-ready reports', 'Reports mapped to ISO 27001, PCI-DSS, and regulatory needs.'],
                ['fa-handshake', 'Trusted partner', 'A long-term relationship, not a one-off scan.'],
            ] as $b)
                <div class="col-md-6 col-lg-4">
                    <div class="cl-benefit">
                        <i class="fas {{ $b[0] }} mb-3"></i>
                        <h5 class="h6 fw-bold">{{ $b[1] }}</h5>
                        <p class="text-muted small mb-0">{{ $b[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Section 8 — System Success Story --}}
<section class="page-section bg-light" id="success">
    <div class="container">
        <div class="cl-case-card">
            <div class="cl-case-head">
                <span class="badge bg-primary mb-2">Financial Institute</span>
                <h3 class="mb-0">Bangladesh Finance</h3>
            </div>
            <div class="cl-case-body">
                <p class="text-muted">
                    Cyberlog conducted VAPT for Bangladesh Finance to identify, validate, and
                    prioritize exploitable security risks across its digital environment.
                </p>
                <div class="row g-4 mt-1">
                    <div class="col-md-6"><div class="cl-stat-num">360°</div><div class="cl-stat-label">Security Risk Review</div></div>
                    <div class="col-md-6"><div class="cl-stat-num">10+</div><div class="cl-stat-label">High-Priority Risks Validated</div></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 9 — Review --}}
@include('partials.reviews')

{{-- CTA before footer --}}
@include('partials.talk-to-expert', ['title' => 'Ready to test your defenses?', 'text' => 'Book a scoping call and get a tailored VAPT quote.'])

@endsection
