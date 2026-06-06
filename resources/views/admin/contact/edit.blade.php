@extends('admin.layouts.admin')

@section('admin-content')

<h1>Edit Contact</h1>

<form action="{{ route('admin.contacts.update',$contact->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Email</label>

        <input type="email"
               name="email"
               value="{{ $contact->email }}"
               class="form-control"
               required>
    </div>

    <div class="mb-3">
        <label>Phone</label>

        <input type="text"
               name="phone"
               value="{{ $contact->phone }}"
               class="form-control"
               required>
    </div>

    <button type="submit" class="btn btn-primary">
        Update
    </button>

</form>

@endsection