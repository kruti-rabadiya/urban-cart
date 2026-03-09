<header>
    <nav>
        <div class="nav-logo">
            <button class="nav-hamburger" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a href="/">
                <h1>Urban.co</h1>
            </a>
        </div>
        <div class="hamburger-menu">
            <div class="hamburger-content">
                <div class="ham-cross">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19 5L5 19M5 5L9.5 9.5M12 12L19 19" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </div>
                <div class="hamburger-header">
                    <div class="ham-welcome-user">
                        <h2>Hello , John Doe!</h2>
                        <a href="#">My Account</a>
                    </div>
                </div>
                <div class="ham-links">
                    <div class="ham-nav-home ham-link-box">
                        <img src="{{ asset('svgs/home-icon.svg') }}" alt="Home">
                        <a href="/">Home</a>
                    </div>
                    <div class="ham-nav-shop ">
                        <div class="ham-shop">
                            <div class="ham-shop-link">
                                <img src="{{ asset('svgs/shop-icon.svg') }}" alt="Shop">
                                <a href="/shop">Shop</a>

                            </div>
                            <div class="ham-drop-down">
                                <img class="nav-drop-down" src="{{ asset('svgs/drop-down.svg') }}" alt="">
                            </div>
                        </div>

                        <div class="ham-mega-menu">
                            @for ($i = 0; $i < 10; $i++)
                                <a href="#">Category {{ $i + 1 }}</a>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="ham-links">
                    <div class="ham-nav-order ham-link-box">
                        <img src="{{ asset('svgs/my-order.svg') }}" alt="Orders">
                        <a href="/orders">My Orders</a>
                    </div>
                    <div class="ham-nav-wishlist ham-link-box">
                        <img src="{{ asset('svgs/wishlist-icon.svg') }}" alt="Wishlist">
                        <a href="/wishlist">Wishlist</a>
                    </div>
                    <div class="ham-nav-contact ham-link-box">
                        <img src="{{ asset('svgs/contact-icon.svg') }}" alt="Contact">
                        <a href="/contact">Contact Us</a>
                    </div>
                </div>
                <div class="ham-links">
                    <div class="ham-nav-about ham-link-box">
                        <a href="/about">About Us</a>
                    </div>
                    <div class="ham-nav-privacy ham-link-box">
                        <a href="/privacy">Privacy Policy</a>
                    </div>
                    <div class="ham-nav-terms ham-link-box">
                        <a href="/terms">Terms of Service</a>
                    </div>
                    <div class="ham-nav-return ham-link-box">
                        <a href="/return">Return Policy</a>
                    </div>
                </div>
                <div class="ham-btn-sectio">
                    <div class="ham-logout">
                        <button>Logout</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="nav-links">
            <a href="/">Home</a>
            <div class="dropdown">
                <a class="dropdown-toggle " href="">Shop <img class="nav-drop-down"
                        src="{{ asset('svgs/drop-down.svg') }}" alt=""> </a>
                <div class="mega-menu">

                    {{-- <a href="{{ route('products.index') }}"
                        class="{{ request()->routeIs('products.index') ? 'active' : '' }}"><b>All Products</b></a> --}}
                    {{-- @foreach ($navCategories as $category)
                        <div class="mega-block">
                            <div class="mega-parent">
                                <a href="{{ route('products.category', $category->slug) }}"
                                    class="{{ request()->route('category')?->slug == $category->slug ? 'active' : '' }}"><strong>{{ $category->name }}</strong></a>
                            </div>
                            <ul class="mega-child">

                                @foreach ($category->children as $child)
                                    <li>
                                        <a href="{{ route('products.category', $child->slug) }}"
                                            class="{{ request()->route('category')?->slug === $child->slug ? 'active' : '' }}">
                                            {{ $child->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    @endforeach --}}
                </div>
            </div>
            <a href="/contact">New Arrivals</a>
            <a href="/about">About Us</a>
        </div>
        <div class="nav-search">
            <form action="/search" method="GET">
                <button type="submit"><img class="search-nav-icon" src="/svgs/search-icon-nav.svg"
                        alt=""></button>
                <input type="text" name="query" placeholder="Search products...">
            </form>
        </div>
        <div class="nav-icons">
            <a href="/search" class="mobile-search"><img class="nav-icon search-icon" src="/svgs/search-icon-nav.svg"
                    alt="Search"></a>
            <a href="/cart"><img class="nav-icon cart-icon" src="/svgs/cart-icon-nav.svg" alt="Shopping Cart"></a>
            <a href="/profile"><img class="nav-icon profile-icon" src="/svgs/account-icon-nav.svg"
                    alt="User Profile"></a>
        </div>
    </nav>


</header>
