@extends('user-panel.layout.main')

@section('title', 'Home')

@push('styles')
    {{-- style for home page --}}
    <link rel="stylesheet" href="{{ asset('css/user-panel/pages/home.css') }}">
    {{-- style for category card --}}
    <link rel="stylesheet" href="{{ asset('css/user-panel/component/category-card.css') }}">
    {{-- style for product card --}}
    <link rel="stylesheet" href="{{ asset('css/user-panel/component/product-card.css') }}">
@endpush


@section('content')

    <section class="home-hero">

        <div class="home-hero-container">

            <h1 class="home-hero-title">
                Effortless Style
            </h1>

            <p class="home-hero-subtitle">
                Discover modern fashion designed for comfort, confidence, and everyday wear.
            </p>

            <div class="home-hero-btns">

                <a href="#NewArrivals" class="btn btn-primary">
                    Shop New Arrivals
                </a>

                <a href="#Collection" class="btn btn-outline">
                    Explore Collection
                </a>

            </div>

        </div>

    </section>

    {{-- category --}}
    <section class="home-section home-category">
        <div class="home-section-content">
            <div class="home-heading">
                <div class="home-head">
                    <div class="home-head-line"></div>
                    <h2>
                        Shop by Category
                    </h2>
                    <div class="home-head-line"></div>
                </div>
                <div class="home-head-para">
                    <p>Browse our curated collections and discover styles for every occasion.</p>
                </div>
            </div>
            <div class="home-card-grid-section">
                <div class="home-card-grid">

                    @for ($i = 0; $i <= 4; $i++)
                        <x-user-panel.category-card />
                    @endfor
                </div>

            </div>
            <div class="carousel-dots-section">
                <div class="carousel-dots-scroll">
                    <div class="crousel-dots">
                        @for ($j = 0; $j <= 4; $j++)
                            <span class="carousel-dot{{ $j === 0 ? ' active' : '' }}"></span>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- featured products --}}
    <section class="home-section home-featured-products">
        <div class="home-section-content">
            <div class="home-heading">
                <div class="home-head">
                    <div class="home-head-line"></div>
                    <h2>
                        Featured Products
                    </h2>
                    <div class="home-head-line"></div>
                </div>
                <div class="home-head-para">
                    <p>Discover our handpicked selection of must-have items.</p>
                </div>
            </div>
            <div class="home-card-grid-section">
                <div class="home-card-grid">

                    @for ($i = 0; $i <= 3; $i++)
                        <x-user-panel.product-card />
                    @endfor
                </div>

            </div>
            {{-- <div class="carousel-dots-section">
                <div class="carousel-dots-scroll">
                    <div class="crousel-dots">
                        @for ($j = 0; $j <= 20; $j++)
                            <span class="carousel-dot{{ $j === 0 ? ' active' : '' }}"></span>
                        @endfor
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    
    <script>
        const crousleDots = document.querySelectorAll('.carousel-dot');
        crousleDots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                crousleDots.forEach(dot => dot.classList.remove('active'));
                dot.classList.add('active');

            })
        })
    </script>
@endsection
