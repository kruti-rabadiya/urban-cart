<section class="shop-list-section">

    {{-- Filter Sidebar --}}
    <aside class="filter-section">

        <div class="shop-filter-heading">
            <h3>Filter by</h3>
        </div>

        {{-- future filters --}}
        {{-- category --}}
        <div class="shop-filter-category shop-filter-dropdown">
            <button class="shop-filter-head shop-filter-dropdown-toggle">
                Category
                <span class="shop-filter-arrow">
                    <img class="shop-filter-drop-down" src="{{ asset('svgs/drop-down.svg') }}" alt=" drop down arrow">
                </span>
            </button>
            <ul class="shop-filter-dropdown-list">
                @foreach (['T-Shirts', 'Hoodies', 'Accessories', 'Jeans', 'Dresses', 'Shirts', 'Pants', 'Skirts', 'Jackets', 'Shorts', 'Hats', 'Sweaters'] as $category)
                    <li>
                        <label class="shop-filter-dropdown-label">
                            <input type="checkbox" name="category[]" value="{{ $category }}"> {{ $category }}
                        </label>
                    </li>
                @endforeach
            </ul>

        </div>
        {{-- color --}}
        <div class="shop-filter-category shop-filter-dropdown shop-filter-color">

            <button class="shop-filter-head shop-filter-dropdown-toggle">
                Color
                <span class="shop-filter-arrow">
                    <img class="shop-filter-drop-down" src="{{ asset('svgs/drop-down.svg') }}" alt="drop down arrow">
                </span>
            </button>

            @php
                $colors = [
                    'red' => 'Red',
                    'blue' => 'Blue',
                    'green' => 'Green',
                    'black' => 'Black',
                    'white' => 'White',
                    'yellow' => 'Yellow',
                    'purple' => 'Purple',
                    'pink' => 'Pink',
                    'gray' => 'Gray',
                    'brown' => 'Brown',
                ];
            @endphp

            <ul class="shop-filter-dropdown-list color-list">
                @foreach ($colors as $key => $label)
                    <li>
                        <label class="color-item">

                            <input type="checkbox" name="color[]" value="{{ $key }}">

                            <span class="color-circle color-{{ $key }}"></span>

                            <span class="color-text">{{ $label }}</span>

                        </label>
                    </li>
                @endforeach
            </ul>

        </div>


        {{-- price --}}
        <div class="shop-filter-price shop-filter-dropdown">
            <button class="shop-filter-head shop-filter-dropdown-toggle" type="button">
                Price
            </button>
            <div class="shop-filter-price-range shop-filter-price-list" data-currency="₹">
                <div class="shop-price-values">
                    <label class="shop-price-field" for="shop-min-price">
                        Min
                        <span class="shop-price-input-wrap">
                            <span class="shop-price-currency" aria-hidden="true">₹</span>
                            <input id="shop-min-price" type="number" class="min-value" value="500" min="0"
                                max="20000" step="500" inputmode="numeric" aria-label="Minimum price">
                        </span>
                    </label>

                    <label class="shop-price-field" for="shop-max-price">
                        Max
                        <span class="shop-price-input-wrap">
                            <span class="shop-price-currency" aria-hidden="true">₹</span>
                            <input id="shop-max-price" type="number" class="max-value" value="3500" min="0"
                                max="20000" step="500" inputmode="numeric" aria-label="Maximum price">
                        </span>
                    </label>
                </div>

                <div class="shop-price-slider" aria-label="Price range slider">
                    <div class="shop-slider-track">
                        <div class="shop-slider-progress"></div>
                    </div>
                    <input type="range" class="min-input" value="500" min="0" max="20000" step="500"
                        aria-label="Minimum price range">
                    <input type="range" class="max-input" value="3500" min="0" max="20000" step="500"
                        aria-label="Maximum price range">
                </div>
            </div>

        </div>

        {{-- size --}}
        <div class="shop-filter-category shop-filter-dropdown shop-filter-size">
            <button class="shop-filter-head shop-filter-dropdown-toggle">
                Size
                <span class="shop-filter-arrow">
                    <img class="shop-filter-drop-down" src="{{ asset('svgs/drop-down.svg') }}" alt=" drop down arrow">
                </span>
            </button>
            <ul class="shop-filter-dropdown-list">
                @foreach (['XS', 'S', 'M', 'L', 'XL', 'XXL'] as $size)
                    <li>
                        <label class="shop-filter-dropdown-label">
                            <input type="checkbox" name="size[]" value="{{ $size }}"> {{ $size }}
                        </label>
                    </li>
                @endforeach
            </ul>
        </div>
        {{-- review filter --}}
        <div class="shop-filter-category shop-filter-dropdown shop-filter-review">
            <button class="shop-filter-head shop-filter-dropdown-toggle">
                Rating
                <span class="shop-filter-arrow">
                    <img class="shop-filter-drop-down" src="{{ asset('svgs/drop-down.svg') }}" alt=" drop down arrow">
                </span>
            </button>
            <ul class="shop-filter-dropdown-list shop-filter-review-list">
                @foreach ([4, 3, 2, 1] as $stars)
                    <li>
                        <label class="shop-filter-dropdown-label review-item">
                            <input type="checkbox" name="review[]" value="{{ $stars }} & up">
                            <span class="shop-filter-review-stars" aria-hidden="true">
                                <span class="star-rating">
                                    <span class="stars-empty">★★★★★</span>
                                    <span class="stars-fill" style="width: {{ ($stars / 5) * 100 }}%;">★★★★★</span>
                                </span>
                            </span>
                            <span class="review-text">{{ $stars }} & up</span>
                        </label>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="shop-filter-actions">
            <button type="button" class="shop-filter-btn shop-filter-btn-clear">Clear</button>
            <button type="button" class="shop-filter-btn shop-filter-btn-apply">Apply</button>
        </div>
    </aside>


    {{-- Product Listing Area --}}
    <section class="product-listing-section">

        {{-- Sorting Navigation --}}
        <div class="product-listing-nav">

            <div class="shop-sort">
                <span>Sort by:</span>

                <select name="sort" id="sort">
                    <option value="default">Default</option>
                    <option value="price-asc">Price: Low to High</option>
                    <option value="price-desc">Price: High to Low</option>
                    <option value="newest">Newest Arrivals</option>
                </select>
            </div>

        </div>


        {{-- Product Cards --}}
        <div class="shop-product-cards">
            {{ $slot }}
        </div>

    </section>

</section>

<script></script>
