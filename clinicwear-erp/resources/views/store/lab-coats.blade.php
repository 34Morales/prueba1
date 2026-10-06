@extends('layouts.store')
@section('title', 'Lab Coats | ClinicWear')
@section('content')
<section class="collection-hero">
    <div class="collection-content">
        <span>Professional Lab Coats</span>

        <h1>
            Confidence In
            <strong>Every Detail</strong>
        </h1>

        <p>
            Premium lab coats designed for doctors, students, laboratories
            and healthcare professionals who need comfort and presence.
        </p>

        <a class="primary-btn" href="#products">Shop Lab Coats</a>
    </div>

    <div class="collection-image">
        <img src="{{ asset('images/lab-coat.svg') }}" alt="Lab Coats">
    </div>
</section>

<section class="filter-bar">
    <div><strong>Lab Coat Type</strong></div>

    <div>
        <select>
            <option>All Lengths</option>
            <option>Short Coat</option>
            <option>Mid Length</option>
            <option>Long Coat</option>
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
        <span class="badge">Classic</span>
        <img src="{{ asset('images/lab-coat.svg') }}" alt="Classic Lab Coat">
        <h3>Classic Lab Coat</h3>
        <p>White</p>
        <div class="price">$69.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Premium</span>
        <img src="{{ asset('images/lab-coat.svg') }}" alt="Premium Lab Coat">
        <h3>Premium Lab Coat</h3>
        <p>White Slim Fit</p>
        <div class="price">$84.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Student</span>
        <img src="{{ asset('images/lab-coat.svg') }}" alt="Student Lab Coat">
        <h3>Student Lab Coat</h3>
        <p>Short Coat</p>
        <div class="price">$49.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Executive</span>
        <img src="{{ asset('images/lab-coat.svg') }}" alt="Executive Lab Coat">
        <h3>Executive Lab Coat</h3>
        <p>Premium Long Fit</p>
        <div class="price">$99.99</div>
        <button>Add To Cart</button>
    </div>
</section>
@endsection
