@extends('admin.layouts.admin')

@section('admin-content')
<div class="card">
    <div class="card-header">
        Dashboard
    </div>

    <div class="card-body">
        <h3>Welcome, {{ Auth::user()->name }}</h3>

        <p>This is your portfolio admin panel.</p>

        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>About</h5>
                        <p>Edit profile info</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Projects</h5>
                        <p>Manage projects</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Skills</h5>
                        <p>Manage skills</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Contact</h5>
                        <p>Edit contact info</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection