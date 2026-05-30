@extends('admin.layouts.admin')

@section('admin-content')

<div class="card">
    <div class="card-header">
        Edit Project
    </div>

    <div class="card-body">
        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Project Title</label>
                <input type="text" name="title" class="form-control" value="{{ $project->title }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="5">{{ $project->description }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Image Name</label>
                <input type="text" name="image" class="form-control" value="{{ $project->image }}">
            </div>

            <button type="submit" class="btn btn-primary">
                Update Project
            </button>
        </form>
    </div>
</div>

@endsection