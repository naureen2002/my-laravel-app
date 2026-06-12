{{-- Clients › detailed case cards as a stacked deck (ref: viserx.com)
     Content on the left, a "website preview" browser mock on the right. Cards stack
     with the back ones peeking (showing their category); click a back card or use the
     controls to bring it to the front. Aggregates the detailed client stories shown on
     the home page and service pages. --}}
@php
    $u = fn ($pub, $legacy) => Route::has($pub) ? route($pub) : (Route::has($legacy) ? route($legacy) : '#');

    $cases = [
        [
            'cat' => 'Government Organization', 'name' => 'Dhaka Stock Exchange (DSE)', 'logo' => 'dse', 'service' => 'soc', 'accent' => 'var(--blue-bright)',
            'desc' => "Cyberlog delivered SOC support for Dhaka Stock Exchange, Bangladesh's most critical capital market infrastructure and one of the country's highest-value financial technology environments.",
            'stats' => [['24/7', 'SOC Monitoring'], ['99.99%', 'uptime for Capital Market Cyber Defense']],
        ],
        [
            'cat' => 'Financial Institute', 'name' => 'Bangladesh Finance', 'logo' => 'bangladesh-finance', 'service' => 'vapt', 'accent' => 'var(--red-soft)',
            'desc' => 'Cyberlog conducted VAPT for Bangladesh Finance to identify, validate, and prioritize exploitable security risks across its digital environment.',
            'stats' => [['360°', 'Security Risk Review'], ['10+', 'High-Priority Risks Validated']],
        ],
        [
            'cat' => 'Government Organization', 'name' => 'Bangladesh Investment Development Authority (BIDA)', 'logo' => 'bida', 'service' => 'capacity-building', 'accent' => 'var(--blue-bright)',
            'desc' => 'Cyberlog conducted cybersecurity capacity building for the IT team of BIDA and supported the organization with a cybersecurity assessment to improve technical readiness, risk visibility, and institutional cyber resilience.',
            'stats' => [['250%+', "Increase in Employees' Cybersecurity Skills"], ['12', 'Security Areas Reviewed']],
        ],
        [
            'cat' => 'Advertisement Industry', 'name' => 'Adcomm Limited', 'logo' => 'adcomm', 'service' => 'it-audit', 'accent' => 'var(--red-soft)',
            'desc' => 'Cyberlog supported Adcomm Limited with ISO 27001 implementation and employee cybersecurity capacity building to strengthen compliance readiness and workforce security awareness.',
            'stats' => [['93', 'ISO Controls Mapped'], ['200+', 'Employees Trained']],
        ],
    ];
@endphp

