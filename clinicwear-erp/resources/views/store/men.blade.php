@extends('layouts.store')
@section('title', "Men's Scrubs | ClinicWear")
@section('content')
<section class="collection-hero">
    <div class="collection-content">
        <span>Men's Collection</span>

        <h1>
            Professional Scrubs
            <strong>Built For Comfort</strong>
        </h1>

        <p>
            Durable, modern and comfortable medical apparel designed for long shifts,
            daily movement and professional performance.
        </p>

        <a class="primary-btn" href="#products">Shop Collection</a>
    </div>

    <div class="collection-image">
        <img src="{{ asset('images/apparel.svg') }}" alt="Men's Scrubs">
    </div>
</section>

<section class="filter-bar">
    <div><strong>Categories</strong></div>

    <div>
        <select>
            <option>All Colors</option>
            <option>Navy</option>
            <option>Black</option>
            <option>Grey</option>
            <option>Royal Blue</option>
        </select>
    </div>

    <div>
        <select>
            <option>All Sizes</option>
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
            <option>XXL</option>
        </select>
    </div>
</section>

<section class="products-grid" id="products" aria-label="Products">
    <div class="product-card">
        <span class="badge">Best Seller</span>
        <img src="{{ asset('images/apparel.svg') }}" alt="Men's Premium Scrub">
        <h3>Men's Premium Scrub</h3>
        <p>Navy Blue</p>
        <div class="price">$59.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">New</span>
        <img src="{{ asset('images/apparel.svg') }}" alt="Men's Stretch Scrub">
        <h3>Men's Stretch Scrub</h3>
        <p>Black</p>
        <div class="price">$62.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Popular</span>
        <img src="{{ asset('images/apparel.svg') }}" alt="Men's Clinical Pants">
        <h3>Men's Clinical Pants</h3>
        <p>Charcoal Grey</p>
        <div class="price">$54.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Premium</span>
        <img src="{{ asset('images/apparel.svg') }}" alt="Men's Performance Set">
        <h3>Men's Performance Set</h3>
        <p>Royal Blue</p>
        <div class="price">$74.99</div>
        <button>Add To Cart</button>
    </div>
</section>
@endsection
