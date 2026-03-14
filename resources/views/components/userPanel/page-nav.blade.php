<section class="shop-upper">
    <div class="shop-upper-content">
        <nav class="shop-breadcrumb" aria-label="Breadcrumb">

            <a href="{{ route('home') }}">Home</a>

            <span class="shop-breadcrumb-sep">/</span>

            {{ $slot }}

        </nav>
    </div>
</section>