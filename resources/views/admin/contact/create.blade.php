@extends('admin.layouts.admin')

@section('admin-content')

<h1>Add Contact</h1>

<form action="{{ route('admin.contacts.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Email</label>
        <input type="email"
               name="email"
               class="form-control"
               required>
    </div>

    <div class="mb-3">
        <label>Phone</label>
        <input type="text"
               name="phone"
               class="form-control"
               required>
    </div>

    <button type="submit" class="btn btn-success">
        Save
    </button>
</form>

@endsection