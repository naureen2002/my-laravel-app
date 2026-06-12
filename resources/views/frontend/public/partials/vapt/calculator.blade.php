<section class="page-section cl-vapt-calc-section" id="calculator">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <p class="section-eyebrow mb-2" data-reveal>Service Calculator</p>
                <h2 class="cl-vapt-section-title mb-3" data-reveal>Estimate Your <span>VAPT Scope</span></h2>
                <p class="text-muted" data-reveal>
                    Penetration testing effort depends on the number of assets, application complexity,
                    authentication depth, and testing approach. Use this calculator for a quick scope
                    estimate, then request a final quote from our team.
                </p>
                <p class="text-muted small mb-0" data-reveal>
                    <i class="fas fa-circle-info text-primary me-1"></i> Indicative only. Final effort is confirmed after scoping.
                </p>
            </div>

            <div class="col-lg-7" data-reveal>
                <div class="cl-vapt-calc">
                    <div class="cl-vapt-calc-row">
                        <div class="cl-vapt-calc-head">
                            <span>Web apps / portals</span>
                            <strong id="vaptCalcAppsVal">2</strong>
                        </div>
                        <input class="cl-vapt-range" id="vaptCalcApps" type="range" min="1" max="20" value="2">
                    </div>

                    <div class="cl-vapt-calc-row">
                        <div class="cl-vapt-calc-head">
                            <span>APIs / mobile flows</span>
                            <strong id="vaptCalcApisVal">2</strong>
                        </div>
                        <input class="cl-vapt-range" id="vaptCalcApis" type="range" min="0" max="20" value="2">
                    </div>

                    <div class="cl-vapt-calc-row">
                        <div class="cl-vapt-calc-head">
                            <span>Network assets / IPs</span>
                            <strong id="vaptCalcIpsVal">25</strong>
                        </div>
                        <input class="cl-vapt-range" id="vaptCalcIps" type="range" min="1" max="250" value="25">
                    </div>

                    <div class="cl-vapt-calc-row">
                        <div class="cl-vapt-calc-head mb-2">
                            <span>Testing approach</span>
                        </div>
                        <div class="cl-vapt-toggle" id="vaptCalcApproach">
                            <button type="button" data-mult="1">Black</button>
                            <button type="button" class="active" data-mult="1.25">Grey</button>
                            <button type="button" data-mult="1.55">White</button>
                        </div>
                    </div>

                    <div class="cl-vapt-calc-out">
                        <div>
                            <div class="cl-vapt-effort"><span id="vaptCalcDays">0</span><small>analyst days</small></div>
                            <div class="cl-vapt-break" id="vaptCalcBreak"></div>
                        </div>
                        <a class="btn btn-alert text-white fw-bold" href="{{ route('contact') }}">Get Custom Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-vapt-calc-section {
        background:
            radial-gradient(720px 380px at 86% 12%, rgba(228, 31, 61, .11), transparent 62%),
            linear-gradient(180deg, rgba(5, 12, 23, .96), rgba(7, 17, 31, 1));
    }
    .cl-vapt-section-title {
        font-family: 'Chakra Petch', sans-serif;
        font-size: clamp(2rem, 4vw, 3.25rem);
        line-height: 1;
    }
    .cl-vapt-section-title span {
        color: var(--warm-soft);
    }
    .cl-vapt-calc {
        border: 1.5px solid transparent;
        border-radius: 10px;
        padding: 1.8rem;
        background:
            linear-gradient(160deg, #0b1430, #070f1d) padding-box,
            linear-gradient(120deg, var(--red-soft), var(--blue-bright)) border-box;
        box-shadow: 0 30px 80px rgba(0, 0, 0, .48);
    }
    .cl-vapt-calc-row {
        margin-bottom: 1.45rem;
    }
    .cl-vapt-calc-head {
        display: flex;
        justify-content: space-between;
        gap: 1rem;
        color: var(--white);
        margin-bottom: .6rem;
    }
    .cl-vapt-calc-head span {
        font-weight: 600;
    }
    .cl-vapt-calc-head strong {
        color: var(--warm-soft);
        font-family: 'Chakra Petch', sans-serif;
        font-size: 1.2rem;
    }
    .cl-vapt-range {
        -webkit-appearance: none;
        appearance: none;
        width: 100%;
        height: 7px;
        border-radius: 999px;
        background: linear-gradient(90deg, var(--red-soft), var(--surface));
        outline: none;
    }
    .cl-vapt-range::-webkit-slider-thumb {
        -webkit-appearance: none;
        width: 21px;
        height: 21px;
        border-radius: 50%;
        background: #fff;
        border: 3px solid var(--red-soft);
        box-shadow: 0 0 16px rgba(228, 31, 61, .62);
        cursor: pointer;
    }
    .cl-vapt-range::-moz-range-thumb {
        width: 21px;
        height: 21px;
        border-radius: 50%;
        background: #fff;
        border: 3px solid var(--red-soft);
        box-shadow: 0 0 16px rgba(228, 31, 61, .62);
        cursor: pointer;
    }
    .cl-vapt-toggle {
        display: inline-flex;
        flex-wrap: wrap;
        gap: 4px;
        padding: 4px;
        border: 1px solid var(--line);
        border-radius: 999px;
        background: rgba(16, 31, 58, .62);
    }
    .cl-vapt-toggle button {
        border: 0;
        border-radius: 999px;
        padding: .5rem 1.1rem;
        color: var(--muted);
        background: transparent;
        font-family: 'IBM Plex Mono', monospace;
        font-size: .82rem;
        cursor: pointer;
    }
    .cl-vapt-toggle button.active {
        color: #fff;
        background: var(--red);
        box-shadow: 0 0 16px rgba(228, 31, 61, .42);
    }
    .cl-vapt-calc-out {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        margin-top: .25rem;
        padding-top: 1.35rem;
        border-top: 1px solid var(--line);
    }
    .cl-vapt-effort {
        font-family: 'Chakra Petch', sans-serif;
        font-size: 2.65rem;
        font-weight: 700;
        line-height: 1;
    }
    .cl-vapt-effort span {
        color: var(--warm-soft);
    }
    .cl-vapt-effort small {
        margin-left: .45rem;
        color: var(--muted);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .85rem;
        font-weight: 500;
    }
    .cl-vapt-break {
        margin-top: .5rem;
        color: var(--muted);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .72rem;
    }
</style>
@endpush

@push('scripts')
<script>
(function () {
    var apps = document.getElementById('vaptCalcApps');
    if (!apps) return;
    var apis = document.getElementById('vaptCalcApis');
    var ips = document.getElementById('vaptCalcIps');
    var appsVal = document.getElementById('vaptCalcAppsVal');
    var apisVal = document.getElementById('vaptCalcApisVal');
    var ipsVal = document.getElementById('vaptCalcIpsVal');
    var days = document.getElementById('vaptCalcDays');
    var breakdown = document.getElementById('vaptCalcBreak');
    var approach = document.getElementById('vaptCalcApproach');
    var mult = 1.25;

    function compute() {
        var appCount = +apps.value;
        var apiCount = +apis.value;
        var ipCount = +ips.value;
        var raw = (appCount * 3.5) + (apiCount * 2.2) + Math.ceil(ipCount / 12) + 3;
        var total = Math.max(5, Math.ceil(raw * mult));

        appsVal.textContent = appCount;
        apisVal.textContent = apiCount;
        ipsVal.textContent = ipCount;
        days.textContent = total;
        breakdown.textContent = appCount + ' apps + ' + apiCount + ' API/mobile flows + ' + ipCount + ' IPs x ' + mult + ' approach multiplier';
    }

    [apps, apis, ips].forEach(function (input) {
        input.addEventListener('input', compute);
    });
    approach.querySelectorAll('button').forEach(function (button) {
        button.addEventListener('click', function () {
            approach.querySelectorAll('button').forEach(function (item) { item.classList.remove('active'); });
            button.classList.add('active');
            mult = +button.getAttribute('data-mult');
            compute();
        });
    });

    compute();
})();
</script>
@endpush
