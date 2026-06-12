@php
    $steps = [
        ['icon' => 'fa-binoculars', 'title' => 'Recon', 'text' => 'Map exposed assets, identities, services, and entry points.'],
        ['icon' => 'fa-magnifying-glass-chart', 'title' => 'Scan', 'text' => 'Discover vulnerabilities across apps, APIs, hosts, and cloud surfaces.'],
        ['icon' => 'fa-bug', 'title' => 'Validate', 'text' => 'Safely prove exploitability and remove false positives.'],
        ['icon' => 'fa-route', 'title' => 'Attack Path', 'text' => 'Connect findings into realistic compromise scenarios.'],
        ['icon' => 'fa-file-shield', 'title' => 'Report', 'text' => 'Prioritize findings with business impact and remediation guidance.'],
        ['icon' => 'fa-rotate', 'title' => 'Retest', 'text' => 'Verify fixes and document closed risk.'],
    ];
@endphp

<section class="page-section cl-vapt-posture" id="posture">
    <div class="container">
        <div class="text-center mb-5">
            <p class="section-eyebrow mb-2" data-reveal>Security Posture Diagram</p>
            <h2 class="page-section-heading text-secondary mb-3" data-reveal>From Exposure to Verified Remediation</h2>
            <p class="text-muted lead-narrow mb-0" data-reveal>
                VAPT is not just scanning. Cyberlog maps your attack surface, validates the real
                business impact, and helps your team raise its security posture with evidence.
            </p>
        </div>

        <div class="cl-vapt-posture-grid" data-reveal>
            <div class="cl-vapt-posture-map">
                <div class="cl-vapt-posture-core">
                    <small>Posture</small>
                    <strong>360</strong>
                    <span>Risk View</span>
                </div>

                @foreach ($steps as $i => $step)
                    <article class="cl-vapt-posture-node cl-vapt-posture-node-{{ $i + 1 }}">
                        <i class="fas {{ $step['icon'] }}"></i>
                        <h3>{{ $step['title'] }}</h3>
                        <p>{{ $step['text'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-vapt-posture {
        background:
            radial-gradient(760px 420px at 18% 14%, rgba(109, 156, 255, .08), transparent 62%),
            linear-gradient(180deg, rgba(7, 17, 31, .96), rgba(11, 24, 48, .9));
    }
    .cl-vapt-posture-map {
        position: relative;
        min-height: 610px;
        border: 1px solid var(--line);
        border-radius: 8px;
        overflow: hidden;
        background:
            radial-gradient(circle at 50% 50%, rgba(255, 72, 101, .13), transparent 22%),
            radial-gradient(circle at 50% 50%, rgba(109, 156, 255, .08), transparent 38%),
            linear-gradient(145deg, rgba(16, 31, 58, .78), rgba(5, 12, 23, .96));
        box-shadow: 0 32px 86px rgba(0, 0, 0, .42);
    }
    .cl-vapt-posture-map::before,
    .cl-vapt-posture-map::after {
        content: "";
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        pointer-events: none;
    }
    .cl-vapt-posture-map::before {
        width: 62%;
        aspect-ratio: 1;
        border: 1px dashed rgba(130, 165, 220, .2);
    }
    .cl-vapt-posture-map::after {
        width: 36%;
        aspect-ratio: 1;
        border: 1px solid rgba(255, 72, 101, .22);
        box-shadow: 0 0 42px rgba(255, 72, 101, .12);
    }
    .cl-vapt-posture-core {
        position: absolute;
        left: 50%;
        top: 50%;
        width: 150px;
        height: 150px;
        transform: translate(-50%, -50%);
        z-index: 2;
        display: grid;
        place-items: center;
        align-content: center;
        border-radius: 50%;
        border: 1px solid rgba(255, 191, 27, .35);
        background: radial-gradient(circle at 50% 26%, rgba(255, 191, 27, .17), rgba(7, 17, 31, .94));
        box-shadow: 0 0 45px rgba(228, 31, 61, .22);
    }
    .cl-vapt-posture-core small,
    .cl-vapt-posture-core span {
        color: var(--muted);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .7rem;
        letter-spacing: .1em;
        text-transform: uppercase;
    }
    .cl-vapt-posture-core strong {
        color: var(--warm-soft);
        font-family: 'Chakra Petch', sans-serif;
        font-size: 3rem;
        line-height: 1;
    }
    .cl-vapt-posture-node {
        position: absolute;
        z-index: 3;
        width: min(245px, 27vw);
        padding: 1rem;
        border: 1px solid var(--line);
        border-radius: 8px;
        background: rgba(7, 17, 31, .82);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
    }
    .cl-vapt-posture-node i {
        color: var(--warm-soft);
        font-size: 1.25rem;
        margin-bottom: .75rem;
    }
    .cl-vapt-posture-node h3 {
        margin-bottom: .35rem;
        font-size: 1rem;
    }
    .cl-vapt-posture-node p {
        color: var(--muted);
        font-size: .82rem;
        line-height: 1.45;
        margin: 0;
    }
    .cl-vapt-posture-node-1 { left: 8%; top: 12%; }
    .cl-vapt-posture-node-2 { right: 8%; top: 12%; }
    .cl-vapt-posture-node-3 { left: 4%; top: 45%; }
    .cl-vapt-posture-node-4 { right: 4%; top: 45%; }
    .cl-vapt-posture-node-5 { left: 16%; bottom: 10%; }
    .cl-vapt-posture-node-6 { right: 16%; bottom: 10%; }

    @media (max-width: 991.98px) {
        .cl-vapt-posture-map {
            min-height: 0;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: .85rem;
            padding: 1rem;
        }
        .cl-vapt-posture-map::before,
        .cl-vapt-posture-map::after,
        .cl-vapt-posture-core {
            display: none;
        }
        .cl-vapt-posture-node {
            position: static;
            width: auto;
        }
    }
    @media (max-width: 575.98px) {
        .cl-vapt-posture-map {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush
