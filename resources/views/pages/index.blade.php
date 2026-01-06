@extends('layout.app')

@section('content')

<!-- slider-section start -->
 <section class="slider-wrapper">
    <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($sliders as $key => $slider)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img src="{{ asset('assets/images/'.$slider->image) }}"
                     class="d-block w-100 slider-img"
                     alt="Slide {{ $key+1 }}">
            </div>
            @endforeach
        </div>
        @if($sliders->count())
        <div class="carousel-caption-custom">
            <h2>{{ $sliders[0]->title }}</h2>
            <p>{{ $sliders[0]->subtitle }}</p>
            <a href="{{ $sliders[0]->button_link }}" class="btn-slider">{{ $sliders[0]->button_text }}</a>
        </div>
        @endif

        <button class="carousel-control-prev" type="button"
                data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button"
                data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>
</section>

<!-- <section class="slider-wrapper">    
    <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/a.jpg') }}" class="d-block w-100 slider-img" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/e.jpg') }}" class="d-block w-100 slider-img" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/c.jpg') }}" class="d-block w-100 slider-img" alt="Slide 3">
            </div>
        </div>

        <div class="carousel-caption-custom">
            <h2>Geeta Art & Craft</h2>
            <p>Discover our premium handmade crafts & collections</p>
            <a href="#" class="btn-slider">Shop Now</a>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>
</section> -->

<section class="hero">
    <div class="sub-hero">
        <div class="left-title">
            <h3>Handcrafted with Love</h3>
            <p>
                Discover a beautiful world of premium handmade crafts designed by skilled artisans.
                Each product is crafted with precision, creativity, and passion — perfect for your home decor,
                gifting, and personal collection.
            </p>

            <h3>Crafted by Skilled Hands</h3>
            <p>
                We bring you authentic handmade products inspired by Indian artistry and culture.
                Each piece is made with love, precision, and sustainability in mind.
                Our mission is to keep traditional art alive while creating products that beautify modern homes.
            </p>
        </div>
        <div class="image">
            <img src="{{ asset('assets/images/d.jpg') }}" alt="Handmade Craft">
        </div>
        <div class="right-title">
            <h3>Unique. Artistic. Modern.</h3>
            <p>
                From elegant wall art to creative home décor, our collection blends tradition
                with modern style. Add a touch of creativity to your spaces with Geeta Art & Craft.
            </p>

            <h3>Bring Art to Your Space</h3>
            <p>
                Choose from a wide variety of handcrafted products — wall décor, home accents, gifts,
                and custom designs. Whether you love traditional patterns or modern creativity,
                we have something that feels truly yours.
            </p>
        </div>
    </div>
</section>


