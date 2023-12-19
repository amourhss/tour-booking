<div>
    <div class="container" data-aos="fade-up">
        <div class="max-w-7xl mx-auto sm:px-8 lg:px-10">
            <div class="comments">

                <h4 class="comments-count">{{count($reviews)}} Comments</h4>
                @foreach($reviews as $review)
                    <div id="comment-1" class="comment">
                        <div class="d-flex">
                            <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                            <div>
                                <h5><a href="">{{ $review->user->name }}</a></h5>
                                <time datetime="2020-01-01">{{\Carbon\Carbon::parse($review->created_at)->format('j F Y')}}, {{$review->created_at->diffForHumans()}}</time>
                                <div class="stars">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if($i <= $review->rating)
                                            <i class="bi bi-star-fill" style="color: orange"></i>
                                        @else
                                            <i class="bi bi-star" style="color: orange"></i>
                                        @endif

                                    @endfor
                                </div>
                                <p> <i class="bi bi-quote quote-icon-left"></i>
                                    {{ $review->comment }}
                                    <i class="bi bi-quote quote-icon-right"></i></p>
                            </div>
                        </div>
                    </div>
                @endforeach
                @if(auth()->user())
                    <div class="reply-form">

                        <h4>Leave a Review</h4>
                        <form wire:submit.prevent="submitReview">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input wire:model="tour_id" type="hidden" value="{{ $tourId }}">
                                    @error('tour') <span>{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <label>Rating:</label>
                            <div class="row">
                                <div class="col form-group">
                                    <input wire:model="rating" type="number" min="1" max="5">
                                    @error('rating') <span>{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <input wire:model.debounce.500ms="comment" class="form-control" placeholder="Your Comment*">
                                    @error('comment') <span>{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Post Comment</button>

                        </form>

                    </div>
                @endif


            </div><!-- End blog comments -->
        </div>
    </div>
</div>
