{{-- Home > Our Story (ref: underdefense.com/about-us)
     Rising growth timeline adapted from the reference's "Story of Our Growth" chart. --}}
@php
    $milestones = [
        [
            'year' => '2017',
            'title' => 'Focused security practice',
            'text' => 'Cyberlog begins as a focused cybersecurity team helping organizations understand and reduce practical security risk.',
            'x' => 7,
            'y' => 86,
        ],
        [
            'year' => '2019',
            'title' => 'Offensive security expands',
            'text' => 'VAPT, penetration testing, and security assessments become core delivery tracks for enterprise and public-sector systems.',
            'x' => 25,
            'y' => 76,
        ],
        [
            'year' => '2021',
            'title' => 'Compliance and governance',
            'text' => 'Cyberlog strengthens GRC, IT audit, and ISO 27001 readiness services for organizations with growing assurance needs.',
            'x' => 47,
            'y' => 65,
        ],
        [
            'year' => '2023',
            'title' => 'Managed defense capability',
            'text' => 'SOC support, incident response, threat intelligence, and managed defense services mature into a fuller cyber defense portfolio.',
            'x' => 65,
            'y' => 50,
        ],
        [
            'year' => '2025',
            'title' => 'Trusted across critical sectors',
            'text' => 'Government, finance, education, and enterprise clients rely on Cyberlog for measurable cyber resilience and long-term partnership.',
            'x' => 87,
            'y' => 34,
        ],
    ];
@endphp

<section class="page-section cl-story-section" id="our-story">
    <div class="container">
        <div class="cl-story-head">
            <div>
                <p class="section-eyebrow mb-2" data-reveal>Our Story</p>
                <h2 class="cl-story-title" data-reveal>
                    The Story of<br><span>Our Growth</span>
                </h2>
            </div>
            <p class="cl-story-intro text-muted mb-0" data-reveal>
                Cyberlog has grown from hands-on security assessment work into a cyber defense partner
                covering offensive testing, managed operations, compliance, training, and advisory.
            </p>
        </div>

        <div class="cl-story-chart" data-reveal>
            <div class="cl-story-watermark" aria-hidden="true">Cyberlog</div>

            <svg class="cl-story-lines" viewBox="0 0 1000 440" preserveAspectRatio="none" aria-hidden="true">
                <defs>
                    <linearGradient id="clStoryLine" x1="0" y1="0" x2="1" y2="0">
                        <stop offset="0%" style="stop-color: var(--warm)" />
                        <stop offset="58%" style="stop-color: var(--warm-soft)" />
                        <stop offset="100%" style="stop-color: var(--red-soft)" />
                    </linearGradient>
                </defs>
                <path class="cl-story-terrain" d="M0 420 C100 360 180 390 275 320 C360 260 455 320 560 240 C660 155 735 185 815 95 C890 30 945 48 1000 8 L1000 440 L0 440 Z" />
                <path class="cl-story-grid-line" d="M0 405 C100 350 190 372 285 315 C390 255 460 298 570 230 C670 150 740 172 820 86 C890 24 950 42 1000 10" />
                <path class="cl-story-growth-line" pathLength="1" d="M0 405 C100 350 190 372 285 315 C390 255 460 298 570 230 C670 150 740 172 820 86 C890 24 950 42 1000 10" />
            </svg>

            @foreach ($milestones as $milestone)
                <article class="cl-story-milestone" style="--x: {{ $milestone['x'] }}%; --y: {{ $milestone['y'] }}%;">
                    <span class="cl-story-dot" aria-hidden="true"></span>
                    <div class="cl-story-stem" aria-hidden="true"></div>
                    <div class="cl-story-card">
                        <span class="cl-story-year">{{ $milestone['year'] }}</span>
                        <h3>{{ $milestone['title'] }}</h3>
                        <p>{{ $milestone['text'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="cl-story-stats" data-reveal>
            <div><strong>14+</strong><span>Enterprise and government clients</span></div>
            <div><strong>24/7</strong><span>Security operations coverage</span></div>
            <div><strong>500+</strong><span>Users protected across services</span></div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-story-section {
        overflow: hidden;
        background:
            radial-gradient(800px 420px at 82% 12%, rgba(255, 72, 101, 0.12), transparent 58%),
            linear-gradient(180deg, rgba(7, 17, 31, 0.34), rgba(11, 24, 48, 0.72));
    }
    .cl-story-head {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(280px, 430px);
        gap: 2rem;
        align-items: end;
        margin-bottom: 2.2rem;
    }
    .cl-story-title {
        margin: 0;
        font-family: 'Chakra Petch', sans-serif;
        font-size: clamp(2.4rem, 7vw, 5.8rem);
        line-height: .86;
        text-transform: uppercase;
        color: var(--white);
    }
    .cl-story-title span { color: var(--warm-soft); }
    .cl-story-intro { line-height: 1.7; }

    .cl-story-chart {
        position: relative;
        min-height: 560px;
        border: 1px solid var(--line);
        border-radius: 8px;
        background:
            radial-gradient(780px 380px at 82% 6%, rgba(255, 72, 101, 0.15), transparent 62%),
            radial-gradient(740px 430px at 4% 98%, rgba(109, 156, 255, 0.12), transparent 64%),
            linear-gradient(180deg, rgba(16, 31, 58, 0.96), rgba(7, 17, 31, 0.98));
        overflow: hidden;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.42);
    }
    .cl-story-chart::before {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background:
            linear-gradient(rgba(130, 165, 220, 0.055) 1px, transparent 1px),
            linear-gradient(90deg, rgba(130, 165, 220, 0.045) 1px, transparent 1px),
            linear-gradient(115deg, transparent 0 46%, rgba(255, 255, 255, 0.045) 49%, transparent 52% 100%);
        background-size: 54px 54px, 54px 54px, 100% 100%;
        opacity: .72;
    }
    .cl-story-watermark {
        position: absolute;
        left: 4%;
        top: -1rem;
        font-family: 'Chakra Petch', sans-serif;
        font-size: clamp(4rem, 14vw, 10rem);
        line-height: .8;
        font-weight: 700;
        text-transform: uppercase;
        color: rgba(238, 245, 255, 0.035);
        text-shadow: 0 0 42px rgba(109, 156, 255, 0.1);
        pointer-events: none;
        user-select: none;
    }
    .cl-story-lines {
        position: absolute;
        inset: auto 0 0;
        width: 100%;
        height: 78%;
    }
    .cl-story-terrain { fill: rgba(109, 156, 255, 0.055); }
    .cl-story-grid-line {
        fill: none;
        stroke: rgba(130, 165, 220, 0.14);
        stroke-width: 26;
        stroke-linecap: round;
    }
    .cl-story-growth-line {
        fill: none;
        stroke: url(#clStoryLine);
        stroke-width: 6;
        stroke-linecap: round;
        stroke-dasharray: 1;
        stroke-dashoffset: 1;
        animation: clStoryDraw 1.5s var(--ease) .25s forwards;
        filter: drop-shadow(0 5px 8px rgba(255, 138, 0, 0.24));
    }
    @keyframes clStoryDraw { to { stroke-dashoffset: 0; } }

    .cl-story-milestone {
        position: absolute;
        left: var(--x);
        top: 0;
        height: var(--y);
        width: min(230px, 22vw);
        transform: translateX(-50%);
        color: var(--text);
    }
    .cl-story-dot {
        position: absolute;
        left: 50%;
        bottom: -6px;
        width: 12px;
        height: 12px;
        transform: translate(-50%, -50%);
        border-radius: 999px;
        background: var(--warm-soft);
        box-shadow:
            0 0 0 5px rgba(7, 17, 31, 0.78),
            0 0 22px rgba(255, 72, 101, 0.58);
        z-index: 3;
    }
    .cl-story-stem {
        position: absolute;
        left: 50%;
        top: 148px;
        bottom: 0;
        width: 1px;
        margin-inline: auto;
        background: linear-gradient(180deg, rgba(255, 191, 27, 0.08), rgba(255, 72, 101, 0.58));
    }
    .cl-story-card {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        padding: .65rem .75rem;
        border-left: 1px solid rgba(255, 191, 27, 0.2);
        background: linear-gradient(90deg, rgba(7, 17, 31, 0.58), rgba(7, 17, 31, 0));
        -webkit-backdrop-filter: blur(3px);
        backdrop-filter: blur(3px);
    }
    .cl-story-year {
        display: block;
        margin-bottom: .48rem;
        font-family: 'IBM Plex Mono', monospace;
        font-weight: 700;
        color: var(--warm);
        font-size: .78rem;
    }
    .cl-story-card h3 {
        color: var(--white);
        font-size: .94rem;
        line-height: 1.18;
        margin-bottom: .45rem;
    }
    .cl-story-card p {
        color: var(--muted);
        font-size: .78rem;
        line-height: 1.42;
        margin: 0;
    }

    .cl-story-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        margin-top: 1rem;
    }
    .cl-story-stats div {
        display: flex;
        align-items: center;
        gap: .85rem;
        padding: 1rem 1.1rem;
        border: 1px solid var(--line);
        border-radius: 8px;
        background: rgba(16, 31, 58, 0.72);
    }
    .cl-story-stats strong {
        font-family: 'Chakra Petch', sans-serif;
        color: var(--warm-soft);
        font-size: 1.65rem;
        line-height: 1;
    }
    .cl-story-stats span { color: var(--muted); font-size: .88rem; line-height: 1.35; }

    @media (max-width: 991.98px) {
        .cl-story-head { grid-template-columns: 1fr; align-items: start; }
        .cl-story-chart {
            min-height: 0;
            padding: 1rem;
            background:
                radial-gradient(620px 320px at 96% 0%, rgba(255, 72, 101, 0.14), transparent 62%),
                linear-gradient(180deg, rgba(16, 31, 58, 0.96), rgba(7, 17, 31, 0.98));
        }
        .cl-story-lines, .cl-story-watermark { display: none; }
        .cl-story-milestone {
            position: relative;
            left: auto;
            top: auto;
            width: auto;
            transform: none;
            display: grid;
            grid-template-columns: 70px minmax(0, 1fr);
            gap: 1rem;
            padding: 1rem 0;
            border-bottom: 1px solid var(--line);
        }
        .cl-story-milestone:last-child { border-bottom: 0; }
        .cl-story-stem, .cl-story-dot { display: none; }
        .cl-story-card {
            position: static;
            grid-column: 2;
            padding: 0;
        }
        .cl-story-year {
            grid-column: 1;
            grid-row: 1;
            margin: 0;
            padding-top: .05rem;
        }
    }
    @media (max-width: 767.98px) {
        .cl-story-stats { grid-template-columns: 1fr; }
    }
    @media (prefers-reduced-motion: reduce) {
        .cl-story-growth-line { animation: none !important; stroke-dashoffset: 0; }
    }
</style>
@endpush
