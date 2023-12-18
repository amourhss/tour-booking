<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Destination;
use App\Models\Review;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ToursController extends Controller
{
    public function show(Tour $tour):View
    {
        $reviews = Review::where('tour_id', '=', $tour->id)->orderBy('created_at', 'desc')->get();
        $destination = Destination::where('id', '=', $tour->destination_id)->get();
        $guide = User::where('id', '=', $tour->user_id)->get();
        return view('tours.show', compact('tour','destination', 'guide', 'reviews'));
    }

    public function booking(Tour $tour):View
    {
        return view('tours.booking', compact('tour'));
    }

    public function payment(Request $request):View
    {
        $data = $request->validate([
            'tour_id' => 'required',
            'user_id' => 'required',
            'booking_date' => 'required',
            'number_of_clients' => 'required'
        ]);
        $tour = Tour::where('id', $data['tour_id'])
            ->get();
        $tour = $tour[0];
        $total_price = $data['number_of_clients'] * $tour->price;

        return view('tours.payment', compact('data', 'total_price', 'tour'));
    }


    public function create(Request $request){
        $data = $request->validate([
            'tour_id' => 'required',
            'user_id' => 'required',
            'booking_date' => 'required',
            'number_of_clients' => 'required',
            'total_price' => 'required',
            'status' => 'required',
            'payment_status' => 'required'
        ]);
        Booking::create([
            'tour_id' => $data['tour_id'],
            'user_id' => $data['user_id'],
            'booking_date' => $data['booking_date'],
            'number_of_clients' => $data['number_of_clients'],
            'total_price' => $data['total_price'],
            'status' => $data['status'],
            'payment_status' => $data['payment_status']
        ]);

        session()->flash('success', 'Your booking has been successfully accepted');

        return redirect()->route('dashboard');
    }
}
