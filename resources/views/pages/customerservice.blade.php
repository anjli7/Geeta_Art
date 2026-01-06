@extends('layout.app')

@section('content')

@include('components.hero-banner')
<!-- Main Content -->
<div class="container customer-service">
    <div class="service-nav">
        <ul>
            <li><a href="#shipping-policy" class="tab-btn active">Shipping Policy</a></li>
            <li><a href="#return-policy" class="tab-btn ">Return Policy</a></li>
            <li><a href="#terms" class="tab-btn ">Terms & Conditions</a></li>
        </ul>
    </div>

    <div class="service-content">
        <!-- Shipping Policy -->
        <section id="shipping-policy" class="policy-section tab-content">
            <span class="sub-heading">Shipping Policy</span>
            <div class="policy-content">
                <h3>Delivery Timeframe</h3>
                <p>We aim to process and dispatch all orders within 1-2 business days. Standard delivery typically takes 3-7 business days, depending on your location.</p>
                
                <h3>Shipping Rates</h3>
                <ul>
                    <li>Standard Shipping: ₹99 (Free on orders above ₹5,000)</li>
                    <li>Express Shipping: ₹199 (2-3 business days)</li>
                    <li>Same-day Delivery: ₹299 (Available in select areas)</li>
                </ul>

                <h3>Order Tracking</h3>
                <p>You will receive a tracking number via email once your order has been shipped. You can track your order using our online tracking system.</p>
            </div>
        </section>

        <!-- Return Policy -->
        <section id="return-policy" class="policy-section tab-content" style="display:none; ">
            <span class="sub-heading">Return & Exchange Policy</span>
            <div class="policy-content">
                <h3>30-Day Return Policy</h3>
                <p>We offer a 30-day return policy from the date of delivery. Items must be in their original condition, unused, and with all tags attached.</p>
                
                <h3>How to Initiate a Return</h3>
                <ol>
                    <li>Contact our customer service team to initiate the return process</li>
                    <li>Pack the item securely in its original packaging</li>
                    <li>Attach the return label provided by our team</li>
                    <li>Drop off the package at your nearest courier service</li>
                </ol>

                <h3>Refund Process</h3>
                <p>Refunds will be processed within 3-5 business days after we receive and inspect the returned item. The refund will be credited to your original payment method.</p>
            </div>
        </section>

       

        <!-- Terms & Conditions -->
        <section id="terms" class="policy-section  tab-content" style="display:none;">
            <span class="sub-heading">Terms & Conditions</span>
            <div class="policy-content">
                <h3>1. General</h3>
                <p>By accessing and using this website, you accept and agree to be bound by the terms and conditions set forth below.</p>
                
                <h3>2. Product Information</h3>
                <p>We make every effort to display our products as accurately as possible. However, we cannot guarantee that your monitor's display of colors will be accurate.</p>
                
                <h3>3. Pricing</h3>
                <p>All prices are in Indian Rupees (₹) and are subject to change without notice. We reserve the right to modify or discontinue any product at any time.</p>
                
                <h3>4. Limitation of Liability</h3>
                <p>Geeta Art & Craft shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of or inability to use the site or services.</p>
                
                <h3>5. Governing Law</h3>
                <p>These terms shall be governed by and construed in accordance with the laws of India, without regard to its conflict of law provisions.</p>
            </div>
        </section>
    </div>
</div>

@endsection