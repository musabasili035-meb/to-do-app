@extends('layouts.app')

@section('title', 'Create Course')

@section('content')
<div class="card">
  <div class="card-header">
    <h4>Create New Course</h4>
  </div>
  <div class="card-body">
    <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($course->image)
    <img src="{{ asset('storage/' . $course->image) }}" class="img-fluid mb-2" alt="Course Image">
@endif

    <!-- Title & Description inputs remain the same -->
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

  </div>
</div>
@endsection
