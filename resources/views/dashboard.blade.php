<x-app-layout>
    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" >
            <img src="{{asset('assets/img/hero-carousel/hero-carousel-3.svg')}}" class="img-fluid animated">
            <h2>Добро пожаловать в <span>Wanderlust</span></h2>
            <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
        </div>
    </section>
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Наши туры</h2>
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
    <section id="testimonials" class="testimonials">
        <div class="container " data-aos="fade-up">

            <div class="testimonials-slider swiper">
                <div class="swiper-wrapper">
                @foreach($reviews as $review)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>{{ $review->user->name }}</h3>
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
                    </div>
                @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            AOS.init();
        });

    </script>
</x-app-layout>
