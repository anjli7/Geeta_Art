@extends('layout.app')

@section('content')

<!-- Hero Section -->
 @include('components.hero-banner')
<!-- <section class="contact-hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('assets/images/c.jpg') }}');">
    <div class="container">
        <div class="hero-content">
            <h1>Get In Touch</h1>
            <p>We'd love to hear from you</p>
        </div>
    </div>
</section> -->

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-wrapper">
            <div class="contact-info">
                <div class="section-header">
                    <span class="c-heading">CONTACT US</span>
                    <h3 class="section-title">Visit Our Showroom</h3>
                    <p>We're here to help and answer any questions you might have. We look forward to hearing from you.</p>
                </div>

                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h4>Our Location</h4>
                            <p>123 Furniture Street, Art District<br>Jodhpur, 110001</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="info-content">
                            <h4>Phone Number</h4>
                            <p>+91 98765 43210<br>+91 11 2345 6789</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h4>Email Address</h4>
                            <p>info@geetaartcraft.com<br>support@geetaartcraft.com</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-content">
                            <h4>Working Hours</h4>
                            <p>Monday - Saturday: 10:00 - 20:00<br>Sunday: 11:00 - 18:00</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h3>Send Us a Message</h3>
                @if(session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif
                <form id="contactForm" class="" action="{{route('contact')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="phone" name="number" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection