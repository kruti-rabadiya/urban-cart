<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'STORE')</title>
    {{-- default styles --}}
    <link rel="stylesheet" href="{{asset ('css/userPanel/component/header.css')}}">
    <link rel="stylesheet" href="{{asset ('css/userPanel/component/footer.css')}}">
    <link rel="stylesheet" href="{{asset ('css/userPanel/layout/main.css')}}">
    @stack('styles')
</head>
<body>
    @include('components.userPanel.header')
    <main>
        @yield('content')
    </main>
    @include('components.userPanel.footer')
    @stack('scripts')
    {{-- default js --}}
    <script src="{{ asset('js/userPanel/component/header.js') }}"></script>
</body>
</html>
