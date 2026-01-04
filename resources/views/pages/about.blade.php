@extends('layout.app')
@section('content')

<!-- Hero Section -->
@include('components.hero-banner')

<section class="half-overlay-section">
    <div class="left-text">
        <span class="sub-heading">OUR STORY</span>
        <h1 class="main-heading">
            The story behind the foundation of our company
        </h1>
        <p class="para">
           Geeta Art & Craft is dedicated to creating handcrafted furniture that combines traditional workmanship with modern style. We carefully design every piece to bring comfort, durability, and beauty to your space. Using high-quality materials and skilled craftsmanship, we create furniture that adds a warm and elegant touch to your home or workplace. Our goal is to deliver products that not only look good but also last long and reflect the art and passion behind our work.

    </div>

    <div class="right-image">
        <img src="{{ asset('assets/images/v.jpg') }}" alt="">
    </div>
</section>



<!-- Team Section -->
<section class="team-section">
    <div class="container">
        <h2 class="section-title">Meet Our Team</h2>
        <div class="team-grid">
            <div class="team-member">
                <div class="member-image">
                    <img src="{{ asset('assets/images/avtar1.png') }}" alt="Team Member" class="img-fluid">
                </div>
                <h3>Team</h3>
                <p>Founder & Art Director</p>
            </div>
            <div class="team-member">
                <div class="member-image">
                    <img src="{{ asset('assets/images/avtar2.png') }}" alt="Team Member" class="img-fluid">
                </div>
                <h3>Team</h3>
                <p>Creative Head</p>
            </div>
            <div class="team-member">
                <div class="member-image">
                    <img src="{{ asset('assets/images/avtar3.png') }}" alt="Team Member" class="img-fluid">
                </div>
                <h3>Team</h3>
                <p>Customer Relations</p>
            </div>
        </div>
    </div>
</section>
@endsection
