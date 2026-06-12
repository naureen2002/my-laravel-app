@php
    $pillars = [
        ['icon' => 'fa-route', 'title' => 'Security Roadmap', 'text' => 'Quarterly priorities, risk decisions, and measurable maturity targets.'],
        ['icon' => 'fa-file-shield', 'title' => 'GRC & Compliance', 'text' => 'Policies, control mapping, ISO readiness, audit response, and evidence tracking.'],
        ['icon' => 'fa-satellite-dish', 'title' => 'SOC & Threat Oversight', 'text' => 'Detection alignment, escalation paths, threat intelligence, and response leadership.'],
        ['icon' => 'fa-user-tie', 'title' => 'Executive Reporting', 'text' => 'Board-ready cyber risk narratives with practical next-step decisions.'],
    ];
@endphp

<section class="page-section cl-vciso-product" id="vciso-platform">
    <div class="container">
        <div class="cl-vciso-product-card">
            <div class="cl-vciso-product-copy">
                <span class="cl-vciso-badge"><i class="fas fa-shield-halved"></i> vCISO Operating Model</span>
                <h2>
                    A Security Leadership Layer for Every Critical Decision
                </h2>
                <p class="text-muted">
                    We run vCISO as an operating system for cyber leadership: risk discovery,
                    executive planning, compliance governance, technical validation, and response
                    readiness all connected through a single security program rhythm.
                </p>

                <div class="cl-vciso-checks">
                    <span><i class="fas fa-check"></i> Risk register and remediation ownership</span>
                    <span><i class="fas fa-check"></i> Monthly executive security reviews</span>
                    <span><i class="fas fa-check"></i> ISO 27001, audit, and policy guidance</span>
                    <span><i class="fas fa-check"></i> SOC, VAPT, and incident-readiness coordination</span>
                </div>

                <a class="btn cl-vciso-primary" href="{{ route('contact') }}">
                    <i class="fas fa-calendar-check me-2"></i>Book vCISO Consultation
                </a>
            </div>

            <div class="cl-vciso-product-visual" aria-label="vCISO dashboard preview">
                <div class="cl-vciso-console">
                    <div class="cl-vciso-console-top">
                        <span></span><span></span><span></span>
                        <strong>Cyberlog vCISO Command</strong>
                    </div>
                    <div class="cl-vciso-console-grid">
                        <div class="cl-vciso-widget cl-vciso-score">
                            <span>Risk Posture</span>
                            <strong>72</strong>
                            <small>Improving</small>
                        </div>
                        <div class="cl-vciso-widget">
                            <span>Open Risks</span>
                            <strong>18</strong>
                            <small>6 critical paths assigned</small>
                        </div>
                        <div class="cl-vciso-widget">
                            <span>Control Coverage</span>
                            <div class="cl-vciso-bars">
                                <i style="--h: 72%;"></i>
                                <i style="--h: 46%;"></i>
                                <i style="--h: 84%;"></i>
                                <i style="--h: 62%;"></i>
                                <i style="--h: 76%;"></i>
                            </div>
                        </div>
                        <div class="cl-vciso-widget cl-vciso-wide">
                            <span>Quarter Roadmap</span>
                            <div class="cl-vciso-roadmap">
                                <b>Assess</b>
                                <b>Prioritize</b>
                                <b>Execute</b>
                                <b>Report</b>
                            </div>
                        </div>
                        <div class="cl-vciso-widget cl-vciso-wide">
                            <span>Executive Security Brief</span>
                            <p>Top risks mapped to business impact, control gaps, owners, due dates, and next board decision.</p>
                        </div>
                    </div>
                </div>

                <div class="cl-vciso-float cl-vciso-float-one">
                    <i class="fas fa-lock"></i>
                    <span>Policy Updated</span>
                </div>
                <div class="cl-vciso-float cl-vciso-float-two">
                    <i class="fas fa-bolt"></i>
                    <span>Incident Ready</span>
                </div>
            </div>
        </div>

        <div class="cl-vciso-pillars">
            @foreach ($pillars as $pillar)
                <article class="cl-vciso-pillar" data-reveal>
                    <i class="fas {{ $pillar['icon'] }}"></i>
                    <h3>{{ $pillar['title'] }}</h3>
                    <p>{{ $pillar['text'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-vciso-product {
        position: relative;
        overflow: hidden;
        background:
            radial-gradient(780px 420px at 12% 12%, rgba(109, 156, 255, 0.08), transparent 62%),
            radial-gradient(740px 420px at 92% 92%, rgba(228, 31, 61, 0.11), transparent 62%),
            linear-gradient(180deg, rgba(5, 12, 23, 0.96), rgba(7, 17, 31, 1));
    }
    .cl-vciso-product-card {
        display: grid;
        grid-template-columns: minmax(0, .9fr) minmax(360px, 1.1fr);
        gap: 2.4rem;
        align-items: center;
        padding: clamp(1.25rem, 3.2vw, 2.35rem);
        border: 1px solid var(--line);
        border-radius: 8px;
        background:
            linear-gradient(135deg, rgba(16, 31, 58, 0.88), rgba(7, 17, 31, 0.96)),
            radial-gradient(600px 260px at 80% 18%, rgba(255, 72, 101, 0.14), transparent 62%);
        box-shadow: 0 34px 90px rgba(0, 0, 0, 0.46);
    }
    .cl-vciso-badge {
        display: inline-flex;
        align-items: center;
        gap: .48rem;
        margin-bottom: 1rem;
        padding: .42rem .72rem;
        border-radius: 50rem;
        color: var(--warm-soft);
        background: rgba(255, 72, 101, 0.11);
        border: 1px solid rgba(255, 72, 101, 0.2);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .72rem;
        letter-spacing: .08em;
        text-transform: uppercase;
    }
    .cl-vciso-product-copy h2 {
        max-width: 720px;
        margin-bottom: 1rem;
        font-size: clamp(2rem, 4.4vw, 4rem);
        line-height: .98;
    }
    .cl-vciso-checks {
        display: grid;
        gap: .72rem;
        margin: 1.45rem 0 1.7rem;
    }
    .cl-vciso-checks span {
        display: flex;
        gap: .65rem;
        align-items: flex-start;
        color: var(--text);
        font-size: .94rem;
    }
    .cl-vciso-checks i {
        margin-top: .18rem;
        color: var(--warm-soft);
    }
    .cl-vciso-product-visual {
        position: relative;
        min-height: 430px;
        display: grid;
        place-items: center;
        isolation: isolate;
    }
    .cl-vciso-product-visual::before {
        content: "";
        position: absolute;
        width: 78%;
        aspect-ratio: 1;
        border-radius: 50%;
        background:
            radial-gradient(circle, rgba(255, 72, 101, 0.16), transparent 42%),
            radial-gradient(circle, rgba(109, 156, 255, 0.1), transparent 62%);
        filter: blur(3px);
        z-index: -1;
    }
    .cl-vciso-console {
        width: min(100%, 620px);
        border: 1px solid rgba(130, 165, 220, 0.22);
        border-radius: 10px;
        overflow: hidden;
        background: rgba(5, 12, 23, 0.9);
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.55);
        transform: perspective(1200px) rotateY(-7deg) rotateX(2deg);
    }
    .cl-vciso-console-top {
        display: flex;
        align-items: center;
        gap: .45rem;
        padding: .78rem .9rem;
        border-bottom: 1px solid var(--line);
        background: rgba(255, 255, 255, 0.035);
    }
    .cl-vciso-console-top span {
        width: 9px;
        height: 9px;
        border-radius: 50%;
        background: var(--red-soft);
        opacity: .72;
    }
    .cl-vciso-console-top span:nth-child(2) { background: var(--warm-soft); }
    .cl-vciso-console-top span:nth-child(3) { background: var(--blue-bright); }
    .cl-vciso-console-top strong {
        margin-left: .55rem;
        color: var(--muted);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .76rem;
        letter-spacing: .08em;
        text-transform: uppercase;
    }
    .cl-vciso-console-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: .85rem;
        padding: 1rem;
    }
    .cl-vciso-widget {
        min-height: 116px;
        padding: .9rem;
        border: 1px solid var(--line);
        border-radius: 6px;
        background: rgba(16, 31, 58, 0.74);
    }
    .cl-vciso-widget span,
    .cl-vciso-widget small {
        display: block;
        color: var(--muted);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .68rem;
        letter-spacing: .08em;
        text-transform: uppercase;
    }
    .cl-vciso-widget strong {
        display: block;
        margin: .55rem 0 .22rem;
        color: var(--white);
        font-family: 'Chakra Petch', sans-serif;
        font-size: 2.3rem;
        line-height: 1;
    }
    .cl-vciso-score strong {
        color: var(--warm-soft);
    }
    .cl-vciso-wide {
        grid-column: span 3;
        min-height: 92px;
    }
    .cl-vciso-wide p {
        margin: .65rem 0 0;
        color: var(--text);
        font-size: .86rem;
        line-height: 1.55;
    }
    .cl-vciso-bars {
        height: 68px;
        display: flex;
        align-items: end;
        gap: .42rem;
        margin-top: .75rem;
    }
    .cl-vciso-bars i {
        flex: 1;
        height: var(--h);
        border-radius: 4px 4px 0 0;
        background: linear-gradient(180deg, var(--red-soft), var(--blue-bright));
        opacity: .86;
    }
    .cl-vciso-roadmap {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: .55rem;
        margin-top: .85rem;
    }
    .cl-vciso-roadmap b {
        color: var(--text);
        border: 1px solid rgba(255, 191, 27, 0.2);
        border-radius: 5px;
        padding: .55rem .35rem;
        text-align: center;
        font-family: 'IBM Plex Mono', monospace;
        font-size: .7rem;
        font-weight: 600;
        background: rgba(255, 72, 101, 0.08);
    }
    .cl-vciso-float {
        position: absolute;
        display: inline-flex;
        align-items: center;
        gap: .55rem;
        padding: .72rem .85rem;
        border: 1px solid var(--line);
        border-radius: 6px;
        background: rgba(7, 17, 31, 0.84);
        color: var(--text);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .72rem;
        box-shadow: 0 18px 38px rgba(0, 0, 0, 0.38);
        animation: clVcisoFloat 5.4s ease-in-out infinite;
    }
    .cl-vciso-float i {
        color: var(--warm-soft);
    }
    .cl-vciso-float-one {
        left: 0;
        bottom: 18%;
    }
    .cl-vciso-float-two {
        right: 0;
        top: 18%;
        animation-delay: 1.4s;
    }
    @keyframes clVcisoFloat {
        50% { transform: translateY(-12px); }
    }
    .cl-vciso-pillars {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem;
        margin-top: 1rem;
    }
    .cl-vciso-pillar {
        min-height: 100%;
        padding: 1.15rem;
        border: 1px solid var(--line);
        border-radius: 8px;
        background: rgba(16, 31, 58, 0.68);
    }
    .cl-vciso-pillar i {
        color: var(--warm-soft);
        font-size: 1.3rem;
        margin-bottom: .85rem;
    }
    .cl-vciso-pillar h3 {
        margin-bottom: .45rem;
        font-size: 1rem;
    }
    .cl-vciso-pillar p {
        margin: 0;
        color: var(--muted);
        font-size: .86rem;
        line-height: 1.55;
    }

    @media (max-width: 991.98px) {
        .cl-vciso-product-card {
            grid-template-columns: 1fr;
        }
        .cl-vciso-product-visual {
            min-height: 360px;
        }
        .cl-vciso-console {
            transform: none;
        }
        .cl-vciso-pillars {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 575.98px) {
        .cl-vciso-product-visual {
            min-height: 0;
            display: block;
        }
        .cl-vciso-console-grid {
            grid-template-columns: 1fr;
        }
        .cl-vciso-wide {
            grid-column: auto;
        }
        .cl-vciso-roadmap {
            grid-template-columns: 1fr 1fr;
        }
        .cl-vciso-float {
            position: static;
            margin-top: .75rem;
            width: 100%;
        }
        .cl-vciso-pillars {
            grid-template-columns: 1fr;
        }
    }
    @media (prefers-reduced-motion: reduce) {
        .cl-vciso-float {
            animation: none !important;
        }
    }
</style>
@endpush
