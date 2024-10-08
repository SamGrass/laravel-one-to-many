<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $count_projects = Project::count();
        return view('admin.dashboard', compact('count_projects'));
    }
}
