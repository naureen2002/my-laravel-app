@php
    $tiers = ['Standard VAPT', 'Advanced VAPT', 'Red Team'];
    $rows = [
        ['Automated vulnerability discovery', 1, 1, 1],
        ['Manual exploit validation', 1, 1, 1],
        ['Authentication and authorization testing', 1, 1, 1],
        ['Business logic abuse cases', 0, 1, 1],
        ['Privilege escalation and lateral movement', 0, 1, 1],
        ['Cloud and identity attack paths', 0, 1, 1],
        ['Social engineering simulation', 0, 0, 1],
        ['Executive risk briefing', 0, 1, 1],
        ['Remediation workshop', 1, 1, 1],
        ['Post-remediation retest', 0, 1, 1],
    ];
@endphp

<section class="page-section cl-vapt-matrix-section" id="matrix">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>VAPT Matrix</p>
        <h2 class="page-section-heading text-center text-secondary mb-5" data-reveal>Choose the Right Testing Depth</h2>

        <div class="cl-vapt-matrix-wrap" data-reveal>
            <div class="table-responsive">
                <table class="table align-middle text-center cl-vapt-matrix mb-0">
                    <thead>
                        <tr>
                            <th class="text-start">Coverage</th>
                            @foreach ($tiers as $tier)
                                <th>{{ $tier }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $row)
                            <tr>
                                <td class="text-start fw-semibold">{{ $row[0] }}</td>
                                @for ($i = 1; $i <= 3; $i++)
                                    <td>
                                        @if ($row[$i])
                                            <i class="fas fa-circle-check"></i>
                                        @else
                                            <i class="fas fa-minus"></i>
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

@push('styles')
<style>
    .cl-vapt-matrix-section {
        background:
            radial-gradient(720px 380px at 12% 8%, rgba(109, 156, 255, .08), transparent 62%),
            linear-gradient(180deg, rgba(7, 17, 31, .98), rgba(5, 12, 23, .98));
    }
    .cl-vapt-matrix-wrap {
        overflow: hidden;
        border: 1px solid var(--line);
        border-radius: 8px;
        background: rgba(16, 31, 58, .72);
        box-shadow: 0 28px 76px rgba(0, 0, 0, .42);
    }
    .cl-vapt-matrix {
        min-width: 760px;
        color: var(--text);
        --bs-table-bg: transparent;
        --bs-table-color: var(--text);
        --bs-table-border-color: var(--line);
    }
    .cl-vapt-matrix thead th {
        padding: 1rem;
        color: var(--white);
        background: linear-gradient(120deg, rgba(228, 31, 61, .88), rgba(18, 58, 120, .82));
        border-color: rgba(255, 255, 255, .1);
        font-family: 'Chakra Petch', sans-serif;
        font-size: .94rem;
    }
    .cl-vapt-matrix tbody td {
        padding: .92rem 1rem;
        color: var(--text);
        border-color: var(--line);
    }
    .cl-vapt-matrix tbody tr:hover td {
        background: rgba(255, 72, 101, .08);
    }
    .cl-vapt-matrix .fa-circle-check {
        color: var(--warm-soft);
        filter: drop-shadow(0 0 10px rgba(255, 138, 0, .24));
    }
    .cl-vapt-matrix .fa-minus {
        color: rgba(201, 216, 245, .42);
    }
</style>
@endpush
