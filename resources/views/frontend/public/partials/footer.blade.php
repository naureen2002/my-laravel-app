{{-- Public marketing footer — viserx.com style: multi-column links, social icons,
     and a large glowing "Cyberlog" wordmark at the bottom. --}}
@php
    $u = fn ($pub, $legacy) => Route::has($pub) ? route($pub) : (Route::has($legacy) ? route($legacy) : '#');
@endphp

<footer class="footer pt-5 pb-4">
    <div class="container">

        <div class="row gy-4">

            {{-- Services --}}
            <div class="col-6 col-lg-3">
                <div class="cl-foot-head">Services</div>
                <a class="cl-foot-link" href="{{ $u('public.soc', 'soc') }}">SOC as a Service</a>
                <a class="cl-foot-link" href="{{ $u('public.vapt', 'vapt') }}">VAPT / Pen Testing</a>
                <a class="cl-foot-link" href="{{ $u('public.it-audit', 'it-audit') }}">IT Audit &amp; ISO 27001</a>
                <a class="cl-foot-link" href="{{ $u('public.capacity-building', 'capacity-building') }}">Capacity Building</a>
                <a class="cl-foot-link" href="{{ $u('public.defense-services', 'defense-services') }}">Defense Services</a>
                <a class="cl-foot-link" href="{{ $u('public.malware-analysis', 'public.malware-analysis') }}">Malware Analysis</a>
                <a class="cl-foot-link" href="{{ $u('public.digital-forensics', 'public.digital-forensics') }}">Digital Forensics</a>
            </div>

            {{-- Solutions --}}
            <div class="col-6 col-lg-3">
                <div class="cl-foot-head">Solutions</div>
                <a class="cl-foot-link" href="{{ $u('public.vciso', 'vciso') }}">vCISO</a>
                <a class="cl-foot-link" href="{{ $u('public.defense-services', 'defense-services') }}#threat-intel">Threat Intelligence</a>
                <a class="cl-foot-link" href="{{ $u('public.defense-services', 'defense-services') }}#incident-response">Incident Response</a>
                <a class="cl-foot-link" href="{{ $u('public.next-gen-firewall', 'public.next-gen-firewall') }}">Firewall Management</a>
                <a class="cl-foot-link" href="{{ $u('public.backup-recovery', 'public.backup-recovery') }}">Backup &amp; Recovery</a>
            </div>

            {{-- Company --}}
            <div class="col-6 col-lg-3">
                <div class="cl-foot-head">Company</div>
                <a class="cl-foot-link" href="{{ $u('public.about', 'about') }}">About Us</a>
                <a class="cl-foot-link" href="{{ $u('public.clients', 'clients') }}">Clients</a>
                <a class="cl-foot-link" href="{{ $u('public.contact', 'contact') }}">Contact</a>
                <a class="cl-foot-link" href="{{ $u('public.career', 'career') }}">Career</a>
                <a class="cl-foot-link" href="{{ $u('public.services', 'services') }}">All Services</a>
            </div>

            {{-- Contact --}}
            <div class="col-6 col-lg-3">
                <div class="cl-foot-head">Contact</div>
                <p class="text-muted mb-2"><i class="fas fa-location-dot text-primary me-2"></i>1/6, Block C (New), Mirpur-01, Dhaka 1216</p>
                <p class="text-muted mb-2"><i class="fas fa-envelope text-primary me-2"></i>hello@cyberlog.io</p>
                <p class="text-muted mb-3"><i class="fas fa-phone text-primary me-2"></i>+880 1XXX-XXXXXX</p>
                <p class="text-muted small mb-3">Trade License: TRAD/DNCC/092990/202</p>
                <div class="d-flex gap-2">
                    <a class="btn btn-outline-light btn-social" href="#" aria-label="Facebook"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#" aria-label="LinkedIn"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#" aria-label="X"><i class="fab fa-fw fa-x-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#" aria-label="GitHub"><i class="fab fa-fw fa-github"></i></a>
                </div>
            </div>

        </div>

        <hr class="border-secondary my-4">

        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center text-muted small">
            <div>&copy; {{ date('Y') }} Cyberlog. All rights reserved.</div>
            <div class="mono">Build Cyber Resilience Before Attackers Build Access</div>
        </div>

        {{-- Big glowing wordmark --}}
        <div class="cl-wordmark" aria-hidden="true">CYBERLOG</div>

    </div>
</footer>