<!-- Gallery Section -->
<!-- <section class="gallery-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">Our Collections</h2>
            <p class="section-subtitle">Explore our handpicked categories of beautiful crafts</p>
        </div>

        <div class="gallery-grid">
        
            <div class="gallery-item-wrapper">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/sofa6.jpg') }}" alt="Wall Art" class="gallery-image">
                    <div class="image-overlay">
                        <a href="#" class="btn-explore">View Details</a>
                    </div>
                </div>
                <div class="gallery-item-text">
                    <h4>Sofas</h4>
                    <p>Comfort crafted for your home</p>
                </div>
            </div>

        
            <div class="gallery-item-wrapper">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/table2.jpg') }}" alt="Home Decor" class="gallery-image">
                    <div class="image-overlay">
                        <a href="#" class="btn-explore">View Details</a>
                    </div>
                </div>
                <div class="gallery-item-text">
                    <h4>Tables</h4>
                    <p>Designed to elevate your space</p>
                </div>
            </div>

          
            <div class="gallery-item-wrapper">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/h.jpg') }}" alt="Gift Items" class="gallery-image">
                    <div class="image-overlay">
                        <a href="#" class="btn-explore">View Details</a>
                    </div>
                </div>
                <div class="gallery-item-text">
                    <h4>Wardrobes</h4>
                    <p>Smart storage, stylish design</p>
                </div>
            </div>

         
            <div class="gallery-item-wrapper">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/tv1.jpg') }}" alt="Custom Designs" class="gallery-image">
                    <div class="image-overlay">
                        <a href="#" class="btn-explore">View Details</a>
                    </div>
                </div>
                <div class="gallery-item-text">
                    <h4>TV Units</h4>
                    <p>Modern units for modern homes</p>
                </div>
            </div>

            <div class="gallery-item-wrapper">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/ofc1.jpg') }}" alt="Wall Frames" class="gallery-image">
                    <div class="image-overlay">
                        <a href="#" class="btn-explore">View Details</a>
                    </div>
                </div>
                <div class="gallery-item-text">
                    <h4>Office Furniture</h4>
                    <p>Work in comfort and style</p>
                </div>
            </div>

            <div class="gallery-item-wrapper">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/w.jpg') }}" alt="Showpieces" class="gallery-image">
                    <div class="image-overlay">
                        <a href="{{ route('collection.chairs') }}" class="btn-explore">View Details</a>
                    </div>
                </div>
                <div class="gallery-item-text">
                    <h4>Chairs</h4>
                    <p>Style meets seating comfort</p>
                </div>
            </div>

            <div class="gallery-item-wrapper">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/bed3.jpg') }}" alt="Vases" class="gallery-image">
                    <div class="image-overlay">
                        <a href="#" class="btn-explore">View Details</a>
                    </div>
                </div>
                <div class="gallery-item-text">
                    <h4>Beds</h4>
                    <p>Comfort crafted for better sleep</p>
                </div>
            </div>

            <div class="gallery-item-wrapper">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/book2.jpg') }}" alt="Cushions" class="gallery-image">
                    <div class="image-overlay">
                        <a href="#" class="btn-explore">View Details</a>
                    </div>
                </div>
                <div class="gallery-item-text">
                    <h4>Bookshelves</h4>
                    <p>Organize your space in style</p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="gallery-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">Our Collections</h2>
            <p class="section-subtitle">Explore our handpicked categories</p>
        </div>

        <div class="gallery-grid">
            @foreach($categories as $category)
                <div class="gallery-item-wrapper">
                    <div class="gallery-item">
                        <img src="{{ asset('assets/images/'.$category->image) }}"
                             alt="{{ $category->name }}"
                             class="gallery-image">

                        <div class="image-overlay">
                            <a href="{{ route('collection.category', $category->slug) }}"
                               class="btn-explore">
                               View Details
                            </a>
                        </div>
                    </div>

                    <div class="gallery-item-text">
                        <h4>{{ $category->name }}</h4>
                        <p>{{ $category->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- ===========slider=======---------------- -->



<section class="multi-carousel-section">
   
    <div class="container">
          <div class="section-header text-center mb-5">
            <h2 class="section-title">Premium Carpentry Creations</h2>
            <p class="section-subtitle">Beautifully crafted sofas, chairs, tables & more — designed to enhance your living space.</p>
        </div>
        <div class="carousel-slider">
            <button id="prev-slider" class="slider-button">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="image-list">
                <img src="{{ asset('assets/images/m.jpg') }}" alt="img-1" class="image-item">
                <img src="{{ asset('assets/images/n.jpg') }}" alt="img-2" class="image-item">
                <img src="{{ asset('assets/images/o.jpg') }}" alt="img-3" class="image-item">
                <img src="{{ asset('assets/images/p.jpg') }}" alt="img-4" class="image-item">
                <img src="{{ asset('assets/images/q.jpg') }}" alt="img-5" class="image-item">
                <img src="{{ asset('assets/images/e.jpg') }}" alt="img-6" class="image-item">
            </div>
            <button id="next-slider" class="slider-button">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        <div class="slider-scrollbar">
            <div class="scrollbar-track">
                <div class="scrollbar-thumb"></div>
            </div>
        </div>
    </div>
</section>


@endsection