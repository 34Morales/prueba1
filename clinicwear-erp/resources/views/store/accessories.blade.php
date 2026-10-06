@extends('layouts.store')
@section('title', 'Accessories | ClinicWear')
@section('content')
<section class="collection-hero">
    <div class="collection-content">
        <span>Medical Accessories</span>

        <h1>
            Essential Tools For
            <strong>Every Shift</strong>
        </h1>

        <p>
            Complete your professional look with practical, durable and elegant
            accessories designed for healthcare workers.
        </p>

        <a class="primary-btn" href="#products">Shop Accessories</a>
    </div>

    <div class="collection-image">
        <img src="{{ asset('images/accessories.svg') }}" alt="Medical Accessories">
    </div>
</section>

<section class="filter-bar">
    <div><strong>Accessory Type</strong></div>

    <div>
        <select>
            <option>All Accessories</option>
            <option>Caps</option>
            <option>Compression Socks</option>
            <option>Badges</option>
            <option>Bags</option>
        </select>
    </div>

    <div>
        <select>
            <option>Sort By</option>
            <option>Newest</option>
            <option>Best Seller</option>
            <option>Lowest Price</option>
            <option>Highest Price</option>
        </select>
    </div>
</section>

<section class="products-grid" id="products" aria-label="Products">
    <div class="product-card">
        <span class="badge">Best Seller</span>
        <img src="{{ asset('images/accessories.svg') }}" alt="Medical Cap">
        <h3>Medical Cap</h3>
        <p>Breathable Fabric</p>
        <div class="price">$19.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Comfort</span>
        <img src="{{ asset('images/accessories.svg') }}" alt="Compression Socks">
        <h3>Compression Socks</h3>
        <p>Long Shift Support</p>
        <div class="price">$24.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">New</span>
        <img src="{{ asset('images/accessories.svg') }}" alt="Badge Holder">
        <h3>Badge Holder</h3>
        <p>Professional ID Holder</p>
        <div class="price">$14.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Premium</span>
        <img src="{{ asset('images/accessories.svg') }}" alt="Medical Work Bag">
        <h3>Medical Work Bag</h3>
        <p>Daily Essentials</p>
        <div class="price">$49.99</div>
        <button>Add To Cart</button>
    </div>
</section>
@endsection
