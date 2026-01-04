@extends('layout.app')

@section('content')
<!-- 
<section class="sofa-hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('assets/images/chair2.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 120px 0; color: white; text-align: center;">
    <div class="container">
        <div class="hero-content">
            <h1>Chairs  Collection</h1>
            <p >Experience Unmatched Comfort and Elegance</p>
        </div>
    </div>
</section> -->

<!-- buy-section   -->

<!-- <section class="buy-section">
    <div class="container">
        <h2 class="b-title">Chairs</h2>
        <div class="row g-4"> -->
            <!-- Card 1 -->
            <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="buy-card">
                    <div class="w-icon">
                        <i class="far fa-heart"></i>
                    </div>
                    <img src="{{ asset('assets/images/chair3.jpg') }}" alt="Sofa 1">
                    <h3>table</h3>
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
                    <img src="{{ asset('assets/images/chair1.jpg') }}" alt="Sofa 2">
                    <h3>table</h3>
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
                    <img src="{{ asset('assets/images/chair4.jpg') }}" alt="Sofa 3">
                    <h3>table</h3>
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
