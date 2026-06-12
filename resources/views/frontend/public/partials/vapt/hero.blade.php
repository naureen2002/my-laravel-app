<header class="cl-hero cl-vapt-hero" id="page-top">
    <canvas class="cl-vapt-net" data-net aria-hidden="true"></canvas>

    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <p class="section-eyebrow mb-3" data-reveal data-hero>Vulnerability Assessment & Penetration Testing</p>
                <h1 class="cl-vapt-h mb-3" data-reveal data-hero>
                    Find and Fix Risks <span>Before Attackers Do</span>
                </h1>
                <p class="lead text-muted mb-4" data-reveal data-hero>
                    Cyberlog validates exploitable weaknesses across web applications, APIs, mobile,
                    network, cloud, and infrastructure so your team can close real attack paths with
                    confidence.
                </p>

                <div class="d-flex flex-wrap gap-2 mb-4" data-reveal data-hero>
                    <span class="cl-vapt-chip"><i class="fas fa-cube"></i>Black Box</span>
                    <span class="cl-vapt-chip"><i class="fas fa-adjust"></i>Grey Box</span>
                    <span class="cl-vapt-chip"><i class="fas fa-code"></i>White Box</span>
                    <span class="cl-vapt-chip"><i class="fas fa-rotate"></i>Retesting</span>
                </div>

                <div class="d-flex flex-wrap gap-3" data-reveal data-hero>
                    <a class="btn btn-alert btn-xl text-white fw-bold" href="{{ route('contact') }}">Scope a VAPT</a>
                    <a class="btn btn-outline-light btn-xl" href="#calculator"><i class="fas fa-calculator me-1"></i> Estimate Scope</a>
                </div>
            </div>

            <div class="col-lg-6" data-reveal data-hero>
                <div class="cl-vapt-console">
                    <div class="cl-vapt-bar"><span class="cl-vapt-dot"></span> VAPT // ACTIVE ASSESSMENT</div>

                    <div class="cl-vapt-target">
                        <div class="cl-vapt-radar">
                            <span></span><span></span><span></span>
                            <i class="fas fa-bug"></i>
                        </div>
                        <div>
                            <strong>Attack path validation</strong>
                            <p>External exposure, authentication bypass, privilege escalation, and data-access impact.</p>
                        </div>
                    </div>

                    <div class="cl-vapt-progress">
                        @foreach (['Recon', 'Scan', 'Exploit', 'Report', 'Retest'] as $i => $step)
                            <div class="{{ $i < 3 ? 'active' : '' }}">
                                <b>{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</b>
                                <span>{{ $step }}</span>
                            </div>
                        @endforeach
                    </div>

                    <div class="cl-vapt-feed" id="vaptFeed">
                        <div><span>[VALIDATED]</span> SQL injection impact confirmed</div>
                        <div><span>[MAPPED]</span> OWASP A01 broken access control</div>
                        <div><span>[QUEUED]</span> remediation evidence review</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@push('styles')
<style>
    .cl-vapt-hero {
        position: relative;
        overflow: hidden;
        padding-top: 8rem;
        padding-bottom: 4.5rem;
        background:
            radial-gradient(860px 520px at 80% 8%, rgba(228, 31, 61, 0.15), transparent 62%),
            radial-gradient(760px 480px at 4% 94%, rgba(109, 156, 255, 0.1), transparent 66%),
            linear-gradient(180deg, rgba(7, 17, 31, 0.98), rgba(5, 12, 23, 0.98));
    }
    .cl-vapt-net {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
    }
    .cl-vapt-hero .container {
        position: relative;
        z-index: 2;
    }
    .cl-vapt-h {
        font-family: 'Chakra Petch', sans-serif;
        font-weight: 700;
        font-size: clamp(2.25rem, 5vw, 4.35rem);
        color: var(--white);
        line-height: .98;
    }
    .cl-vapt-h span {
        display: inline-block;
        color: var(--warm-soft);
        text-shadow: 0 0 26px rgba(255, 138, 0, .28);
    }
    .cl-vapt-chip {
        display: inline-flex;
        align-items: center;
        gap: .5rem;
        font-family: 'IBM Plex Mono', monospace;
        font-size: .8rem;
        color: var(--white);
        background: rgba(16, 31, 58, .66);
        border: 1px solid var(--line);
        border-left: 3px solid var(--red-soft);
        border-radius: var(--r);
        padding: .55rem .9rem;
    }
    .cl-vapt-chip i {
        color: var(--warm-soft);
    }
    .cl-vapt-console {
        overflow: hidden;
        border: 1.5px solid transparent;
        border-radius: 10px;
        background:
            linear-gradient(160deg, #0b1430, #070f1d) padding-box,
            linear-gradient(120deg, var(--red-soft), var(--blue-bright)) border-box;
        box-shadow: 0 30px 90px rgba(0, 0, 0, .5), 0 0 45px rgba(228, 31, 61, .15);
    }
    .cl-vapt-bar {
        display: flex;
        align-items: center;
        gap: .55rem;
        padding: .75rem 1rem;
        border-bottom: 1px solid var(--line);
        color: var(--muted);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .72rem;
        letter-spacing: .1em;
    }
    .cl-vapt-dot {
        width: 9px;
        height: 9px;
        border-radius: 50%;
        background: var(--red-soft);
        animation: clVaptPulse 1.6s ease-in-out infinite;
    }
    @keyframes clVaptPulse {
        50% { box-shadow: 0 0 0 7px rgba(228, 31, 61, 0); }
        0%, 100% { box-shadow: 0 0 0 0 rgba(228, 31, 61, .5); }
    }
    .cl-vapt-target {
        display: grid;
        grid-template-columns: 170px minmax(0, 1fr);
        gap: 1.25rem;
        align-items: center;
        padding: 1.35rem;
        border-bottom: 1px solid var(--line);
    }
    .cl-vapt-target strong {
        color: var(--white);
        font-family: 'Chakra Petch', sans-serif;
        font-size: 1.35rem;
    }
    .cl-vapt-target p {
        margin: .4rem 0 0;
        color: var(--muted);
        font-size: .9rem;
        line-height: 1.55;
    }
    .cl-vapt-radar {
        position: relative;
        width: 150px;
        aspect-ratio: 1;
        display: grid;
        place-items: center;
        margin: auto;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(255, 72, 101, .18), rgba(109, 156, 255, .05) 58%, transparent 60%);
    }
    .cl-vapt-radar span {
        position: absolute;
        inset: calc(var(--i, 0) * 18px);
        border: 1px solid rgba(255, 72, 101, .22);
        border-radius: 50%;
    }
    .cl-vapt-radar span:nth-child(1) { --i: 0; }
    .cl-vapt-radar span:nth-child(2) { --i: 1; border-color: rgba(109, 156, 255, .22); }
    .cl-vapt-radar span:nth-child(3) { --i: 2; }
    .cl-vapt-radar i {
        color: var(--warm-soft);
        font-size: 2.2rem;
        filter: drop-shadow(0 0 18px rgba(255, 138, 0, .35));
    }
    .cl-vapt-progress {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        border-bottom: 1px solid var(--line);
    }
    .cl-vapt-progress div {
        min-height: 82px;
        padding: .85rem .65rem;
        border-right: 1px solid var(--line);
        background: rgba(16, 31, 58, .48);
    }
    .cl-vapt-progress div:last-child { border-right: 0; }
    .cl-vapt-progress b,
    .cl-vapt-progress span {
        display: block;
        font-family: 'IBM Plex Mono', monospace;
    }
    .cl-vapt-progress b {
        color: var(--red-soft);
        font-size: .75rem;
    }
    .cl-vapt-progress span {
        color: var(--text);
        margin-top: .55rem;
        font-size: .78rem;
    }
    .cl-vapt-progress .active {
        background: rgba(228, 31, 61, .12);
    }
    .cl-vapt-feed {
        padding: .85rem 1rem 1.05rem;
        font-family: 'IBM Plex Mono', monospace;
        font-size: .72rem;
        color: var(--muted);
        line-height: 1.85;
    }
    .cl-vapt-feed span {
        color: var(--warm-soft);
        margin-right: .45rem;
    }

    @media (max-width: 575.98px) {
        .cl-vapt-target {
            grid-template-columns: 1fr;
            text-align: center;
        }
        .cl-vapt-progress {
            grid-template-columns: 1fr;
        }
        .cl-vapt-progress div {
            min-height: 0;
            border-right: 0;
            border-bottom: 1px solid var(--line);
        }
    }
    @media (prefers-reduced-motion: reduce) {
        .cl-vapt-dot {
            animation: none !important;
        }
    }
</style>
@endpush
