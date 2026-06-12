{{-- Home › Technical diagram — engagement process (ref: viserx.com)
     Six step cards orbiting a glowing central hub with connector lines; steps reveal
     one after another. Marketing steps in the reference are adapted to Cyberlog's
     security engagement methodology. blue/red/white. --}}
@php
    $steps = [
        ['no' => '01', 'title' => 'Understanding Requirements &amp; Goals', 'chips' => [['fa-magnifying-glass', 'Asset Discovery'], ['fa-bullseye', 'Scope Definition']]],
        ['no' => '02', 'title' => 'Risk Assessment &amp; Threat Modeling', 'chips' => [['fa-diagram-project', 'Threat Modeling'], ['fa-list-check', 'Risk Register']]],
        ['no' => '03', 'title' => 'Security Architecture &amp; Control Design', 'chips' => [['fa-sitemap', 'Control Design'], ['fa-file-shield', 'Policy Baseline']]],
        ['no' => '04', 'title' => 'Implementation, Hardening &amp; Integration', 'chips' => [['fa-screwdriver-wrench', 'System Hardening'], ['fa-plug', 'SIEM Integration']]],
        ['no' => '05', 'title' => '24/7 Monitoring, Detection &amp; Response', 'chips' => [['fa-wave-square', 'Threat Detection'], ['fa-hand-fist', 'Incident Response']]],
        ['no' => '06', 'title' => 'Reporting, Compliance &amp; Ongoing Support', 'chips' => [['fa-chart-line', 'Compliance Reports'], ['fa-headset', 'Advisory Support']]],
    ];
@endphp

<section class="page-section" id="process">
    <div class="container">

        <p class="section-eyebrow text-center mb-2" data-reveal>How We Work</p>
        {{-- TODO: copy — heading + subtext placeholders (not supplied in brief) --}}
        <h2 class="page-section-heading text-center text-secondary mb-2" data-reveal>Our Security <span class="cl-title-accent">Engagement Process</span></h2>
        <p class="text-center text-muted lead-narrow mb-5" data-reveal>
            A structured, repeatable methodology that takes you from risk discovery to continuous protection.
        </p>

        <div class="cl-td-diagram">
            {{-- connector lines (desktop) --}}
            <svg class="cl-td-lines" viewBox="0 0 1000 560" preserveAspectRatio="none" aria-hidden="true">
                <path d="M500,280 Q330,200 165,110" />
                <path d="M500,280 L500,110" />
                <path d="M500,280 Q670,200 835,110" />
                <path d="M500,280 Q330,360 165,450" />
                <path d="M500,280 L500,450" />
                <path d="M500,280 Q670,360 835,450" />
            </svg>

            {{-- central hub --}}
            <div class="cl-td-hub" aria-hidden="true">
                <div class="cl-td-hub-core"><i class="fas fa-shield-halved"></i></div>
            </div>

            {{-- step cards --}}
            <div class="cl-td-grid">
                @foreach ($steps as $step)
                    <article class="cl-td-card" data-reveal>
                        <span class="cl-td-step">Step - {{ $step['no'] }}</span>
                        <h5 class="cl-td-title">{!! $step['title'] !!}</h5>
                        <div class="cl-td-chips">
                            @foreach ($step['chips'] as $chip)
                                <span class="cl-td-chip"><i class="fas {{ $chip[0] }}"></i> {{ $chip[1] }}</span>
                            @endforeach
                        </div>
                    </article>
                @endforeach
            </div>
        </div>

    </div>
</section>

@push('styles')
<style>
    .cl-td-diagram { position: relative; }
    .cl-td-grid { display: grid; grid-template-columns: repeat(3, 1fr); column-gap: 1.5rem; row-gap: 1.5rem; position: relative; z-index: 2; }

    .cl-td-card {
        background: linear-gradient(160deg, var(--surface), var(--bg-alt));
        border: 1px solid var(--line); border-radius: 14px;
        padding: 1.4rem; min-height: 178px;
        transition: transform .25s var(--ease), border-color .25s var(--ease), box-shadow .25s var(--ease);
    }
    .cl-td-card:hover { transform: translateY(-4px); border-color: var(--blue-bright); box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.34); }
    .cl-td-step {
        display: inline-block; font-family: 'IBM Plex Mono', monospace; font-size: .72rem; letter-spacing: .1em;
        color: var(--warm-soft); background: var(--warm-dim); border: 1px solid rgba(255, 138, 0, 0.28);
        border-radius: 6px; padding: .2rem .65rem;
    }
    .cl-td-title { font-family: 'Chakra Petch', sans-serif; color: var(--white); font-size: 1.05rem; margin: .75rem 0 .9rem; line-height: 1.25; }
    .cl-td-card:hover .cl-td-title { color: var(--warm-soft); }
    .cl-td-chips { display: flex; flex-direction: column; gap: .5rem; }
    .cl-td-chip {
        display: inline-flex; align-items: center; gap: .5rem; align-self: flex-start;
        font-size: .76rem; color: var(--text);
        background: rgba(15, 27, 52, 0.6); border: 1px solid var(--line); border-radius: 8px; padding: .4rem .7rem;
    }
    .cl-td-chip i { color: var(--blue-bright); font-size: .8rem; }

    /* central hub */
    .cl-td-hub { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 3; width: 116px; height: 116px; display: none; }
    .cl-td-hub-core {
        width: 100%; height: 100%; border-radius: 50%;
        background: radial-gradient(circle at 50% 38%, var(--blue-bright), var(--bg-alt) 70%);
        border: 2px solid var(--blue); display: grid; place-items: center;
        box-shadow: 0 0 45px rgba(47, 107, 255, 0.55), inset 0 0 26px rgba(47, 107, 255, 0.35);
    }
    .cl-td-hub-core i { font-size: 2.4rem; color: #fff; filter: drop-shadow(0 0 10px var(--blue-bright)); }
    .cl-td-hub::before, .cl-td-hub::after {
        content: ""; position: absolute; inset: 0; border-radius: 50%;
        border: 1px solid rgba(47, 107, 255, 0.45); animation: clTdRing 3s ease-out infinite;
    }
    .cl-td-hub::after { animation-delay: 1.5s; }
    @keyframes clTdRing { 0% { transform: scale(1); opacity: .8; } 100% { transform: scale(1.9); opacity: 0; } }

    /* connectors */
    .cl-td-lines { position: absolute; inset: 0; width: 100%; height: 100%; z-index: 1; pointer-events: none; display: none; }
    .cl-td-lines path { fill: none; stroke: rgba(91, 140, 255, 0.35); stroke-width: 1.5; stroke-dasharray: 6 8; animation: clTdDash 16s linear infinite; }
    @keyframes clTdDash { to { stroke-dashoffset: -240; } }

    /* desktop: show hub + connectors, give the middle band room */
    @media (min-width: 992px) {
        .cl-td-grid { row-gap: 140px; }
        .cl-td-hub, .cl-td-lines { display: block; }
    }

    @media (prefers-reduced-motion: reduce) {
        .cl-td-hub::before, .cl-td-hub::after, .cl-td-lines path { animation: none !important; }
    }
</style>
@endpush
