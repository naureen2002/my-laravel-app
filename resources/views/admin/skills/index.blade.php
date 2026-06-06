@extends('admin.layouts.admin')

@section('admin-content')

<h1>Skill Management</h1>

<a href="{{ route('admin.skills.create') }}" class="btn btn-success mb-3">
    Add Skill
</a>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Level</th>
            <th width="180">Actions</th>
        </tr>
    </thead>

    <tbody>
        @forelse($skills as $skill)
            <tr>
                <td>{{ $skill->name }}</td>
                <td>{{ $skill->level }}</td>
                <td>
                    <a href="{{ route('admin.skills.edit', $skill->id) }}" class="btn btn-primary btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center">No skills found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection