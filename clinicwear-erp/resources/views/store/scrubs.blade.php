@extends('layouts.store')
@section('title', 'Scrubs Collection | ClinicWear')
@section('content')
<section class="collection-hero">
    <div class="collection-content">

        <span>Premium Collection</span>

        <h1>
            Professional
            <strong>Medical Scrubs</strong>
        </h1>

        <p>
            Explore our complete catalog of premium scrubs
            engineered for comfort, flexibility and durability.
        </p>

        <a class="primary-btn" href="#products">Browse Collection</a>

    </div>

    <div class="collection-image">
        <img src="{{ asset('images/apparel.svg') }}" alt="">
    </div>
</section>

<section class="filter-bar">

    <div>
        <strong>Scrub Type</strong>
    </div>

    <div>
        <select>
            <option>All Collections</option>
            <option>Premium</option>
            <option>Stretch</option>
            <option>Performance</option>
            <option>Essential</option>
        </select>
    </div>

    <div>
        <select>
            <option>All Colors</option>
            <option>Black</option>
            <option>Navy</option>
            <option>Grey</option>
            <option>Wine</option>
            <option>Royal Blue</option>
        </select>
    </div>

</section>

<section class="products-grid" id="products" aria-label="Products">

    <div class="product-card">
        <span class="badge">Premium</span>
        <img src="{{ asset('images/apparel.svg') }}" alt="Medical apparel illustration">
        <h3>Premium Scrub Set</h3>
        <p>Top + Pants</p>
        <div class="price">$79.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Best Seller</span>
        <img src="{{ asset('images/apparel.svg') }}" alt="Medical apparel illustration">
        <h3>Flex Stretch Collection</h3>
        <p>Ultra Comfort</p>
        <div class="price">$84.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">New</span>
        <img src="{{ asset('images/apparel.svg') }}" alt="Medical apparel illustration">
        <h3>Performance Scrub</h3>
        <p>Professional Fit</p>
        <div class="price">$89.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Exclusive</span>
        <img src="{{ asset('images/apparel.svg') }}" alt="Medical apparel illustration">
        <h3>Elite Medical Collection</h3>
        <p>Limited Edition</p>
        <div class="price">$99.99</div>
        <button>Add To Cart</button>
    </div>

</section>
@endsection
