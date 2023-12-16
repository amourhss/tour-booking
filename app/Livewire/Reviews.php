<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Review;

class Reviews extends Component
{
    public $rating;
    public $comment;
    public $tourId;

    public function mount($tourId)
    {
        $this->tourId = $tourId;
    }

    public function submitReview()
    {
        $this->validate([
            'rating'    => 'required|integer|between:1,5',
            'comment' => 'required',
        ]);

        Review::create([
            'user_id' => auth()->user()->id,
            'tour_id' => $this->tourId,
            'rating'    => $this->rating,
            'comment' => $this->comment,
        ]);

        $this->comment = "";
        $this->rating = "";

    }

    public function render()
    {
        return view('livewire.reviews', [
            'reviews' => Review::where('tour_id', '=', $this->tourId)->latest()->get(),
        ]);
    }

}
