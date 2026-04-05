<section class="shop-list-section">

    {{-- Filter Sidebar --}}
    <aside class="filter-section" id="mobile-filter-drawer" aria-hidden="true">

        <div class="shop-filter-heading">
            <h3>Filter by</h3>
            <button type="button" class="mobile-filter-close" aria-label="Close filters">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M19 5L5 19M5 5L9.5 9.5M12 12L19 19" stroke="#000000" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </button>
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
                <span class="shop-filter-arrow">
                    <img class="shop-filter-drop-down" src="{{ asset('svgs/drop-down.svg') }}" alt="drop down arrow">
                </span>
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
            {{-- filter svg --}}
                <button type="button" class="tsf-filter-svg" aria-label="Open filters" aria-controls="mobile-filter-drawer" aria-expanded="false">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.75 7.75V13.5C8.75 13.6989 8.67098 13.8897 8.53033 14.0303C8.38968 14.171 8.19891 14.25 8 14.25C7.80109 14.25 7.61032 14.171 7.46967 14.0303C7.32902 13.8897 7.25 13.6989 7.25 13.5V7.75C7.25 7.55109 7.32902 7.36032 7.46967 7.21967C7.61032 7.07902 7.80109 7 8 7C8.19891 7 8.38968 7.07902 8.53033 7.21967C8.67098 7.36032 8.75 7.55109 8.75 7.75ZM12.5 12C12.3011 12 12.1103 12.079 11.9697 12.2197C11.829 12.3603 11.75 12.5511 11.75 12.75V13.5C11.75 13.6989 11.829 13.8897 11.9697 14.0303C12.1103 14.171 12.3011 14.25 12.5 14.25C12.6989 14.25 12.8897 14.171 13.0303 14.0303C13.171 13.8897 13.25 13.6989 13.25 13.5V12.75C13.25 12.5511 13.171 12.3603 13.0303 12.2197C12.8897 12.079 12.6989 12 12.5 12ZM14 9.5H13.25V2.5C13.25 2.30109 13.171 2.11032 13.0303 1.96967C12.8897 1.82902 12.6989 1.75 12.5 1.75C12.3011 1.75 12.1103 1.82902 11.9697 1.96967C11.829 2.11032 11.75 2.30109 11.75 2.5V9.5H11C10.8011 9.5 10.6103 9.57902 10.4697 9.71967C10.329 9.86032 10.25 10.0511 10.25 10.25C10.25 10.4489 10.329 10.6397 10.4697 10.7803C10.6103 10.921 10.8011 11 11 11H14C14.1989 11 14.3897 10.921 14.5303 10.7803C14.671 10.6397 14.75 10.4489 14.75 10.25C14.75 10.0511 14.671 9.86032 14.5303 9.71967C14.3897 9.57902 14.1989 9.5 14 9.5ZM3.5 10C3.30109 10 3.11032 10.079 2.96967 10.2197C2.82902 10.3603 2.75 10.5511 2.75 10.75V13.5C2.75 13.6989 2.82902 13.8897 2.96967 14.0303C3.11032 14.171 3.30109 14.25 3.5 14.25C3.69891 14.25 3.88968 14.171 4.03033 14.0303C4.17098 13.8897 4.25 13.6989 4.25 13.5V10.75C4.25 10.5511 4.17098 10.3603 4.03033 10.2197C3.88968 10.079 3.69891 10 3.5 10ZM5 7.5H4.25V2.5C4.25 2.30109 4.17098 2.11032 4.03033 1.96967C3.88968 1.82902 3.69891 1.75 3.5 1.75C3.30109 1.75 3.11032 1.82902 2.96967 1.96967C2.82902 2.11032 2.75 2.30109 2.75 2.5V7.5H2C1.80109 7.5 1.61032 7.57902 1.46967 7.71967C1.32902 7.86032 1.25 8.05109 1.25 8.25C1.25 8.44891 1.32902 8.63968 1.46967 8.78033C1.61032 8.92098 1.80109 9 2 9H5C5.19891 9 5.38968 8.92098 5.53033 8.78033C5.67098 8.63968 5.75 8.44891 5.75 8.25C5.75 8.05109 5.67098 7.86032 5.53033 7.71967C5.38968 7.57902 5.19891 7.5 5 7.5ZM9.5 4.5H8.75V2.5C8.75 2.30109 8.67098 2.11032 8.53033 1.96967C8.38968 1.82902 8.19891 1.75 8 1.75C7.80109 1.75 7.61032 1.82902 7.46967 1.96967C7.32902 2.11032 7.25 2.30109 7.25 2.5V4.5H6.5C6.30109 4.5 6.11032 4.57902 5.96967 4.71967C5.82902 4.86032 5.75 5.05109 5.75 5.25C5.75 5.44891 5.82902 5.63968 5.96967 5.78033C6.11032 5.92098 6.30109 6 6.5 6H9.5C9.69891 6 9.88968 5.92098 10.0303 5.78033C10.171 5.63968 10.25 5.44891 10.25 5.25C10.25 5.05109 10.171 4.86032 10.0303 4.71967C9.88968 4.57902 9.69891 4.5 9.5 4.5Z"
                            fill="#333" />
                    </svg>
                    <span class="filter-text">Filter</span>
                </button>

            <!-- Sort Filter -->
            <div class="tsf-common-filter-container tsf-sort-filter-container">

                <div class="tsf-common-filter-selection-wrapper tsf-sort-filter-selection-wrapper">

                    <div class="tsf-common-filter-top-row tsf-sort-filter-top-row">

                        <!-- label -->
                        <span class="tsf-common-filter-label tsf-sort-filter-label">
                            Sort by :
                        </span>

                        <!-- dropdown -->
                        <div class="tsf-common-filter-dropdown tsf-sort-filter-dropdown">

                            <!-- selected -->
                            <div class="tsf-common-filter-selected-option tsf-sort-filter-selected-option">

                                <span class="tsf-common-filter-option-text tsf-sort-filter-selected-text">
                                    Default
                                </span>

                                <span class="tsf-common-filter-option-icon tsf-sort-filter-selected-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M19 9L14 14.1599C13.7429 14.4323 13.4329 14.6493 13.089 14.7976C12.7451 14.9459 12.3745 15.0225 12 15.0225C11.6255 15.0225 11.2549 14.9459 10.9109 14.7976C10.567 14.6493 10.2571 14.4323 10 14.1599L5 9"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>

                            </div>

                            <!-- options -->
                            <ul class="tsf-common-filter-options tsf-sort-filter-options">
                                <li class="tsf-common-filter-option tsf-sort-filter-option selected" value="default">
                                    Default</li>
                                <li class="tsf-common-filter-option tsf-sort-filter-option" value="price_low_to_high">
                                    Price: Low to High</li>
                                <li class="tsf-common-filter-option tsf-sort-filter-option" value="price_high_to_low">
                                    Price: High to Low</li>
                                <li class="tsf-common-filter-option tsf-sort-filter-option" value="newest">Newest
                                    Arrivals</li>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>
            <!-- Per page Filter -->
            <div class="tsf-common-filter-container tsf-per-page-filter-container">

                

                <div class="tsf-common-filter-selection-wrapper tsf-per-page-filter-selection-wrapper">

                    <div class="tsf-common-filter-top-row tsf-per-page-filter-top-row">

                        <!-- label -->
                        <span class="tsf-common-filter-label tsf-per-page-filter-label">
                            Show :
                        </span>

                        <!-- dropdown -->
                        <div class="tsf-common-filter-dropdown tsf-per-page-filter-dropdown">

                            <!-- selected -->
                            <div class="tsf-common-filter-selected-option tsf-per-page-filter-selected-option">

                                <span class="tsf-common-filter-option-text tsf-per-page-filter-selected-text">
                                    12
                                </span>

                                <span class="tsf-common-filter-option-icon tsf-per-page-filter-selected-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M19 9L14 14.1599C13.7429 14.4323 13.4329 14.6493 13.089 14.7976C12.7451 14.9459 12.3745 15.0225 12 15.0225C11.6255 15.0225 11.2549 14.9459 10.9109 14.7976C10.567 14.6493 10.2571 14.4323 10 14.1599L5 9"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>

                            </div>

                            <!-- options -->
                            <ul class="tsf-common-filter-options tsf-per-page-filter-options">
                                <li class="tsf-common-filter-option tsf-per-page-filter-option " value="6">6</li>
                                <li class="tsf-common-filter-option tsf-per-page-filter-option selected"
                                    value="12">12</li>
                                <li class="tsf-common-filter-option tsf-per-page-filter-option" value="24">24</li>
                                <li class="tsf-common-filter-option tsf-per-page-filter-option" value="36">36</li>
                                <li class="tsf-common-filter-option tsf-per-page-filter-option" value="48">48</li>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- Product Cards --}}
        <div class="shop-product-cards">
            {{ $slot }}
        </div>


        {{-- pagination --}}
        <div class="pagination-wrapper">
            <ul class="pagination">
                <li><a href="#">Prev</a></li>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><span class="pagination-ellipsis">...</span></li>
                <li><a href="#">10</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>

    </section>

    {{-- mobile filter  --}}
    <div class="mobile-filter-overlay" aria-hidden="true">
        
    </div>
        

</section>

<script></script>
