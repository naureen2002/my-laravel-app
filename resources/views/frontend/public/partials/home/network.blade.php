{{-- Home › Network / attack-surface panel (ref: riskledger.com "as connections grow")
     Living particle-network background, floating red risk chips, and a posture card
     (4 stats → two status rows) whose rows reveal one after another. Content adapted
     to Cyberlog's attack-surface theme; blue/red/white. --}}

<section class="page-section cl-net-section" id="network">

    <canvas class="cl-net-bg" data-net aria-hidden="true"></canvas>

    {{-- floating risk chips (desktop, decorative) --}}
    <div class="cl-net-floats" aria-hidden="true">
        <span class="cl-net-chip"><i class="fas fa-circle-xmark"></i> Critical risk found</span>
        <span class="cl-net-chip"><i class="fas fa-circle-xmark"></i> Critical risk found</span>
        <span class="cl-net-chip"><i class="fas fa-circle-xmark"></i> Critical risk found</span>
    </div>

    <div class="container">
        <div class="row align-items-center g-5">

            {{-- Left — copy --}}
            <div class="col-lg-5">
                <p class="section-eyebrow mb-3" data-reveal>Attack Surface</p>
                {{-- TODO: copy — heading + paragraph are placeholders (not supplied in brief) --}}
                <h2 class="cl-assess-h mb-3" data-reveal>
                    As your environment grows,<br>
                    <span class="accent">the risks reveal themselves</span>
                </h2>
                <p class="text-muted" data-reveal>
                    See your full attack surface as it truly exists — every endpoint, server,
                    application, and cloud asset mapped onto one living model. Identify where risk
                    concentrates before attackers do.
                </p>
            </div>

            {{-- Right — posture card --}}
            <div class="col-lg-7">
                <div class="cl-net-card" id="clNetCard">

                    {{-- line 1: stats --}}
                    <div class="cl-net-stats cl-net-line">
                        <div><div class="cl-net-num" data-count="45">45</div><div class="cl-net-lbl">Endpoints</div></div>
                        <div><div class="cl-net-num" data-count="56">56</div><div class="cl-net-lbl">Servers</div></div>
                        <div><div class="cl-net-num" data-count="90">90</div><div class="cl-net-lbl">Applications</div></div>
                        <div><div class="cl-net-num" data-count="102">102</div><div class="cl-net-lbl">Cloud Assets</div></div>
                    </div>

                    <hr class="cl-net-divln">

                    {{-- line 2 --}}
                    <div class="cl-net-row cl-net-line">
                        <i class="fas fa-shield-halved"></i>
                        <span><strong>6</strong> potential concentration risks found</span>
                    </div>

                    {{-- line 3 --}}
                    <div class="cl-net-row cl-net-line">
                        <i class="fas fa-chart-pie"></i>
                        <span><strong>9</strong> assets have under 80% compliance</span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-net-section { position: relative; overflow: hidden; }
    .cl-net-bg { position: absolute; inset: 0; width: 100%; height: 100%; z-index: 0; }
    .cl-net-section .container { position: relative; z-index: 2; }

    .cl-net-card {
        position: relative; border-radius: 16px; padding: 1.75rem;
        background: linear-gradient(160deg, var(--surface), var(--bg-alt)) padding-box,
                    linear-gradient(120deg, var(--blue), #6f5bff) border-box;
        border: 1.5px solid transparent;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.42), 0 0 34px rgba(47, 107, 255, 0.12);
    }

    .cl-net-stats { display: flex; flex-wrap: wrap; }
    .cl-net-stats > div { flex: 1 1 25%; padding: .25rem 1rem; border-right: 1px solid var(--line); }
    .cl-net-stats > div:last-child { border-right: 0; }
    .cl-net-num {
        font-family: 'Chakra Petch', sans-serif; font-weight: 700; font-size: 2rem; line-height: 1;
        background: var(--grad); -webkit-background-clip: text; background-clip: text;
        -webkit-text-fill-color: transparent; color: transparent;
    }
    .cl-net-lbl { font-family: 'IBM Plex Mono', monospace; font-size: .7rem; letter-spacing: .04em; color: var(--muted); margin-top: .35rem; }
    @media (max-width: 575.98px) {
        .cl-net-stats > div { flex: 0 0 50%; margin-bottom: .85rem; }
        .cl-net-stats > div:nth-child(2) { border-right: 0; }
    }

    .cl-net-divln { border: 0; border-top: 1px solid var(--line); opacity: 1; margin: 1.2rem 0; }
    .cl-net-row {
        display: flex; align-items: center; gap: .65rem;
        border: 1px solid var(--line); border-radius: 10px;
        padding: .85rem 1rem; margin-top: .85rem;
        color: var(--text); background: rgba(15, 27, 52, 0.4);
    }
    .cl-net-row i { color: var(--red-soft); }
    .cl-net-row strong { color: var(--white); }

    /* floating chips */
    .cl-net-floats { position: absolute; inset: 0; z-index: 3; pointer-events: none; }
    @media (max-width: 991.98px) { .cl-net-floats { display: none; } }
    .cl-net-chip {
        position: absolute; display: inline-flex; align-items: center; gap: .5rem; white-space: nowrap;
        font-size: .85rem; color: var(--white); font-weight: 500;
        background: linear-gradient(180deg, rgba(45, 14, 24, 0.92), rgba(26, 11, 17, 0.92));
        border: 1px solid rgba(255, 47, 85, 0.5); border-radius: 10px; padding: .55rem .95rem;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.38);
        opacity: 0; animation: clNetFloat 6s ease-in-out infinite;
    }
    .cl-net-chip.shown { opacity: 1; transition: opacity .6s var(--ease); }
    .cl-net-chip i { color: var(--red); }
    .cl-net-chip:nth-child(1) { top: 9%;  right: 6%; }
    .cl-net-chip:nth-child(2) { top: 40%; left: 30%; animation-delay: 1.2s; }
    .cl-net-chip:nth-child(3) { bottom: 9%; right: 16%; animation-delay: 2.2s; }
    @keyframes clNetFloat { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-9px); } }

    /* sequential "conversation" reveal */
    .cl-net-line { opacity: 0; transform: translateY(16px); transition: opacity .55s var(--ease), transform .55s var(--ease); }
    .cl-net-line.in { opacity: 1; transform: none; }
    @media (prefers-reduced-motion: reduce) {
        .cl-net-line { opacity: 1 !important; transform: none !important; }
        .cl-net-chip { opacity: 1 !important; }
    }
</style>
@endpush

@push('scripts')
<script>
(function () {
    var section = document.getElementById('network');
    if (!section) return;
    var card = document.getElementById('clNetCard');
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var lines = card ? [].slice.call(card.querySelectorAll('.cl-net-line')) : [];
    var chips = [].slice.call(section.querySelectorAll('.cl-net-chip'));

    function revealAll() {
        lines.forEach(function (l, i) { setTimeout(function () { l.classList.add('in'); }, i * 220); });
        chips.forEach(function (c, i) { setTimeout(function () { c.classList.add('shown'); }, 300 + i * 260); });
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
