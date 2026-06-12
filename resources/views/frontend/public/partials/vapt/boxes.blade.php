@php
    $boxes = [
        [
            'class' => 'black',
            'title' => 'Black Box',
            'conditions' => 'We test with minimal information, similar to an external attacker discovering your organization from the outside.',
            'value' => 'Best for validating real-world exposure, internet-facing attack paths, and unknown technical or human-risk weaknesses.',
        ],
        [
            'class' => 'grey',
            'title' => 'Grey Box',
            'conditions' => 'We test with limited business context, selected credentials, and general infrastructure or application information.',
            'value' => 'A balanced approach that improves testing depth and speed while keeping the engagement cost-effective.',
        ],
        [
            'class' => 'white',
            'title' => 'White Box',
            'conditions' => 'We test with full knowledge such as architecture, accounts, source details, and system context.',
            'value' => 'Best for uncovering deeper security flaws, hidden logic issues, and code or architecture risks missed by other approaches.',
        ],
    ];
@endphp

<section class="page-section cl-vapt-box-section" id="box-types">
    <div class="container">
        <div class="text-center mb-5">
            <p class="section-eyebrow mb-2" data-reveal>Testing Approaches</p>
            <h2 class="page-section-heading text-secondary mb-3" data-reveal>Black, Grey & White Box Testing</h2>
            <p class="text-muted lead-narrow mb-0" data-reveal>
                Select the approach based on how much information your team wants to provide and how
                deeply the assessment should validate internal security assumptions.
            </p>
        </div>

        <div class="row g-4">
            @foreach ($boxes as $box)
                <div class="col-md-4">
                    <article class="cl-vapt-box cl-vapt-box-{{ $box['class'] }}" data-reveal>
                        <div class="cl-vapt-cube" aria-hidden="true">
                            <span></span><span></span><span></span>
                        </div>
                        <h3>{{ $box['title'] }}</h3>
                        <p><strong>Conditions:</strong> {{ $box['conditions'] }}</p>
                        <p class="mb-0"><strong>Value:</strong> {{ $box['value'] }}</p>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-vapt-box-section {
        background:
            radial-gradient(760px 420px at 86% 14%, rgba(255, 72, 101, .1), transparent 62%),
            linear-gradient(180deg, rgba(5, 12, 23, .98), rgba(11, 24, 48, .94));
    }
    .cl-vapt-box {
        height: 100%;
        padding: clamp(1.25rem, 2.8vw, 2rem);
        border: 1px solid var(--line);
        border-radius: 8px;
        background: rgba(16, 31, 58, .68);
        box-shadow: 0 24px 68px rgba(0, 0, 0, .36);
        transition: transform .25s var(--ease), border-color .25s var(--ease);
    }
    .cl-vapt-box:hover {
        transform: translateY(-6px);
        border-color: rgba(255, 191, 27, .42);
    }
    .cl-vapt-box h3 {
        margin: 1.4rem 0 1rem;
        font-size: 1.45rem;
    }
    .cl-vapt-box p {
        color: var(--muted);
        font-size: .92rem;
        line-height: 1.65;
    }
    .cl-vapt-box strong {
        color: var(--white);
    }
    .cl-vapt-cube {
        position: relative;
        width: 78px;
        height: 78px;
        transform: rotateX(58deg) rotateZ(45deg);
        transform-style: preserve-3d;
        margin: .4rem 0 .8rem 1rem;
    }
    .cl-vapt-cube span {
        position: absolute;
        inset: 0;
        border: 1px solid rgba(255, 255, 255, .18);
        background: rgba(255, 255, 255, .08);
    }
    .cl-vapt-cube span:nth-child(1) {
        transform: translateZ(38px);
    }
    .cl-vapt-cube span:nth-child(2) {
        transform: rotateX(90deg) translateZ(38px);
    }
    .cl-vapt-cube span:nth-child(3) {
        transform: rotateY(90deg) translateZ(38px);
    }
    .cl-vapt-box-black .cl-vapt-cube span:nth-child(1) { background: linear-gradient(135deg, #20242c, #07111f); }
    .cl-vapt-box-black .cl-vapt-cube span:nth-child(2) { background: #0b1322; }
    .cl-vapt-box-black .cl-vapt-cube span:nth-child(3) { background: #28364d; }
    .cl-vapt-box-grey .cl-vapt-cube span:nth-child(1) { background: linear-gradient(135deg, #d9e1ec, #8997aa); }
    .cl-vapt-box-grey .cl-vapt-cube span:nth-child(2) { background: #5b687a; }
    .cl-vapt-box-grey .cl-vapt-cube span:nth-child(3) { background: #a8b3c2; }
    .cl-vapt-box-white .cl-vapt-cube span:nth-child(1) { background: linear-gradient(135deg, #ffffff, #dce4ee); }
    .cl-vapt-box-white .cl-vapt-cube span:nth-child(2) { background: #b8c3cf; }
    .cl-vapt-box-white .cl-vapt-cube span:nth-child(3) { background: #eef3f8; }
</style>
@endpush
