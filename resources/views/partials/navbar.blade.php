<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            <i class="fas fa-shield-halved text-primary me-1"></i>Cyber<span class="text-primary">log</span>
        </a>

        <button
            class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive"
        >
            Menu
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item dropdown mx-0 mx-lg-1">
                    <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded {{ request()->routeIs('services','soc','vapt','it-audit','capacity-building','defense-services') ? 'active' : '' }}"
                       href="#" role="button" data-bs-toggle="dropdown">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('services') }}">All Services</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('soc') }}">SOC as a Service</a></li>
                        <li><a class="dropdown-item" href="{{ route('vapt') }}">VAPT / Pen Testing</a></li>
                        <li><a class="dropdown-item" href="{{ route('it-audit') }}">IT Audit &amp; ISO 27001</a></li>
                        <li><a class="dropdown-item" href="{{ route('capacity-building') }}">Capacity Building Training</a></li>
                        <li><a class="dropdown-item" href="{{ route('defense-services') }}">Defense Services</a></li>
                    </ul>
                </li>

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded {{ request()->routeIs('vciso') ? 'active' : '' }}" href="{{ route('vciso') }}">
                        vCISO
                    </a>
                </li>

                <li class="nav-item dropdown mx-0 mx-lg-1">
                    <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded {{ request()->routeIs('about','contact','career') ? 'active' : '' }}"
                       href="#" role="button" data-bs-toggle="dropdown">
                        Company
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('about') }}">About Us</a></li>
                        <li><a class="dropdown-item" href="{{ route('contact') }}">Contact</a></li>
                        <li><a class="dropdown-item" href="{{ route('career') }}">Career</a></li>
                    </ul>
                </li>

                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    <a class="btn btn-primary btn-talk text-white fw-bold" href="{{ route('contact') }}">
                        Talk to an Expert
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>
