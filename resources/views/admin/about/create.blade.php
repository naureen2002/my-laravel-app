@extends('admin.layouts.admin')

@section('admin-content')

<h2>Add About Content</h2>

<form action="{{ route('admin.about.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Name</label>
        <input type="text"
               name="name"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Title</label>
        <input type="text"
               name="title"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description"
                  rows="6"
                  class="form-control"></textarea>
    </div>

    <button class="btn btn-success">
        Save
    </button>

</form>

@endsection