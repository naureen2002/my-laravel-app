{{-- Home › Emerging threats / continuous risk signals (ref: riskledger.com)
     Living particle network, an "emerging threat" intel card whose rows reveal one
     after another, and floating status chips. Fits Cyberlog's Threat Intelligence
     service. blue/red/white. --}}

<section class="page-section cl-th-section" id="risk-signals">

    <canvas class="cl-th-bg" data-net aria-hidden="true"></canvas>

    {{-- floating status chips (desktop, decorative) --}}
    <div class="cl-th-floats" aria-hidden="true">
        <span class="cl-th-chip"><i class="fas fa-screwdriver-wrench"></i> Client is remediating</span>
        <span class="cl-th-chip"><i class="fas fa-magnifying-glass"></i> Client is investigating</span>
    </div>

    <div class="container">
        <div class="row align-items-center g-5">

            {{-- Left — copy --}}
            <div class="col-lg-5">
                <p class="section-eyebrow mb-3" data-reveal>Threat Intelligence</p>
                {{-- TODO: copy — heading + paragraph are placeholders (not supplied in brief) --}}
                <h2 class="cl-assess-h mb-3" data-reveal>
                    Stay ahead of emerging threats<br>
                    <span class="accent">with continuous risk signals</span>
                </h2>
                <p class="text-muted" data-reveal>
                    Stay on top of the latest emerging threats, their blast radius, available
                    patches, and the exact steps to take if one of your systems has been breached.
                </p>
            </div>

            {{-- Right — emerging-threat intel card --}}
            <div class="col-lg-7">
                <div class="cl-th-card" id="clThCard">

                    <div class="cl-th-eyebrow cl-th-line"><i class="fas fa-triangle-exclamation"></i> Emerging threat</div>
                    <h3 class="cl-th-title cl-th-line">React2Shell</h3>
                    <p class="cl-th-desc cl-th-line">A critical vulnerability has been identified in the JavaScript library React.</p>

                    <hr class="cl-th-div">

                    <div class="cl-th-grid">
                        <span class="cl-th-pill blue cl-th-line"><i class="fas fa-magnifying-glass"></i> 12 investigating</span>
                        <span class="cl-th-pill red cl-th-line"><i class="fas fa-screwdriver-wrench"></i> 4 remediating</span>
                        <span class="cl-th-pill done cl-th-line"><i class="fas fa-circle-check"></i> 5 resolved</span>
                        <span class="cl-th-pill mut cl-th-line"><i class="fas fa-shield-halved"></i> 6 unaffected</span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-th-section { position: relative; overflow: hidden; }
    .cl-th-bg { position: absolute; inset: 0; width: 100%; height: 100%; z-index: 0; }
    .cl-th-section .container { position: relative; z-index: 2; }

    .cl-th-card {
        position: relative; border-radius: 16px; padding: 1.85rem;
        background: linear-gradient(160deg, var(--surface), var(--bg-alt)) padding-box,
                    linear-gradient(120deg, var(--blue), #6f5bff) border-box;
        border: 1.5px solid transparent;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.42), 0 0 34px rgba(47, 107, 255, 0.12);
    }
    .cl-th-eyebrow { display: flex; align-items: center; gap: .5rem; font-family: 'IBM Plex Mono', monospace; font-size: .78rem; letter-spacing: .1em; text-transform: uppercase; color: var(--red-soft); }
    .cl-th-title { font-family: 'Chakra Petch', sans-serif; font-size: 1.7rem; font-weight: 700; color: var(--white); margin: .55rem 0 .5rem; }
    .cl-th-desc { color: var(--muted); font-size: .95rem; margin: 0; max-width: 30rem; }
    .cl-th-div { border: 0; border-top: 1px solid var(--line); opacity: 1; margin: 1.25rem 0; }

    .cl-th-grid { display: grid; grid-template-columns: 1fr 1fr; gap: .85rem; }
    @media (max-width: 575.98px) { .cl-th-grid { grid-template-columns: 1fr; } }
    .cl-th-pill {
        display: flex; align-items: center; gap: .6rem;
        padding: .75rem 1rem; border-radius: 10px;
        border: 1px solid var(--line); border-left: 3px solid var(--line);
        background: rgba(15, 27, 52, 0.5); color: var(--text); font-size: .92rem; font-weight: 500;
    }
    .cl-th-pill.blue { border-left-color: var(--blue-bright); }
    .cl-th-pill.blue i { color: var(--blue-bright); }
    .cl-th-pill.red { border-left-color: var(--red); }
    .cl-th-pill.red i { color: var(--red-soft); }
    .cl-th-pill.done { border-left-color: #8fb6ff; }
    .cl-th-pill.done i { color: #8fb6ff; }
    .cl-th-pill.mut { border-left-color: var(--muted); }
    .cl-th-pill.mut i { color: var(--muted); }

    /* floating chips */
    .cl-th-floats { position: absolute; inset: 0; z-index: 3; pointer-events: none; }
    @media (max-width: 991.98px) { .cl-th-floats { display: none; } }
    .cl-th-chip {
        position: absolute; display: inline-flex; align-items: center; gap: .5rem; white-space: nowrap;
        font-size: .85rem; color: var(--white); font-weight: 500;
        background: linear-gradient(180deg, rgba(15, 23, 50, 0.94), rgba(11, 16, 38, 0.94));
        border: 1px solid rgba(47, 107, 255, 0.45); border-radius: 10px; padding: .55rem .95rem;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.38);
        opacity: 0; animation: clThFloat 6s ease-in-out infinite;
    }
    .cl-th-chip.shown { opacity: 1; transition: opacity .6s var(--ease); }
    .cl-th-chip i { color: var(--blue-bright); }
    .cl-th-chip:nth-child(1) { bottom: 16%; left: 22%; }
    .cl-th-chip:nth-child(2) { bottom: 28%; right: 6%; animation-delay: 1.4s; }
    @keyframes clThFloat { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-9px); } }

    /* sequential reveal */
    .cl-th-line { opacity: 0; transform: translateY(16px); transition: opacity .5s var(--ease), transform .5s var(--ease); }
    .cl-th-line.in { opacity: 1; transform: none; }
    @media (prefers-reduced-motion: reduce) {
        .cl-th-line { opacity: 1 !important; transform: none !important; }
        .cl-th-chip { opacity: 1 !important; }
    }
</style>
@endpush

@push('scripts')
<script>
(function () {
    var section = document.getElementById('risk-signals');
    if (!section) return;
    var card = document.getElementById('clThCard');
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var lines = card ? [].slice.call(card.querySelectorAll('.cl-th-line')) : [];
    var chips = [].slice.call(section.querySelectorAll('.cl-th-chip'));

    function revealAll() {
        lines.forEach(function (l, i) { setTimeout(function () { l.classList.add('in'); }, i * 160); });
        chips.forEach(function (c, i) { setTimeout(function () { c.classList.add('shown'); }, 400 + i * 260); });
    }
    if (reduce || !('IntersectionObserver' in window)) {
        lines.forEach(function (l) { l.classList.add('in'); });
        chips.forEach(function (c) { c.classList.add('shown'); });
        return;
    }
    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) { if (e.isIntersecting) { revealAll(); io.disconnect(); } });
    }, { threshold: 0.25 });
    io.observe(card || section);
})();
</script>
@endpush
