@extends('layouts.app')

@section('title', 'Welcome to MyLMS')

@section('content')
<div class="p-5 bg-white rounded shadow-sm">
  <h1 class="mb-5">Welcome to MyLMS</h3>
  <p>This platform helps students and instructors manage learning content, quizzes, and certificates.</p>
  <a href="{{ route('courses.index') }}" class="btn btn-primary">Browse Courses</a>
</div>
@endsection
