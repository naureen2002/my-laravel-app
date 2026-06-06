@extends('layouts.portfolio')

@section('title', 'Cyberlog')

@section('content')

<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

        <h1 class="masthead-heading text-uppercase mb-4">
            Build Cyber Resilience Before Attackers Build Access
        </h1>

        <p class="masthead-subheading font-weight-light mb-4">
            Cyberlog delivers offensive security, managed SOC, compliance, threat intelligence,
            and innovative solutions for enterprises, government organizations, financial institutions,
            and critical infrastructure.
        </p>

        <div class="d-flex flex-wrap justify-content-center gap-3 mt-3">
            <span class="badge bg-light text-dark p-3">Penetration Testing</span>
            <span class="badge bg-light text-dark p-3">Security Operations Center (SOC)</span>
            <span class="badge bg-light text-dark p-3">Security Audit & Training</span>
            <span class="badge bg-light text-dark p-3">vCISO</span>
        </div>

        <p class="mt-5 fs-4">
            Join our Cyber Defense eco-system with
            <strong>hundreds</strong> of other organizations!
        </p>

    </div>
</header>

<section class="page-section" id="services">
    <div class="container">

        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
            Explore Our Security Solutions
        </h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-shield-halved"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm text-center p-4">
                        <h4>SOC</h4>
                        <p>24/7 monitoring, threat detection, and incident response support.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm text-center p-4">
                        <h4>VAPT</h4>
                        <p>Vulnerability assessment and penetration testing for digital systems.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm text-center p-4">
                        <h4>IT Audit</h4>
                        <p>Security audit, compliance review, and ISO 27001 readiness support.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm text-center p-4">
                        <h4>Capacity Building</h4>
                        <p>Cybersecurity training to improve employee awareness and readiness.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm text-center p-4">
                        <h4>Defense Services</h4>
                        <p>Threat intelligence, incident response, firewall management, backup, and risk assessment.</p>
                    </div>
                </div>

                <div class="col-md-4" id="vciso">
                    <div class="card h-100 shadow-sm text-center p-4">
                        <h4>vCISO</h4>
                        <p>Virtual CISO support for governance, compliance, strategy, and cyber resilience.</p>
                    </div>
                </div>
        </div>

    </div>
</section>

<section class="page-section bg-primary text-white mb-0" id="clients">
    <div class="container">

        <h2 class="page-section-heading text-center text-uppercase text-white">
            Trusted Clients
        </h2>

        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-building-shield"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row text-center g-3">
            <div class="col-md-3">Aspire to Innovate, a2i</div>
            <div class="col-md-3">Aamar Taka</div>
            <div class="col-md-3">Adcomm Limited</div>
            <div class="col-md-3">Bangladesh Finance</div>
            <div class="col-md-3">BIDA</div>
            <div class="col-md-3">BPI</div>
            <div class="col-md-3">Bangladesh Police</div>
            <div class="col-md-3">BUBT</div>
            <div class="col-md-3">Dhaka Stock Exchange</div>
            <div class="col-md-3">LegalX</div>
            <div class="col-md-3">NAPD</div>
            <div class="col-md-3">Nazimgarh Resort</div>
            <div class="col-md-3">ReachSavvy</div>
            <div class="col-md-3">Vibe Gaming</div>
        </div>

    </div>
</section>

<section class="page-section" id="case-studies">
    <div class="container">

        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
            Client Success Stories
        </h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-chart-line"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card shadow-sm h-100 p-4">
                    <h4>Dhaka Stock Exchange</h4>
                    <p>
                        Cyberlog delivered SOC support for Bangladesh’s most critical capital market infrastructure.
                    </p>
                    <strong>24/7 SOC Monitoring</strong><br>
                    <strong>99.99% uptime for Capital Market Cyber Defense</strong>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-sm h-100 p-4">
                    <h4>Bangladesh Finance</h4>
                    <p>
                        Cyberlog conducted VAPT to identify, validate, and prioritize exploitable security risks.
                    </p>
                    <strong>360° Security Risk Review</strong><br>
                    <strong>10+ High-Priority Risks Validated</strong>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-sm h-100 p-4">
                    <h4>BIDA</h4>
                    <p>
                        Cybersecurity capacity building and assessment support to improve technical readiness.
                    </p>
                    <strong>250%+ Increase in Cybersecurity Skills</strong><br>
                    <strong>12 Security Areas Reviewed</strong>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-sm h-100 p-4">
                    <h4>Adcomm Limited</h4>
                    <p>
                        ISO 27001 implementation and cybersecurity capacity building for compliance readiness.
                    </p>
                    <strong>93 ISO Controls Mapped</strong><br>
                    <strong>200+ Employees Trained</strong>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="page-section bg-primary text-white" id="about">
    <div class="container">

        <h2 class="page-section-heading text-center text-uppercase text-white">
            Our Story
        </h2>

        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <p class="lead text-center">
            Cyberlog helps organizations strengthen their cyber resilience through offensive security,
            managed security operations, compliance readiness, and expert advisory services.
        </p>

    </div>
</section>

<section class="page-section" id="contact">
    <div class="container">

        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
            Contact Cyberlog
        </h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name">
                        <label for="name">Full name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" placeholder="Enter your message" style="height: 10rem"></textarea>
                        <label for="message">Message</label>
                    </div>

                    <button class="btn btn-primary btn-xl" type="submit">
                        Send Message
                    </button>
                </form>
            </div>
        </div>

    </div>
</section>

@endsection