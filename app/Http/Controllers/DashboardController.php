<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        $reviews = Review::orderBy('created_at')->limit(5)->get();

        return view('dashboard', [
            'tours' => $tours,
            'reviews' => $reviews,
        ]);
    }
}
