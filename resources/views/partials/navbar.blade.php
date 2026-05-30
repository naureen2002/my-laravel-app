<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            My Portfolio
        </a>

        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive">

            Menu
            <i class="fas fa-bars"></i>

        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">
                        Portfolio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">
                        Contact
                    </a>
                </li>

                @guest

                    <li class="nav-item">
                        <a class="nav-link text-warning"
                           href="{{ route('login') }}">
                            Admin Login
                        </a>
                    </li>

                @else

                    <li class="nav-item">
                        <a class="nav-link text-warning"
                           href="{{ route('admin.dashboard') }}">
                            Dashboard
                        </a>
                    </li>

                @endguest

            </ul>

        </div>

    </div>
</nav>