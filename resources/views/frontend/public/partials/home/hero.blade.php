{{-- Home hero — "dynamic design" (ref: riskledger.com)
     Interactive particle-network background + floating parallax service chips.
     Self-contained: markup + scoped CSS (@push styles) + JS (@push scripts). --}}

<section class="cl-hero cl-home-hero" id="page-top">

    <canvas class="cl-hero-canvas" id="clHeroCanvas" aria-hidden="true"></canvas>

    <div class="container text-center">

        <h1 class="cl-hero-heading mb-4" data-reveal data-hero>
            Build <span class="accent">Cyber Resilience</span><br class="d-none d-md-block">
            Before Attackers Build Access
        </h1>

        <p class="lead text-muted lead-narrow mb-4" data-reveal data-hero>
            Cyberlog delivers offensive security, managed SOC, compliance, threat intelligence,
            and innovative solutions for enterprises, government organizations, financial
            institutions, and critical infrastructure.
        </p>

        {{-- TODO: copy — hero CTA button(s) not specified in the brief --}}

        <p class="fs-5 mb-0" data-reveal data-hero>
            Join our Cyber Defense eco-system with
            <span class="cl-glow-word">hundreds</span> of other organizations!
        </p>

        {{-- Floating service chips — pop in one after another (data-hero stagger),
             then drift (desktop) + mouse parallax; static row on mobile. --}}
        <div class="cl-drift">
            <div class="cl-drift-chip"><span class="cl-drift-reveal" data-reveal data-hero><span class="cl-chip"><i class="fas fa-bug"></i>Penetration Testing</span></span></div>
            <div class="cl-drift-chip"><span class="cl-drift-reveal" data-reveal data-hero><span class="cl-chip"><i class="fas fa-desktop"></i>Security Operations Center (SOC)</span></span></div>
            <div class="cl-drift-chip"><span class="cl-drift-reveal" data-reveal data-hero><span class="cl-chip"><i class="fas fa-clipboard-check"></i>Security Audit &amp; Training</span></span></div>
            <div class="cl-drift-chip"><span class="cl-drift-reveal" data-reveal data-hero><span class="cl-chip"><i class="fas fa-user-shield"></i>vCISO</span></span></div>
        </div>

    </div>
</section>

