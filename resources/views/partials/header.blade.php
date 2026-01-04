<header class="header">

    <nav class="main-nav">
        <div class="container">
            <div class="mobile-menu-btn" aria-label="Toggle menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/logo1.png') }}" alt="Geeta Art & Craft">
                </a>
            </div>

            <div class="nav-right">
                <div class="search-container">
                    <div class="search-box">
                        <input type="text" placeholder="Search products..." class="search-input">
                        <button type="submit" class="search-btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <div class="user-actions">
                    @auth
                    <a href="{{ url('user/profile') }}" class="user-icon" aria-label="My Account">
                        <i class="fas fa-user"></i>
                        @else
                        <a href="{{ url('/login') }}" class="user-icon" aria-label="My Account">
                            <i class="far fa-user"></i>
                            <span class="action-text">Account</span>
                        </a>
                        @endauth
                        <a href="" class="wishlist-icon" aria-label="Wishlist">
                            <i class="far fa-heart"></i>
                            <span class="action-text">Wishlist</span>
                            <span class="count-badge">0</span>
                        </a>
                        @php
                        $cartCount = 0;
                        if (auth()->check() && session()->has('cart')) {
                        $cartCount = count(session('cart'));
                        }
                        @endphp
                        <a href="{{ auth()->check() ? route('cart.index') : url('/login') }}" class="cart-icon" aria-label="Shopping Cart">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="count-badge">{{ session('cart') ? count(session('cart')) : 0 }}</span>
                        </a>

                </div>
            </div>
        </div>

        <div class="menu-container">
            <div class="container">
                <div class="mobile-search">
                    <div class="search">
                        <input type="text" placeholder="Search products...">
                        <a href="#" class="search-icon"><i class="fa-solid fa-search"></i></a>
                    </div>
                </div>
                <ul class="main-menu">
                    <li class="menu-item {{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ url('/') }}" class="menu-link">Home</a>
                    </li>
                    <li class="menu-item {{ request()->is('about') || request()->is('about/*') ? 'active' : '' }}">
                        <a href="{{ url('/about') }}" class="menu-link">About Us</a>
                    </li>
                    <li class="menu-item menu-item-has-children {{ request()->is('collection') || request()->is('collection/*') ? 'active' : '' }}">
                        <a href="" class="menu-link">Collections</a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item"><a href="{{ url('/collection/sofas') }}" class="sub-menu-link">Sofas</a></li>
                            <li class="sub-menu-item"><a href="{{ url('/collection/tables') }}" class="sub-menu-link">Tables</a></li>
                            <li class="sub-menu-item"><a href="{{ url('/collection/wardrobes') }}" class="sub-menu-link">Wardrobes</a></li>
                            <li class="sub-menu-item"><a href="{{ url('/collection/tvunit') }}" class="sub-menu-link">TV Units</a></li>
                            <li class="sub-menu-item"><a href="{{ url('/collection/office-furniture') }}" class="sub-menu-link">Office Furniture</a></li>
                            <li class="sub-menu-item"><a href="{{ url('/collection/chairs') }}" class="sub-menu-link">Chairs</a></li>
                            <li class="sub-menu-item"><a href="{{ url('/collection/beds') }}" class="sub-menu-link">Beds</a></li>
                            <li class="sub-menu-item"><a href="{{ url('/collection/bookshelf') }}" class="sub-menu-link">Bookshelf</a></li>
                        </ul>
                    </li>
                    <li class="menu-item {{ request()->is('customisation') || request()->is('customisation/*') ? 'active' : '' }}">
                        <a href="{{ url('/customisation') }}" class="menu-link">Customisation</a>
                    </li>
                    <li class="menu-item {{ request()->is('contact') || request()->is('contact/*') ? 'active' : '' }}">
                        <a href="{{ url('/contact') }}" class="menu-link">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
</header>