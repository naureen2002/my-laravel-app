{{-- Home › Defend-as-One / shared intelligence network (ref: riskledger.com)
     Living particle network + a "connected to industry network" card whose rows reveal
     one after another (stats count up). Fits Cyberlog's collective-defense / shared
     threat-intel positioning. blue/red/white (reference's teal → blue gradient). --}}

<section class="page-section cl-dao-section" id="defend-as-one">

    <canvas class="cl-dao-bg" data-net aria-hidden="true"></canvas>

    <div class="container">
        <div class="row align-items-center g-5">

            {{-- Left — copy --}}
            <div class="col-lg-5">
                <p class="section-eyebrow mb-3" data-reveal>Collective Defense</p>
                {{-- TODO: copy — heading + paragraph are placeholders (not supplied in brief) --}}
                <h2 class="cl-assess-h mb-3" data-reveal>
                    Share intelligence with your<br>
                    network and <span class="accent">Defend-as-One</span>
                </h2>
                <p class="text-muted" data-reveal>
                    By working together, you collectively optimise resources, remove roadblocks to
                    mitigation, and enhance security for every link in the chain.
                </p>
            </div>

            {{-- Right — industry-network card --}}
            <div class="col-lg-7">
                <div class="cl-dao-card" id="clDaoCard">

                    <div class="cl-dao-conn cl-dao-line"><i class="fas fa-share-nodes"></i> Connected to</div>

                    <div class="cl-dao-titlerow cl-dao-line">
                        <h3 class="cl-dao-title">Industry network</h3>
                        <span class="cl-dao-peers"><i class="fas fa-user"></i> 13 Peers</span>
                    </div>

                    <hr class="cl-dao-div">

                    <div class="cl-dao-stats">
                        <div class="cl-dao-stat cl-dao-line"><div class="cl-dao-num" data-count="45">45</div><div class="cl-dao-lbl">3rd-party</div></div>
                        <div class="cl-dao-stat cl-dao-line"><div class="cl-dao-num" data-count="56">56</div><div class="cl-dao-lbl">4th-party</div></div>
                        <div class="cl-dao-stat cl-dao-line"><div class="cl-dao-num" data-count="90">90</div><div class="cl-dao-lbl">5th-party</div></div>
                        <div class="cl-dao-stat cl-dao-line"><div class="cl-dao-num" data-count="102">102</div><div class="cl-dao-lbl">6th-party</div></div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-dao-section { position: relative; overflow: hidden; }
    .cl-dao-bg { position: absolute; inset: 0; width: 100%; height: 100%; z-index: 0; }
    .cl-dao-section .container { position: relative; z-index: 2; }

    .cl-dao-card {
        position: relative; border-radius: 16px; padding: 1.85rem;
        background: linear-gradient(160deg, var(--surface), var(--bg-alt)) padding-box,
                    linear-gradient(120deg, var(--blue), #6f5bff) border-box;
        border: 1.5px solid transparent;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.42), 0 0 34px rgba(47, 107, 255, 0.12);
    }
    .cl-dao-conn { display: flex; align-items: center; gap: .5rem; font-family: 'IBM Plex Mono', monospace; font-size: .78rem; letter-spacing: .08em; color: var(--muted); }
    .cl-dao-conn i { color: var(--blue-bright); }
    .cl-dao-titlerow { display: flex; align-items: center; justify-content: space-between; gap: 1rem; flex-wrap: wrap; margin-top: .55rem; }
    .cl-dao-title {
        margin: 0; font-family: 'Chakra Petch', sans-serif; font-weight: 700; font-size: 1.85rem;
        background: linear-gradient(120deg, var(--warm-soft), var(--red-soft)); -webkit-background-clip: text; background-clip: text;
        -webkit-text-fill-color: transparent; color: transparent;
    }
    .cl-dao-peers {
        display: inline-flex; align-items: center; gap: .4rem;
        font-size: .85rem; color: var(--blue-bright);
        border: 1px solid rgba(47, 107, 255, 0.45); border-radius: 50rem; padding: .3rem .85rem;
    }
    .cl-dao-div { border: 0; border-top: 1px solid var(--line); opacity: 1; margin: 1.3rem 0; }

    .cl-dao-stats { display: flex; flex-wrap: wrap; }
    .cl-dao-stat { flex: 1 1 25%; padding: .25rem 1.1rem; border-right: 1px solid var(--line); }
    .cl-dao-stat:last-child { border-right: 0; }
    .cl-dao-num {
        font-family: 'Chakra Petch', sans-serif; font-weight: 700; font-size: 2.1rem; line-height: 1;
        background: var(--grad); -webkit-background-clip: text; background-clip: text;
        -webkit-text-fill-color: transparent; color: transparent;
    }
    .cl-dao-lbl { font-family: 'IBM Plex Mono', monospace; font-size: .72rem; letter-spacing: .04em; color: var(--muted); margin-top: .35rem; }
    @media (max-width: 575.98px) {
        .cl-dao-stat { flex: 0 0 50%; margin-bottom: .85rem; }
        .cl-dao-stat:nth-child(2) { border-right: 0; }
    }

    .cl-dao-line { opacity: 0; transform: translateY(16px); transition: opacity .5s var(--ease), transform .5s var(--ease); }
    .cl-dao-line.in { opacity: 1; transform: none; }
    @media (prefers-reduced-motion: reduce) {
        .cl-dao-line { opacity: 1 !important; transform: none !important; }
    }
</style>
@endpush

@push('scripts')
<script>
(function () {
    var card = document.getElementById('clDaoCard');
    if (!card) return;
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var lines = [].slice.call(card.querySelectorAll('.cl-dao-line'));

    if (reduce || !('IntersectionObserver' in window)) {
        lines.forEach(function (l) { l.classList.add('in'); });
        return;
    }
    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (!e.isIntersecting) return;
            lines.forEach(function (l, i) { setTimeout(function () { l.classList.add('in'); }, i * 160); });
            io.disconnect();
        });
    }, { threshold: 0.3 });
    io.observe(card);
})();
</script>
@endpush
