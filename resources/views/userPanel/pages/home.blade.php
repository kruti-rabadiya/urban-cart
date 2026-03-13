@extends('userPanel.layout.main')

@section('title', 'Home')

@push('styles')
    {{-- style for home page --}}
    <link rel="stylesheet" href="{{ asset('css/userPanel/pages/home.css') }}">
    {{-- style for category card --}}
    <link rel="stylesheet" href="{{ asset('css/userPanel/component/category-card.css') }}">
    {{-- style for product card --}}
    <link rel="stylesheet" href="{{ asset('css/userPanel/component/product-card.css') }}">
    {{-- style for review card --}}
    <link rel="stylesheet" href="{{ asset('css/userPanel/component/review-card.css') }}">
@endpush


@section('content')

    {{-- Home Hero Section --}}
    <section class="home-hero" style="background-image:url('{{ asset('web-images/hero8.png') }}')">

        <div class="home-hero-container">

            <h1 class="home-hero-title">
                Elevate Your Wardrobe
            </h1>

            <p class="home-hero-subtitle">
                Discover modern fashion designed for confidence
                and effortless everyday elegance.
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
                        <x-userPanel.category-card />
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
                        <x-userPanel.product-card />
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

    {{-- promo banner --}}
    <section class="home-banner">
        <div class="home-promo-banner" style="background-image: url('{{ asset('web-images/promo-banner.jpg') }}')">

            <div class="home-promo-banner-content">

                <h2 class="home-promo-banner-title">
                    Modern Essentials
                </h2>

                <p class="home-promo-banner-subtitle">
                    Discover timeless fashion designed for comfort, confidence and everyday elegance.
                </p>

                <a href="#ShopNow" class="promo-banner-btn">
                    Shop Collection
                </a>

            </div>

        </div>
        <div class="home-trust-section">
            <div class="trust-wraper">
                <div class="trust-fast-shipping trust-item">
                    <img src="{{ asset('svgs/fast-shipping.svg') }}" alt="Fast Shipping Icon">
                    <p>Fast Shipping</p>
                </div>
                <div class="secure-paymen trust-item">
                    <img src="{{ asset('svgs/secure-payment.svg') }}" alt="Secure Payment Icon">
                    <p>Secure Payment</p>
                </div>
                <div class="easy-return trust-item">
                    <img src="{{ asset('svgs/easy-return.svg') }}" alt="Easy Return Icon">
                    <p>Easy Return</p>
                </div>
                <div class="trust-quality trust-item">
                    <img src="{{ asset('svgs/premium-quality.svg') }}" alt="Quality Icon">
                    <p>Premium Quality</p>
                </div>
            </div>
        </div>
    </section>

    {{-- new arrivals --}}
    <section class="home-section home-new-arrivals">
        <div class="home-section-content">
            <div class="home-heading">
                <div class="home-head">
                    <div class="home-head-line"></div>
                    <h2>
                        New Arrivals
                    </h2>
                    <div class="home-head-line"></div>
                </div>
                <div class="home-head-para">
                    <p>Check out our latest additions to the collection.</p>
                </div>
            </div>
            <div class="home-card-grid-section">
                <div class="home-card-grid">

                    @for ($i = 0; $i <= 7; $i++)
                        <x-userPanel.product-card />
                    @endfor
                </div>

            </div>
            <div class="carousel-dots-section">
                <div class="carousel-dots-scroll">
                    <div class="crousel-dots">
                        @for ($j = 0; $j <= 7; $j++)
                            <span class="carousel-dot{{ $j === 0 ? ' active' : '' }}"></span>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Reviews --}}
    <section class="home-section home-reviews">
        <div class="home-section-content">
            <div class="home-heading">
                <div class="home-head">
                    <div class="home-head-line"></div>
                    <h2>
                        CUSTOMER REVIEWS
                    </h2>
                    <div class="home-head-line"></div>
                </div>
                <div class="home-head-para">
                    <p>See what our customers are saying about our products.</p>
                </div>
            </div>
            <div class="review-scroll-wrapper">
                <button class="review-arrow review-arrow-left" aria-label="Scroll left">&#8249;</button>
                <div class="home-card-grid-section">
                    <div class="home-card-grid">

                        @for ($i = 0; $i <= 7; $i++)
                            <x-userPanel.review-card />
                        @endfor
                    </div>

                </div>
                <button class="review-arrow review-arrow-right" aria-label="Scroll right">&#8250;</button>
            </div>
            {{-- <div class="carousel-dots-section">
                <div class="carousel-dots-scroll">
                    <div class="crousel-dots">
                        @for ($j = 0; $j <= 7; $j++)
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
