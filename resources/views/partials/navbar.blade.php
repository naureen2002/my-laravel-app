<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            Cyberlog
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

            <ul class="navbar-nav ms-auto">

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#services">
                        Services
                    </a>
                </li>

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#clients">
                        Clients
                    </a>
                </li>

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#case-studies">
                        Success Stories
                    </a>
                </li>

                <li class="nav-item dropdown mx-0 mx-lg-1">

                    <a
                        class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                    >
                        Company
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#about">
                                About Us
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#contact">
                                Contact
                            </a>
                        </li>
                    </ul>

                </li>

                @guest
                    <li class="nav-item mx-0 mx-lg-1">
                        <a
                            class="nav-link py-3 px-0 px-lg-3 rounded text-warning"
                            href="{{ route('login') }}"
                        >
                            Admin Login
                        </a>
                    </li>
                @else
                    <li class="nav-item mx-0 mx-lg-1">
                        <a
                            class="nav-link py-3 px-0 px-lg-3 rounded text-warning"
                            href="{{ route('admin.dashboard') }}"
                        >
                            Dashboard
                        </a>
                    </li>
                @endguest

            </ul>

        </div>
    </div>
</nav>