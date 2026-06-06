@extends('admin.layouts.admin')

@section('admin-content')

<h2>About Management</h2>

<a href="{{ route('admin.about.create') }}" class="btn btn-success mb-3">
    Add About Content
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
            <th>Title</th>
            <th width="200">Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($abouts as $about)
        <tr>
            <td>{{ $about->name }}</td>
            <td>{{ $about->title }}</td>

            <td>
                <a href="{{ route('admin.about.edit', $about->id) }}"
                   class="btn btn-primary btn-sm">
                    Edit
                </a>

                <form action="{{ route('admin.about.destroy', $about->id) }}"
                      method="POST"
                      style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn btn-danger btn-sm">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection