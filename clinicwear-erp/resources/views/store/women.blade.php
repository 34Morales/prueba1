@extends('layouts.store')
@section('title', "Women's Scrubs | ClinicWear")
@section('content')
<section class="collection-hero">
    <div class="collection-content">
        <span>Women's Collection</span>

        <h1>
            Designed For
            <strong>Women In Healthcare</strong>
        </h1>

        <p>
            Premium scrubs combining elegance, comfort,
            flexibility and durability for healthcare
            professionals.
        </p>

        <a class="primary-btn" href="#products">Shop Collection</a>
    </div>

    <div class="collection-image">
        <img src="{{ asset('images/apparel.svg') }}" alt="Women's Scrubs">
    </div>
</section>

<section class="filter-bar">
    <div>
        <strong>Categories</strong>
    </div>

    <div>
        <select>
            <option>All Colors</option>
            <option>Black</option>
            <option>Navy</option>
            <option>Wine</option>
            <option>Grey</option>
        </select>
    </div>

    <div>
        <select>
            <option>All Sizes</option>
            <option>XS</option>
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
        </select>
    </div>
</section>

<section class="products-grid" id="products" aria-label="Products">
    <div class="product-card">
        <span class="badge">Best Seller</span>
        <img src="{{ asset('images/apparel.svg') }}" alt="Premium Women's Scrub">
        <h3>Premium Women's Scrub</h3>
        <p>Navy Blue</p>
        <div class="price">$59.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">New</span>
        <img src="{{ asset('images/apparel.svg') }}" alt="Comfort Fit Scrub">
        <h3>Comfort Fit Scrub</h3>
        <p>Wine</p>
        <div class="price">$64.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Popular</span>
        <img src="{{ asset('images/apparel.svg') }}" alt="Flex Stretch Scrub">
        <h3>Flex Stretch Scrub</h3>
        <p>Black</p>
        <div class="price">$54.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Premium</span>
        <img src="{{ asset('images/apparel.svg') }}" alt="Luxury Medical Scrub">
        <h3>Luxury Medical Scrub</h3>
        <p>Grey</p>
        <div class="price">$69.99</div>
        <button>Add To Cart</button>
    </div>
</section>
@endsection
