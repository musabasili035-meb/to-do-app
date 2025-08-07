@extends('layouts.app')

@section('title', 'All Courses')

@section('content')
<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h4>Courses</h4>
    <a href="{{ route('courses.create') }}" class="btn btn-success">+ New Course</a>
  </div>
  <div class="card-body">
    @if($courses->isEmpty())
      <p>No courses available.</p>
    @else
      <div class="row">
        @foreach ($courses as $course)
          <div class="col-md-4 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">{{ $course->title }}</h5>
                <p class="card-text">{{ Str::limit($course->description, 100) }}</p>
                <a href="#" class="btn btn-primary">View</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @endif
  </div>
</div>
@endsection
