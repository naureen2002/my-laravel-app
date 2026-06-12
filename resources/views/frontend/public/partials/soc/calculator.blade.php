{{-- SOC › Interactive cost calculator (ref: underdefense.com) — stub formula, easy to tune --}}
<section class="page-section bg-light" id="calculator">
    <div class="container">
        <div class="row g-5 align-items-center">

            <div class="col-lg-5">
                <p class="section-eyebrow mb-2" data-reveal>SOC as a Service</p>
                <h2 class="cl-soc-h2 mb-3" data-reveal>Estimate Your <span class="grad-text">SOC Cost</span></h2>
                <p class="text-muted" data-reveal>
                    Managed SOC pricing scales with your environment — endpoints, log volume, and
                    coverage level. Move the sliders for an indicative monthly figure, then request a
                    tailored quote for your exact scope.
                </p>
                <p class="text-muted small" data-reveal><i class="fas fa-circle-info text-primary me-1"></i> Indicative only — final pricing is scoped with our team.</p>
            </div>

            <div class="col-lg-7" data-reveal>
                <div class="cl-calc">
                    <div class="cl-calc-row">
                        <div class="cl-calc-head"><span>Endpoints / devices</span><span class="cl-calc-val" id="calcEpVal">500</span></div>
                        <input type="range" id="calcEp" min="50" max="5000" step="50" value="500" class="cl-range">
                    </div>

                    <div class="cl-calc-row">
                        <div class="cl-calc-head"><span>Log volume <small class="text-muted">(GB / day)</small></span><span class="cl-calc-val" id="calcLogVal">50</span></div>
                        <input type="range" id="calcLog" min="1" max="500" step="1" value="50" class="cl-range">
                    </div>

                    <div class="cl-calc-row">
                        <div class="cl-calc-head mb-2"><span>Coverage</span></div>
                        <div class="cl-calc-toggle" id="calcCov">
                            <button type="button" class="active" data-mult="1">24 / 7</button>
                            <button type="button" data-mult="0.62">Business hours</button>
                        </div>
                    </div>

                    <div class="cl-calc-out">
                        <div>
                            <div class="cl-calc-cost"><span id="calcCost">$0</span><small>/mo</small></div>
                            <div class="cl-calc-break" id="calcBreak"></div>
                        </div>
                        <a class="btn btn-primary text-white fw-bold" href="{{ Route::has('public.contact') ? route('public.contact') : (Route::has('contact') ? route('contact') : '#') }}">Get a Tailored Quote</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-soc-h2 { font-family: 'Chakra Petch', sans-serif; font-weight: 700; color: var(--white); font-size: clamp(1.8rem, 3.4vw, 2.6rem); line-height: 1.1; }

    .cl-calc {
        background: linear-gradient(160deg, #0b1430, #0a1126) padding-box,
                    linear-gradient(120deg, var(--blue), #6f5bff) border-box;
        border: 1.5px solid transparent; border-radius: 16px; padding: 1.85rem;
        box-shadow: 0 30px 80px rgba(5, 20, 60, 0.5);
    }
    .cl-calc-row { margin-bottom: 1.5rem; }
    .cl-calc-head { display: flex; justify-content: space-between; align-items: center; color: var(--white); font-weight: 500; margin-bottom: .6rem; }
    .cl-calc-val { font-family: 'Chakra Petch', sans-serif; font-weight: 700; color: var(--blue-bright); font-size: 1.15rem; }

    .cl-range { -webkit-appearance: none; appearance: none; width: 100%; height: 6px; border-radius: 50rem; background: linear-gradient(90deg, var(--blue), var(--surface)); outline: none; }
    .cl-range::-webkit-slider-thumb { -webkit-appearance: none; width: 20px; height: 20px; border-radius: 50%; background: #fff; border: 3px solid var(--blue); cursor: pointer; box-shadow: 0 0 14px rgba(47, 107, 255, 0.7); transition: transform .15s var(--ease); }
    .cl-range::-webkit-slider-thumb:hover { transform: scale(1.15); }
    .cl-range::-moz-range-thumb { width: 20px; height: 20px; border-radius: 50%; background: #fff; border: 3px solid var(--blue); cursor: pointer; box-shadow: 0 0 14px rgba(47, 107, 255, 0.7); }

    .cl-calc-toggle { display: inline-flex; background: rgba(15, 27, 52, 0.6); border: 1px solid var(--line); border-radius: 50rem; padding: 4px; }
    .cl-calc-toggle button { border: 0; background: transparent; color: var(--muted); font-family: 'IBM Plex Mono', monospace; font-size: .82rem; padding: .5rem 1.1rem; border-radius: 50rem; cursor: pointer; transition: all .2s var(--ease); }
    .cl-calc-toggle button.active { background: var(--blue); color: #fff; box-shadow: 0 0 16px rgba(47, 107, 255, 0.5); }

    .cl-calc-out { display: flex; flex-wrap: wrap; gap: 1rem; align-items: center; justify-content: space-between; border-top: 1px solid var(--line); padding-top: 1.5rem; margin-top: .5rem; }
    .cl-calc-cost { font-family: 'Chakra Petch', sans-serif; font-weight: 700; font-size: 2.6rem; line-height: 1; }
    .cl-calc-cost span { background: var(--grad); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; color: transparent; }
    .cl-calc-cost small { font-family: 'IBM Plex Mono', monospace; font-size: .9rem; color: var(--muted); -webkit-text-fill-color: var(--muted); margin-left: .35rem; }
    .cl-calc-break { font-family: 'IBM Plex Mono', monospace; font-size: .72rem; color: var(--muted); margin-top: .5rem; }
</style>
@endpush

@push('scripts')
<script>
(function () {
    var ep = document.getElementById('calcEp');
    if (!ep) return;
    var log = document.getElementById('calcLog');
    var cov = document.getElementById('calcCov');
    var epVal = document.getElementById('calcEpVal');
    var logVal = document.getElementById('calcLogVal');
    var costEl = document.getElementById('calcCost');
    var breakEl = document.getElementById('calcBreak');
    var mult = 1;

    var BASE = 1500, PER_EP = 4, PER_GB = 35;

    function fmt(n) { return '$' + Math.round(n).toLocaleString('en-US'); }
    function compute() {
        var e = +ep.value, l = +log.value;
        var epCost = e * PER_EP, logCost = l * PER_GB;
        var total = Math.round(((BASE + epCost + logCost) * mult) / 50) * 50;
        epVal.textContent = e.toLocaleString('en-US');
        logVal.textContent = l;
        costEl.textContent = fmt(total);
        breakEl.innerHTML = 'base ' + fmt(BASE) + ' + endpoints ' + fmt(epCost) + ' + logs ' + fmt(logCost) + ' &times; ' + mult + ' coverage';
    }
    ep.addEventListener('input', compute);
    log.addEventListener('input', compute);
    cov.querySelectorAll('button').forEach(function (b) {
        b.addEventListener('click', function () {
            cov.querySelectorAll('button').forEach(function (x) { x.classList.remove('active'); });
            b.classList.add('active');
            mult = +b.getAttribute('data-mult');
            compute();
        });
    });
    compute();
})();
</script>
@endpush
