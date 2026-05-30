@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-3 col-lg-2 bg-dark min-vh-100 p-3">
            <h4 class="text-white mb-4">Admin Panel</h4>

            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="{{ route('admin.dashboard') }}">
                        Dashboard
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="{{ route('admin.about.index') }}">
                        About
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="{{ route('admin.projects.index') }}">
                        Projects
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="{{ route('admin.skills.index') }}">
                        Skills
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="{{ route('admin.contacts.index') }}">
                        Contact
                    </a>
                </li>

                <li class="nav-item mt-4">
                    <a class="nav-link text-warning" href="{{ url('/') }}">
                        View Website
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-md-9 col-lg-10 p-4">
            @yield('admin-content')
        </div>

    </div>
</div>
@endsection