<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Review;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        $reviews = Review::latest('created_at')->take(5)->get();
        $maxRatingSum = Review::select('tour_id', DB::raw('SUM(rating) as total_rating'))
            ->groupBy('tour_id')
            ->orderByDesc('total_rating') // Order by total_rating in descending order
            ->first();

        if ($maxRatingSum) {
            $tourIdWithMaxRating = $maxRatingSum->tour_id;
            $maxRating = $maxRatingSum->total_rating;
        }
        $most_popular_tour = Tour::where('id', '=', $tourIdWithMaxRating)->get();

        $tourWithMinPrice = Tour::orderBy('price')->first();

        if ($tourWithMinPrice) {
            $minPriceTourId = $tourWithMinPrice->id;
        }
        $min_price_tour = Tour::where('id', '=', $minPriceTourId)->get();


        $mostRecentTour = Tour::latest('created_at')->first();

        if ($mostRecentTour) {
            $mostRecentTourId = $mostRecentTour->id;

        }
        $newest_tour = Tour::where('id', '=', $mostRecentTourId)->get();


        $destinations = Destination::all();
        return view('dashboard', [
            'tours' => $tours,
            'reviews' => $reviews,
            'most_popular_tour' => $most_popular_tour,
            'min_price_tour' => $min_price_tour,
            'newest_tour' => $newest_tour,
            'destinations' => $destinations
        ]);
    }
}