@push('styles')
<style>
    .cl-home-hero {
        position: relative;
        min-height: 92vh;
        display: flex;
        align-items: center;
        overflow: hidden;
        isolation: isolate;
        padding: 8rem 0 4rem;
    }
    .cl-home-hero::before,
    .cl-home-hero::after {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        z-index: 1;
    }
    .cl-home-hero::before {
        background:
            radial-gradient(600px 360px at 50% 42%, rgba(7, 17, 31, 0.18), rgba(7, 17, 31, 0.72) 78%, rgba(7, 17, 31, 0.86)),
            radial-gradient(720px 440px at 84% 10%, rgba(228, 31, 61, 0.11), transparent 68%),
            radial-gradient(640px 400px at 8% 72%, rgba(109, 156, 255, 0.09), transparent 70%);
    }
    .cl-home-hero::after {
        opacity: .38;
        background:
            linear-gradient(115deg, transparent 0 44%, rgba(255, 255, 255, 0.05) 48%, transparent 52% 100%),
            linear-gradient(rgba(130, 165, 220, 0.08) 1px, transparent 1px),
            linear-gradient(90deg, rgba(130, 165, 220, 0.06) 1px, transparent 1px);
        background-size: 100% 100%, 72px 72px, 72px 72px;
        -webkit-mask-image: radial-gradient(circle at 50% 44%, rgba(0, 0, 0, .95), transparent 76%);
        mask-image: radial-gradient(circle at 50% 44%, rgba(0, 0, 0, .95), transparent 76%);
        animation: clHeroMeshDrift 18s linear infinite;
    }
    .cl-hero-canvas {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        display: block;
        opacity: .96;
        pointer-events: none;
        filter: saturate(1.12);
    }
    .cl-home-hero .container { position: relative; z-index: 2; }
    .cl-home-hero .cl-hero-heading { font-size: clamp(2.2rem, 5.5vw, 4rem); }

    @keyframes clHeroMeshDrift {
        to { background-position: 0 0, 72px 72px, 72px 72px; }
    }

    .cl-glow-word {
        color: var(--red-soft);
        font-weight: 700;
        text-shadow: 0 0 18px rgba(255, 47, 85, 0.7), 0 0 4px rgba(255, 47, 85, 0.9);
    }

    /* Chips — static centered row on mobile */
    .cl-drift {
        position: relative;
        margin-top: 2.25rem;
        display: flex;
        flex-wrap: wrap;
        gap: .6rem;
        justify-content: center;
    }
    .cl-drift-reveal { display: inline-block; }
    .cl-chip {
        display: inline-flex;
        align-items: center;
        gap: .5rem;
        font-family: 'IBM Plex Mono', monospace;
        font-size: .82rem;
        color: var(--white);
        background: rgba(15, 27, 52, 0.72);
        -webkit-backdrop-filter: blur(8px);
        backdrop-filter: blur(8px);
        border: 1px solid var(--line);
        border-left: 3px solid var(--blue-bright);
        border-radius: var(--r);
        padding: .6rem 1rem;
        white-space: nowrap;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.34);
    }
    .cl-chip i { color: var(--red-soft); }

    /* Large screens — chips float only in the top/bottom corners, kept clear of the
       vertically-centered title + subtitle. Below 1200px they fall back to the static
       centered row (above), so they can never cover the content. */
    @media (min-width: 1200px) {
        .cl-drift {
            position: absolute;
            inset: 0;
            margin: 0;
            pointer-events: none;
            z-index: 1;
        }
        .cl-drift-chip { position: absolute; will-change: transform; max-width: 28%; }
        .cl-drift-chip:nth-child(1) { top: 10%;    left: 3%; }
        .cl-drift-chip:nth-child(2) { top: 14%;    right: 3%; }
        .cl-drift-chip:nth-child(3) { bottom: 12%; left: 3%; }
        .cl-drift-chip:nth-child(4) { bottom: 10%; right: 3%; }
        .cl-drift-chip .cl-chip { animation: clDrift 7s ease-in-out infinite; }
        .cl-drift-chip:nth-child(2) .cl-chip { animation-delay: 1.2s; border-left-color: var(--red); }
        .cl-drift-chip:nth-child(3) .cl-chip { animation-delay: 2.4s; }
        .cl-drift-chip:nth-child(4) .cl-chip { animation-delay: 3.6s; border-left-color: var(--red); }
    }
    @keyframes clDrift { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-14px); } }

    @media (prefers-reduced-motion: reduce) {
        .cl-home-hero::after { animation: none !important; }
        .cl-drift-chip .cl-chip { animation: none !important; }
    }
</style>
@endpush

