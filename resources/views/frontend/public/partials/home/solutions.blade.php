{{-- Home > Security Solutions (ref: buguard.io)
     Compact solution cards inspired by Buguard's "Explore our security solutions"
     product section, adapted to Cyberlog services and routes. --}}
@php
    $u = fn ($pub, $legacy) => Route::has($pub) ? route($pub) : (Route::has($legacy) ? route($legacy) : '#');

    $solutions = [
        [
            'route' => ['public.soc', 'soc'],
            'icon' => 'fa-desktop',
            'title' => 'SOC as a Service',
            'kicker' => 'Continuous Monitoring',
            'desc' => '24/7 detection, alert triage, and response support from a mature security operations team.',
            'features' => ['Threat detection', 'Incident response', 'SIEM monitoring'],
        ],
        [
            'route' => ['public.vapt', 'vapt'],
            'icon' => 'fa-bug',
            'title' => 'VAPT / Pen Testing',
            'kicker' => 'Real-World Validation',
            'desc' => 'Find, validate, and prioritize exploitable risks across applications, networks, cloud, and APIs.',
            'features' => ['Web & API testing', 'Network testing', 'Remediation guidance'],
        ],
        [
            'route' => ['public.it-audit', 'it-audit'],
            'icon' => 'fa-clipboard-check',
            'title' => 'IT Audit &amp; ISO 27001',
            'kicker' => 'Compliance Readiness',
            'desc' => 'Map controls, close governance gaps, and prepare your organization for security audits.',
            'features' => ['GRC review', 'ISO 27001 support', 'Control mapping'],
        ],
        [
            'route' => ['public.capacity-building', 'capacity-building'],
            'icon' => 'fa-graduation-cap',
            'title' => 'Capacity Building',
            'kicker' => 'Human Defense',
            'desc' => 'Build practical security habits across teams with awareness, technical, and role-based training.',
            'features' => ['Awareness training', 'Technical workshops', 'Phishing readiness'],
        ],
        [
            'route' => ['public.defense-services', 'defense-services'],
            'icon' => 'fa-tower-broadcast',
            'title' => 'Defense Services',
            'kicker' => 'Threat Resilience',
            'desc' => 'Strengthen detection, response, firewall management, backup, and recovery operations.',
            'features' => ['Threat intelligence', 'Firewall management', 'Backup & recovery'],
        ],
        [
            'route' => ['public.malware-analysis', 'public.malware-analysis'],
            'icon' => 'fa-microscope',
            'title' => 'Malware Analysis &amp; Forensics',
            'kicker' => 'Investigation Support',
            'desc' => 'Analyze malicious software, uncover evidence, and translate incidents into practical containment and prevention steps.',
            'features' => ['Malware behavior', 'Evidence analysis', 'Incident findings'],
        ],
        [
            'route' => ['public.backup-recovery', 'public.backup-recovery'],
            'icon' => 'fa-shield-virus',
            'title' => 'Firewall, Backup &amp; Recovery',
            'kicker' => 'Operational Resilience',
            'desc' => 'Harden network defenses and prepare recovery paths so critical data and services can survive disruption.',
            'features' => ['NGF protection', 'Secure backups', 'Recovery planning'],
        ],
        [
            'route' => ['public.vciso', 'vciso'],
            'icon' => 'fa-user-shield',
            'title' => 'vCISO',
            'kicker' => 'Security Leadership',
            'desc' => 'Get executive security strategy, governance, and roadmap ownership without a full-time hire.',
            'features' => ['Security roadmap', 'Board reporting', 'Risk governance'],
        ],
    ];
@endphp

