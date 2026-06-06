@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Edit Skill</h1>

    <form action="{{ route('admin.skills.update', $skill) }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>

            <input
                type="text"
                name="name"
                value="{{ $skill->name }}"
                class="form-control"
                required>
        </div>

        <div class="mb-3">
            <label>Level</label>

            <input
                type="text"
                name="level"
                value="{{ $skill->level }}"
                class="form-control">
        </div>

        <button class="btn btn-primary">
            Update Skill
        </button>

    </form>

</div>
@endsection