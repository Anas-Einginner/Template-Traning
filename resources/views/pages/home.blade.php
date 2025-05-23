@extends('pages.master')
@section('content')
        <!-- Hero Section -->
        <div class="main">

            <section id="hero" class="hero section dark-background">
                
                <img src="{{asset('pagesasset/assets/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">
                
                <div class="container d-flex flex-column align-items-center">
                    <h2 data-aos="fade-up" data-aos-delay="100">PLAN. LAUNCH. GROW.</h2>
                    <p data-aos="fade-up" data-aos-delay="200">We are team of talented designers making websites with
                        Bootstrap</p>
                        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                            <a href="#about" class="btn-get-started">Get Started</a>
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                        </div>
                    </div>
                    
                </div>
        </section>
        @endsection
