{{-- Home › Closing CTA banner (ref: riskledger.com "Active … need Active … Security")
     Centered headline + subtext + two buttons over the living particle network, with
     each line revealing one after another. blue/red/white (reference teal → gradient). --}}

<section class="page-section cl-cta2-section" id="get-started">

    <canvas class="cl-cta2-bg" data-net aria-hidden="true"></canvas>

    <div class="container text-center" id="clCta2">
        {{-- TODO: copy — heading + subtext are placeholders (adapted from reference) --}}
        <h2 class="cl-cta2-h">
            <span class="cl-cta2-line d-block">Active threats demand</span>
            <span class="cl-cta2-line d-block grad-text">Active Cyber Defense</span>
        </h2>

        <p class="cl-cta2-line cl-cta2-sub">Our team is ready to help</p>

        <div class="cl-cta2-line cl-cta2-btns">
            <a class="cl-cta2-btn" href="{{ Route::has('public.contact') ? route('public.contact') : (Route::has('contact') ? route('contact') : '#') }}">
                <i class="fas fa-calendar-check"></i> Book a Demo
            </a>
            <a class="cl-cta2-btn" href="{{ Route::has('public.contact') ? route('public.contact') : (Route::has('contact') ? route('contact') : '#') }}">
                <i class="fas fa-headset"></i> Talk to an Expert
            </a>
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-cta2-section { position: relative; overflow: hidden; display: flex; align-items: center; min-height: 60vh; }
    .cl-cta2-bg { position: absolute; inset: 0; width: 100%; height: 100%; z-index: 0; }
    .cl-cta2-section .container { position: relative; z-index: 2; }

    .cl-cta2-h { font-family: 'Chakra Petch', sans-serif; font-weight: 700; line-height: 1.08; color: var(--white); font-size: clamp(2rem, 5vw, 3.4rem); margin: 0; }
    .cl-cta2-sub { font-family: 'Chakra Petch', sans-serif; font-weight: 600; color: var(--white); font-size: 1.15rem; margin: 1.6rem 0 1.8rem; }

    .cl-cta2-btns { display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; }
    .cl-cta2-btn {
        display: inline-flex; align-items: center; gap: .55rem;
        background: var(--blue-deep); color: #fff; text-decoration: none;
        border: 1px solid rgba(47, 107, 255, 0.5); border-radius: 50rem;
        padding: .72rem 1.6rem; font-size: .95rem; font-weight: 500;
        transition: all .22s var(--ease);
    }
    .cl-cta2-btn i { color: var(--blue-bright); transition: color .22s var(--ease); }
    .cl-cta2-btn:hover { background: var(--blue); border-color: var(--blue); transform: translateY(-2px); box-shadow: 0 0 22px rgba(47, 107, 255, 0.5); }
    .cl-cta2-btn:hover i { color: #fff; }

    .cl-cta2-line { opacity: 0; transform: translateY(18px); transition: opacity .6s var(--ease), transform .6s var(--ease); }
    .cl-cta2-line.in { opacity: 1; transform: none; }
    @media (prefers-reduced-motion: reduce) {
        .cl-cta2-line { opacity: 1 !important; transform: none !important; }
    }
</style>
@endpush

@push('scripts')
<script>
(function () {
    var root = document.getElementById('clCta2');
    if (!root) return;
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var lines = [].slice.call(root.querySelectorAll('.cl-cta2-line'));

    if (reduce || !('IntersectionObserver' in window)) {
        lines.forEach(function (l) { l.classList.add('in'); });
        return;
    }
    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (!e.isIntersecting) return;
            lines.forEach(function (l, i) { setTimeout(function () { l.classList.add('in'); }, i * 180); });
            io.disconnect();
        });
    }, { threshold: 0.3 });
    io.observe(root);
})();
</script>
@endpush
