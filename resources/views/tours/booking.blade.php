
<x-app-layout>
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="max-w-7xl mx-auto sm:px-8 lg:px-10">
                <article class="blog-details">
                    <div class="content">
                        <blockquote>
                            <p>
                                Booking form
                            </p>
                        </blockquote>
                    </div>
                    <div class="row gy-5 gx-lg-5">
                        <div class="col-lg-12">
                            <form id="form" action="{{ route('tour.booking.payment') }}" method="POST" enctype="multipart/form-data" class="php-email-form">
                                @csrf
                                <div class="form-group mt-3">
                                    <input type="number" class="form-control" name="tour_id" value="{{ $tour->id }}" hidden="">
                                    <label><b>Tour name:</b></label>
                                    <input type="text" class="form-control" name="number_of_clients" id="subject" placeholder="{{ $tour->name }}" disabled>
                                </div>
                                <div class="form-group mt-3">
                                    <label><b>Price: $ {{$tour->price}}</b></label>
                                </div>
                                <div class="form-group mt-3" hidden="">
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" name="user_id" value="{{ Auth::user()->id }}" >
                                        <div>{{ Auth::user()->name }}</div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label><b>Date:</b></label>
                                    <input type="date" class="form-control" name="booking_date" min="{{ \Carbon\Carbon::parse($tour->starting_date)->format('Y-m-d') }}" max="{{ \Carbon\Carbon::parse($tour->ending_date)->format('Y-m-d') }}" required>
                                </div>

                                <div class="form-group mt-3">
                                    <input type="number" class="form-control" name="number_of_clients" id="subject" placeholder="Count of clients " required>
                                </div>
                                <br>
                                <div class="modal-footer" style="display: flex; justify-content: space-between;">
                                    <a href="{{route('tour.show', $tour)}}" type="button" style="border-radius: 4px; padding: 10px 20px;border: 0;background-color: var(--color-secondary);" class="btn btn-primary" >Go back</a>
                                    <button style="border-radius: 4px; padding: 10px 20px;border: 0;background-color: var(--color-secondary);" class="btn btn-primary" type="submit">Book</button>
                                </div>
                            </form>
                        </div><!-- End Contact Form -->

                    </div>

                </article>
            </div>
        </div>
    </section>

</x-app-layout>


