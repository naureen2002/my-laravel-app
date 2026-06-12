@extends('layouts.portfolio')

@section('title', 'Capacity Building & Security Awareness Training — Cyberlog')

@section('content')

{{-- Section 1 — Hero --}}
@include('partials.page-hero', [
    'eyebrow' => 'Capacity Building Training',
    'heading' => 'Train Your Team to Be Your <span class="text-teal">Human Firewall</span>',
    'subheading' => 'The human layer is often the most vulnerable. Cyberlog helps you turn your people into your greatest security asset through practical, role-based cybersecurity training.',
    'badges' => ['Awareness Training', 'Phishing Simulation', 'Role-based Curriculum'],
    'primaryCta' => ['label' => 'Book a Demo', 'url' => route('contact')],
    'secondaryCta' => ['label' => 'Watch Video', 'url' => '#approach'],
    'heroIcon' => 'fas fa-graduation-cap',
    'heroCaption' => 'Security awareness training',
])

{{-- Section 2 — Client --}}
@include('partials.clients')

{{-- Section 3 — Hero slide (ref: cira.ca) --}}
<section class="page-section cl-hero text-white" id="human-firewall">
    <div class="container text-center py-4">
        <h2 class="cl-hero-heading mb-3">Your people are your first line of defense</h2>
        <p class="lead text-white-50 lead-narrow mb-4">
            CIRA-style cybersecurity awareness training that's engaging, measurable, and built to
            change behavior — not just tick a compliance box.
        </p>
        <a class="btn btn-primary btn-xl text-white fw-bold" href="{{ route('contact') }}">Book a Demo</a>
    </div>
</section>

