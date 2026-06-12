{{-- SOC › Reviews / testimonials (ref: underdefense.com) --}}
@php
    $reviews = [
        ['Cyberlog stood up our SOC in a week and cut our alert noise dramatically. We finally have real visibility.', 'CISO, Financial Institution', 'High Performer'],
        ['Threats are contained before they spread. Their analysts feel like an extension of our own team.', 'Head of IT, Government Agency', 'Managed Detection &amp; Response'],
        ['The reporting alone made our board conversations easier. Measurable, credible, and fast.', 'Compliance Lead, Enterprise', 'Top Cybersecurity Company 2025'],
    ];
@endphp

<section class="page-section bg-light" id="reviews">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>Reviews</p>
        <h2 class="page-section-heading text-center text-secondary mb-2" data-reveal>Our Customers Say It Best</h2>
        <p class="text-center text-muted mb-5" data-reveal>Recognized as a High Performer and a Top Cybersecurity Company by industry leaders.</p>

        <div class="row g-4">
            @foreach ($reviews as $r)
                <div class="col-md-4">
                    <div class="cl-review h-100 d-flex flex-column">
                        <div class="cl-stars mb-2">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="fst-italic">&ldquo;{{ $r[0] }}&rdquo;</p>
                        <div class="mt-auto">
                            <div class="fw-bold text-white">{{ $r[1] }}</div>
                            <span class="badge mt-2">{!! $r[2] !!}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
