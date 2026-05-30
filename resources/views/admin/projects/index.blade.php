@extends('admin.layouts.admin')

@section('admin-content')

<h2>Projects</h2>

<a href="{{ route('admin.projects.create') }}" class="btn btn-success mb-3">
    Add Project
</a>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th width="180">Action</th>
        </tr>
    </thead>

    <tbody>
        @forelse($projects as $project)
            <tr>
                <td>{{ $project->title }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->image }}</td>
                <td>
                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-primary">
                        Edit
                    </a>

                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-sm btn-danger">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center">No projects found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection