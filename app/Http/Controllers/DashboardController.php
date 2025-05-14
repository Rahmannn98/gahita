<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use App\Models\Course;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard', ['title' => 'Dashboard']);
    }
    public function admin()
{
    $totalUsers = User::count();
    return view('pages.admin-dashboard', compact('totalUsers', 'totalCourses'));
}

}