{{-- Section 4 — Our Way of Conducting Training --}}
<section class="page-section" id="approach">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Our Way of Conducting Training</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">How We Train Your Team</h2>
        <div class="row g-4">
            @foreach ([
                ['fa-clipboard-list', 'Assess', 'Baseline your team with a phishing simulation and knowledge assessment.'],
                ['fa-chalkboard-user', 'Train', 'Bite-sized, role-based modules covering real-world threats and best practices.'],
                ['fa-fish', 'Simulate', 'Ongoing phishing simulations that reinforce learning in context.'],
                ['fa-chart-simple', 'Measure', 'Track metrics that prove the training is actually reducing human cyber risk.'],
            ] as $w)
                <div class="col-md-6 col-lg-3">
                    <div class="cl-solution-card h-100 text-center">
                        <div class="cl-solution-icon mx-auto"><i class="fas {{ $w[0] }}"></i></div>
                        <h5 class="fw-bold">{{ $w[1] }}</h5>
                        <p class="text-muted small mb-0">{{ $w[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Section 5 — Impact statistics --}}
<section class="page-section bg-light" id="courses">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Professional Courses</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Learn Cyber Security From <span class="cl-title-accent">Industry Experts</span></h2>
        <div class="row g-4 justify-content-center">
            @foreach ([
                ['fa-user-secret', 'Certified Ethical Hacker (CEH)', 'Hands-on ethical hacking foundations for learners preparing to assess and secure real systems.', '15,000 BDT', '10,000 BDT', '33% off'],
                ['fa-headset', 'Certified SOC Analyst (CSA)', 'Practical SOC analyst training for monitoring, triage, alert handling, and security operations readiness.', '10,000 BDT', '7,000 BDT', '30% off'],
            ] as $course)
                <div class="col-md-6 col-lg-5">
                    <div class="cl-price-card h-100 d-flex flex-column text-start">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="cl-solution-icon mb-0"><i class="fas {{ $course[0] }}"></i></div>
                            <div>
                                <span class="badge bg-primary mb-2">{{ $course[5] }}</span>
                                <h4 class="fw-bold mb-0">{{ $course[1] }}</h4>
                            </div>
                        </div>
                        <p class="text-muted">{{ $course[2] }}</p>
                        <div class="mt-auto">
                            <div class="text-muted small text-decoration-line-through">{{ $course[3] }}</div>
                            <div class="cl-stat-num">{{ $course[4] }}</div>
                            <a class="btn btn-primary text-white fw-bold mt-3" href="{{ route('contact') }}">Ask About This Course</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="page-section bg-navy-soft text-white" id="impact">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <p class="section-eyebrow mb-2">Measurable Impact</p>
                <h2 class="fw-bold mb-3">Training that moves the needle</h2>
                <p class="text-white-50 mb-0">
                    Our capacity building program for the IT team of Bangladesh Investment Development
                    Authority (BIDA) delivered measurable gains in cybersecurity readiness and
                    institutional resilience.
                </p>
            </div>
            <div class="col-lg-7">
                <div class="row g-3">
                    @foreach ([
                        ['250%+', "Increase in employees' cybersecurity skills"],
                        ['12', 'Security areas reviewed'],
                        ['200+', 'Employees trained (Adcomm Limited)'],
                        ['85%', 'Reduction in phishing click-through'],
                    ] as $s)
                        <div class="col-6">
                            <div class="cl-step text-center">
                                <div class="cl-stat-num">{{ $s[0] }}</div>
                                <div class="text-white-50 small">{{ $s[1] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 6 — Client (compact strip) --}}
<section class="page-section" id="trusted">
    <div class="container text-center">
        <p class="section-eyebrow mb-4">Trusted by teams across government, finance &amp; enterprise</p>
        <div class="cl-client-strip">
            @foreach (['a2i', 'BIDA', 'Bangladesh Police', 'BUBT', 'Dhaka Stock Exchange', 'Adcomm Limited', 'NAPD'] as $c)
                <span class="cl-client-logo">{{ $c }}</span>
            @endforeach
        </div>
    </div>
</section>

{{-- Section 7 — Case Strategy (ref: cira.ca) --}}
<section class="page-section bg-light" id="get-started">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Get Started</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Get Your Staff Started With Training Today</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="cl-price-card featured h-100 d-flex flex-column">
                    <h4 class="fw-bold">Enterprise</h4>
                    <p class="text-muted">For 25+ employees with active directory or M365.</p>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>User sync with AD / Microsoft 365</li>
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Department-specific reports &amp; assignments</li>
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Multiple admins &amp; SSO</li>
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Designed to support large organizations</li>
                    </ul>
                    <a class="btn btn-primary text-white fw-bold mt-auto" href="{{ route('contact') }}">Get a Quote</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="cl-price-card h-100 d-flex flex-column">
                    <h4 class="fw-bold">Small Teams</h4>
                    <p class="text-muted">For teams of 1–25 employees.</p>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Simple set-up</li>
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Pre-configured curriculum &amp; workflows</li>
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Access to full course library</li>
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Designed with small teams in mind</li>
                    </ul>
                    <a class="btn btn-outline-secondary fw-bold mt-auto" href="{{ route('contact') }}">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 8 — Contact Us (ref: cira.ca) --}}
<section class="page-section" id="contact">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Us</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-envelope"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6"><input class="form-control" type="text" placeholder="First name *"></div>
                        <div class="col-md-6"><input class="form-control" type="text" placeholder="Last name *"></div>
                        <div class="col-md-6"><input class="form-control" type="text" placeholder="Company name *"></div>
                        <div class="col-md-6"><input class="form-control" type="text" placeholder="Province / City"></div>
                        <div class="col-md-6"><input class="form-control" type="email" placeholder="Email *"></div>
                        <div class="col-md-6"><input class="form-control" type="tel" placeholder="Phone number"></div>
                        <div class="col-12"><textarea class="form-control" rows="4" placeholder="Message"></textarea></div>
                        <div class="col-12"><button class="btn btn-primary btn-xl text-white fw-bold" type="submit">Send Message</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
