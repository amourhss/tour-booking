<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="content-wrapper">
                    <div class="container mb-4 mt-4">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">

                                <h3 class="profile-username text-center">{{$tour->name}}</h3>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Description</b>
                                        <div class="">{{$tour->description}}</div>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Price</b>
                                        <div class="">{{$tour->price}}</div>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Starting date:</b>
                                        <div class="">{{\Carbon\Carbon::parse($tour->starting_date)->format('j F, Y')}}</div>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Ending date:</b>
                                        <div class="">{{\Carbon\Carbon::parse($tour->ending_date)->format('j F, Y')}}</div>
                                    </li>
                                </ul>


                                <div style="display: flex; justify-content: space-between;">
                                    <a href="{{route('tour.booking', $tour)}}" type="button" class="btn btn-getstarted scrollto btn-outline-info">Book</a>
                                    <a href="{{route('dashboard')}}" type="button" class="btn btn-getstarted scrollto btn-outline-info" >Go back</a>
                                </div>

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
