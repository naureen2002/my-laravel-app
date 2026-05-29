<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>My Portfolio</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" />

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top">My Portfolio</a>

        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded"
                type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
            Menu <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a>
                </li>

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a>
                </li>

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a>
                </li>

                @guest
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('login') }}">Admin Login</a>
                    </li>

                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/admin/dashboard') }}">Dashboard</a>
                    </li>

                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <img class="masthead-avatar mb-5" src="{{ asset('assets/img/avataaars.svg') }}" alt="Avatar" />

        <h1 class="masthead-heading text-uppercase mb-0">Mike</h1>

        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <p class="masthead-subheading font-weight-light mb-0">Web Developer - Laravel - PHP</p>
    </div>
</header>

<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        @php
            $items = [
                ['id' => 1, 'title' => 'Log Cabin', 'img' => 'cabin.png'],
                ['id' => 2, 'title' => 'Tasty Cake', 'img' => 'cake.png'],
                ['id' => 3, 'title' => 'Circus Tent', 'img' => 'circus.png'],
                ['id' => 4, 'title' => 'Controller', 'img' => 'game.png'],
                ['id' => 5, 'title' => 'Locked Safe', 'img' => 'safe.png'],
                ['id' => 6, 'title' => 'Submarine', 'img' => 'submarine.png'],
            ];
        @endphp

        <div class="row justify-content-center">
            @foreach($items as $item)
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $item['id'] }}">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/' . $item['img']) }}" alt="{{ $item['title'] }}" />
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>

        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row">
            <div class="col-lg-4 ms-auto">
                <p class="lead">I am a passionate web developer with experience in Laravel, PHP, Bootstrap, and MySQL.</p>
            </div>
            <div class="col-lg-4 me-auto">
                <p class="lead">This portfolio is connected with an admin panel where website content can be managed through Laravel.</p>
            </div>
        </div>
    </div>
</section>

<section class="page-section" id="contact">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." />
                        <label for="name">Full name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com" />
                        <label for="email">Email address</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                        <label for="message">Message</label>
                    </div>

                    <button class="btn btn-primary btn-xl" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Location</h4>
                <p class="lead mb-0">Canada</p>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Around the Web</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-github"></i></a>
            </div>

            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">About This Site</h4>
                <p class="lead mb-0">Laravel portfolio website with Bootstrap admin panel.</p>
            </div>
        </div>
    </div>
</footer>

<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright &copy; My Portfolio {{ date('Y') }}</small></div>
</div>

@foreach($items as $item)
    <div class="portfolio-modal modal fade" id="portfolioModal{{ $item['id'] }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $item['title'] }}</h2>

                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>

                                <img class="img-fluid rounded mb-5" src="{{ asset('assets/img/portfolio/' . $item['img']) }}" alt="{{ $item['title'] }}" />

                                <p class="mb-4">
                                    This is a sample project description. Later, this section can be connected to the database and managed from the admin panel.
                                </p>

                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>