<section class="page-section" id="client-stories">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Success Stories</p>
        {{-- TODO: copy — section heading / tagline (none provided in brief) --}}

        <div class="cl-deck-wrap">
            <div class="cl-deck" id="clDeck">
                @foreach ($cases as $case)
                    <article class="cl-deck-card" tabindex="0">
                        <div class="cl-deck-grid">
                            <div class="cl-deck-content">
                                <span class="cl-deck-cat" style="--cat: {{ $case['accent'] }}">{{ $case['cat'] }}</span>
                                <h3 class="cl-deck-name">{{ $case['name'] }}</h3>
                                <p class="cl-deck-desc">{{ $case['desc'] }}</p>
                                <div class="cl-deck-stats">
                                    @foreach ($case['stats'] as $s)
                                        <div class="cl-deck-stat">
                                            <div class="cl-deck-num">{{ $s[0] }}</div>
                                            <div class="cl-deck-lbl">{{ $s[1] }}</div>
                                        </div>
                                    @endforeach
                                </div>
                                <a class="cl-deck-btn" href="{{ $u('public.' . $case['service'], $case['service']) }}">
                                    View Details <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="cl-deck-preview">
                                {{-- TODO: swap for a real website screenshot per client --}}
                                <div class="cl-browser">
                                    <div class="cl-browser-bar"><span></span><span></span><span></span></div>
                                    <div class="cl-browser-body">
                                        <img src="{{ asset('assets/img/clients/' . $case['logo'] . '.svg') }}" alt="{{ $case['name'] }} website preview">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="cl-deck-nav">
                <button class="cl-deck-arrow cl-deck-prev" type="button" aria-label="Previous client"><i class="fas fa-chevron-left"></i></button>
                <div class="cl-deck-dots">
                    @foreach ($cases as $i => $case)
                        <button class="cl-deck-dot" type="button" aria-label="Show {{ $case['name'] }}"></button>
                    @endforeach
                </div>
                <button class="cl-deck-arrow cl-deck-next" type="button" aria-label="Next client"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-deck-wrap { max-width: 940px; margin: 2rem auto 0; }
    .cl-deck { position: relative; min-height: 470px; padding-top: 112px; }

    .cl-deck-card {
        position: absolute; left: 0; right: 0; top: 112px;
        background: linear-gradient(160deg, var(--surface), var(--bg-alt));
        border: 1px solid var(--line); border-radius: 16px;
        padding: 1.85rem;
        box-shadow: 0 30px 70px rgba(0, 0, 0, 0.42);
        transition: transform .45s var(--ease), opacity .45s var(--ease);
        transform-origin: center top;
        will-change: transform, opacity;
        cursor: pointer;
    }
    .cl-deck-card.is-front { cursor: default; }
    /* initial stack (works without JS) */
    .cl-deck-card:nth-child(1) { transform: translateY(0) scale(1);        z-index: 40; opacity: 1; }
    .cl-deck-card:nth-child(2) { transform: translateY(-34px) scale(.965); z-index: 30; opacity: .8; }
    .cl-deck-card:nth-child(3) { transform: translateY(-68px) scale(.93);  z-index: 20; opacity: .6; }
    .cl-deck-card:nth-child(4) { transform: translateY(-102px) scale(.895);z-index: 10; opacity: .45; }

    .cl-deck-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1.75rem; align-items: center; }
    .cl-deck-cat { font-family: 'IBM Plex Mono', monospace; font-size: .7rem; letter-spacing: .14em; text-transform: uppercase; color: var(--cat, var(--blue-bright)); }
    .cl-deck-name { font-family: 'Chakra Petch', sans-serif; font-size: 1.5rem; font-weight: 700; color: var(--white); margin: .45rem 0 .6rem; line-height: 1.15; }
    .cl-deck-desc { color: var(--muted); font-size: .9rem; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }
    .cl-deck-stats { display: flex; gap: 2.25rem; margin: 1.4rem 0; }
    .cl-deck-num {
        font-family: 'Chakra Petch', sans-serif; font-weight: 700; font-size: 2.1rem; line-height: 1;
        background: var(--grad); -webkit-background-clip: text; background-clip: text;
        -webkit-text-fill-color: transparent; color: transparent;
    }
    .cl-deck-lbl { color: var(--muted); font-size: .72rem; margin-top: .35rem; max-width: 140px; }
    .cl-deck-btn {
        display: inline-flex; align-items: center; gap: .5rem;
        background: var(--blue-deep); color: #fff; text-decoration: none;
        border: 1px solid var(--line); border-radius: 50rem; padding: .55rem 1.15rem; font-size: .85rem;
        transition: all .2s var(--ease);
    }
    .cl-deck-btn:hover { background: var(--blue); border-color: var(--blue); }
    .cl-deck-btn i { transition: transform .2s var(--ease); }
    .cl-deck-btn:hover i { transform: translateX(4px); }

    /* website preview browser mock */
    .cl-browser { border-radius: 12px; overflow: hidden; border: 1px solid var(--line); background: var(--bg-alt); box-shadow: 0 20px 50px rgba(0, 0, 0, 0.42); }
    .cl-browser-bar { display: flex; align-items: center; gap: 6px; padding: .55rem .7rem; background: rgba(255, 255, 255, 0.04); border-bottom: 1px solid var(--line); }
    .cl-browser-bar span { width: 9px; height: 9px; border-radius: 50%; background: var(--muted); opacity: .5; }
    .cl-browser-body {
        aspect-ratio: 16 / 10; display: grid; place-items: center; padding: 1.5rem;
        background: radial-gradient(circle at 30% 25%, rgba(255, 255, 255, 0.16), transparent 60%), linear-gradient(160deg, var(--surface), var(--bg-alt));
    }
    .cl-browser-body img { max-width: 72%; height: auto; }

    /* controls */
    .cl-deck-nav { display: flex; align-items: center; justify-content: center; gap: 1.25rem; margin-top: 2.25rem; }
    .cl-deck-dots { display: flex; gap: .5rem; }
    .cl-deck-dot { width: 9px; height: 9px; padding: 0; border: 0; border-radius: 50%; background: var(--line); cursor: pointer; transition: all .25s var(--ease); }
    .cl-deck-dot.active { background: var(--blue-bright); width: 26px; border-radius: 6px; }
    .cl-deck-arrow { width: 42px; height: 42px; border-radius: 50%; background: var(--surface); border: 1px solid var(--line); color: var(--white); cursor: pointer; display: grid; place-items: center; transition: all .2s var(--ease); }
    .cl-deck-arrow:hover { background: var(--blue); border-color: var(--blue); }

    @media (max-width: 767.98px) {
        .cl-deck { min-height: 0; padding-top: 0; }
        .cl-deck-card { position: relative; transform: none !important; opacity: 1 !important; margin-bottom: 1.25rem; }
        .cl-deck-grid { grid-template-columns: 1fr; }
        .cl-deck-nav { display: none; }
    }