@push('scripts')
<script>
(function () {
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ---- Animated neural network canvas ---- */
    var c = document.getElementById('clHeroCanvas');
    if (c && c.getContext) {
        var ctx = c.getContext('2d', { alpha: true });
        var w = 0, h = 0, dpr = 1, nodes = [], links = [], signals = [];
        var mouse = { x: -9999, y: -9999, active: false };
        var raf = null, resizeTimer = null, lastTime = 0;
        var TAU = Math.PI * 2;

        function resize() {
            dpr = Math.min(window.devicePixelRatio || 1, 2);
            w = Math.max(1, c.offsetWidth);
            h = Math.max(1, c.offsetHeight);
            c.width = Math.floor(w * dpr);
            c.height = Math.floor(h * dpr);
            ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
        }
        function rand(min, max) {
            return min + Math.random() * (max - min);
        }
        function seed() {
            resize();
            var count = Math.max(44, Math.min(104, Math.floor(w * h / 12500)));
            nodes = [];
            for (var i = 0; i < count; i++) {
                var hub = Math.random() > 0.84;
                nodes.push({
                    x: Math.random() * w,
                    y: Math.random() * h,
                    vx: rand(-0.16, 0.16),
                    vy: rand(-0.14, 0.14),
                    r: hub ? rand(2.4, 4.2) : rand(1.1, 2.2),
                    hub: hub,
                    phase: Math.random() * TAU,
                    energy: rand(0.35, 1)
                });
            }

            var anchors = [
                { x: w * .12, y: h * .22 },
                { x: w * .86, y: h * .18 },
                { x: w * .18, y: h * .76 },
                { x: w * .78, y: h * .72 }
            ];
            for (var a = 0; a < anchors.length; a++) {
                nodes.push({
                    x: anchors[a].x + rand(-22, 22),
                    y: anchors[a].y + rand(-18, 18),
                    vx: rand(-0.08, 0.08),
                    vy: rand(-0.08, 0.08),
                    r: rand(3.2, 5.2),
                    hub: true,
                    phase: Math.random() * TAU,
                    energy: rand(0.75, 1)
                });
            }

            buildLinks();
            seedSignals();
        }
        function buildLinks() {
            links = [];
            var seen = {};
            var range = Math.max(132, Math.min(210, w / 6.4));
            var rangeSq = range * range;

            for (var i = 0; i < nodes.length; i++) {
                var near = [];
                for (var j = 0; j < nodes.length; j++) {
                    if (i === j) continue;
                    var dx = nodes[i].x - nodes[j].x;
                    var dy = nodes[i].y - nodes[j].y;
                    var d = dx * dx + dy * dy;
                    if (d < rangeSq) near.push({ index: j, dist: d });
                }

                near.sort(function (a, b) { return a.dist - b.dist; });
                var limit = nodes[i].hub ? 5 : 3;
                for (var k = 0; k < Math.min(limit, near.length); k++) {
                    var nIndex = near[k].index;
                    var first = Math.min(i, nIndex);
                    var second = Math.max(i, nIndex);
                    var key = first + '-' + second;
                    if (seen[key]) continue;
                    seen[key] = true;

                    links.push({
                        a: first,
                        b: second,
                        dist: Math.sqrt(near[k].dist),
                        curve: rand(-42, 42),
                        phase: Math.random() * TAU,
                        warm: Math.random() > 0.68
                    });
                }
            }
        }
        function seedSignals() {
            signals = [];
            var amount = Math.min(26, Math.max(10, Math.floor(links.length / 5)));
            for (var i = 0; i < amount; i++) {
                signals.push(makeSignal(Math.random()));
            }
        }
        function makeSignal(progress) {
            return {
                link: links.length ? Math.floor(Math.random() * links.length) : 0,
                t: progress || 0,
                speed: rand(0.0022, 0.0068),
                size: rand(1.6, 3.8),
                warm: Math.random() > 0.48
            };
        }
        function updateNodes(delta) {
            if (reduce) return;
            for (var i = 0; i < nodes.length; i++) {
                var n = nodes[i];
                n.x += n.vx * delta;
                n.y += n.vy * delta;

                if (n.x < -20) n.x = w + 20;
                if (n.x > w + 20) n.x = -20;
                if (n.y < -20) n.y = h + 20;
                if (n.y > h + 20) n.y = -20;
            }
        }
        function pointOnLink(link, t) {
            var a = nodes[link.a];
            var b = nodes[link.b];
            var mx = (a.x + b.x) / 2;
            var my = (a.y + b.y) / 2;
            var dx = b.x - a.x;
            var dy = b.y - a.y;
            var dist = Math.max(1, Math.sqrt(dx * dx + dy * dy));
            var cx = mx + (-dy / dist) * link.curve;
            var cy = my + (dx / dist) * link.curve;
            var inv = 1 - t;

            return {
                x: inv * inv * a.x + 2 * inv * t * cx + t * t * b.x,
                y: inv * inv * a.y + 2 * inv * t * cy + t * t * b.y,
                cx: cx,
                cy: cy
            };
        }
        function drawAmbientGlow(time) {
            var glow = ctx.createRadialGradient(w * .5, h * .46, 0, w * .5, h * .46, Math.max(w, h) * .55);
            glow.addColorStop(0, 'rgba(255,72,101,0.045)');
            glow.addColorStop(.34, 'rgba(109,156,255,0.052)');
            glow.addColorStop(1, 'rgba(7,17,31,0)');
            ctx.fillStyle = glow;
            ctx.fillRect(0, 0, w, h);

            if (mouse.active) {
                var mg = ctx.createRadialGradient(mouse.x, mouse.y, 0, mouse.x, mouse.y, 210);
                mg.addColorStop(0, 'rgba(255,72,101,0.18)');
                mg.addColorStop(.42, 'rgba(109,156,255,0.08)');
                mg.addColorStop(1, 'rgba(7,17,31,0)');
                ctx.fillStyle = mg;
                ctx.fillRect(0, 0, w, h);
            }
        }
        function drawLinks(time) {
            ctx.save();
            ctx.lineCap = 'round';
            for (var i = 0; i < links.length; i++) {
                var link = links[i];
                var a = nodes[link.a];
                var b = nodes[link.b];
                var p = pointOnLink(link, .5);
                var pulse = (Math.sin(time * 0.0016 + link.phase) + 1) / 2;
                var alpha = (link.warm ? .085 : .105) + pulse * .055;

                ctx.beginPath();
                ctx.moveTo(a.x, a.y);
                ctx.quadraticCurveTo(p.cx, p.cy, b.x, b.y);
                ctx.strokeStyle = link.warm
                    ? 'rgba(255,72,101,' + alpha + ')'
                    : 'rgba(109,156,255,' + alpha + ')';
                ctx.lineWidth = link.warm ? 1.05 : .92;
                ctx.stroke();

                if (a.hub || b.hub) {
                    ctx.beginPath();
                    ctx.moveTo(a.x, a.y);
                    ctx.quadraticCurveTo(p.cx, p.cy, b.x, b.y);
                    ctx.strokeStyle = 'rgba(255,255,255,' + (.018 + pulse * .025) + ')';
                    ctx.lineWidth = 2.4;
                    ctx.stroke();
                }
            }
            ctx.restore();
        }
        function drawMouseLinks() {
            if (!mouse.active) return;
            ctx.save();
            ctx.lineCap = 'round';
            for (var i = 0; i < nodes.length; i++) {
                var n = nodes[i];
                var dx = n.x - mouse.x;
                var dy = n.y - mouse.y;
                var d = dx * dx + dy * dy;
                if (d > 26000) continue;

                var alpha = 0.34 * (1 - d / 26000);
                ctx.beginPath();
                ctx.moveTo(n.x, n.y);
                ctx.quadraticCurveTo((n.x + mouse.x) / 2 + dy * .08, (n.y + mouse.y) / 2 - dx * .08, mouse.x, mouse.y);
                ctx.strokeStyle = 'rgba(255,72,101,' + alpha + ')';
                ctx.lineWidth = 1.1;
                ctx.stroke();
            }
            ctx.restore();
        }
        function drawSignals(delta) {
            if (!links.length) return;
            ctx.save();
            for (var i = 0; i < signals.length; i++) {
                var s = signals[i];
                if (!reduce) s.t += s.speed * delta;
                if (s.t > 1) {
                    signals[i] = makeSignal(s.t - 1);
                    s = signals[i];
                }

                var link = links[s.link % links.length];
                var p = pointOnLink(link, s.t);
                var back = pointOnLink(link, Math.max(0, s.t - .055));
                var color = s.warm ? '255,72,101' : '255,191,27';

                ctx.beginPath();
                ctx.moveTo(back.x, back.y);
                ctx.lineTo(p.x, p.y);
                ctx.strokeStyle = 'rgba(' + color + ',0.56)';
                ctx.lineWidth = s.size;
                ctx.shadowBlur = 16;
                ctx.shadowColor = 'rgba(' + color + ',0.72)';
                ctx.stroke();

                ctx.beginPath();
                ctx.arc(p.x, p.y, s.size * 1.12, 0, TAU);
                ctx.fillStyle = 'rgba(255,255,255,0.78)';
                ctx.fill();
                ctx.shadowBlur = 0;
            }
            ctx.restore();
        }
        function drawNodes(time) {
            for (var i = 0; i < nodes.length; i++) {
                var n = nodes[i];
                var breathe = (Math.sin(time * 0.002 + n.phase) + 1) / 2;
                var r = n.r + breathe * (n.hub ? .9 : .45);
                var glowRadius = n.hub ? r * 7 : r * 4.4;
                var grad = ctx.createRadialGradient(n.x, n.y, 0, n.x, n.y, glowRadius);

                if (n.hub) {
                    grad.addColorStop(0, 'rgba(255,255,255,0.88)');
                    grad.addColorStop(.28, 'rgba(255,72,101,0.38)');
                    grad.addColorStop(1, 'rgba(255,72,101,0)');
                } else {
                    grad.addColorStop(0, 'rgba(255,255,255,0.72)');
                    grad.addColorStop(.34, 'rgba(109,156,255,0.24)');
                    grad.addColorStop(1, 'rgba(109,156,255,0)');
                }

                ctx.beginPath();
                ctx.arc(n.x, n.y, glowRadius, 0, TAU);
                ctx.fillStyle = grad;
                ctx.fill();

                ctx.beginPath();
                ctx.arc(n.x, n.y, r, 0, TAU);
                ctx.fillStyle = n.hub ? 'rgba(255,191,27,0.92)' : 'rgba(185,211,255,0.86)';
                ctx.fill();
            }
        }
        function render(time) {
            var delta = lastTime ? Math.min(34, time - lastTime) : 16;
            lastTime = time;

            ctx.clearRect(0, 0, w, h);
            updateNodes(delta);
            drawAmbientGlow(time);
            drawLinks(time);
            drawMouseLinks();
            drawSignals(delta);
            drawNodes(time);

            if (!reduce) raf = requestAnimationFrame(render);
        }

        seed();
        render(0);
        window.addEventListener('resize', function () {
            window.clearTimeout(resizeTimer);
            resizeTimer = window.setTimeout(function () {
                if (raf) cancelAnimationFrame(raf);
                lastTime = 0;
                seed();
                render(0);
            }, 120);
        });

        var hero = document.getElementById('page-top');
        if (hero) {
            hero.addEventListener('pointermove', function (e) {
                var r = c.getBoundingClientRect();
                mouse.x = e.clientX - r.left;
                mouse.y = e.clientY - r.top;
                mouse.active = true;
                if (reduce) render(0);
            });
            hero.addEventListener('pointerleave', function () {
                mouse.x = mouse.y = -9999;
                mouse.active = false;
                if (reduce) render(0);
            });
        }
    }

    /* ---- Chip parallax (desktop only) ---- */
    if (!reduce) {
        var hero2 = document.getElementById('page-top');
        var chips = [].slice.call(document.querySelectorAll('.cl-drift-chip'));
        if (hero2 && chips.length) {
            hero2.addEventListener('mousemove', function (e) {
                if (window.innerWidth < 1200) return;
                var r = hero2.getBoundingClientRect();
                var tx = (e.clientX - r.left - r.width / 2) / r.width;
                var ty = (e.clientY - r.top - r.height / 2) / r.height;
                requestAnimationFrame(function () {
                    for (var i = 0; i < chips.length; i++) {
                        var depth = (i + 1) * 9;
                        chips[i].style.transform = 'translate(' + (tx * depth) + 'px,' + (ty * depth) + 'px)';
                    }
                });
            });
        }
    }
})();
</script>
@endpush
