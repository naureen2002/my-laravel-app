/* Cyberlog — Threat Console interactions
 * Scroll-reveal, count-up stats, and a live threat-feed ticker.
 * Degrades gracefully: without JS, all content is visible and static.
 */
(function () {
    'use strict';

    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Mark JS active so CSS can hide-then-reveal (no-JS keeps everything visible)
    document.documentElement.classList.add('js');

    document.addEventListener('DOMContentLoaded', function () {

        /* ---------- Scroll reveal ---------- */
        // Tag common components so every page animates without per-page edits.
        var autoSelectors = [
            '.cl-step', '.cl-solution-card', '.cl-benefit', '.cl-case-card',
            '.cl-review', '.cl-price-card', '.cl-capability', '.cl-journey-item',
            '.cl-box', '.page-section-heading', '.cl-client-card', '.section-eyebrow'
        ];
        autoSelectors.forEach(function (sel) {
            document.querySelectorAll(sel).forEach(function (el) {
                if (!el.hasAttribute('data-reveal')) el.setAttribute('data-reveal', '');
            });
        });

        var reveal = document.querySelectorAll('[data-reveal]');

        if (reduce || !('IntersectionObserver' in window)) {
            reveal.forEach(function (el) { el.classList.add('is-in'); });
        } else {
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) return;
                    var el = entry.target;
                    // stagger by position among siblings
                    var sibs = Array.prototype.slice.call(el.parentNode.children);
                    var i = sibs.indexOf(el);
                    el.style.transitionDelay = Math.min(i, 8) * 70 + 'ms';
                    el.classList.add('is-in');
                    io.unobserve(el);
                });
            }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });

            reveal.forEach(function (el) { io.observe(el); });

            // Hero items are above the fold — reveal immediately with stagger
            document.querySelectorAll('[data-reveal][data-hero]').forEach(function (el, i) {
                el.style.transitionDelay = i * 110 + 'ms';
                requestAnimationFrame(function () { el.classList.add('is-in'); });
                io.unobserve(el);
            });
        }

        /* ---------- Count-up stats ---------- */
        function animateCount(el) {
            var target = parseFloat(el.getAttribute('data-count'));
            var suffix = el.getAttribute('data-suffix') || '';
            var decimals = (el.getAttribute('data-decimals') | 0);
            if (reduce) { el.textContent = target.toFixed(decimals) + suffix; return; }
            var start = performance.now(), dur = 1400;
            function tick(now) {
                var p = Math.min((now - start) / dur, 1);
                var eased = 1 - Math.pow(1 - p, 3);
                el.textContent = (target * eased).toFixed(decimals) + suffix;
                if (p < 1) requestAnimationFrame(tick);
            }
            requestAnimationFrame(tick);
        }
        var counters = document.querySelectorAll('[data-count]');
        if (counters.length) {
            if (!('IntersectionObserver' in window)) {
                counters.forEach(animateCount);
            } else {
                var cio = new IntersectionObserver(function (entries) {
                    entries.forEach(function (e) {
                        if (e.isIntersecting) { animateCount(e.target); cio.unobserve(e.target); }
                    });
                }, { threshold: 0.4 });
                counters.forEach(function (el) { cio.observe(el); });
            }
        }

        /* ---------- Live threat feed ---------- */
        var feed = document.getElementById('cl-feed');
        if (feed && !reduce) {
            var events = [
                ['crit', 'BLOCKED', 'brute-force attempt · 203.0.113.* '],
                ['ok', 'CLEAN', 'endpoint scan · 1,204 assets'],
                ['warn', 'TRIAGE', 'anomalous login · finance-vlan'],
                ['ok', 'PATCHED', 'CVE-2026-1180 · 38 hosts'],
                ['crit', 'QUARANTINE', 'malware sample · sandbox-07'],
                ['ok', 'VERIFIED', 'MFA challenge · success'],
                ['warn', 'WATCH', 'data egress spike · 4.2GB'],
                ['ok', 'CONTAINED', 'phishing url · sinkholed'],
                ['crit', 'DENIED', 'lateral move · host-1142'],
                ['ok', 'SYNCED', 'threat intel feed · updated']
            ];
            function ts() {
                var d = new Date();
                return d.toTimeString().slice(0, 8);
            }
            function push() {
                var ev = events[Math.floor(Math.random() * events.length)];
                var line = document.createElement('div');
                line.className = 'cl-feed-line';
                line.innerHTML = '<span class="ts">' + ts() + '</span>' +
                    '<span class="' + ev[0] + '">[' + ev[1] + ']</span>' +
                    '<span>' + ev[2] + '</span>';
                feed.insertBefore(line, feed.firstChild);
                while (feed.children.length > 6) feed.removeChild(feed.lastChild);
            }
            push(); push(); push();
            setInterval(push, 1900);
        }

        /* ---------- Reusable particle network (any <canvas data-net>) ---------- */
        document.querySelectorAll('canvas[data-net]').forEach(function (cv) {
            var nctx = cv.getContext && cv.getContext('2d');
            if (!nctx) return;
            var nw, nh, pts = [], mp = { x: -9999, y: -9999 };
            function nsize() { nw = cv.width = cv.offsetWidth; nh = cv.height = cv.offsetHeight; }
            function nseed() {
                nsize();
                var ct = Math.max(22, Math.min(80, Math.floor(nw * nh / 16000)));
                pts = [];
                for (var i = 0; i < ct; i++) {
                    pts.push({ x: Math.random() * nw, y: Math.random() * nh, vx: (Math.random() - 0.5) * 0.32, vy: (Math.random() - 0.5) * 0.32 });
                }
            }
            function nrender() {
                nctx.clearRect(0, 0, nw, nh);
                for (var i = 0; i < pts.length; i++) {
                    var n = pts[i];
                    if (!reduce) { n.x += n.vx; n.y += n.vy; if (n.x < 0 || n.x > nw) n.vx *= -1; if (n.y < 0 || n.y > nh) n.vy *= -1; }
                    nctx.beginPath(); nctx.arc(n.x, n.y, 1.5, 0, 6.2832); nctx.fillStyle = 'rgba(120,160,255,0.7)'; nctx.fill();
                    for (var j = i + 1; j < pts.length; j++) {
                        var m = pts[j], dx = n.x - m.x, dy = n.y - m.y, d = dx * dx + dy * dy;
                        if (d < 14000) {
                            nctx.beginPath(); nctx.moveTo(n.x, n.y); nctx.lineTo(m.x, m.y);
                            nctx.strokeStyle = 'rgba(91,140,255,' + (0.13 * (1 - d / 14000)) + ')'; nctx.lineWidth = 1; nctx.stroke();
                        }
                    }
                    var ux = n.x - mp.x, uy = n.y - mp.y, ud = ux * ux + uy * uy;
                    if (ud < 22000) {
                        nctx.beginPath(); nctx.moveTo(n.x, n.y); nctx.lineTo(mp.x, mp.y);
                        nctx.strokeStyle = 'rgba(255,47,85,' + (0.5 * (1 - ud / 22000)) + ')'; nctx.lineWidth = 1; nctx.stroke();
                    }
                }
                if (!reduce) requestAnimationFrame(nrender);
            }
            nseed(); nrender();
            window.addEventListener('resize', nseed);
            var host = cv.closest('section, header') || cv.parentElement;
            host.addEventListener('mousemove', function (e) { var r = cv.getBoundingClientRect(); mp.x = e.clientX - r.left; mp.y = e.clientY - r.top; if (reduce) nrender(); });
            host.addEventListener('mouseleave', function () { mp.x = mp.y = -9999; if (reduce) nrender(); });
        });
    });
})();
