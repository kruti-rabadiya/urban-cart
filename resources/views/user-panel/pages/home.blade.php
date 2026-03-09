@extends('user-panel.layout.main')

@section('title', 'Home')

@push('styles')
    {{-- style for home page --}}
    <link rel="stylesheet" href="{{ asset('css/user-panel/pages/home.css') }}">
    {{-- style for category card --}}
    <link rel="stylesheet" href="{{ asset('css/user-panel/component/category-card.css') }}">
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
    <section class="home-category">
        <div class="home-category-content">
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
            <div class="home-card-grid">
                @for ($i = 0; $i <= 10; $i++)
                    <x-user-panel.category-card />
                @endfor
            </div>
            <div class="carousel-dots-section">
                <div class="crousel-dots">

                    @for ($j = 0; $j <= 10; $j++)
                        <span class="carousel-dot{{ $j === 0 ? ' active' : '' }}"></span>
                    @endfor
                </div>
            </div>
        </div>
    </section>

@endsection
