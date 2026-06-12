{{-- SOC › Hero — live operations console (viserx-style glass, darker) --}}
<header class="cl-hero cl-soc-hero" id="page-top">
    <canvas class="cl-soc-net" data-net aria-hidden="true"></canvas>

    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <p class="section-eyebrow mb-3" data-reveal data-hero>Security Operations Center</p>
                <h1 class="cl-soc-h mb-3" data-reveal data-hero>
                    24/7 <span class="grad-text">SOC-as-a-Service</span>
                </h1>
                {{-- TODO: copy — refine hero subheading --}}
                <p class="lead text-muted mb-4" data-reveal data-hero>
                    Cyberlog runs a fully or co-managed Security Operations Center that detects
                    threats in real time, cuts alert noise, and stops attacks before they cause
                    damage — integrated seamlessly with your existing tools.
                </p>

                <div class="d-flex flex-wrap gap-2 mb-4" data-reveal data-hero>
                    <span class="cl-soc-chip"><i class="fas fa-wave-square"></i>Threat Detection</span>
                    <span class="cl-soc-chip"><i class="fas fa-hand-fist"></i>Incident Response</span>
                    <span class="cl-soc-chip"><i class="fas fa-plug"></i>SIEM / SOAR</span>
                    <span class="cl-soc-chip"><i class="fas fa-clock"></i>24/7 Monitoring</span>
                </div>

                <div class="d-flex flex-wrap gap-3" data-reveal data-hero>
                    <a class="btn btn-primary btn-xl text-white fw-bold" href="{{ Route::has('public.contact') ? route('public.contact') : (Route::has('contact') ? route('contact') : '#') }}">Talk to an Expert</a>
                    <a class="btn btn-outline-light btn-xl" href="#calculator"><i class="fas fa-calculator me-1"></i> SOC Cost Calculator</a>
                </div>
            </div>

            <div class="col-lg-6" data-reveal data-hero>
                <div class="cl-soc-console">
                    <div class="cl-soc-bar"><span class="cl-soc-dot"></span> SOC // LIVE OPERATIONS</div>

                    <div class="cl-soc-tiles">
                        <div class="cl-soc-tile"><div class="n" data-count="1204">1204</div><div class="l">Alerts Triaged</div></div>
                        <div class="cl-soc-tile"><div class="n" data-count="0.5" data-decimals="1" data-suffix="h">0.5h</div><div class="l">Mean MTTR</div></div>
                        <div class="cl-soc-tile"><div class="n" data-count="38">38</div><div class="l">Threats Blocked</div></div>
                    </div>

                    <div class="cl-soc-chart">
                        @for ($i = 0; $i < 16; $i++)
                            <span style="height: {{ random_int(28, 100) }}%; animation-delay: {{ $i * 0.11 }}s"></span>
                        @endfor
                    </div>

                    <div class="cl-soc-feed" id="socFeed">
                        <div class="cl-soc-line"><span class="t">00:00:01</span><span class="ok">[CLEAN]</span> endpoint sweep · 1,204 assets</div>
                        <div class="cl-soc-line"><span class="t">00:00:00</span><span class="crit">[BLOCKED]</span> brute-force · 203.0.113.*</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>