</style>
@endpush

@push('scripts')
<script>
(function () {
    var deck = document.getElementById('clDeck');
    if (!deck) return;
    var cards = [].slice.call(deck.querySelectorAll('.cl-deck-card'));
    var wrap = deck.closest('.cl-deck-wrap');
    var dots = [].slice.call(wrap.querySelectorAll('.cl-deck-dot'));
    var order = cards.map(function (_, i) { return i; });
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var autoTimer = null;

    function layout() {
        order.forEach(function (ci, pos) {
            var card = cards[ci];
            card.style.transform = 'translateY(' + (-34 * pos) + 'px) scale(' + (1 - 0.035 * pos) + ')';
            card.style.zIndex = String(40 - pos * 10);
            card.style.opacity = pos === 0 ? '1' : String(Math.max(0.4, 0.8 - 0.18 * (pos - 1)));
            card.classList.toggle('is-front', pos === 0);
        });
        dots.forEach(function (d, i) { d.classList.toggle('active', i === order[0]); });
    }
    function bringFront(ci) {
        var p = order.indexOf(ci);
        if (p <= 0) return;
        order.splice(p, 1); order.unshift(ci); layout();
    }
    function next() { order.push(order.shift()); layout(); }
    function prev() { order.unshift(order.pop()); layout(); }
    function restartAuto() {
        stopAuto();
        startAuto();
    }
    function startAuto() {
        if (reduce || autoTimer || window.innerWidth < 768) return;
        autoTimer = window.setInterval(next, 3200);
    }
    function stopAuto() {
        if (!autoTimer) return;
        window.clearInterval(autoTimer);
        autoTimer = null;
    }

    cards.forEach(function (card, i) {
        card.addEventListener('click', function () {
            if (!card.classList.contains('is-front')) bringFront(i);
            restartAuto();
        });
    });
    dots.forEach(function (d, i) { d.addEventListener('click', function () { bringFront(i); restartAuto(); }); });
    var nb = wrap.querySelector('.cl-deck-next'), pb = wrap.querySelector('.cl-deck-prev');
    if (nb) nb.addEventListener('click', function () { next(); restartAuto(); });
    if (pb) pb.addEventListener('click', function () { prev(); restartAuto(); });

    wrap.addEventListener('mouseenter', stopAuto);
    wrap.addEventListener('mouseleave', startAuto);
    wrap.addEventListener('focusin', stopAuto);
    wrap.addEventListener('focusout', startAuto);
    document.addEventListener('visibilitychange', function () {
        if (document.hidden) stopAuto();
        else startAuto();
    });
    window.addEventListener('resize', restartAuto);

    layout();
    startAuto();
})();
</script>
@endpush
