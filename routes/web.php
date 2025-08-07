<?php
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructorDashboardController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Auth (from Breeze)
require __DIR__.'/auth.php';

// Course routes
Route::middleware(['auth'])->group(function () {
    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
    Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
    Route::get('/instructor/dashboard', [InstructorDashboardController::class, 'index'])->middleware(['auth'])->name('instructor.dashboard');

});
