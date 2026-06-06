<footer class="footer bg-navy text-white pt-5 pb-4 mt-0">
    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-4">
                <h4 class="cl-footer-brand mb-3">
                    <i class="fas fa-shield-halved text-teal me-1"></i>Cyber<span class="text-teal">log</span>
                </h4>
                <p class="text-white-50 mb-3">
                    Cyberlog delivers offensive security, managed SOC, compliance, threat
                    intelligence, and innovative solutions for enterprises, government,
                    financial institutions, and critical infrastructure.
                </p>
                <div class="d-flex gap-2">
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-fw fa-x-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-fw fa-github"></i></a>
                </div>
            </div>

            <div class="col-6 col-lg-2">
                <h6 class="text-uppercase fw-bold mb-3">Services</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a class="link-light text-decoration-none" href="{{ route('soc') }}">SOC</a></li>
                    <li class="mb-2"><a class="link-light text-decoration-none" href="{{ route('vapt') }}">VAPT</a></li>
                    <li class="mb-2"><a class="link-light text-decoration-none" href="{{ route('it-audit') }}">IT Audit</a></li>
                    <li class="mb-2"><a class="link-light text-decoration-none" href="{{ route('capacity-building') }}">Capacity Building</a></li>
                    <li class="mb-2"><a class="link-light text-decoration-none" href="{{ route('defense-services') }}">Defense Services</a></li>
                    <li class="mb-2"><a class="link-light text-decoration-none" href="{{ route('vciso') }}">vCISO</a></li>
                </ul>
            </div>

            <div class="col-6 col-lg-2">
                <h6 class="text-uppercase fw-bold mb-3">Company</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a class="link-light text-decoration-none" href="{{ route('about') }}">About Us</a></li>
                    <li class="mb-2"><a class="link-light text-decoration-none" href="{{ route('contact') }}">Contact</a></li>
                    <li class="mb-2"><a class="link-light text-decoration-none" href="{{ route('career') }}">Career</a></li>
                    <li class="mb-2"><a class="link-light text-decoration-none" href="{{ route('services') }}">All Services</a></li>
                </ul>
            </div>

            <div class="col-lg-4">
                <h6 class="text-uppercase fw-bold mb-3">Dhaka Office</h6>
                <p class="text-white-50 mb-2"><i class="fas fa-location-dot text-teal me-2"></i>Dhaka, Bangladesh</p>
                <p class="text-white-50 mb-2"><i class="fas fa-envelope text-teal me-2"></i>hello@cyberlog.io</p>
                <p class="text-white-50 mb-3"><i class="fas fa-phone text-teal me-2"></i>+880 1XXX-XXXXXX</p>
                <a class="btn btn-primary text-white fw-bold" href="{{ route('contact') }}">Talk to an Expert</a>
            </div>

        </div>

        <hr class="border-secondary my-4">

        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center text-white-50 small">
            <div class="cl-footer-brand fs-5 mb-2 mb-md-0">
                <i class="fas fa-shield-halved text-teal me-1"></i>Cyber<span class="text-teal">log</span>
            </div>
            <div>&copy; {{ date('Y') }} Cyberlog. All rights reserved.</div>
        </div>

    </div>
</footer>
