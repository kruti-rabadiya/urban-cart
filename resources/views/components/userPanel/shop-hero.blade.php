@props([
    'title' => 'Shop',
    'description' => '',
    'image' => '',
])

<section class="shop-hero" style="background-image: url('{{ $image }}');">
    <div class="shop-hero-content">

        <div class="shop-hero-text">
            <h1>{{ $title }}</h1>
            <p>{{ $description }}</p>

            
        </div>

        <div class="shop-hero-image">
        </div>

    </div>
</section>