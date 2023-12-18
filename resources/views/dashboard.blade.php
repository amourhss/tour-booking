<x-app-layout>
    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" >
            <img src="{{asset('assets/img/kyrgyzstan1.jpg')}}" class="img-fluid animated">
            <h2>Добро пожаловать в <span>Wanderlust</span></h2>
            <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p>
            <div class="d-flex">
                <a href="https://youtu.be/WDc144SnT18?si=vaDP75v_1JkTmV6r" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
        </div>
    </section>
    <section id="destination" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="row gy-4 posts-list">
                        @foreach($destinations as $destination)
                            <div class="col-lg-4">
                                <article class="d-flex flex-column">

                                    <h2 class="title">
                                        <a href="blog-details.html">{{$destination->name}}</a>
                                    </h2>

                                    <div class="meta-top">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01">{{\Carbon\Carbon::parse($min_price_tour[0]->starting_date)->format('j F Y')}}</time></a></li>
                                        </ul>
                                    </div>

                                    <div class="content">
                                        <p>{{$destination->description}}</p>
                                    </div>

                                    <div class="read-more mt-auto align-self-end">
                                        <a href="blog-details.html">Read More</a>
                                    </div>

                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tours" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our tours</h2>
                <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>
            </div>

            <div class="row gy-5">

                <!-- End Service Item -->
                @foreach($tours as $tour)
                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <img src="{{ asset('/storage/'. $tour->cover) }}" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-globe-central-south-asia"></i>
                                </div>
                                <a href="{{route('tour.show', $tour->id)}}" class="stretched-link">
                                    <h3>{{$tour->name}}</h3>
                                </a>
                                <p>{{$tour->description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="reviews" class="testimonials">
        <div class="container " data-aos="fade-up">

            <div class="testimonials-slider swiper">
                <div class="swiper-wrapper">
                @foreach($reviews as $review)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>{{ $review->user->name }}</h3>
                            <div class="stars">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if($i <= $review->rating)
                                        <i class="bi bi-star-fill"></i>
                                    @else
                                        <i class="bi bi-star"></i>
                                    @endif

                                @endfor
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                {{ $review->comment }}
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <section id="besties" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Besties Tours</h2>
                <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
            </div>

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="pricing-item">

                        <div class="pricing-header">
                            <h3>Cheapest</h3>
                            <h4><sup>$</sup>{{$min_price_tour[0]->price}}<span> / per person</span></h4>
                        </div>

                        <ul>
                            <li><i class="bi bi-dot"></i><b>Name:</b><span>{{$min_price_tour[0]->name}}</span></li>
                            <li><i class="bi bi-dot"></i><b>Price:</b><span>${{$min_price_tour[0]->price}}</span></li>
                            <li><i class="bi bi-dot"></i><b>Starting date:</b><span>{{\Carbon\Carbon::parse($min_price_tour[0]->starting_date)->format('j F, Y')}}</span></li>
                            <li><i class="bi bi-dot"></i><b>Ending date:</b><span>{{\Carbon\Carbon::parse($min_price_tour[0]->ending_date)->format('j F, Y')}}</span></li>
                        </ul>

                        <div class="text-center mt-auto">
                            <a href="{{route('tour.show', $min_price_tour[0]->id)}}" class="buy-btn">Read more</a>
                        </div>

                    </div>
                </div><!-- End Pricing Item -->

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="pricing-item featured">

                        <div class="pricing-header">
                            <h3>Most popular</h3>
                            <h4><sup>$</sup>{{$most_popular_tour[0]->price}}<span> / per person</span></h4>
                        </div>

                        <ul>
                            <li><i class="bi bi-dot"></i><b>Name:</b><span>{{$most_popular_tour[0]->name}}</span></li>
                            <li><i class="bi bi-dot"></i><b>Price:</b><span>${{$most_popular_tour[0]->price}}</span></li>
                            <li><i class="bi bi-dot"></i><b>Starting date:</b><span>{{\Carbon\Carbon::parse($most_popular_tour[0]->starting_date)->format('j F, Y')}}</span></li>
                            <li><i class="bi bi-dot"></i><b>Ending date:</b><span>{{\Carbon\Carbon::parse($most_popular_tour[0]->ending_date)->format('j F, Y')}}</span></li>
                        </ul>

                        <div class="text-center mt-auto">
                            <a href="{{route('tour.show', $most_popular_tour[0]->id)}}" class="buy-btn">Read more</a>
                        </div>

                    </div>
                </div><!-- End Pricing Item -->

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                    <div class="pricing-item">

                        <div class="pricing-header">
                            <h3>Newest</h3>
                            <h4><sup>$</sup>{{$newest_tour[0]->price}}<span> / per person</span></h4>
                        </div>

                        <ul>
                            <li><i class="bi bi-dot"></i><b>Name:</b><span>{{$newest_tour[0]->name}}</span></li>
                            <li><i class="bi bi-dot"></i><b>Price:</b><span>${{$newest_tour[0]->price}}</span></li>
                            <li><i class="bi bi-dot"></i><b>Starting date:</b><span>{{\Carbon\Carbon::parse($newest_tour[0]->starting_date)->format('j F, Y')}}</span></li>
                            <li><i class="bi bi-dot"></i><b>Ending date:</b><span>{{\Carbon\Carbon::parse($newest_tour[0]->ending_date)->format('j F, Y')}}</span></li>
                        </ul>

                        <div class="text-center mt-auto">
                            <a href="{{route('tour.show', $newest_tour[0]->id)}}" class="buy-btn">Read more</a>
                        </div>

                    </div>
                </div><!-- End Pricing Item -->

            </div>

        </div>
    </section>
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Team</h2>
                <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
            </div>

            <div class="row gy-5">

                <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
                    <div class="team-member">

                        <div class="member-img">
                            <img src="{{asset("assets/img/guide.png")}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                            <h4>Walter White</h4>
                            <span>Admin</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset("assets/img/guide.png")}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                            <h4>Sarah Jhonson</h4>
                            <span>Guide</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset("assets/img/guide.png")}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                            <h4>William Anderson</h4>
                            <span>Guide</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-header">
                <h2>Contact Us</h2>
                <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>
            </div>

        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1692.4910076255853!2d74.57418543776565!3d42.83252001062974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389ec9ea3952ab5b%3A0xe45964691c1dcee!2zTWFuYXMgw7xuaXZlcnNpdGVzaSBLw7x0w7xwaGFuZXNp!5e0!3m2!1sen!2skg!4v1702932354499!5m2!1sen!2skg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="container">

            <div class="row gy-5 gx-lg-5">

                <div class="col-lg-4">

                    <div class="info">
                        <h3>Our contact</h3>
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Location:</h4>
                                <p>Manas üniversitesi Kütüphanesi, Bishkek</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                </div>

                <div class="col-lg-8">
                    <br>
                    <br>
                    <form id="form" action="{{ route('tour.booking.payment') }}" method="POST" enctype="multipart/form-data" class="php-email-form">
                        @csrf
                        <div class="form-group mt-3">
                            <select name="tour_id" class="form-control">
                                @foreach($tours as $tour)
                                    <option value="{{$tour->id}}">{{$tour->name}} Price: ${{$tour->price}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-3" hidden="">
                            <label><b>Your name:</b></label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="user_id" value="{{ Auth::user()->id }}" >
                                <div>{{ Auth::user()->name }}</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="date" class="form-control" name="booking_date" required>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <input type="number" class="form-control" name="number_of_clients" id="subject" placeholder="Count of clients " required>
                        </div>
                        <div class="text-center"><button type="submit">Book</button></div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            AOS.init();
        });

    </script>
</x-app-layout>