<section class="page-section cl-solutions-section" id="solutions">
    <div class="container">
        <div class="cl-solutions-head">
            <div>
                <p class="section-eyebrow mb-2" data-reveal>Security Solutions</p>
                <h2 class="page-section-heading text-secondary mb-0" data-reveal>Explore Our <span class="cl-title-accent">Security Solutions</span></h2>
            </div>
            <p class="cl-solutions-copy text-muted mb-0" data-reveal>
                From continuous monitoring to hands-on validation, Cyberlog helps security teams reduce real exposure before attackers can turn it into impact.
            </p>
        </div>

        <div class="cl-solutions-grid">
            @foreach ($solutions as $solution)
                <a class="cl-solution-tile" href="{{ $u($solution['route'][0], $solution['route'][1]) }}" data-reveal>
                    <div class="cl-solution-top">
                        <span class="cl-solution-mark"><i class="fas {{ $solution['icon'] }}"></i></span>
                        <span class="cl-solution-kicker">{{ $solution['kicker'] }}</span>
                    </div>
                    <h3 class="cl-solution-title">{!! $solution['title'] !!}</h3>
                    <p class="cl-solution-desc">{{ $solution['desc'] }}</p>
                    <div class="cl-solution-features">
                        @foreach ($solution['features'] as $feature)
                            <span>{{ $feature }}</span>
                        @endforeach
                    </div>
                    <span class="cl-solution-link">Learn more <i class="fas fa-arrow-right"></i></span>
                </a>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-solutions-section { background: linear-gradient(180deg, rgba(11, 24, 48, 0.64), rgba(7, 17, 31, 0.2)); }
    .cl-solutions-head {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(280px, 420px);
        gap: 2rem;
        align-items: end;
        margin-bottom: 2rem;
    }
    .cl-solutions-copy { font-size: .98rem; line-height: 1.7; }

    .cl-solutions-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 1rem;
    }
    .cl-solution-tile {
        min-height: 320px;
        display: flex;
        flex-direction: column;
        padding: 1.35rem;
        border: 1px solid var(--line);
        border-radius: 8px;
        background:
            linear-gradient(160deg, rgba(16, 31, 58, 0.96), rgba(11, 24, 48, 0.94)) padding-box,
            linear-gradient(130deg, rgba(109, 156, 255, 0.45), rgba(228, 31, 61, 0.2)) border-box;
        color: var(--text);
        text-decoration: none;
        overflow: hidden;
        position: relative;
        transition: transform .24s var(--ease), border-color .24s var(--ease), box-shadow .24s var(--ease);
    }
    .cl-solution-tile::before {
        content: "";
        position: absolute;
        inset: 0 0 auto;
        height: 3px;
        background: linear-gradient(90deg, var(--blue-bright), var(--red-soft));
        transform: scaleX(.28);
        transform-origin: left;
        transition: transform .28s var(--ease);
    }
    .cl-solution-tile:hover {
        transform: translateY(-5px);
        border-color: rgba(109, 156, 255, 0.52);
        box-shadow: 0 1rem 2.2rem rgba(0, 0, 0, 0.34);
        color: var(--text);
    }
    .cl-solution-tile:hover::before { transform: scaleX(1); }

    .cl-solution-top { display: flex; align-items: center; justify-content: space-between; gap: 1rem; margin-bottom: 1.2rem; }
    .cl-solution-mark {
        width: 46px; height: 46px;
        display: grid; place-items: center;
        border-radius: 8px;
        background: var(--blue-dim);
        color: var(--blue-bright);
        border: 1px solid rgba(109, 156, 255, 0.22);
        font-size: 1.08rem;
    }
    .cl-solution-kicker {
        font-family: 'IBM Plex Mono', monospace;
        font-size: .66rem;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--warm-soft);
        text-align: right;
    }
    .cl-solution-title {
        font-family: 'Chakra Petch', sans-serif;
        color: var(--white);
        font-size: 1.24rem;
        line-height: 1.2;
        margin-bottom: .7rem;
    }
    .cl-solution-desc { color: var(--muted); font-size: .92rem; line-height: 1.55; margin-bottom: 1.1rem; }
    .cl-solution-features { display: flex; flex-wrap: wrap; gap: .45rem; margin-top: auto; margin-bottom: 1.1rem; }
    .cl-solution-features span {
        font-size: .72rem;
        color: var(--text);
        border: 1px solid var(--line);
        border-radius: 999px;
        padding: .28rem .62rem;
        background: rgba(255, 255, 255, 0.035);
    }
    .cl-solution-link {
        display: inline-flex;
        align-items: center;
        gap: .45rem;
        color: var(--blue-bright);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .82rem;
        font-weight: 600;
    }
    .cl-solution-link i { transition: transform .2s var(--ease); }
    .cl-solution-tile:hover .cl-solution-link i { transform: translateX(4px); }

    @media (max-width: 991.98px) {
        .cl-solutions-head { grid-template-columns: 1fr; align-items: start; }
        .cl-solutions-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    }
    @media (max-width: 575.98px) {
        .cl-solutions-grid { grid-template-columns: 1fr; }
        .cl-solution-tile { min-height: 0; }
    }
</style>
@endpush
