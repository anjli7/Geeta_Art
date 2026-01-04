@extends('layout.app')

@section('content')
<div class="gtaprof-main">
    <div class="gtaprof-header">
        <a href="{{ route('user.orders') }}" class="back-link">
            <i class="fas fa-arrow-left"></i> Back to Orders
        </a>
        <h1 class="gtaprof-title">Order Details</h1>
        <p class="gtaprof-subtitle">Order #12345 • Placed on Dec 15, 2023</p>
    </div>

    <div class="gtaprof-body">
        <div class="order-details-container">
            <!-- Order Summary -->
            <div class="order-summary">
                <div class="order-product-details">
                    <div class="product-gallery">
                        <div class="main-image">
                            <img src="{{ asset('assets/images/sofa1.jpg') }}" alt="Product Image" id="mainProductImage">
                        </div>
                        <div class="thumbnail-container">
                            <div class="thumbnail active" onclick="changeImage(this, '{{ asset('assets/images/sofa1.jpg') }}')">
                                <img src="{{ asset('assets/images/sofa1.jpg') }}" alt="Thumbnail 1" width="100" height="100">
                            </div>
                            <div class="thumbnail" onclick="changeImage(this, '{{ asset('assets/images/sofa2.jpg') }}')">
                                <img src="{{ asset('assets/images/sofa2.jpg') }}" alt="Thumbnail 2">
                            </div>
                            <div class="thumbnail" onclick="changeImage(this, '{{ asset('assets/images/sofa3.jpg') }}')">
                                <img src="{{ asset('assets/images/sofa3.jpg') }}" alt="Thumbnail 3">
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-info">
                        <h2>Handmade Wooden Table</h2>
                        <div class="product-meta">
                            <span class="product-sku">SKU: GATB001</span>
                            <span class="product-category">Category: Furniture</span>
                        </div>
                        
                        <div class="price-section">
                            <span class="current-price">₹12,999</span>
                            <span class="original-price">₹15,999</span>
                            <span class="discount">19% off</span>
                        </div>
                        
                        <div class="product-specs">
                            <h4>Specifications:</h4>
                            <ul>
                                <li><strong>Material:</strong> Sheesham Wood</li>
                                <li><strong>Color:</strong> Brown</li>
                                <li><strong>Dimensions:</strong> 120cm x 75cm x 45cm (LxWxH)</li>
                                <li><strong>Weight:</strong> 15 kg</li>
                                <li><strong>Warranty:</strong> 1 Year</li>
                            </ul>
                        </div>
                        
                        <div class="quantity-section">
                            <label>Quantity:</label>
                            <div class="quantity-selector">
                                <button class="qty-btn" onclick="updateQuantity(-1)">-</button>
                                <input type="number" value="1" min="1" id="quantityInput">
                                <button class="qty-btn" onclick="updateQuantity(1)">+</button>
         
                        </div>
                        
                        <div class="action-buttons">
                            <button class="gtaprof-btn btn-primary">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </button>
                            <button class="gtaprof-btn btn-outline">
                                <i class="far fa-heart"></i> Add to Wishlist
                            </button>
                             <button class="gtaprof-btn btn-outline">
                                <i class="fa-solid fa-rectangle-xmark"></i> Cancel
                            </button>
                        </div>
                    </div>
                </div>
                </div>
                
                <!-- Order Summary Card -->
                <div class="order-summary-card">
                    <h3>Order Summary</h3>
                    <div class="summary-row">
                        <span>Subtotal (1 item)</span>
                        <span>₹12,999</span>
                    </div>
                    <div class="summary-row">
                        <span>Shipping</span>
                        <span class="free-shipping">FREE</span>
                    </div>
                    <div class="summary-row">
                        <span>Tax</span>
                        <span>₹1,430</span>
                    </div>
                    <div class="summary-row total">
                        <span>Total</span>
                        <span>₹14,429</span>
                    </div>
                    
                    <div class="shipping-address">
                        <h4>Shipping Address</h4>
                        <p>John Doe<br>
                        123 Main Street<br>
                        Apartment 4B<br>
                        Mumbai, Maharashtra 400001<br>
                        India<br>
                        Phone: +91 98765 43210</p>
                    </div>
                    
                    <div class="payment-method">
                        <h4>Payment Method</h4>
                        <div class="payment-details">
                            <i class="fab fa-cc-visa"></i>
                            <span>Visa ending in 4242</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    
    /* ========== ORDER DETAILS PAGE ========== */
    .back-link {
        display: inline-flex;
        align-items: center;
        color: var(--primary-color);
        text-decoration: none;
        margin-bottom: 15px;
        font-weight: 500;
    }
    
    .back-link i {
        margin-right: 8px;
        transition: transform 0.3s ease;
    }
    
    .back-link:hover {
        color: var(--secondary-color);
    }
    
    .back-link:hover i {
        transform: translateX(-3px);
    }
    
    /* Status Timeline */
    .status-timeline {
        display: flex;
        justify-content: space-between;
        margin: 30px 0;
        position: relative;
        padding: 0 50px;
    }
    
    .status-timeline:before {
        content: '';
        position: absolute;
        top: 20px;
        left: 50px;
        right: 50px;
        height: 3px;
        background: #e0e0e0;
        z-index: 1;
    }
    
    .status-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        z-index: 2;
        flex: 1;
    }
    
    .status-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #e0e0e0;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        color: #fff;
    }
    
    .status-step.completed .status-icon {
        background: var(--success);
    }
    
    .status-step.active .status-icon {
        background: var(--primary-color);
        transform: scale(1.1);
        box-shadow: 0 0 0 3px rgba(132, 167, 169, 0.3);
    }
    
    .status-text {
        text-align: center;
        font-size: 0.85em;
    }
    
    .status-text span {
        display: block;
        font-weight: 600;
        margin-bottom: 3px;
    }
    
    .status-text small {
        color: #6c757d;
        font-size: 0.8em;
    }
    
    /* Order Summary */
    .order-summary {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 30px;
        margin-top: 30px;
    }
    
    .order-product-details {
        background: var(--card);
        border-radius: 8px;
        padding: 25px;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
    }
    
    .product-gallery {
        margin-bottom: 30px;
    }
    
    .main-image {
        width: 100%;
        height: 400px;
        overflow: hidden;
        border-radius: 8px;
        margin-bottom: 15px;
        background: #f8f9fa;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .main-image img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }
    
    .thumbnail-container {
        display: flex;
        gap: 10px;
    }
    
    .thumbnail {
        width: 70px;
        height: 70px;
        border: 2px solid #e0e0e0;
        border-radius: 5px;
        overflow: hidden;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .thumbnail:hover, .thumbnail.active {
        border-color: var(--primary-color);
    }
    
    .thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .product-info h2 {
        font-size: 1.8em;
        margin: 0 0 15px 0;
        color: var(--text);
    }
    
    .product-meta {
        display: flex;
        gap: 15px;
        margin-bottom: 20px;
        color: #6c757d;
        font-size: 0.9em;
    }
    
    .price-section {
        margin-bottom: 25px;
    }
    
    .current-price {
        font-size: 1.8em;
        font-weight: 700;
        color: var(--primary-color);
        margin-right: 15px;
    }
    
    .original-price {
        text-decoration: line-through;
        color: #6c757d;
        margin-right: 10px;
    }
    
    .discount {
        background: #ffebee;
        color: #d32f2f;
        padding: 3px 8px;
        border-radius: 4px;
        font-size: 0.9em;
        font-weight: 600;
    }
    
    .product-specs {
        margin: 25px 0;
        padding: 20px;
        background: #f8f9fa;
        border-radius: 8px;
    }
    
    .product-specs h4 {
        margin-top: 0;
        margin-bottom: 15px;
        color: var(--text);
    }
    
    .product-specs ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .product-specs li {
        padding: 5px 0;
        color: #555;
    }
    
    .product-specs li strong {
        color: var(--text);
    }
    
    .quantity-section {
        display: flex;
        align-items: center;
        margin: 25px 0;
    }
    
    .quantity-section label {
        margin-right: 15px;
        font-weight: 600;
        color: var(--text);
    }
    
    .quantity-selector {
        display: flex;
        align-items: center;
        border: 1px solid #ddd;
        border-radius: 4px;
        overflow: hidden;
    }
    
    .qty-btn {
        width: 40px;
        height: 40px;
        background: #f8f9fa;
        border: none;
        font-size: 1.2em;
        cursor: pointer;
        transition: background 0.3s;
    }
    
    .qty-btn:hover {
        background: #e9ecef;
    }
    
    #quantityInput {
        width: 50px;
        height: 40px;
        text-align: center;
        border: none;
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
        -moz-appearance: textfield;
    }
    
    #quantityInput::-webkit-outer-spin-button,
    #quantityInput::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    
    .action-buttons {
        display: flex;
        gap: 15px;
        margin-top: 30px;
    }
    
    .gtaprof-btn {
        flex: 1;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 12px 20px;
        border-radius: 6px;
        font-weight: 600;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }
    
    .btn-primary {
        background: var(--primary-color);
        color: white;
    }
    
    .btn-primary:hover {
        background: var(--secondary-color);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    
    .btn-outline {
        background: transparent;
        border-color: var(--primary-color);
        color: var(--primary-color);
    }
    
    .btn-outline:hover {
        background: var(--primary-color);
        color: white;
    }
    
    /* Order Summary Card */
    .order-summary-card {
        background: var(--card);
        border-radius: 8px;
        padding: 25px;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
        height: fit-content;
        position: sticky;
        top: 20px;
    }
    
    .order-summary-card h3 {
        margin-top: 0;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid var(--border-color);
    }
    
    .summary-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 12px;
        color: #555;
    }
    
    .summary-row.total {
        margin-top: 20px;
        padding-top: 15px;
        border-top: 1px solid var(--border-color);
        font-size: 1.2em;
        font-weight: 700;
        color: var(--text);
    }
    
    .free-shipping {
        color: var(--success);
        font-weight: 600;
    }
    
    .shipping-address, .payment-method {
        margin-top: 25px;
        padding-top: 20px;
        border-top: 1px solid var(--border-color);
    }
    
    .shipping-address h4, .payment-method h4 {
        margin-top: 0;
        margin-bottom: 15px;
        color: var(--text);
    }
    
    .payment-details {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #555;
    }
    
    /* ========== RESPONSIVE STYLES ========== */
    @media (max-width: 1200px) {
        .order-summary {
            grid-template-columns: 1.5fr 1fr;
        }
    }
    
    @media (max-width: 992px) {
        .order-summary {
            grid-template-columns: 1fr;
        }
        
        .order-summary-card {
            position: static;
            margin-top: 30px;
        }
    }
    
    @media (max-width: 768px) {
        .status-timeline {
            padding: 0 20px;
        }
        
        .status-step {
            max-width: 80px;
        }
        
        .status-text {
            font-size: 0.75em;
        }
        
        .status-text small {
            display: none;
        }
        
        .main-image {
            height: 300px;
        }
        
        .action-buttons {
            flex-direction: column;
        }
    }
    
    @media (max-width: 576px) {
        .gtaprof-header {
            text-align: center;
        }
        
        .back-link {
            justify-content: center;
        }
        
        .status-timeline {
            margin: 20px 0;
        }
        
        .status-step {
            max-width: 60px;
        }
        
        .status-icon {
            width: 30px;
            height: 30px;
            font-size: 0.8em;
        }
        
        .main-image {
            height: 250px;
        }
        
        .product-info h2 {
            font-size: 1.5em;
        }
        
        .product-meta {
            flex-direction: column;
            gap: 5px;
        }
        
        .current-price {
            font-size: 1.5em;
        }
        
        .quantity-section {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .quantity-section label {
            margin-bottom: 10px;
        }
    }
</style>

<script>
    function changeImage(element, newImageSrc) {
        // Update main image
        document.getElementById('mainProductImage').src = newImageSrc;
        
        // Update active thumbnail
        document.querySelectorAll('.thumbnail').forEach(thumb => {
            thumb.classList.remove('active');
        });
        element.classList.add('active');
    }
    
    function updateQuantity(change) {
        const input = document.getElementById('quantityInput');
        let newValue = parseInt(input.value) + change;
        
        // Ensure quantity doesn't go below 1
        if (newValue < 1) newValue = 1;
        
        // Update the input value
        input.value = newValue;
    }
</script>
@endsection