@push('styles')
<style>
    .cl-soc-hero { position: relative; overflow: hidden; padding-top: 8rem; padding-bottom: 4rem; }
    .cl-soc-net { position: absolute; inset: 0; width: 100%; height: 100%; z-index: 0; }
    .cl-soc-hero .container { position: relative; z-index: 2; }
    .cl-soc-h { font-family: 'Chakra Petch', sans-serif; font-weight: 700; font-size: clamp(2.2rem, 5vw, 3.6rem); color: var(--white); line-height: 1.05; }

    .cl-soc-chip {
        display: inline-flex; align-items: center; gap: .5rem;
        font-family: 'IBM Plex Mono', monospace; font-size: .8rem; color: var(--white);
        background: rgba(255, 255, 255, 0.04); border: 1px solid var(--line);
        border-left: 3px solid var(--blue-bright); border-radius: 8px; padding: .5rem .9rem;
    }
    .cl-soc-chip i { color: var(--blue-bright); }

    .cl-soc-console {
        background: linear-gradient(160deg, #0b1430, #0a1126) padding-box,
                    linear-gradient(120deg, var(--blue), #6f5bff) border-box;
        border: 1.5px solid transparent; border-radius: 16px; overflow: hidden;
        box-shadow: 0 30px 80px rgba(5, 20, 60, 0.55), 0 0 45px rgba(47, 107, 255, 0.18);
    }
    .cl-soc-bar { display: flex; align-items: center; gap: .55rem; padding: .7rem 1rem; border-bottom: 1px solid var(--line); font-family: 'IBM Plex Mono', monospace; font-size: .72rem; letter-spacing: .1em; color: var(--muted); text-transform: uppercase; }
    .cl-soc-dot { width: 9px; height: 9px; border-radius: 50%; background: var(--blue-bright); animation: clSocDot 1.6s ease-in-out infinite; }
    @keyframes clSocDot { 0%, 100% { box-shadow: 0 0 0 0 rgba(47, 107, 255, 0.5); } 50% { box-shadow: 0 0 0 6px rgba(47, 107, 255, 0); } }

    .cl-soc-tiles { display: grid; grid-template-columns: repeat(3, 1fr); }
    .cl-soc-tile { padding: 1.1rem 1rem; text-align: center; border-right: 1px solid var(--line); }
    .cl-soc-tile:last-child { border-right: 0; }
    .cl-soc-tile .n { font-family: 'Chakra Petch', sans-serif; font-size: 1.55rem; font-weight: 700; background: var(--grad); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; color: transparent; }
    .cl-soc-tile .l { font-family: 'IBM Plex Mono', monospace; font-size: .6rem; letter-spacing: .08em; color: var(--muted); text-transform: uppercase; margin-top: .2rem; }

    .cl-soc-chart { display: flex; align-items: flex-end; gap: 5px; height: 84px; padding: 1.1rem 1rem .25rem; border-top: 1px solid var(--line); }
    .cl-soc-chart span { flex: 1; min-height: 6px; background: linear-gradient(180deg, var(--blue-bright), rgba(47, 107, 255, 0.15)); border-radius: 3px 3px 0 0; transform-origin: bottom; animation: clSocBar 2.6s ease-in-out infinite; }
    @keyframes clSocBar { 0%, 100% { transform: scaleY(.55); opacity: .7; } 50% { transform: scaleY(1); opacity: 1; } }

    .cl-soc-feed { font-family: 'IBM Plex Mono', monospace; font-size: .7rem; line-height: 1.75; padding: .75rem 1rem 1rem; border-top: 1px solid var(--line); height: 108px; overflow: hidden; }
    .cl-soc-line { white-space: nowrap; animation: clSocIn .4s var(--ease); }
    @keyframes clSocIn { from { opacity: 0; transform: translateX(-8px); } to { opacity: 1; transform: none; } }
    .cl-soc-feed .t { color: var(--muted); margin-right: .5rem; }
    .cl-soc-feed .ok { color: var(--blue-bright); margin-right: .4rem; }
    .cl-soc-feed .crit { color: var(--red-soft); margin-right: .4rem; }

    @media (prefers-reduced-motion: reduce) {
        .cl-soc-dot, .cl-soc-chart span { animation: none !important; }
    }
</style>
@endpush

@push('scripts')
<script>
(function () {
    var feed = document.getElementById('socFeed');
    if (!feed || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
    var events = [
        ['ok', '[CLEAN]', 'endpoint sweep · 1,204 assets'],
        ['crit', '[BLOCKED]', 'brute-force · 203.0.113.*'],
        ['ok', '[PATCHED]', 'CVE-2026-1180 · 38 hosts'],
        ['crit', '[QUARANTINE]', 'malware sample · sandbox-07'],
        ['ok', '[VERIFIED]', 'MFA challenge · success'],
        ['crit', '[DENIED]', 'lateral move · host-1142'],
        ['ok', '[SYNCED]', 'threat intel feed · updated']
    ];
    function ts() { return new Date().toTimeString().slice(0, 8); }
    function push() {
        var e = events[Math.floor(Math.random() * events.length)];
        var line = document.createElement('div');
        line.className = 'cl-soc-line';
        line.innerHTML = '<span class="t">' + ts() + '</span><span class="' + e[0] + '">' + e[1] + '</span> ' + e[2];
        feed.insertBefore(line, feed.firstChild);
        while (feed.children.length > 5) feed.removeChild(feed.lastChild);
    }
    push(); push(); push();
    setInterval(push, 2000);
})();
</script>
@endpush
