<x-app-layout>
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="max-w-7xl mx-auto sm:px-8 lg:px-10">
                    <article class="blog-details">

                        <div class="post-img" >
                            <img src="{{ asset('/storage/'. $tour->cover) }}" alt="" class="img-fluid">
                        </div>

                        <h2 class="title">{{$tour->name}}</h2>

                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">{{$guide[0]->name}}</a></li>
                                @php
                                    $date1 = \Carbon\Carbon::parse($tour->starting_date);
                                    $date2 = \Carbon\Carbon::parse($tour->ending_date);
                                    $daysDifference = $date1->diffInDays($date2);
                                @endphp
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">{{$daysDifference}} Дней</time></a></li>
                            </ul>
                        </div><!-- End meta top -->

                        <div class="content">
                            <p>
                                {{$tour->description}}
                            </p>

                            <p>
                                Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
                            </p>

                            <blockquote>
                                <p>
                                    {{$destination[0]->name}}
                                </p>
                            </blockquote>

                            <h3>Price: </h3>
                            <p>{{$tour->price}}</p>
                            <h3>Starting date: </h3>
                            <p>{{\Carbon\Carbon::parse($tour->starting_date)->format('j F, Y')}}</p>
                            <h3>Ending date: </h3>
                            <p>{{\Carbon\Carbon::parse($tour->ending_date)->format('j F, Y')}}</p>


                        </div><!-- End post content -->

                    </article><!-- End blog post -->
                <div class="comments">
                    <div class="reply-form" style="display: flex; justify-content: space-between;">
                        <a href="{{route('dashboard')}}"><button type="submit" class="btn btn-primary">Go back</button></a>
                        <a href="{{route('tour.booking', $tour)}}"><button type="submit"  class="btn btn-primary">Book</button></a>
                    </div>

                </div>
                <livewire:reviews :tourId="$tour->id"/>
                </div>
            </div>
    </section>
</x-app-layout>
