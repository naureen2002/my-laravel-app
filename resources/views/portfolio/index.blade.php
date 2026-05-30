@extends('layouts.portfolio')

@section('title', 'My Portfolio')

@section('content')

<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <img class="masthead-avatar mb-5" src="{{ asset('assets/img/avataaars.svg') }}" alt="Avatar">

        <h1 class="masthead-heading text-uppercase mb-0">
            Mike
        </h1>

        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <p class="masthead-subheading font-weight-light mb-0">
            Web Developer - Laravel - PHP
        </p>
    </div>
</header>

<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
            Portfolio
        </h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row justify-content-center">
            @forelse($projects as $project)
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card h-100 shadow-sm">
                        @if($project->image)
                            <img
                                class="card-img-top"
                                src="{{ asset('assets/img/portfolio/' . $project->image) }}"
                                alt="{{ $project->title }}"
                            >
                        @endif

                        <div class="card-body text-center">
                            <h4 class="card-title">
                                {{ $project->title }}
                            </h4>

                            <p class="card-text">
                                {{ $project->description }}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>No projects available.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-white">
            About
        </h2>

        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row">
            <div class="col-lg-4 ms-auto">
                <p class="lead">
                    I am a passionate web developer with experience in Laravel, PHP, Bootstrap, and MySQL.
                </p>
            </div>

            <div class="col-lg-4 me-auto">
                <p class="lead">
                    This portfolio is connected with an admin panel where website content can be managed through Laravel.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="page-section" id="contact">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
            Contact Me
        </h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name...">
                        <label for="name">Full name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                        <label for="message">Message</label>
                    </div>

                    <button class="btn btn-primary btn-xl" type="submit">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection