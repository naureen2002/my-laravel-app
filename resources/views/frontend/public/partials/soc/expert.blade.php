{{-- SOC › Talk to the Expert (ref: underdefense.com) --}}
<section class="page-section bg-light" id="talk-to-expert">
    <div class="container">
        <div class="row g-5 align-items-center">

            <div class="col-lg-5">
                <p class="section-eyebrow mb-2" data-reveal>Talk to the Expert</p>
                <h2 class="cl-soc-h2 mb-3" data-reveal>Still Evaluating <span class="grad-text">SOC Options?</span></h2>
                <p class="text-muted mb-4" data-reveal>
                    We'll walk you through the pros, cons, and pricing for in-house, hybrid, and fully
                    managed SOC — and what fits your environment and compliance needs.
                </p>
                <ul class="list-unstyled" data-reveal>
                    <li class="mb-2 text-muted"><i class="fas fa-location-dot text-primary me-2"></i>Dhaka, Bangladesh</li>
                    <li class="mb-2 text-muted"><i class="fas fa-envelope text-primary me-2"></i>hello@cyberlog.io</li>
                    <li class="mb-2 text-muted"><i class="fas fa-phone text-primary me-2"></i>+880 1XXX-XXXXXX</li>
                </ul>
            </div>

            <div class="col-lg-7" data-reveal>
                <div class="cl-expert-card">
                    {{-- TODO: wire submit to a contact handler --}}
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6"><input class="form-control" type="text" placeholder="Your name *"></div>
                            <div class="col-md-6"><input class="form-control" type="text" placeholder="Company"></div>
                            <div class="col-md-6"><input class="form-control" type="email" placeholder="Work email *"></div>
                            <div class="col-md-6">
                                <select class="form-select">
                                    <option selected disabled>Coverage needed…</option>
                                    <option>24/7 fully managed</option>
                                    <option>Co-managed (hybrid)</option>
                                    <option>Business hours</option>
                                </select>
                            </div>
                            <div class="col-12"><textarea class="form-control" rows="4" placeholder="Tell us about your environment"></textarea></div>
                            <div class="col-12"><button class="btn btn-primary btn-xl text-white fw-bold w-100" type="submit"><i class="fas fa-headset me-1"></i> Talk to an Expert</button></div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-expert-card {
        background: linear-gradient(160deg, #0b1430, #0a1126) padding-box,
                    linear-gradient(120deg, var(--blue), #6f5bff) border-box;
        border: 1.5px solid transparent; border-radius: 16px; padding: 1.85rem;
        box-shadow: 0 30px 80px rgba(5, 20, 60, 0.5);
    }
</style>
@endpush
