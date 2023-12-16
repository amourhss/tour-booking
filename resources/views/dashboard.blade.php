<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {{ session('success') }}
                        </div>
                    @endif
                </div>

                <div class="row gy-5">
                    @foreach($tours as $tour)
                        <div class="col-xl-4 col-md-6" >
                            <div class="card" style="width: 18rem;" >
                                <img src="{{ asset('/storage/'. $tour->cover) }}" class="card-img-top"  alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">{{$tour->name}}</h4>
                                    <p class="card-text">Description: {{$tour->description}}</p>
                                    <p class="card-text">Prise : ${{$tour->price}}</p>
                                    <p class="card-text">Starting date: {{\Carbon\Carbon::parse($tour->starting_date)->format('j F, Y')}}</p>
                                    <p class="card-text">Ending date: {{\Carbon\Carbon::parse($tour->ending_date)->format('j F, Y')}}</p>
                                    <a href="{{route('tour.show', $tour->id)}}" class="btn btn-primary">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>

</x-app-layout>
