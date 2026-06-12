{{-- "Talk to the Expert" CTA band. Vars: $title (optional), $text (optional) --}}
<section class="page-section">
    <div class="container">
        <div class="cl-cta d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
            <div>
                <h3 class="fw-bold mb-1">{{ $title ?? 'Still evaluating your security options?' }}</h3>
                <p class="mb-0 text-white-50">{{ $text ?? "We'll walk you through the pros, cons, and pricing." }}</p>
            </div>
            <a class="btn btn-alert btn-xl text-white fw-bold" href="{{ route('contact') }}">
                Talk to an Expert
            </a>
        </div>
    </div>
</section>
