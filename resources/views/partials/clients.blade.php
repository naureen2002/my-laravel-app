{{-- Reusable "Trusted Clients" section using official logos from cyberlog.bd's
     "We're Working With" carousel. --}}
@php
    $clients = [
        ['name' => 'National Academy for Planning and Development', 'url' => 'https://napd.gov.bd/', 'logo' => 'napd.png'],
        ['name' => 'Bangladesh Police', 'url' => 'https://www.police.gov.bd/', 'logo' => 'police.png'],
        ['name' => 'Bangladesh University of Business and Technology', 'url' => 'https://www.bubt.edu.bd/', 'logo' => 'bubt.png'],
        ['name' => 'Aspire to Innovate (a2i)', 'url' => 'https://a2i.gov.bd/', 'logo' => 'a2i.png'],
        ['name' => 'United IT', 'url' => 'http://www.uniteditbd.com/', 'logo' => 'unitedit.png'],
        ['name' => 'United Nations Development Programme', 'url' => 'https://www.undp.org/', 'logo' => 'undp.png'],
    ];
@endphp

<section class="page-section bg-navy text-white" id="clients">
    <div class="container">

        <p class="section-eyebrow text-center mb-2">We're Working With</p>
        <h2 class="page-section-heading text-center text-uppercase text-white mb-4">
            Our <span class="cl-title-accent">Clients</span>
        </h2>

        <div class="cl-marquee">
            <div class="cl-marquee-track">
                @foreach ($clients as $c)
                    <a class="cl-client-logo" href="{{ $c['url'] }}" target="_blank" rel="noopener" aria-label="{{ $c['name'] }}">
                        <img src="{{ asset('assets/img/clients/working-with/' . $c['logo']) }}" alt="{{ $c['name'] }}">
                    </a>
                @endforeach
                @foreach ($clients as $c)
                    <a class="cl-client-logo" href="{{ $c['url'] }}" target="_blank" rel="noopener" aria-hidden="true" tabindex="-1">
                        <img src="{{ asset('assets/img/clients/working-with/' . $c['logo']) }}" alt="">
                    </a>
                @endforeach
            </div>
        </div>

    </div>
</section>
