@extends('admin.layouts.admin')

@section('admin-content')

<h2>Edit About Content</h2>

<form action="{{ route('admin.about.update', $about->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Name</label>
        <input type="text"
               name="name"
               value="{{ $about->name }}"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Title</label>
        <input type="text"
               name="title"
               value="{{ $about->title }}"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description"
                  rows="6"
                  class="form-control">{{ $about->description }}</textarea>
    </div>

    <button class="btn btn-primary">
        Update
    </button>

</form>

@endsection