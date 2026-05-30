@extends('admin.layouts.admin')

@section('admin-content')

<div class="card">
    <div class="card-header">
        Add Project
    </div>

    <div class="card-body">

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Project Title</label>
                <input
                    type="text"
                    name="title"
                    class="form-control"
                    required
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea
                    name="description"
                    class="form-control"
                    rows="5"
                ></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Image Name</label>
                <input
                    type="text"
                    name="image"
                    class="form-control"
                    placeholder="example.jpg"
                >
            </div>

            <button type="submit" class="btn btn-success">
                Save Project
            </button>

        </form>

    </div>
</div>

@endsection