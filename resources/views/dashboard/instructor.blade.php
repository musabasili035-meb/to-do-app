@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Instructor Dashboard</h1>

    @if($courses->isEmpty())
        <div class="alert alert-info">You have not created any courses yet.</div>
    @else
        <div class="row">
            @foreach($courses as $course)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if($course->image)
                            <img src="{{ asset('storage/' . $course->image) }}" class="card-img-top" alt="Course Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->title }}</h5>
                            <p class="card-text">{{ Str::limit($course->description, 100) }}</p>
                            <a href="#" class="btn btn-primary">Edit Course</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
