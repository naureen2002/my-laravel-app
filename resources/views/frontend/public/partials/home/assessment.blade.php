{{-- Home › Standardised assessment panel (ref: riskledger.com)
     Split layout: copy on the left, an animated "assessment card" on the right whose
     rows reveal one after another (the "conversation" reveal). Card content is an
     illustrative ISO 27001 compliance check (fits Cyberlog's IT Audit service);
     Compliant = blue, Not compliant = red (blue/red/white theme). --}}

<section class="page-section" id="assessment">
    <div class="container">
        <div class="row align-items-center g-5">

            {{-- Left — copy --}}
            <div class="col-lg-5">
                <p class="section-eyebrow mb-3" data-reveal>Assessment</p>
                {{-- TODO: copy — heading + paragraph are placeholders (not supplied in brief) --}}
                <h2 class="cl-assess-h mb-3" data-reveal>
                    One standardised assessment,<br>
                    <span class="accent">complete compliance visibility</span>
                </h2>
                <p class="text-muted" data-reveal>
                    Cyberlog evaluates each system against a standardised control set — so you can
                    see exactly where you're compliant, where you're exposed, and which evidence is
                    still missing, all in one place.
                </p>
            </div>

            {{-- Right — animated assessment card --}}
            <div class="col-lg-7">
                <div class="cl-q-card" id="clQCard">

                    {{-- line 1: domain header --}}
                    <div class="cl-q-head cl-q-line">
                        <div class="cl-q-icon"><i class="fas fa-shield-halved"></i></div>
                        <div>
                            <div class="cl-q-domain">Domain B</div>
                            <div class="cl-q-title">Security Certifications</div>
                        </div>
                    </div>
                    <hr class="cl-q-div">

                    {{-- line 2: question --}}
                    <div class="cl-q-question cl-q-line">
                        <span class="cl-q-no">3</span>
                        <span>Is your organisation ISO 27001 certified?</span>
                    </div>

                    {{-- line 3: compliant response --}}
                    <div class="cl-q-answer cl-q-line">
                        <div class="cl-q-answer-head">
                            <span class="cl-q-who"><i class="fas fa-user"></i> Response</span>
                            <span class="cl-q-status ok"><i class="fas fa-circle-check"></i> Compliant</span>
                        </div>
                        <hr class="cl-q-div">
                        <div class="cl-q-answer-body">
                            <span class="cl-q-yn">Yes</span>
                            <span class="cl-q-file"><i class="fas fa-paperclip"></i> ISO27001-2026.pdf</span>
                        </div>
                    </div>

                    {{-- line 4: non-compliant response --}}
                    <div class="cl-q-answer cl-q-line">
                        <div class="cl-q-answer-head">
                            <span class="cl-q-who"><i class="fas fa-user"></i> Response</span>
                            <span class="cl-q-status bad"><i class="fas fa-circle-xmark"></i> Not compliant</span>
                        </div>
                        <hr class="cl-q-div">
                        <div class="cl-q-answer-body">
                            <span class="cl-q-yn">No</span>
                            <span class="cl-q-file muted"><i class="fas fa-link-slash"></i> No evidence</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-assess-h { font-family: 'Chakra Petch', sans-serif; font-weight: 700; color: var(--white); font-size: clamp(1.8rem, 3.4vw, 2.6rem); line-height: 1.1; }

    .cl-q-card {
        position: relative;
        background: linear-gradient(160deg, var(--surface), var(--bg-alt));
        border: 1px solid rgba(47, 107, 255, 0.5);
        border-radius: 16px;
        padding: 1.5rem 1.5rem 1.75rem;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.42), 0 0 34px rgba(47, 107, 255, 0.12);
    }

    .cl-q-head { display: flex; align-items: center; gap: 1rem; }
    .cl-q-icon {
        width: 54px; height: 54px; border-radius: 12px;
        background: linear-gradient(140deg, var(--blue), #6f5bff);
        display: grid; place-items: center; color: #fff; font-size: 1.3rem;
        box-shadow: 0 8px 20px rgba(47, 107, 255, 0.4);
    }
    .cl-q-domain { font-family: 'IBM Plex Mono', monospace; font-size: .72rem; letter-spacing: .12em; text-transform: uppercase; color: var(--muted); }
    .cl-q-title { font-family: 'Chakra Petch', sans-serif; font-size: 1.35rem; font-weight: 700; color: var(--white); }

    .cl-q-div { border: 0; border-top: 1px solid var(--line); opacity: 1; margin: 1rem 0; }

    .cl-q-question { display: flex; align-items: center; gap: .85rem; color: var(--white); font-weight: 500; }
    .cl-q-no {
        flex: 0 0 auto; display: inline-grid; place-items: center;
        width: 30px; height: 30px; border: 1px solid var(--line); border-radius: 7px;
        font-family: 'IBM Plex Mono', monospace; font-size: .9rem; color: var(--white);
    }

    .cl-q-answer {
        background: rgba(15, 27, 52, 0.55);
        border: 1px solid var(--line);
        border-radius: 12px;
        padding: 1.1rem 1.25rem;
        margin-top: 1.1rem;
    }
    .cl-q-answer-head { display: flex; align-items: center; justify-content: space-between; gap: .75rem; flex-wrap: wrap; }
    .cl-q-who { color: var(--muted); font-size: .92rem; }
    .cl-q-who i { margin-right: .35rem; }
    .cl-q-status {
        display: inline-flex; align-items: center; gap: .4rem;
        font-size: .82rem; font-weight: 600; padding: .35rem .85rem; border-radius: 50rem;
    }
    .cl-q-status.ok  { color: #8fb6ff; background: var(--blue-dim); border: 1px solid rgba(47, 107, 255, 0.45); }
    .cl-q-status.bad { color: var(--red-soft); background: var(--red-dim); border: 1px solid rgba(255, 47, 85, 0.45); }

    .cl-q-answer-body { display: flex; align-items: center; gap: 1rem; flex-wrap: wrap; }
    .cl-q-yn { color: var(--white); font-weight: 600; }
    .cl-q-file {
        display: inline-flex; align-items: center; gap: .45rem;
        font-size: .82rem; color: var(--text);
        background: rgba(255, 255, 255, 0.05); border: 1px solid var(--line);
        border-radius: 7px; padding: .35rem .7rem;
    }
    .cl-q-file.muted { color: var(--muted); }

    /* Sequential "conversation" reveal */
    .cl-q-line { opacity: 0; transform: translateY(16px); transition: opacity .55s var(--ease), transform .55s var(--ease); }
    .cl-q-line.in { opacity: 1; transform: none; }
    @media (prefers-reduced-motion: reduce) {
        .cl-q-line { opacity: 1 !important; transform: none !important; }
    }
</style>
@endpush

@push('scripts')
<script>
(function () {
    var card = document.getElementById('clQCard');
    if (!card) return;
    var lines = [].slice.call(card.querySelectorAll('.cl-q-line'));
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (reduce || !('IntersectionObserver' in window)) {
        lines.forEach(function (l) { l.classList.add('in'); });
        return;
    }
    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (!e.isIntersecting) return;
            lines.forEach(function (l, i) {
                setTimeout(function () { l.classList.add('in'); }, i * 220);
            });
            io.disconnect();
        });
    }, { threshold: 0.3 });
    io.observe(card);
})();
</script>
@endpush
