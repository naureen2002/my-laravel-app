@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Portfolio Admin Panel
        </div>

        <div class="card-body">
            <h3>Welcome, {{ Auth::user()->name }}</h3>
            <p>This is the admin panel for managing the portfolio website.</p>

            <hr>

            <h5>About Me</h5>

            @if($about)
                <p><strong>Name:</strong> {{ $about->name }}</p>
                <p><strong>Title:</strong> {{ $about->title }}</p>
                <p><strong>Description:</strong> {{ $about->description }}</p>
            @else
                <p>No about information found.</p>
            @endif

            <hr>

            <h5>Projects</h5>
            <p>Manage portfolio projects.</p>

            <h5>Contact Info</h5>
            <p>Manage contact details.</p>
        </div>
    </div>
</div>
@endsection