<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="content-wrapper">
                    <div class="container mb-4 mt-4">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">

                                <h3 class="profile-username text-center">Booking form</h3>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <form id="form" action="{{ route('tour.booking.payment') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label><b>Tour name:</b></label>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" name="tour_id" value="{{ $tour->id }}" hidden="">
                                                <div>{{ $tour->name }}</div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label><b>Your name:</b></label>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" name="user_id" value="{{ Auth::user()->id }}" hidden="">
                                                <div>{{ Auth::user()->name }}</div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label><b>Choose date:</b></label>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control" name="booking_date" min="{{ \Carbon\Carbon::parse($tour->starting_date)->format('Y-m-d') }}" max="{{ \Carbon\Carbon::parse($tour->ending_date)->format('Y-m-d') }}" required>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="">The total price will be calculated according to the count of clients. Price: ${{$tour->price}} per person</div>
                                        <br>
                                        <div class="form-group">
                                            <label><b>Count of clients:</b></label>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" name="number_of_clients" required>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="modal-footer" style="display: flex; justify-content: space-between;">
                                            <input type="submit" class="btn btn-getstarted scrollto btn-outline-info" value="Next">
                                            <a href="{{route('tour.show', $tour)}}" type="button" class="btn btn-getstarted scrollto btn-outline-info" >Go back</a>
                                        </div>
                                    </form>

                                </ul>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                    </div>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
