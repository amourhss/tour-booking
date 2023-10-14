<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        return view('dashboard', compact('tours'));
    }
}
