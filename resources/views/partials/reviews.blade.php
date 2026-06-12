{{-- Reusable customer reviews / "say it best" section (ref: underdefense.com) --}}
<section class="page-section" id="reviews">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Reviews</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-2">
            Our Customers <span class="cl-title-accent">Say It Best</span>
        </h2>
        <p class="text-center text-muted mb-5">
            Recognized as a High Performer and a Top Cybersecurity Company by industry leaders.
        </p>

        <div class="row g-4">
            @foreach ([
                ['quote' => "Cyberlog's VAPT work showed strong professionalism and helped improve our cyber defense posture.", 'name' => 'Dr. Dewan Muhammad Humayun Kabir, ex Project Director, a2i', 'badge' => 'VAPT Services'],
                ['quote' => 'Their pen testers found issues our previous vendor missed. The remediation guidance was clear and prioritized.', 'name' => 'Head of IT, Government Agency', 'badge' => 'Managed Detection &amp; Response'],
                ['quote' => 'From ISO 27001 to staff training, Cyberlog has been a genuine partner in our compliance journey.', 'name' => 'Compliance Lead, Enterprise', 'badge' => 'Top Cybersecurity Company 2025'],
            ] as $r)
                <div class="col-md-4">
                    <div class="cl-review h-100 d-flex flex-column">
                        <div class="cl-stars mb-2">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="fst-italic">&ldquo;{{ $r['quote'] }}&rdquo;</p>
                        <div class="mt-auto">
                            <div class="fw-bold text-secondary">{{ $r['name'] }}</div>
                            <span class="badge bg-light text-secondary border mt-2">{!! $r['badge'] !!}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
