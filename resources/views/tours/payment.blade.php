
<x-app-layout>
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="max-w-7xl mx-auto sm:px-8 lg:px-10">
                <article class="blog-details">
                    <div class="content">
                        <blockquote>
                            <p>
                                Checking information
                            </p>
                        </blockquote>
                    </div><br>

                    <h2 class="title">Tour name: {{$tour->name}}</h2>
                    <h2 class="title">Your name: {{Auth::user()->name}}</h2>
                    <h2 class="title">Date: {{\Carbon\Carbon::parse($data['booking_date'])->format('j F Y')}}</h2>
                    <h2 class="title">Count of clients: {{$data['number_of_clients']}}</h2>
                    <h2 class="title">Total price for {{$data['number_of_clients']}} person:  ${{$total_price}}</h2>
                    <form action="{{route('tour.booking.create')}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group" hidden="">
                            <label><b>Tour name:</b></label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="tour_id" value="{{$tour->id}}" hidden="">
                                <div class="">{{$tour->name}}</div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group" hidden="">
                            <label><b>Your name:</b></label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="user_id" value="{{Auth::user()->id}}" hidden="">
                                <div class="">{{Auth::user()->name}}</div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group" hidden="">
                            <label><b>Choose date:</b></label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="booking_date" value="{{$data['booking_date']}}" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group" hidden="">
                            <label><b>Count of clients:</b></label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="number_of_clients" value="{{$data['number_of_clients']}}" hidden="">
                                <div class="">{{$data['number_of_clients']}}</div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group" hidden="">
                            <label><b>Total price for {{$data['number_of_clients']}} person:</b></label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="total_price" value="{{$total_price}}" hidden="">
                                <div class="">$ {{$total_price}}</div>
                            </div>
                        </div>
                        <div class="form-group" hidden="">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="status" value="pending" hidden="">
                            </div>
                        </div>

                        <div class="form-group" hidden="">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="payment_status" value="paid" hidden="">
                            </div>
                        </div>
                        <br>
                        <div class="modal-footer" style="display: flex; justify-content: space-between;">
                            <a href="{{route('tour.booking', $tour)}}" type="button" style="border-radius: 4px; padding: 10px 20px;border: 0;background-color: var(--color-secondary);" class="btn btn-primary" >Go back</a>
                            <button style="border-radius: 4px; padding: 10px 20px;border: 0;background-color: var(--color-secondary);" class="btn btn-primary" type="submit">Book</button>
                        </div>

                    </form>

                </article>
            </div>
        </div>
    </section>
</x-app-layout>

