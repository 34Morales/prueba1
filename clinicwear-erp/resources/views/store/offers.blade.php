@extends('layouts.store')
@section('title', 'Offers | ClinicWear')
@section('content')
<section class="collection-hero">

    <div class="collection-content">

        <span>Limited Time Deals</span>

        <h1>
            Save Up To
            <strong>40% Off</strong>
        </h1>

        <p>
            Discover exclusive promotions, seasonal discounts
            and special offers available for a limited time.
        </p>

        <a class="primary-btn" href="#products">Shop Deals</a>

    </div>

    <div class="collection-image">
        <img src="{{ asset('images/apparel.svg') }}" alt="">
    </div>

</section>

<section class="products-grid" id="products" aria-label="Products">

    <div class="product-card">

        <span class="badge">40% OFF</span>

        <img src="{{ asset('images/apparel.svg') }}" alt="Medical apparel illustration">

        <h3>Premium Women's Scrub</h3>

        <p>
            <del>$89.99</del>
        </p>

        <div class="price">
            $53.99
        </div>

        <button>Add To Cart</button>

    </div>

    <div class="product-card">

        <span class="badge">30% OFF</span>

        <img src="{{ asset('images/apparel.svg') }}" alt="Medical apparel illustration">

        <h3>Men's Performance Scrub</h3>

        <p>
            <del>$79.99</del>
        </p>

        <div class="price">
            $55.99
        </div>

        <button>Add To Cart</button>

    </div>

    <div class="product-card">

        <span class="badge">25% OFF</span>

        <img src="{{ asset('images/apparel.svg') }}" alt="Medical apparel illustration">

        <h3>Premium Lab Coat</h3>

        <p>
            <del>$99.99</del>
        </p>

        <div class="price">
            $74.99
        </div>

        <button>Add To Cart</button>

    </div>

    <div class="product-card">

        <span class="badge">Bundle</span>

        <img src="{{ asset('images/apparel.svg') }}" alt="Medical apparel illustration">

        <h3>Scrub Set + Cap</h3>

        <p>
            <del>$109.99</del>
        </p>

        <div class="price">
            $79.99
        </div>

        <button>Add To Cart</button>

    </div>

</section>

<section class="benefits">

    <div>
        <b>Weekly Promotions</b>
        <span>New discounts every week</span>
    </div>

    <div>
        <b>Bundle Savings</b>
        <span>Buy more and save more</span>
    </div>

    <div>
        <b>Member Deals</b>
        <span>Exclusive customer pricing</span>
    </div>

    <div>
        <b>Seasonal Campaigns</b>
        <span>Special holiday promotions</span>
    </div>

</section>
@endsection
