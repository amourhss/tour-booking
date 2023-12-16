<div>
    <form wire:submit.prevent="submitReview">
            <input wire:model="tour_id" type="hidden" value="{{ $tourId }}">
            @error('tour') <span>{{ $message }}</span> @enderror

            <label>Rating:</label>
            <input wire:model="rating" type="number" min="1" max="5">
            @error('rating') <span>{{ $message }}</span> @enderror

            <label>Comment:</label>
            <input wire:model.debounce.500ms="comment">
            @error('comment') <span>{{ $message }}</span> @enderror

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

        @foreach($reviews as $review)
            <div class="">
                <h3>{{ $review->user->name }}</h3>
                <p class="mx-3 py-1 text-xs text-gray-500 font-semibold">{{$review->created_at->diffForHumans()}}
                </p>
                <div class="stars">
                    @for ($i = 0; $i < $review->rating; $i++)
                        <i class="bi bi-star-fill"></i>
                    @endfor
                </div>
                <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    {{ $review->comment }}
                    <i class="bi bi-quote quote-icon-right"></i>
                </p>
            </div>
            <br>
        @endforeach
</div>
