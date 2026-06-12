@extends('layouts.portfolio')

@section('title', 'Contact — Cyberlog')

@section('content')

@include('partials.page-hero', [
    'eyebrow' => 'Contact',
    'heading' => "We'd <span class=\"text-teal\">Love to Hear</span> From You",
    'subheading' => 'Get in touch with our team and we will reach out to discuss your security needs and how Cyberlog can help.',
    'heroIcon' => 'fas fa-envelope',
    'heroCaption' => "Let's talk security",
])

<section class="page-section" id="contact-form">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5">
                <p class="section-eyebrow mb-2">Reach Us</p>
                <h2 class="fw-bold text-secondary mb-4">Talk to a <span class="cl-title-accent">security expert</span></h2>
                <p class="text-muted mb-4">Tell us a little about your environment and goals — we'll get back to you with the right team.</p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fas fa-location-dot text-teal me-2"></i>1/6, Block C (New), Mirpur-01, Dhaka 1216</li>
                    <li class="mb-3"><i class="fas fa-envelope text-teal me-2"></i>hello@cyberlog.io</li>
                    <li class="mb-3"><i class="fas fa-phone text-teal me-2"></i>+880 1XXX-XXXXXX</li>
                    <li class="mb-3"><i class="fas fa-file-signature text-teal me-2"></i>Trade License: TRAD/DNCC/092990/202</li>
                </ul>
                <div class="d-flex gap-2">
                    <a class="btn btn-outline-secondary btn-social" href="#"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="#"><i class="fab fa-fw fa-x-twitter"></i></a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="cl-calc">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6"><input class="form-control" type="text" placeholder="Your name *"></div>
                            <div class="col-md-6"><input class="form-control" type="text" placeholder="Company"></div>
                            <div class="col-md-6"><input class="form-control" type="email" placeholder="Email *"></div>
                            <div class="col-md-6"><input class="form-control" type="tel" placeholder="Phone"></div>
                            <div class="col-12">
                                <select class="form-select">
                                    <option selected disabled>I'm interested in…</option>
                                    <option>SOC as a Service</option>
                                    <option>VAPT / Penetration Testing</option>
                                    <option>IT Audit &amp; ISO 27001</option>
                                    <option>Capacity Building Training</option>
                                    <option>Defense Services</option>
                                    <option>vCISO</option>
                                </select>
                            </div>
                            <div class="col-12"><textarea class="form-control" rows="5" placeholder="Message"></textarea></div>
                            <div class="col-12"><button class="btn btn-primary btn-xl text-white fw-bold" type="submit">Send Message</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
