@extends('userPanel.layout.main')
@section('title', 'Shop')

@push('styles')
    {{-- main shop css --}}
    <link rel="stylesheet" href="{{ asset('css/userPanel/pages/shop.css') }}">

    {{-- page nav css --}}
    <link rel="stylesheet" href="{{ asset('css/userPanel/component/page-nav.css') }}">
@endpush

@section('content')
    {{-- page nav --}}
    <x-userPanel.page-nav />

    {{-- product listing --}}



@endsection

@push('scripts')
@endpush
