{{-- Reusable "Trusted Clients" section: white logos that color on hover & link out.
     Used on the Home page and as "Section 2 — Client" on every service page. --}}
@php
    $clients = [
        ['name' => 'Aspire to Innovate (a2i)', 'url' => 'https://a2i.gov.bd'],
        ['name' => 'Aamar Taka', 'url' => '#'],
        ['name' => 'Adcomm Limited', 'url' => '#'],
        ['name' => 'Bangladesh Finance', 'url' => '#'],
        ['name' => 'BIDA', 'url' => 'https://bida.gov.bd'],
        ['name' => 'Bangladesh Petroleum Institute (BPI)', 'url' => '#'],
        ['name' => 'Bangladesh Police', 'url' => 'https://police.gov.bd'],
        ['name' => 'BUBT', 'url' => 'https://bubt.edu.bd'],
        ['name' => 'Dhaka Stock Exchange (DSE)', 'url' => 'https://dsebd.org'],
        ['name' => 'LegalX', 'url' => '#'],
        ['name' => 'NAPD', 'url' => 'https://napd.gov.bd'],
        ['name' => 'Nazimgarh Resort', 'url' => '#'],
        ['name' => 'ReachSavvy', 'url' => '#'],
        ['name' => 'Vibe Gaming', 'url' => '#'],
    ];
    // allow a short label override for the strip
    $stripClients = $clients;
@endphp

<section class="page-section bg-navy text-white" id="clients">
    <div class="container">

        <p class="section-eyebrow text-center mb-2">Trusted by 14+ organizations</p>
        <h2 class="page-section-heading text-center text-uppercase text-white mb-4">
            Our <span class="cl-title-accent">Clients</span>
        </h2>

        {{-- Logo marquee (grayscale → color on hover, links to website, pauses on hover) --}}
        <div class="cl-marquee mb-5">
            <div class="cl-marquee-track">
                @foreach ($stripClients as $c)
                    <a class="cl-client-logo" href="{{ $c['url'] }}" target="_blank" rel="noopener">{{ $c['name'] }}</a>
                @endforeach
                {{-- duplicate set for seamless loop --}}
                @foreach ($stripClients as $c)
                    <a class="cl-client-logo" href="{{ $c['url'] }}" target="_blank" rel="noopener" aria-hidden="true" tabindex="-1">{{ $c['name'] }}</a>
                @endforeach
            </div>
        </div>

        {{-- Full roster (serial list) --}}
        <div class="row g-3">
            @foreach ($clients as $i => $c)
                <div class="col-md-6 col-lg-4">
                    <a class="cl-client-card" href="{{ $c['url'] }}" target="_blank" rel="noopener">
                        <span class="cl-client-no">{{ $i + 1 }}</span>
                        <span class="fw-semibold">{{ $c['name'] }}</span>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
</section>
