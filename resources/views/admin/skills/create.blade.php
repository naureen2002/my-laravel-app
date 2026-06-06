@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Add Skill</h1>

    <form action="{{ route('admin.skills.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Name</label>

            <input
                type="text"
                name="name"
                class="form-control"
                required>
        </div>

        <div class="mb-3">
            <label>Level</label>

            <input
                type="text"
                name="level"
                class="form-control">
        </div>

        <button class="btn btn-success">
            Save Skill
        </button>

    </form>

</div>
@endsection