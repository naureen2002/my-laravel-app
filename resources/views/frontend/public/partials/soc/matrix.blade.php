{{-- SOC › Capability matrix (ref: underdefense.com) --}}
@php
    $caps = [
        ['24/7 Monitoring & Triage', 1, 1, 1],
        ['SIEM Management', 1, 1, 1],
        ['Compliance Reporting', 1, 1, 1],
        ['Threat Intelligence Feeds', 0, 1, 1],
        ['Managed Detection & Response (MDR)', 0, 1, 1],
        ['Proactive Threat Hunting', 0, 0, 1],
        ['Incident Response Retainer', 0, 0, 1],
        ['Dedicated SOC Analyst', 0, 0, 1],
    ];
    $tiers = ['Essential', 'Advanced', 'Enterprise'];
@endphp

<section class="page-section bg-light" id="matrix">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>Coverage Matrix</p>
        <h2 class="page-section-heading text-center text-secondary mb-5" data-reveal>What's Included in Each Tier</h2>

        <div class="cl-cmp-wrap" data-reveal>
            <div class="table-responsive">
                <table class="table align-middle text-center cl-compare cl-cmp mb-0">
                    <thead>
                        <tr>
                            <th class="text-start">Capability</th>
                            @foreach ($tiers as $t)<th>{{ $t }}</th>@endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($caps as $cap)
                            <tr>
                                <td class="text-start fw-semibold">{{ $cap[0] }}</td>
                                @for ($i = 1; $i <= 3; $i++)
                                    <td>
                                        @if ($cap[$i])
                                            <i class="fas fa-circle-check text-primary"></i>
                                        @else
                                            <i class="fas fa-minus text-muted"></i>
                                        @endif
                                    </td>
                                @endfor
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
