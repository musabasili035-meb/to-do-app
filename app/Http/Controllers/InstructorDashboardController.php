<?php
namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;


class InstructorDashboardController extends Controller
{
    /**
     * Display the instructor dashboard with their courses.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ensure user is authenticated
        $user = Auth::user();

        // Fetch courses owned by the current user (instructor)
        
        $courses = Course::where('user_id', $user->id)->get();

        // Return the instructor dashboard view with data
        return view('dashboard.instructor', compact('courses'));
    }
}
