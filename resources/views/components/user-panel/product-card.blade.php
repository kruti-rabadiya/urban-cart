
<div class="product-card">
    <div class="product-img">
        <img src="{{ asset('web-images/products/image.jpg') }}" alt="Product Image">
        <div class="product-wishlist">
            <svg viewBox="0 0 24 24" class="wishlist-icon" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                    fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
    </div>
    <div class="product-info-container">
        <div class="product-info">
            <div class="product-name">
                <h3>Product Name</h3>
            </div>
            <div class="product-rating">
                @php
                    // Example rating value (you can replace this with dynamic data)
                    $rating = 4.3; // Assuming you have an average rating field
                    $percentage = ($rating / 5) * 100; // Calculate percentage for star fill
                @endphp
                <div class="star-rating">
                    <div class="stars-empty">★★★★★</div>
                    <div class="stars-fill" style="width: {{ $percentage }}%;">★★★★★</div>
                </div>
            </div>
        </div>
        <div class="product-details">
            <div class="product-price">
                <p>$19.99</p>
            </div>
            <div class="product-add-to-cart-btn">
                <button class="btn btn-primary">
                    Add to Cart
                </button>
            </div>
        </div>
    </div>
</div>
