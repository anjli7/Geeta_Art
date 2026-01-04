@extends('layout.app')

@section('content')
<!-- 
<section class="sofa-hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('assets/images/wardrobe3.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 120px 0; color: white; text-align: center;">
    <div class="container">
        <div class="hero-content">
            <h1>Wardrobes Collection</h1>
            <p >Experience Unmatched Comfort and Elegance</p>
        </div>
    </div>
</section> -->

<!-- buy-section   -->

<!-- <section class="buy-section">
    <div class="container">
        <h2 class="b-title"> Wardrobes</h2>
        

        <div class="row g-4"> -->

            <!-- Card 1 -->
            <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="buy-card">
                    <div class="w-icon">
                        <i class="far fa-heart"></i>
                    </div>
                    <img src="{{ asset('assets/images/wardrobe1.jpg') }}" alt="Sofa 1">
                    <h3>Wardrobes</h3>
                    <p class="product-subtitle">Lorem ipsum dolor sit amet.</p>
                    <p class="price">₹18,000</p>
                    <a href="#" class="buy-btn">Add to Cart</a>
                </div>
            </div> -->

            <!-- Card 2 -->
            <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="buy-card">
                      <div class="w-icon">
                        <i class="far fa-heart"></i>
                    </div>
                    <img src="{{ asset('assets/images/wordrobe1.jpg') }}" alt="Sofa 2">
                    <h3>Wardrobes</h3>
                    <p class="product-subtitle">Lorem ipsum dolor sit amet.</p>
                    <p class="price">₹21,500</p>
                    <a href="#" class="buy-btn">Add to Cart</a>
                </div>
            </div> -->

            <!-- Card 3 -->
            <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="buy-card">
                      <div class="w-icon">
                        <i class="far fa-heart"></i>
                    </div>
                    <img src="{{ asset('assets/images/wardrobe3.jpg') }}" alt="Sofa 3">
                    <h3>Wardrobes</h3>
                    <p class="product-subtitle">Lorem ipsum dolor sit amet.</p>
                    <p class="price">₹25,000</p>
                    <a href="#" class="buy-btn">Add to Cart</a>
                </div>
            </div>

        </div>
    </div>
</section>
 -->

<!-- 
<section class="buy-section">
    <div class="container">
        <h2 class="b-title">Chest of Drawers</h2>
        

        <div class="row g-4"> -->

            <!-- Card 1 -->
            <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="buy-card">
                    <div class="w-icon">
                        <i class="far fa-heart"></i>
                    </div>
                    <img src="{{ asset('assets/images/c_drower1.jpg') }}" alt="Sofa 1">
                    <h3>Chest of Drawers</h3>
                     <p class="product-subtitle">Lorem ipsum dolor sit amet.</p>
                    <p class="price">₹18,000</p>
                    <a href="#" class="buy-btn">Add to Cart</a>
                </div>
            </div> -->

            <!-- Card 2 -->
            <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="buy-card">
                      <div class="w-icon">
                        <i class="far fa-heart"></i>
                    </div>
                    <img src="{{ asset('assets/images/l.jpg') }}" alt="Sofa 2">
                    <h3>Chest of Drawers</h3>
                     <p class="product-subtitle">Lorem ipsum dolor sit amet.</p>
                    <p class="price">₹21,500</p>
                    <a href="#" class="buy-btn">Add to Cart</a>
                </div>
            </div> -->

            <!-- Card 3 -->
            <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="buy-card">
                      <div class="w-icon">
                        <i class="far fa-heart"></i>
                    </div>
                    <img src="{{ asset('assets/images/c_drower3.jpg') }}" alt="Sofa 3">
                    <h3>Chest of Drawers</h3>
                     <p class="product-subtitle">Lorem ipsum dolor sit amet.</p>
                    <p class="price">₹25,000</p>
                    <a href="#" class="buy-btn">Add to Cart</a>
                </div>
            </div>

        </div>
    </div>
</section> -->

{{-- PRODUCT SECTION --}}
@include('components.product-section')

@endsection
