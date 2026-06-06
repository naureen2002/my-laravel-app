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
            '.cl-box', '.page-section-heading', '.cl-client-card'
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
    });
})();
