@php
    $reviews = [
        ['quote' => "Cyberlog's VAPT work showed strong professionalism and helped improve our cyber defense posture.", 'name' => 'Dr. Dewan Muhammad Humayun Kabir, ex Project Director, a2i', 'badge' => 'VAPT Services'],
        ['quote' => 'The team separated real risks from noise and gave our engineers clear remediation steps.', 'name' => 'Head of IT, Financial Institution', 'badge' => 'Validated Findings'],
        ['quote' => 'The retest gave us confidence that critical issues were actually closed before audit review.', 'name' => 'Compliance Lead, Enterprise', 'badge' => 'Remediation Verified'],
    ];
@endphp

<section class="page-section cl-vapt-reviews" id="reviews">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>Review</p>
        <h2 class="page-section-heading text-center text-secondary mb-2" data-reveal>
            VAPT Customers <span class="cl-title-accent">Say It Best</span>
        </h2>
        <p class="text-center text-muted mb-5" data-reveal>
            Practical offensive testing, business-readable risk reporting, and remediation support.
        </p>

        <div class="row g-4">
            @foreach ($reviews as $review)
                <div class="col-md-4">
                    <div class="cl-review h-100 d-flex flex-column" data-reveal>
                        <div class="cl-stars mb-2">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="fst-italic">&ldquo;{{ $review['quote'] }}&rdquo;</p>
                        <div class="mt-auto">
                            <div class="fw-bold text-secondary">{{ $review['name'] }}</div>
                            <span class="badge bg-light text-secondary border mt-2">{{ $review['badge'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-vapt-reviews {
        background:
            radial-gradient(740px 420px at 12% 18%, rgba(109, 156, 255, .08), transparent 62%),
            linear-gradient(180deg, rgba(7, 17, 31, .98), rgba(5, 12, 23, .98));
    }
</style>
@endpush
