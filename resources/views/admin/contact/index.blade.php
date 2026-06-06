@extends('admin.layouts.admin')

@section('admin-content')

<h1>Contact Management</h1>

<a href="{{ route('admin.contacts.create') }}" class="btn btn-success mb-3">
    Add Contact
</a>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phone }}</td>

            <td>
                <a href="{{ route('admin.contacts.edit',$contact->id) }}"
                   class="btn btn-primary btn-sm">
                    Edit
                </a>

                <form action="{{ route('admin.contacts.destroy',$contact->id) }}"
                      method="POST"
                      style="display:inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection