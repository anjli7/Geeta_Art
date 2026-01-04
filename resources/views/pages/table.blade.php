@extends('layout.app')

@section('content')

<!-- <section class="sofa-hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('assets/images/' . $hero['folder'] . $hero['image']) }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 120px 0; color: white; text-align: center;">
    <div class="container">
        <div class="hero-content">
            <h1>{{ $hero['title'] }}</h1>
            <p>{{ $hero['subtitle'] }}</p>
        </div>
    </div>
</section> -->


<!-- buy-section   -->
<!-- 
@foreach($types as $type)
<section class="buy-section">
    <div class="container">
        <h2 class="b-title">{{ ucwords(str_replace('-', ' ', $type)) }}</h2>
        <div class="row g-4">

            @foreach($products->where('type', $type) as $product)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="buy-card">
                        <img src="{{ asset('assets/images/Product-images/'.$product->image) }}" alt="">
                        <h3>{{ $product->name }}</h3>
                        <p>{{ $product->subtitle }}</p>
                        <p class="price">₹{{ number_format($product->price) }}</p>
                        <a href="#" class="buy-btn">Add to Cart</a>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</section>
@endforeach -->

{{-- PRODUCT SECTION --}}
@include('components.product-section')

@endsection
