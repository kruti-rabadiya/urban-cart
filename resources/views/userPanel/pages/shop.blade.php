@extends('userPanel.layout.main')
@section('title', 'Shop')

@push('styles')
    {{-- main shop css --}}
    <link rel="stylesheet" href="{{ asset('css/userPanel/pages/shop.css') }}">

    {{-- page nav css --}}
    <link rel="stylesheet" href="{{ asset('css/userPanel/component/page-nav.css') }}">

    {{-- shop hero css --}}
    <link rel="stylesheet" href="{{ asset('css/userPanel/component/shopHero.css') }}">

    {{-- product card css --}}
    <link rel="stylesheet" href="{{ asset('css/userPanel/component/product-card.css') }}">

    {{-- shop list section css --}}
    <link rel="stylesheet" href="{{ asset('css/userPanel/component/shop-list-section.css') }}">
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


    {{-- shop list section --}}
    <x-userPanel.shop-list-section>
        <div class="shop-product-card-wrapper">
            @for ($i = 0; $i < 30; $i++)
                <x-userPanel.product-card />
            @endfor
        </div>
    </x-userPanel.shop-list-section>

@endsection


@push('scripts')
    {{-- shop page specific js --}}
    <script src="{{ asset('js/userPanel/pages/shop.js') }}"></script>

    {{-- shop filter js --}}
    <script src="{{ asset('js/userPanel/component/shop-filter.js') }}"></script>
@endpush
