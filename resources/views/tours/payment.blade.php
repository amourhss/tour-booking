<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="content-wrapper">
                    <div class="container mb-4 mt-4">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">

                                <h3 class="profile-username text-center">Checking information</h3>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <form action="{{route('tour.booking.create')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label><b>Tour name:</b></label>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" name="tour_id" value="{{$tour->id}}" hidden="">
                                                <div class="">{{$tour->name}}</div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label><b>Your name:</b></label>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" name="user_id" value="{{Auth::user()->id}}" hidden="">
                                                <div class="">{{Auth::user()->name}}</div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label><b>Choose date:</b></label>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control" name="booking_date" value="{{$data['booking_date']}}" required>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label><b>Count of clients:</b></label>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" name="number_of_clients" value="{{$data['number_of_clients']}}" hidden="">
                                                <div class="">{{$data['number_of_clients']}}</div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label><b>Total price for {{$data['number_of_clients']}} person:</b></label>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" name="total_price" value="{{$total_price}}" hidden="">
                                                <div class="">$ {{$total_price}}</div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="status" value="pending" hidden="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="payment_status" value="paid" hidden="">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="modal-footer" style="display: flex; justify-content: space-between;">
                                            <input type="submit" class="btn btn-getstarted scrollto btn-outline-info" value="Next">
                                            <a href="{{route('tour.booking', $tour)}}" type="button" class="btn btn-getstarted scrollto btn-outline-info" >Go back</a>
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
