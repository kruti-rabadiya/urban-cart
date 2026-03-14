@extends('userPanel.layout.main')
@section('title', 'Shop')

@push('styles')
    {{-- main shop css --}}
    <link rel="stylesheet" href="{{ asset('css/userPanel/pages/shop.css') }}">

    {{-- page nav css --}}
    <link rel="stylesheet" href="{{ asset('css/userPanel/component/page-nav.css') }}">

    {{-- shop hero css --}}
    <link rel="stylesheet" href="{{ asset('css/userPanel/component/shopHero.css') }}">
@endpush

@section('content')
    {{-- page nav --}}
    <x-userPanel.page-nav>
        <span class="shop-breadcrumb-current">Shop</span>
    </x-userPanel.page-nav>

    {{-- shop hero --}}
    @if (request()->routeIs('shop'))
        <x-userPanel.shop-hero title="Refined Outerwear"
            description="Premium layers designed to keep you warm while elevating your everyday look."
            image="{{ asset('web-images/general-banner.png') }}" />
    @endif




    {{-- product listing --}}
    <section class="product-listing-nav">

    </section>




@endsection

@push('scripts')
@endpush
