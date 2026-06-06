{{-- Generic hero for inner/service pages.
     Vars: $eyebrow, $heading, $subheading, $badges (array, optional),
           $primaryCta ['label','url'] (optional), $secondaryCta (optional) --}}
<header class="cl-hero text-white py-5" id="hero">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                @isset($eyebrow)
                    <p class="section-eyebrow mb-3">{{ $eyebrow }}</p>
                @endisset
                <h1 class="cl-hero-heading mb-3">{!! $heading !!}</h1>
                <p class="lead text-white-50 mb-4">{{ $subheading }}</p>

                @isset($badges)
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        @foreach ($badges as $b)
                            <span class="cl-float-chip"><i class="fas fa-shield-halved"></i>{{ $b }}</span>
                        @endforeach
                    </div>
                @endisset

                <div class="d-flex flex-wrap gap-3">
                    <a class="btn btn-primary btn-xl text-white fw-bold"
                       href="{{ $primaryCta['url'] ?? route('contact') }}">
                        {{ $primaryCta['label'] ?? 'Talk to an Expert' }}
                    </a>
                    @isset($secondaryCta)
                        <a class="btn btn-outline-light btn-xl" href="{{ $secondaryCta['url'] }}">
                            {{ $secondaryCta['label'] }}
                        </a>
                    @endisset
                </div>
            </div>

            <div class="col-lg-5 d-none d-lg-block">
                <div class="cl-step text-center py-5">
                    <i class="{{ $heroIcon ?? 'fas fa-shield-halved' }} text-teal" style="font-size:6rem;"></i>
                    <p class="mt-3 mb-0 text-white-50">{{ $heroCaption ?? 'Enterprise-grade cyber defense' }}</p>
                </div>
            </div>
        </div>
    </div>
</header>
